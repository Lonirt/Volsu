<?php
require_once 'DonationsTable.php';

$table = new DonationsTable($pdo);
$records = $table->getAll();
?>
<?php include('header.php'); ?>
</nav>
<div class="container mt-5">
    <h2 class="text-center">Список пожертвований</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Скан</th>
                <th>Имя</th>
                <th>Цель</th>
                <th>Метод</th>
                <th>Сумма</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($records as $record): ?>
                <tr>
                    <td><?= htmlspecialchars($record['id']) ?></td>
                    <td><img src="inc/img/<?= htmlspecialchars($record['scan']) ?>" alt="Скан" style="width: 50px;"></td>
                    <td><?= htmlspecialchars($record['name']) ?></td>
                    <td><?= htmlspecialchars($record['purpose']) ?></td>
                    <td><?= htmlspecialchars($record['method']) ?></td>
                    <td><?= htmlspecialchars($record['amount']) ?></td>
                    <td>
                        <a href="edit.php?id=<?= $record['id'] ?>" class="btn btn-warning btn-sm">Редактировать</a>
                        <a href="delete.php?id=<?= $record['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Удалить запись?');">Удалить</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="add.php" class="btn btn-primary">Добавить запись</a>
    
</div>
<?php include 'footer.php'; ?>
</html>

