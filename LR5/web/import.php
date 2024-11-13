<?php include('import_logic.php'); ?>
<?php
require_once 'auth.php';
$user = getUser();
?>
<?php include('header.php'); ?>
        <?php if ($user): ?>
          Вы авторизованы как <?= htmlspecialchars($user['name']) ?>. 
            <a href="logout.php">Выйти</a>
        <?php else: ?>
          Вы не авторизованы. 
            <a href="login.php">Войти</a> или 
            <a href="register.php">Зарегистрироваться</a>.
        <?php endif; ?>
    </div>
        </div>  
    </div>  
</nav>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
<div class="background d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="form-container" style="background-color: #f0f0f0;">
        <h3>Импорт из внешней ссылки</h3>
        <form method="POST">
            <input type="text" name="url" placeholder="Введите ссылку на XML файл" required>
            <button type="submit"style="background-color: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Импортировать</button>
        </form>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>
