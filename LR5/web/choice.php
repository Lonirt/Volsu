<?php include('login_logic.php'); ?>
<?php include('header.php'); ?>
</nav>

  <div class="background d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <style>
    .list-group-item {
        width: 1700px; /* увеличьте значение по вашему желанию */
        height: 150px;
        font-size: 36px;
    }
</style>
<div class="container mt-2" style="width:3040px;">
    <div class="list-group">
        <a href="export.php" class="list-group-item list-group-item-action">Экспорт</a>
        <a href="import.php" class="list-group-item list-group-item-action">Импорт</a>
    </div>
</div>
</div>
  <?php include('footer.php'); ?>
</html>
