<?php
// Настройка подключения к базе данных
$host = 'localhost';
$dbname = 'charity'; // Имя вашей базы данных
$username = 'root';  // Ваш логин для базы данных
$password = '';      // Ваш пароль для базы данных

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Устанавливаем режим ошибок для PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}

$uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/upload/';

// Разрешенные типы файлов
$types = [
    'application/xml', // Поддержка только XML
];

// Функция для скачивания файла по ссылке с логированием ошибок
function downloadFile($url, $filePath) {
    // Проверяем, существует ли директория для загрузки
    if (!file_exists(dirname($filePath))) {
        if (!mkdir(dirname($filePath), 0777, true)) {
            die('Не удалось создать директорию для загрузки файла.');
        }
    }

    // Инициализация cURL с URL
    $ch = curl_init($url);
    
    // Открываем локальный файл для записи
    $fp = fopen($filePath, 'w');
    if (!$fp) {
        die('Ошибка при открытии локального файла для записи.');
    }

    // Устанавливаем параметры cURL
    curl_setopt($ch, CURLOPT_FILE, $fp); // Указываем, куда записывать файл
    curl_setopt($ch, CURLOPT_HEADER, 0); // Отключаем заголовки
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Следовать за редиректами

    // Выполняем запрос
    $execResult = curl_exec($ch);

    // Проверяем ошибки cURL
    if (!$execResult) {
        die('Ошибка cURL: ' . curl_error($ch));
    }

    // Закрываем cURL и файл
    curl_close($ch);
    fclose($fp);
}

// Функция для импорта XML файла
function importXML($file) {
    global $pdo;

    // Загружаем XML файл
    $xml = simplexml_load_file($file);
    if ($xml === false) {
        die('Ошибка загрузки XML файла.');
    }

    foreach ($xml->donation as $donation) {
        // Обновление существующих данных или добавление новых
        $stmt = $pdo->prepare('
            INSERT INTO donations (id, scan, name, id_purpose, method, amount)
            VALUES (?, ?, ?, ?, ?, ?)
            ON DUPLICATE KEY UPDATE
                scan = VALUES(scan),
                name = VALUES(name),
                id_purpose = VALUES(id_purpose),
                method = VALUES(method),
                amount = VALUES(amount)
        ');
        $stmt->execute([
            (string)$donation->id,
            (string)$donation->scan,
            (string)$donation->name,
            (string)$donation->id_purpose,
            (string)$donation->method,
            (string)$donation->amount,
        ]);
    }
}

// Обработка запроса
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['url'])) {
    // Получаем URL файла
    $url = $_POST['url'];
    $fileName = basename(parse_url($url, PHP_URL_PATH)); // Получаем имя файла из URL
    $filePath = $uploadDir . $fileName;

    // Скачиваем файл
    downloadFile($url, $filePath);

    // Импортируем данные из файла
    importXML($filePath);

    echo 'Данные успешно импортированы из файла: ' . $fileName;
}
?>