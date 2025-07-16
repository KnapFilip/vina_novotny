<?php
session_start();
define('SECURE', true);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'db.php';
include '../include/translation_include.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $birthdate = $_POST['birthdate'];
    $street = $_POST['street'];
    $town = $_POST['town'];
    $psc = $_POST['psc'];

    if ($password !== $confirm_password) {
        $_SESSION['flash_message'] = ['type' => 'error', 'text' => $t['passwords_do_not_match']];
        header('Location: ../register_form.php');
        exit;
    }

    $stmt = $pdo->prepare("SELECT user_id FROM users WHERE email = ?");
    $stmt->execute([$email]);

    if ($stmt->rowCount() > 0) {
        $_SESSION['flash_message'] = ['type' => 'error', 'text' => $t['email_exists']];
        header('Location: ../register_form.php');
        exit;
    }

    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $role = 1;

    $stmt = $pdo->prepare("INSERT INTO users (role, name, surname, birthdate, street, town, psc, email, password_hash) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if ($stmt->execute([$role, $name, $surname, $birthdate, $street, $town, $psc, $email, $password_hash])) {
        $_SESSION['user_id'] = $pdo->lastInsertId();
        $_SESSION['name'] = $name;
        $_SESSION['surname'] = $surname;
        $_SESSION['email'] = $email;
        $_SESSION['role_id'] = $role;
        $_SESSION['logged_in'] = true;

        $_SESSION['flash_message'] = ['type' => 'success', 'text' => $t['registration_success']];
        header('Location: ../main.php');
        exit;
    } else {
        $_SESSION['flash_message'] = ['type' => 'error', 'text' => $t['registration_failed'] ?? "Registrace se nezdařila."];
        header('Location: ../register_form.php');
        exit;
    }
}
