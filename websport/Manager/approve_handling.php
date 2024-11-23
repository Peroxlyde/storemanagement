<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('../connection.php');
session_start();

$managerID = $_SESSION['managerID'];
$issueID = $_GET['id'];
$issueQuery = "select * from issue WHERE IssueID = $issueID";
$issueResult = $conn->query($issueQuery);

if ($issueResult && $issueResult->num_rows > 0) {
    $issue = $issueResult->fetch_assoc();
    // Check if status is 'pending'
   
    if ($issue['status'] == 'pending') {
        $productID = intval($issue['ProductID']);
        $issueQuantity = intval($issue['quantity']);

        // Update the issue status and approver
        $updateIssueQuery = "UPDATE issue SET status = 'Approved', approveBy = $managerID WHERE IssueID = $issueID";
        if ($conn->query($updateIssueQuery) === TRUE) {
            // Update the product quantity
            $updateProductQuery = "UPDATE product SET quantity = quantity - $issueQuantity WHERE ProductID = $productID";
            if ($conn->query($updateProductQuery) === TRUE) {
                // Redirect back to the issue report page with a success message
                header("Location: manager_issue-report.php");
                exit;
            } else {
                echo "Error updating product quantity: " . $conn->error;
            }
        } else {
            echo "Error updating issue: " . $conn->error;
        }
    } else {
        // If the status is not 'pending', do nothing
        echo "This issue has already been processed.";
        header("Location: manager_issue-report.php");
    }
} 

// Close the database connection
$conn->close();
?>