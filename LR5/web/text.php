<?php include('text_logic.php'); ?>
<?php include('header.php'); ?>
</nav>
  <div class="background d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <body>
    <div class="container">
        <div class="card shadow p-4">
            <h5 class="card-title">Введите HTML-код:</h5>
            <form method="post">
                <textarea 
                    name="text" 
                    id="text" 
                    class="form-control" 
                    rows="10" 
                    style="resize: vertical;"><?php echo htmlspecialchars($inputText); ?></textarea>
                <button type="submit" class="btn btn-primary mt-3 w-100">Отправить</button>
            </form>
        </div>

        <?php if (!empty($outputText)): ?>
            <div class="card shadow p-4 mt-4">
                <h5 class="card-title">Результат обработки:</h5>
                <div><?php echo $outputText; ?></div>
            </div>
        <?php endif; ?>
    </div>
</body>
    </div>
  </div>

  <?php include('footer.php'); ?>