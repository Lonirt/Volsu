<?php include 'edit_logic.php'; ?>
<?php include 'header.php'; ?>
</nav>

<div class="container mt-5">
    <h2 class="text-center">Редактировать запись</h2>
    <?php if ($error): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Имя</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($record['name']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="id_purpose" class="form-label">Цель</label>
            <select class="form-control" id="id_purpose" name="id_purpose" required>
                <?php foreach ($purposes as $purpose): ?>
                    <option value="<?= $purpose['id'] ?>" <?= $record['id_purpose'] == $purpose['id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($purpose['objective']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="method" class="form-label">Метод</label>
            <input type="text" class="form-control" id="method" name="method" value="<?= htmlspecialchars($record['method']) ?>">
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Сумма</label>
            <input type="number" class="form-control" id="amount" name="amount" value="<?= htmlspecialchars($record['amount']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="scan" class="form-label">Скан</label>
            <input type="file" class="form-control" id="scan" name="scan">
            <img src="inc/Img/<?= htmlspecialchars($record['scan']) ?>" alt="Скан" style="width: 100px;" class="mt-3">
        </div>
        <button type="submit" class="btn btn-success">Сохранить</button>
    </form>
</div>
<?php include 'footer.php'; ?>
