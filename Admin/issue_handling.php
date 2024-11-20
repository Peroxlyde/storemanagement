<!DOCTYPE html>
<html>
<body>
  <?php
  date_default_timezone_set("Asia/Bangkok");

  echo "Welcome <br>";
  // issueid
  echo "Date: " .date("Y-m-d h:i:s") . "<br>";
  // adminid
  echo "Product ID: " . $_GET["productid"] . "<br>";
  // productname
  echo "Quantity: " . $_GET["quantity"] . "<br>";
  echo "Reason of Issue: " . $_GET["reason"] . "<br>";
  // status: pending
  // approve by
  ?>
</body>
</html>
