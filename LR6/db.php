<?php

// Настройки подключения к базе данных
$host = '127.0.0.1';       // Хост базы данных
$dbname = 'charity';       // Имя базы данных
$username = 'root';        // Пользователь базы данных
$password = '';            // Пароль базы данных

try {
    // Создаём объект PDO для подключения
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    // Настройки PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Режим обработки ошибок
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Режим выборки
} catch (PDOException $e) {
    // Вывод ошибки при подключении
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}
