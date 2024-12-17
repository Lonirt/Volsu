<?php
require_once 'auth.php'; 


if (!isLoggedIn()) {

    header('Location: login.php');
    exit();
}

$user = getUser();
?>

<?php
require_once 'logic.php';
?>
<?php include('header.php'); ?>
<div class="auth-status">
    <?php if ($user): ?>
        <span>Вы авторизованы как <?= htmlspecialchars($user['name']); ?>.</span>
        <a href="logout.php" class="btn btn-link">Выйти</a>
    <?php else: ?>
        <span>Вы не авторизованы.</span>
        <a href="login.php" class="btn btn-link">Войти</a>
        <span>или</span>
        <a href="register.php" class="btn btn-link">Зарегистрироваться</a>
    <?php endif; ?>
</div>
    </div>
        </div>  
    </div>  
</nav>
<?php


$pdo = new PDO('mysql:host=localhost;dbname=charity;charset=utf8', 'root', '');


$methods = [];
$stmt = $pdo->query("SELECT DISTINCT method FROM donations"); 
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $methods[] = $row['method'];
}


$sql = "SELECT * FROM donations"; 
$arBinds = [];
$whereClauses = [];



if (!empty($_GET)) {
    if (!empty($_GET['name'])) {
        $whereClauses[] = "name LIKE :name";
        $arBinds[':name'] = '%' . $_GET['name'] . '%';
    }

    if (isset($_GET['purpose']) && !empty($_GET['purpose'])) {
      $filters[] = "purpose.objective LIKE :purpose";
      $params[':purpose'] = '%' . $_GET['purpose'] . '%';
  }

    if (!empty($_GET['method'])) {
        $whereClauses[] = "method = :method";
        $arBinds[':method'] = $_GET['method'];
    }

    if (!empty($_GET['amount_from'])) {
        $whereClauses[] = "amount >= :amount_from";
        $arBinds[':amount_from'] = $_GET['amount_from'];
    }

    if (!empty($_GET['amount_to'])) {
        $whereClauses[] = "amount <= :amount_to";
        $arBinds[':amount_to'] = $_GET['amount_to'];
    }
}



if (count($whereClauses) > 0) {
    $sql .= " WHERE " . implode(" AND ", $whereClauses);
}



$stmt = $pdo->prepare($sql);
$stmt->execute($arBinds);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="background d-flex justify-content-center align-items-center" style="min-height: 100vh;">

<div class="container mt-4">
    <h1 class="mb-4">Фильтры пожертвований</h1>
    
    <form method="get" action="" class="border p-4 rounded bg-light shadow-sm">
        <div class="mb-3">
            <label for="name" class="form-label">Имя:</label>
            <input type="text" id="name" name="name" class="form-control" 
                   value="<?= htmlspecialchars($_GET['name'] ?? '') ?>" 
                   placeholder="Введите имя">
        </div>

        <div class="mb-3">
            <label for="purpose" class="form-label">Цель:</label>
            <input type="text" id="purpose" name="purpose" class="form-control" 
                   value="<?= htmlspecialchars($_GET['purpose'] ?? '') ?>" 
                   placeholder="Введите цель">
        </div>

        <div class="mb-3">
            <label for="method" class="form-label">Метод:</label>
            <select id="method" name="method" class="form-select">
                <option value="">Все</option>
                <?php foreach ($methods as $method): ?>
                    <option value="<?= htmlspecialchars($method) ?>" 
                            <?= (isset($_GET['method']) && $_GET['method'] === $method) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($method) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="amount_from" class="form-label">Сумма От:</label>
            <input type="number" id="amount_from" name="amount_from" class="form-control" 
                   value="<?= htmlspecialchars($_GET['amount_from'] ?? '') ?>" 
                   placeholder="От">
        </div>

        <div class="mb-3">
            <label for="amount_to" class="form-label">Сумма До:</label>
            <input type="number" id="amount_to" name="amount_to" class="form-control" 
                   value="<?= htmlspecialchars($_GET['amount_to'] ?? '') ?>" 
                   placeholder="До">
        </div>

        <button type="submit" class="btn btn-primary">Применить фильтр</button>
        <a href="index.php" class="btn btn-secondary ms-2">Сбросить фильтр</a>
    </form>
    </div>
</div>
<h2>Данные о пожертвованиях</h2>
<?php if (!empty($results)) : ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Изображение</th>
                <th>Имя</th>
                <th>Цель</th>
                <th>Метод</th>
                <th>Сумма</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $row) : ?>
                <tr>
                    <td>
                        <img src="inc/img/<?= htmlspecialchars($row['scan']) ?>" 
                             style="width: 300px; height: 300px;"> </td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['purpose'] ?? 'Цель не указана') ?></td>
                    <td><?= htmlspecialchars($row['method'] ?? 'N/A') ?></td>
                    <td><?= htmlspecialchars($row['amount'] ?? 'N/A') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <p>Нет данных по выбранным критериям.</p>
<?php endif; ?>





  
<?php include('footer.php'); ?>
</html>