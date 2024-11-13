<?php
// Определите параметры подключения к базе данных
$host = 'localhost';    // Адрес сервера базы данных
$username = 'root';     // Имя пользователя для подключения к базе данных
$password = '';         // Пароль для подключения
$dbname = 'charity';    // Название вашей базы данных

// Создаем подключение к базе данных
$conn = new mysqli($host, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
?>
