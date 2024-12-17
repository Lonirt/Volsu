<?php
session_start(); 
require_once 'db.php';

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function getUser() {
    global $pdo;
    if (isLoggedIn()) {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$_SESSION['user_id']]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    return null;
}
?>
<?php
function logout() {
    session_destroy();
    header('Location: index.php');
    exit();
}


?>

