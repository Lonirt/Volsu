<?php include('login_logic.php'); ?>
<?php include('header.php'); ?>
</nav>
  <div class="background d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="custom-rectangle p-4 shadow-lg" style="background-color: #f4f5f0; border-radius: 8px; max-width: 1200px;max-height: 400px;">
      <h2 class="text-center mb-4">Вход</h2>
      <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
      <?php endif; ?>

      <form method="post">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Пароль</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Войти</button>
      </form>

      <div class="text-center mt-3">
        <p>Нет аккаунта? <a href="register.php">Зарегистрироваться</a></p>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>
</html>
