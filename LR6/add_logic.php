<?php
require_once 'DonationsTable.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $table = new DonationsTable($pdo);
        $table->add([
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

// Функция для сохранения введённых данных
function preserveInput($field) {
    return htmlspecialchars($_POST[$field] ?? '');
}
?>