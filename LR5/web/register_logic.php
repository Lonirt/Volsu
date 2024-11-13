<?php
require_once 'auth.php';

if (isLoggedIn()) {
    header('Location: index.php');
    exit();
}
require_once 'db.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $name = $_POST['name'];
    $vk_profile = $_POST['vk_profile'];
    $blood_type = $_POST['blood_type'];
    $rh_factor = $_POST['rh_factor'];

    if ($password !== $confirm_password) {
      $error = "Пароли не совпадают!";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error = "Некорректный email!";
  } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{11,}$/', $password)) {
 
      $error = "Пароль должен содержать хотя бы одну большую букву, одну маленькую букву, одну цифру и быть длиннее 10 символов.";
  } elseif (preg_match('/[А-Яа-я]/', $password)) {

      $error = "Пароль не должен содержать русские буквы.";
  } else {
  
      $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
      $stmt->execute([$email]);
      if ($stmt->rowCount() > 0) {
          $error = "Пользователь с таким email уже существует!";
      } else {

          $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

          $stmt = $pdo->prepare("INSERT INTO users (email, password_hash, name, vk_profile, blood_type, rh_factor) VALUES (?, ?, ?, ?, ?, ?)");
          $stmt->execute([$email, $hashedPassword, $name, $vk_profile, $blood_type, $rh_factor]);
          
          header('Location: login.php');
          exit();
      }
  }
}
?>