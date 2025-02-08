<?php
session_start();

// Define the correct flag
$correct_flag = "cyb3rs3c{C0ff33_1s_n0t_Fr33}";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submitted_flag = trim($_POST["flag-input"]);
    
    if ($submitted_flag === $correct_flag) {
        $_SESSION["message"] = "✅ Congratulations! You found the correct flag!";
        header("Location: success.php");
        exit();

    } else {
        $_SESSION["message"] = "❌ Incorrect flag! Try again.";
        header("Location: fail.php");
        exit();
    }
    
    header("Location: index.php");
    exit();
}
