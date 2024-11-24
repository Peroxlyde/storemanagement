
  <?php
  date_default_timezone_set("Asia/Bangkok");

  //echo "Welcome <br>";
  // issueid
 // echo "Date: " .date("Y-m-d h:i:s") . "<br>";
  // adminid
  //echo "Product ID: " . $_GET["productid"] . "<br>";
  // productname
  //echo "Quantity: " . $_GET["quantity"] . "<br>";
  //echo "Reason of Issue: " . $_GET["reason"] . "<br>";
  // status: pending
  // approve by
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  include('../connection.php'); 
  session_start();
  $productID = $_POST['productid'];
  $adminID = $_SESSION['adminID'];
  $date = date('Y-m-d');
  $quantityToIssue = intval($_POST['quantity']);

  $sql = "INSERT INTO issue (productid, adminID, quantity, `date`)
            VALUES ($productID,$adminID, $quantityToIssue,'$date')";
  if ($conn->query($sql) === TRUE) {
    //echo "Product added successfully!";
    header("Location: admin_issue.php");
    exit; // Prevent further script execution after redirect
  } else {
    echo "Error: " . $conn->error;
}
$conn->close();
  ?>

