<?php
	ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include('../connection.php');
    session_start();
	$requestID = $_GET['id'];
	if (isset($requestID)) {
		$sql="DELETE FROM request where requestID=$requestID";
        if ($conn->query($sql) === TRUE) {
            echo "Entry successfully deleted!";
            header("Location: dev_received-report.php");
            exit;
        } else {
            echo "Error: " . $conn->error;
        }
    }
	$conn->close();
?>