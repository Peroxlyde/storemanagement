<?php
session_start();

if (!isset($_SESSION['adminID'])) {
    // Redirect to login page if adminID is not set
    header("Location: employeeLogin.php");
    exit();
}

// Use adminID
$adminID = $_SESSION['adminID'];
echo "Welcome, Admin ID: " . $adminID;

// Add more functionality here as needed
?>
