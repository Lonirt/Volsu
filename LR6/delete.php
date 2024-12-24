<?php
require_once 'DonationsTable.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    die("ID записи не указан.");
}

$table = new DonationsTable($pdo);

// Получаем запись для удаления
$record = $table->getById($id);
if (!$record) {
    die("Запись не найдена.");
}

// Проверка на дублирование записей (с тем же name и amount)
$stmt = $pdo->prepare("SELECT COUNT(*) FROM donations WHERE name = :name AND amount = :amount");
$stmt->execute([':name' => $record['name'], ':amount' => $record['amount']]);
$count = $stmt->fetchColumn();

// Если в базе есть дубли, продолжаем удаление только одной записи
if ($count > 1) {
    // Дубли существуют, но удаляется только одна запись с переданным ID
    // Можешь добавить дополнительные действия, если необходимо
} else {
    // Если таких записей больше нет, можно обработать это как обычное удаление
    // Добавь логику для уведомления, если нужно
}

try {
    // Удаляем только одну запись с данным ID
    $table->delete($id);
    header('Location: list.php');
    exit();
} catch (Exception $e) {
    die("Ошибка при удалении: " . $e->getMessage());
}
?>
