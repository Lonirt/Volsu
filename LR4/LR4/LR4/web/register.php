<?php include('register_logic.php'); ?>
<?php include('header.php'); ?>
</nav>

<div class="background d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="custom-rectangle p-4 shadow-lg" style="background-color: #f4f5f0; border-radius: 8px; max-width: 400px;">
      <h2 class="text-center mb-4">Регистрация</h2>
      <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
      <?php endif; ?>

      <form method="post">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" 
                 class="form-control" 
                 id="email" 
                 name="email" 
                 value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" 
                 required>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Имя</label>
          <input type="text" 
                 class="form-control" 
                 id="name" 
                 name="name" 
                 value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" 
                 required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Пароль</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
          <label for="confirm_password" class="form-label">Подтвердите пароль</label>
          <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
        </div>
        <div class="mb-3">
          <label for="vk_profile" class="form-label">Ссылка на профиль ВКонтакте</label>
          <input type="url" 
                 class="form-control" 
                 id="vk_profile" 
                 name="vk_profile" 
                 value="<?= htmlspecialchars($_POST['vk_profile'] ?? '') ?>">
        </div>
        <div class="mb-3">
          <label for="blood_type" class="form-label">Группа крови</label>
          <select id="blood_type" name="blood_type" class="form-control">
            <option value="">Выберите</option>
            <option value="I" <?= ($_POST['blood_type'] ?? '') === 'I' ? 'selected' : '' ?>>I</option>
            <option value="II" <?= ($_POST['blood_type'] ?? '') === 'II' ? 'selected' : '' ?>>II</option>
            <option value="III" <?= ($_POST['blood_type'] ?? '') === 'III' ? 'selected' : '' ?>>III</option>
            <option value="IV" <?= ($_POST['blood_type'] ?? '') === 'IV' ? 'selected' : '' ?>>IV</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="rh_factor" class="form-label">Резус-фактор</label>
          <select id="rh_factor" name="rh_factor" class="form-control">
            <option value="">Выберите</option>
            <option value="positive" <?= ($_POST['rh_factor'] ?? '') === 'positive' ? 'selected' : '' ?>>Положительный</option>
            <option value="negative" <?= ($_POST['rh_factor'] ?? '') === 'negative' ? 'selected' : '' ?>>Отрицательный</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary w-100">Зарегистрироваться</button>
      </form>

      <div class="text-center mt-3">
        <p>Уже есть аккаунт? <a href="login.php">Войти</a></p>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>
</html>
