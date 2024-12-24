<?php
require_once 'DonationsTable.php';

$error = '';
$id = $_GET['id'] ?? null;

if (!$id) {
    die("ID записи не указан.");
}


$table = new DonationsTable($pdo);
$record = $table->getById($id);

if (!$record) {
    die("Запись с ID $id не найдена.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $table->update($id, [
            'name' => $_POST['name'],
            'id_purpose' => $_POST['id_purpose'],
            'method' => $_POST['method'],
            'amount' => $_POST['amount']
        ]);
        header('Location: list.php');
        exit();
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

// Получаем список целей
$stmt = $pdo->query("SELECT id, objective FROM purpose");
$purposes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>