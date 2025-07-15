<?php
// /include/translation_include.php
session_start(); // pokud už to nemáš jinde, aby byla session dostupná všude

// Načti překlady
$translations = require __DIR__ . '../../php/translation.php';

// Zjisti jazyk z URL, nebo použij výchozí 'en'
$lang = isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'cs']) ? $_GET['lang'] : 'en';

// Překladová proměnná pro jednodušší použití
$t = $translations[$lang];
