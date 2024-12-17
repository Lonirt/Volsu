<?php
global $pdo;
try {
    $pdo = new PDO('mysql:dbname=charity;host=127.0.0.1', 'root', '');
} catch (PDOException $exception) {
    echo $exception->getMessage();
    die;
}

$filters = [];
$params = [];


$name = $_GET['name'] ?? null;
$purpose = $_GET['purpose'] ?? null;
$method = $_GET['method'] ?? null;
$amount = $_GET['amount'] ?? null;

if (!empty($name)) {
    $filters[] = "donations.name LIKE :name";
    $params[':name'] = '%' . $name . '%';
}
if (!empty($purpose)) {
    $filters[] = "purpose.objective LIKE :purpose";
    $params[':purpose'] = '%' . $purpose . '%';
}
if (!empty($method)) {
    $filters[] = "donations.method = :method";
    $params[':method'] = $method;
}
if (!empty($amount)) {
    $filters[] = "donations.amount = :amount";
    $params[':amount'] = $amount;
}


$sql = "SELECT donations.name, purpose.objective AS purpose, donations.method, donations.amount
FROM donations
INNER JOIN purpose ON donations.id_purpose = purpose.id;
";




if ($filters) {
    $sql .= " WHERE " . implode(" AND ", $filters);
}
//echo $sql;
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);
?>