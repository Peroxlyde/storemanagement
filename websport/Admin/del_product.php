<?php
	ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include('../connection.php');
    session_start();
	$productID = $_GET['id'];
	if (isset($productID)) {
		$sql="DELETE FROM product where productid=$productID";
        if ($conn->query($sql) === TRUE) {
            echo "Entry successfully deleted!";
            header("Location: admin_product-list.php");
            exit;
        } else {
            echo "Error: " . $conn->error;
        }
    }
	$conn->close();
?>