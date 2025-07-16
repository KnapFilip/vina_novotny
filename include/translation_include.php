<?php
// /include/translation_include.php

// Načti překlady
$translations = require __DIR__ . '../../php/translation.php';

// Zjisti jazyk z URL, nebo použij výchozí 'en'
$lang = isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'cs']) ? $_GET['lang'] : 'en';

// Překladová proměnná pro jednodušší použití
$t = $translations[$lang];


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
