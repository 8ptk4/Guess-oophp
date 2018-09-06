<?php
require "config.php";
require "autoload.php";

// Start session
session_start();

// Set page title
$title = "(SESSION)";

// Get guess from form
$guess = isset($_POST["guess"]) ? htmlentities($_POST["guess"]) : null;

// Start game
if (empty($_SESSION['game'])) {
    $_SESSION['game'] = new Guess();
}

//echo "<pre>";
//var_dump($_SESSION);
//echo "</pre>";

// Reset game
if (isset($_POST["doReset"])) {
    $_SESSION["game"]->random();
}

// Handle new guess
$_SESSION["display"] = null;
if (isset($_POST["doGuess"])) {
    $_SESSION["display"] = $_SESSION["game"]->makeGuess($guess);
}

//session_destroy();

require(__DIR__ . "/view/session.php");
