<?php
session_start();
require 'db.php';
include __DIR__ . '/include/translation_include.php';

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
        echo $t['passwords_do_not_match'];
        exit;
    }

    $stmt = $pdo->prepare("SELECT user_id FROM users WHERE email = ?");
    $stmt->execute([$email]);

    if ($stmt->rowCount() > 0) {
        echo $t['email_exists'];
        exit;
    }

    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $role = 1; // běžný uživatel

    $stmt = $pdo->prepare("INSERT INTO users (role, name, surname, dob, street, town, psc, email, password_hash) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if ($stmt->execute([$role, $name, $surname, $birthdate, $street, $town, $psc, $email, $password_hash])) {
        // Získání ID nově zaregistrovaného uživatele
        $userId = $pdo->lastInsertId();

        // Uložení do SESSION
        $_SESSION['user_id'] = $userId;
        $_SESSION['name'] = $name;
        $_SESSION['surname'] = $surname;
        $_SESSION['email'] = $email;
        $_SESSION['role_id'] = $role;
        $_SESSION['logged_in'] = true;

        echo $t['registration_success'];
        // header('Location: index.php'); exit;
    } else {
        echo $t['registration_failed'] ?? "Registrace se nezdařila.";
    }
}
