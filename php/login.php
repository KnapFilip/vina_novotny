<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define('SECURE', true);
require 'db.php';
include '../include/translation_include.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT user_id, name, surname, email, password_hash, role FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password_hash'])) {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['surname'] = $user['surname'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role_id'] = $user['role'];
        $_SESSION['logged_in'] = true;

        $_SESSION['flash_message'] = ['type' => 'success', 'text' => $t['login_success']];
        header('Location: ../main.php');
        exit;
    } else {
        $_SESSION['flash_message'] = ['type' => 'error', 'text' => $t['login_failed']];
        header('Location: ../login_form.php');
        exit;
    }
}
