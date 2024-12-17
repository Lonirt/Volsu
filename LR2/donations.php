<?php
require_once 'logic.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script defer src="js/bootstrap.bundle.min.js"></script>
    <title>charity: water | Help Bring Clean and Safe Water and Sanitation to Communities</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/default.css">
    <script src="js/default.js"></script>
</head>
<body> 
  <nav class="navbar navbar-expand-md navbar-light bg-white">  
    <div class="container-sm">    
        <a class="navbar-brand" href="#">  
            <img src="https://www.charitywater.org/vite/assets/cw-logo-dark-BcPk1WVG.svg" width="165" height="36">  
        </a>  
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavGrayDropdown" aria-controls="navbarNavGrayDropdown" aria-expanded="false" aria-label="Переключить навигацию">  
            <span class="navbar-toggler-icon"></span>  
        </button>  
        <div class="collapse navbar-collapse" id="navbarNavGrayDropdown">  
            <ul class="navbar-nav">  
                <li class="nav-item dropdown">  
                    <button class="btn btn-gray dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">  
                        TAKE ACTION 
                    </button>  
                    <ul class="dropdown-menu dropdown-menu-start">  
                        <li><a class="dropdown-item p-3 " href="#">
                          Give monthly
                          <img class="ml-3 hidden-img" src="data:image/svg+xml,%3csvg%20fill='none'%20height='20'%20viewBox='0%200%2020%2020'%20width='20'%20xmlns='http://www.w3.org/2000/svg'%3e%3ccircle%20cx='10'%20cy='10'%20fill='%23ffca0a'%20r='9.5'%20stroke='%23383b36'/%3e%3cpath%20clip-rule='evenodd'%20d='m11.2144%207.16746c-.2635-.27559-.2537-.7126.0219-.97609s.7126-.25367.9761.02192l3.0962%203.23849c.2596.27149.2545.70072-.0115.96592l-3.0962%203.0879c-.27.2692-.7071.2686-.9763-.0014-.2693-.2699-.2687-.7071.0013-.9763l2.006-2.0006h-7.04151c-.38129%200-.69038-.3091-.69038-.69035%200-.38129.30909-.69038.69038-.69038h6.91621z'%20fill='%231a1a1a'%20fill-rule='evenodd'/%3e%3c/svg%3e">
                          <div class="hidden-text">
                            <p style="margin-bottom:0;">the global community of supporters</p>
                            <p style="margin : 0; padding-top:0;" >serving people with clean water every month </p>
                          </div>
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item p-3" href="#">
                          Fundraise for clean water
                          <img class="ml-3 hidden-img" src="data:image/svg+xml,%3csvg%20fill='none'%20height='20'%20viewBox='0%200%2020%2020'%20width='20'%20xmlns='http://www.w3.org/2000/svg'%3e%3ccircle%20cx='10'%20cy='10'%20fill='%23ffca0a'%20r='9.5'%20stroke='%23383b36'/%3e%3cpath%20clip-rule='evenodd'%20d='m11.2144%207.16746c-.2635-.27559-.2537-.7126.0219-.97609s.7126-.25367.9761.02192l3.0962%203.23849c.2596.27149.2545.70072-.0115.96592l-3.0962%203.0879c-.27.2692-.7071.2686-.9763-.0014-.2693-.2699-.2687-.7071.0013-.9763l2.006-2.0006h-7.04151c-.38129%200-.69038-.3091-.69038-.69035%200-.38129.30909-.69038.69038-.69038h6.91621z'%20fill='%231a1a1a'%20fill-rule='evenodd'/%3e%3c/svg%3e">
                          <div class="hidden-text">
                            <p style="margin-bottom:0;"> Support clean water projects by raising</p>
                            <p style="margin : 0; padding-top:0;" >awareness and funds for people in need.</p>

                            </div>
                        </a></li>
                        <li><hr class="dropdown-divider"></li>  
                        <li><a class="dropdown-item p-3 " href="#">
                          Become a water project sponsor
                          <img class="ml-3 hidden-img" src="data:image/svg+xml,%3csvg%20fill='none'%20height='20'%20viewBox='0%200%2020%2020'%20width='20'%20xmlns='http://www.w3.org/2000/svg'%3e%3ccircle%20cx='10'%20cy='10'%20fill='%23ffca0a'%20r='9.5'%20stroke='%23383b36'/%3e%3cpath%20clip-rule='evenodd'%20d='m11.2144%207.16746c-.2635-.27559-.2537-.7126.0219-.97609s.7126-.25367.9761.02192l3.0962%203.23849c.2596.27149.2545.70072-.0115.96592l-3.0962%203.0879c-.27.2692-.7071.2686-.9763-.0014-.2693-.2699-.2687-.7071.0013-.9763l2.006-2.0006h-7.04151c-.38129%200-.69038-.3091-.69038-.69035%200-.38129.30909-.69038.69038-.69038h6.91621z'%20fill='%231a1a1a'%20fill-rule='evenodd'/%3e%3c/svg%3e">
                          <div class="hidden-text">
                            <p style="margin-bottom:0;"> Transform an entire community or school</p>
                            <p style="margin : 0; padding-top:0;" >with a gift of  $10,000  or more.</p></div>
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item p-3 " href="#">
                          Become a brand partner
                          <img class="ml-3 hidden-img" src="data:image/svg+xml,%3csvg%20fill='none'%20height='20'%20viewBox='0%200%2020%2020'%20width='20'%20xmlns='http://www.w3.org/2000/svg'%3e%3ccircle%20cx='10'%20cy='10'%20fill='%23ffca0a'%20r='9.5'%20stroke='%23383b36'/%3e%3cpath%20clip-rule='evenodd'%20d='m11.2144%207.16746c-.2635-.27559-.2537-.7126.0219-.97609s.7126-.25367.9761.02192l3.0962%203.23849c.2596.27149.2545.70072-.0115.96592l-3.0962%203.0879c-.27.2692-.7071.2686-.9763-.0014-.2693-.2699-.2687-.7071.0013-.9763l2.006-2.0006h-7.04151c-.38129%200-.69038-.3091-.69038-.69035%200-.38129.30909-.69038.69038-.69038h6.91621z'%20fill='%231a1a1a'%20fill-rule='evenodd'/%3e%3c/svg%3e">
                          <div class="hidden-text">
                            <p style="margin-bottom:0;">  Work closely with our team to develop</p>
                            <p style="margin : 0; padding-top:0;" >mutually beneficial initiatives with undeniable impact.</p></div>
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item p-3 " href="#">
                          Plan legacy giving
                          <img class="ml-3 hidden-img" src="data:image/svg+xml,%3csvg%20fill='none'%20height='20'%20viewBox='0%200%2020%2020'%20width='20'%20xmlns='http://www.w3.org/2000/svg'%3e%3ccircle%20cx='10'%20cy='10'%20fill='%23ffca0a'%20r='9.5'%20stroke='%23383b36'/%3e%3cpath%20clip-rule='evenodd'%20d='m11.2144%207.16746c-.2635-.27559-.2537-.7126.0219-.97609s.7126-.25367.9761.02192l3.0962%203.23849c.2596.27149.2545.70072-.0115.96592l-3.0962%203.0879c-.27.2692-.7071.2686-.9763-.0014-.2693-.2699-.2687-.7071.0013-.9763l2.006-2.0006h-7.04151c-.38129%200-.69038-.3091-.69038-.69035%200-.38129.30909-.69038.69038-.69038h6.91621z'%20fill='%231a1a1a'%20fill-rule='evenodd'/%3e%3c/svg%3e">
                          <div class="hidden-text">
                            <p style="margin-bottom:0;"> Make a lasting gift to help ensure that every person</p>
                            <p style="margin : 0; padding-top:0;" >of the planet has access to clean water.</p></div>
                        </a></li>  
                    </ul>  
                </li>  
                <li class="nav-item dropdown">  
                    <button class="btn btn-gray dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">  
                        ABOUT US 
                    </button>  
                    <ul class="dropdown-menu dropdown-menu-start">  
                      <li><a class="dropdown-item p-3 " href="#">
                        The 100% model
                        <img class="ml-3 hidden-img" src="data:image/svg+xml,%3csvg%20fill='none'%20height='20'%20viewBox='0%200%2020%2020'%20width='20'%20xmlns='http://www.w3.org/2000/svg'%3e%3ccircle%20cx='10'%20cy='10'%20fill='%23ffca0a'%20r='9.5'%20stroke='%23383b36'/%3e%3cpath%20clip-rule='evenodd'%20d='m11.2144%207.16746c-.2635-.27559-.2537-.7126.0219-.97609s.7126-.25367.9761.02192l3.0962%203.23849c.2596.27149.2545.70072-.0115.96592l-3.0962%203.0879c-.27.2692-.7071.2686-.9763-.0014-.2693-.2699-.2687-.7071.0013-.9763l2.006-2.0006h-7.04151c-.38129%200-.69038-.3091-.69038-.69035%200-.38129.30909-.69038.69038-.69038h6.91621z'%20fill='%231a1a1a'%20fill-rule='evenodd'/%3e%3c/svg%3e">
                        <div class="hidden-text">
                          <p style="margin-bottom:0;">Private donors cover our operating costs</p>
                            <p style="margin : 0; padding-top:0;" >so 100% of every public donation can fund clean water.</p></div>
                      </a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item p-3 " href="#">
                        Our work
                        <img class="ml-3 hidden-img" src="data:image/svg+xml,%3csvg%20fill='none'%20height='20'%20viewBox='0%200%2020%2020'%20width='20'%20xmlns='http://www.w3.org/2000/svg'%3e%3ccircle%20cx='10'%20cy='10'%20fill='%23ffca0a'%20r='9.5'%20stroke='%23383b36'/%3e%3cpath%20clip-rule='evenodd'%20d='m11.2144%207.16746c-.2635-.27559-.2537-.7126.0219-.97609s.7126-.25367.9761.02192l3.0962%203.23849c.2596.27149.2545.70072-.0115.96592l-3.0962%203.0879c-.27.2692-.7071.2686-.9763-.0014-.2693-.2699-.2687-.7071.0013-.9763l2.006-2.0006h-7.04151c-.38129%200-.69038-.3091-.69038-.69035%200-.38129.30909-.69038.69038-.69038h6.91621z'%20fill='%231a1a1a'%20fill-rule='evenodd'/%3e%3c/svg%3e">
                        <div class="hidden-text">
                          <p style="margin-bottom:0;">  See our funded water projects</p>
                            <p style="margin : 0; padding-top:0;" >and proof of impact.</p></div>
                      </a></li> 
                      <li><hr class="dropdown-divider"></li> 
                      <li><a class="dropdown-item p-3 " href="#">
                        How we work
                        <img class="ml-3 hidden-img" src="data:image/svg+xml,%3csvg%20fill='none'%20height='20'%20viewBox='0%200%2020%2020'%20width='20'%20xmlns='http://www.w3.org/2000/svg'%3e%3ccircle%20cx='10'%20cy='10'%20fill='%23ffca0a'%20r='9.5'%20stroke='%23383b36'/%3e%3cpath%20clip-rule='evenodd'%20d='m11.2144%207.16746c-.2635-.27559-.2537-.7126.0219-.97609s.7126-.25367.9761.02192l3.0962%203.23849c.2596.27149.2545.70072-.0115.96592l-3.0962%203.0879c-.27.2692-.7071.2686-.9763-.0014-.2693-.2699-.2687-.7071.0013-.9763l2.006-2.0006h-7.04151c-.38129%200-.69038-.3091-.69038-.69035%200-.38129.30909-.69038.69038-.69038h6.91621z'%20fill='%231a1a1a'%20fill-rule='evenodd'/%3e%3c/svg%3e">
                        <div class="hidden-text">
                          <p style="margin-bottom:0;"> Learn about how we build long-term</p>
                            <p style="margin : 0; padding-top:0;" >sustainable water projects.</p></div>
                      </a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item p-3 " href="#">
                        Meet the founder
                        <img class="ml-3 hidden-img" src="data:image/svg+xml,%3csvg%20fill='none'%20height='20'%20viewBox='0%200%2020%2020'%20width='20'%20xmlns='http://www.w3.org/2000/svg'%3e%3ccircle%20cx='10'%20cy='10'%20fill='%23ffca0a'%20r='9.5'%20stroke='%23383b36'/%3e%3cpath%20clip-rule='evenodd'%20d='m11.2144%207.16746c-.2635-.27559-.2537-.7126.0219-.97609s.7126-.25367.9761.02192l3.0962%203.23849c.2596.27149.2545.70072-.0115.96592l-3.0962%203.0879c-.27.2692-.7071.2686-.9763-.0014-.2693-.2699-.2687-.7071.0013-.9763l2.006-2.0006h-7.04151c-.38129%200-.69038-.3091-.69038-.69035%200-.38129.30909-.69038.69038-.69038h6.91621z'%20fill='%231a1a1a'%20fill-rule='evenodd'/%3e%3c/svg%3e">
                        <div class="hidden-text">
                          <p style="margin-bottom:0;"> Learn how a radical decision to reset his life</p>
                          <p style="margin : 0; padding-top:0;" >led Scott Harrison to build charity: water.</p></div>
                      </a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item  p-3 " href="#">
                        See our financials
                        <img class="ml-3 hidden-img" src="data:image/svg+xml,%3csvg%20fill='none'%20height='20'%20viewBox='0%200%2020%2020'%20width='20'%20xmlns='http://www.w3.org/2000/svg'%3e%3ccircle%20cx='10'%20cy='10'%20fill='%23ffca0a'%20r='9.5'%20stroke='%23383b36'/%3e%3cpath%20clip-rule='evenodd'%20d='m11.2144%207.16746c-.2635-.27559-.2537-.7126.0219-.97609s.7126-.25367.9761.02192l3.0962%203.23849c.2596.27149.2545.70072-.0115.96592l-3.0962%203.0879c-.27.2692-.7071.2686-.9763-.0014-.2693-.2699-.2687-.7071.0013-.9763l2.006-2.0006h-7.04151c-.38129%200-.69038-.3091-.69038-.69035%200-.38129.30909-.69038.69038-.69038h6.91621z'%20fill='%231a1a1a'%20fill-rule='evenodd'/%3e%3c/svg%3e">
                        <div class="hidden-text">
                          <p style="margin-bottom:0;">Learn about how your gift is being used</p>
                            <p style="margin : 0; padding-top:0;" >to bring clean and safe water to people in need.</p></div>
                      </a></li>    
                    </ul>  
                </li> 
                <li class="nav-item">  
                    <a class="nav-link active" href="#">  
                        WHY WATER? 
                    </a>  
                </li>  
            </ul>  
            <div class="d-flex ms-auto"> 
                <a class="nav-link" href="#"> 
                    Sign In 
                </a> 
                <div class="vertical-line"></div> 
                <button type="button" class="btn btn-warning"> 
                    Give 
                    <img src ="data:image/svg+xml,%3csvg%20fill='none'%20height='18'%20viewBox='0%200%2013%2018'%20width='13'%20xmlns='http://www.w3.org/2000/svg'%20xmlns:xlink='http://www.w3.org/1999/xlink'%3e%3cclipPath%20id='a'%3e%3cpath%20d='m.043457.549805h12.62v16.9h-12.62z'/%3e%3c/clipPath%3e%3cg%20clip-path='url(%23a)'%3e%3cpath%20d='m6.70353%2016.94c-3.2.24-6.01-2.17-6.25-5.37-.24-3.19996%204.56-9.58996%204.76-9.86996l.31-.41.36.36c.24.24%205.94997%205.94%206.18997%209.03996.24%203.1-2.16997%206-5.36997%206.25z'%20fill='%23fff'/%3e%3cpath%20d='m5.91349%2016.8199c-2.79.21-5.229999-1.89-5.439999-4.68-.21-2.68996%203.959999-8.34996%204.139999-8.58996l.27-.36.32.31c.21.21%205.19001%205.18%205.39001%207.86996.21%202.79-1.89001%205.23-4.68001%205.44z'%20fill='%235493d3'/%3e%3cpath%20d='m6.79366%2016.9296c-3.2.24-5.999997-2.16-6.239997-5.36-.24-3.09003%204.539997-9.57003%204.749997-9.85003l.3-.41.36.36c.24.24%205.94004%205.93%206.18004%209.02003.24%203.09-2.16004%205.99-5.36004%206.24z'%20stroke='%231a1a1a'%20stroke-linecap='round'%20stroke-miterlimit='10'/%3e%3c/g%3e%3c/svg%3e" >
                </button> 
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





  
<div class="col-md-12" style="background-color:rgba(250, 247, 240, 0.979);">

<div class="container-sm">
  <div class="row">      
      <div class="col-4 ml-auto mr-3" style="height: 100px;"></div>
      <div class="col-4 mr-auto ml-3" style="height: 25px;"></div>
      <div class="col-12">
      
        <h6 class="text-center text-info">
          OUR WORK
        </h6>
        <div class="col-4 mr-auto ml-3" style="height: 25px;"></div>
        <h2 class="text-center text-black">
          Sustainable work is locally‑led
        </h2>
        <div class="col-4 mr-auto ml-3" style="height: 25px;"></div>
        <h6 class="text-center text-black">
          We work exclusively with local partners who build sustainable, community-owned water projects. Our partners also facilitate comprehensive water, sanitation, and hygiene programming to protect everyone’s long-term health.
        </h6>
        <div class="col-4 mr-auto ml-3" style="height: 100px;"></div>
      </div>
  </div>
</div>
</div>
<div class="col-12" style="background-color:rgba(34, 37, 32, 0.979);">
<div class="container-sm">
  <div class="row">
<div class="col-4 mr-auto ml-3 " style="height: 50px;"></div>
  <h6 class="text-center text-info">
    CHARITY: WATER'S IMPACT TO DATE
  </h6>
  <div class="col" style="height: 50px;"></div>
  <div class="container"></div>
    <div class="row text-center">
      <div class="col">
        <h1 class="text-white">171,469</h1>
        <div class="d-flex justify-content-between align-items-center">
        <h3 class="text-white">WATER PROJECTS FUNDED </h3>
        <a href="#">
          <img src="img/35.png" alt="Clickable Image">
        </a>
      </div>
      </div>
      <div class="col">
        <h1 class="text-white">29</h1>
        <div class="d-flex justify-content-between align-items-center">
          <h2 class="text-white mb-0 ml-10">ㅤㅤㅤㅤCOUNTRIES</h2>
          <a href="#">
            <img src="img/35.png" alt="Clickable Image" class="img-fluid" style="max-width: 50px;">
          </a>
        </div>
      </div>
      <div class="col">
        <h1 class="text-white">19,151,855</h1>
        <div class="d-flex justify-content-between align-items-center">
        <h2 class="text-white">PEOPLE WILL BE SERVED</h2>
        <a href="#">
          <img src="img/35.png" alt="Clickable Image">
        </a>
      </div>
      </div>  
    </div>
  </div>
  </div>
  <div class="col-4 mr-auto ml-3 " style="height: 50px;"></div>
  </div>
  </div>
  <div class="col-md-12" style="background-color:rgba(248, 238, 211, 0.979);">
    <div class="col-4 ml-auto mr-3" style="height: 100px;"></div>
    <div class="container">
      <div class="row">
          <h2 class="text-center text-black">
            Give with confidence
          </h2>
          <div class="col-12" style = "height:50px;"></div>
          <div class="container">
          <div class="row">
            <div class="col-12">
              <h4 class="text-center text-black">
                All of our operational expenses are funded by a private community of donors called The Well so you can trust that 100% of your donation goes directly to water solutions. But we don’t stop there.
              </h4>
              <div class="col-12" style = "height:50px;"></div>
              <h5 class="text-center text-black">
              From our commitment to equipping local partners, to our tech, to the environmental sustainability of our water projects, “good enough” is never good enough for us. We’re setting new standards for transparency and innovation, and these companies and organizations agree.
            </h5>
            <div class="col-4 " style="height: 100px;"></div>
            <div class="container mt-5">
              <div class="row">
                  <div class="col-md-3 image-container text-center">
                      <img src="img/1.png" class="img-fluid" width="120" height="120">
                  </div>
                  <div class="col-md-3 image-container text-center">
                      <img src="img/2.png" class="img-fluid" width="120" height="120">
                  </div>
                  <div class="col-md-3 image-container text-center">
                      <img src="img/3.jpg" class="img-fluid" width="120" height="120">
                  </div>
                  <div class="col-md-3 image-container text-center">
                      <img src="img/4.png" class="img-fluid" width="120" height="120">
                  </div>
              </div>
          </div>
          <div class="col-4 " style="height: 100px;"></div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>