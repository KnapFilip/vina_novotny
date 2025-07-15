<?php
session_start();
require 'db.php';
include __DIR__ . '/include/translation_include.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT user_id, name, surname, email, password_hash, role FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password_hash'])) {
        // Uložení údajů do session
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['surname'] = $user['surname'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role_id'] = $user['role'];
        $_SESSION['logged_in'] = true;

        echo $t['login_success'];
        // header('Location: index.php'); exit;
    } else {
        echo $t['login_failed'];
    }
}
