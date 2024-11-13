<?php
require_once 'auth.php';
$user = getUser();

// Экспорт данных из базы данных в XML файл
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['export'])) {
    // Получаем данные из таблицы donations
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=charity', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->query("SELECT * FROM donations");
    $donations = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Создаем объект DOM для XML
    $xml = new DOMDocument('1.0', 'UTF-8');
    $root = $xml->createElement('donations');
    $xml->appendChild($root);

    // Добавляем записи в XML
    foreach ($donations as $donation) {
        $donationNode = $xml->createElement('donation');
        foreach ($donation as $key => $value) {
            $element = $xml->createElement($key, htmlspecialchars($value));
            $donationNode->appendChild($element);
        }
        $root->appendChild($donationNode);
    }

    // Выводим XML файл
    header('Content-Type: application/xml');
    header('Content-Disposition: attachment; filename="donations_exported.xml"');
    echo $xml->saveXML();
    exit;
}

include('header.php');
?>