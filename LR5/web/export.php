<?php include('export_logic.php'); ?>
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
<div class="background d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Экспорт данных</title>
</head>
<body>
<div class="form-container" style="background-color: #f0f0f0;"> <!-- Серо-белый фон -->
    <h3>Экспорт базы данных</h3>
    <form method="POST">
        <button type="submit" name="export" style="background-color: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Скачать XML</button>
    </form>
</div>

</div>
<?php include('footer.php'); ?>
</body>
</html>
