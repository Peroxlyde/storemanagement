<!DOCTYPE html>
<html>
<body>
  <?php
  echo "Welcome <br>";
  echo "Product ID: " . $_GET["productid"] . "<br>";
  echo "Product Name: " . $_GET["productname"] . "<br>";
  echo "Price: " . $_GET["price"] . "<br>";
  echo "Quantity: " . $_GET["quantity"] . "<br>";
  // $_GET["image"] won't work for file inputs.
  echo "Supplier: " . $_GET["supplier"] . "<br>";
  echo "Gender: " . $_GET["gender"] . "<br>";
  echo "Category: " . $_GET["category"] . "<br>";
  echo "Location: " . $_GET["locationid"] . "<br>";
  ?>
</body>
</html>
