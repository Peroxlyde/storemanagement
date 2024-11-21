<?php 
        //echo "Welcome: <br>";
        //echo "Product ID:" .$_GET['productid']. "<br>";    
        //echo "Quantity:" .$_GET['quantity']. "<br>";    
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('../connection.php'); 
session_start();
$productID = $_POST['productid'];
$quantityToAdd = intval($_POST['quantity']); // Convert input to integer for safety
$adminID = $_SESSION['adminID'];
    if ($quantityToAdd < 0) {
        die("Quantity cannot be negative.");
    }
    $sqlFetch = "SELECT quantity FROM product WHERE productid = $productID ";
    $resultFetch = $conn->query($sqlFetch);
    if ($resultFetch && $resultFetch->num_rows > 0) {
        $row = $resultFetch->fetch_assoc();
        $existingQuantity = intval($row['quantity']);
         // Calculate the new quantity
         $newQuantity = $existingQuantity + $quantityToAdd;

         // Update the quantity in the database
         $sqlUpdate = "UPDATE product SET quantity = $newQuantity WHERE productid = '$productID'";
         if ($conn->query($sqlUpdate) === TRUE) {
             echo "Quantity updated successfully.";
         } else {
             echo "Error updating quantity: " . $conn->error;
         }
     } else {
         echo "Product not found.";
     }
     if ($resultFetch) {
        $resultFetch->free();
    }
    $sql = "INSERT INTO addtable (productid, adminID, quantity)
            VALUES ($productID,$adminID, $quantityToAdd)";
    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully!";
        header("Location: admin_page.php");
        exit; // Prevent further script execution after redirect
      } else {
        echo "Error: " . $conn->error;
    }
    $conn->close();
?>

