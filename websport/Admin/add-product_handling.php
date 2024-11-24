
  <?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  include('../connection.php'); 
  session_start();
  /*echo "Welcome <br>";
  echo "Product ID: " . $_GET["productid"] . "<br>";
  echo "Product Name: " . $_GET["productname"] . "<br>";
  echo "Price: " . $_GET["price"] . "<br>";
  echo "Quantity: " . $_GET["quantity"] . "<br>";
  // $_GET["image"] won't work for file inputs.
  echo "Supplier: " . $_GET["supplier"] . "<br>";
  echo "Gender: " . $_GET["gender"] . "<br>";
  echo "Category: " . $_GET["category"] . "<br>";
  echo "Location: " . $_GET["locationid"] . "<br>";*/
    $productID = $_POST['productid'];
    $productName = $_POST['productname'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $supplierID = $_POST['supplierID'];
    $genderCat = $_POST['genderCat'];
    $category = $_POST['category'];
    $locationID = $_POST['locationid'];
    $image = $_POST['imagefolder'].$_POST['image'];
    $adminID = $_SESSION['adminID'];
    
    $sql = "INSERT INTO product (productid, productname, price, quantity, supplierID, gender, category, locationid,createBy,image)
            VALUES ($productID, '$productName', $price, $quantity, '$supplierID', '$genderCat', '$category', $locationID,$adminID,'$image')";

    //$stmt = $conn->prepare($sql);
    //$stmt->bind_param("ssdisi", $productID, $productName, $price, $quantity, $supplier, $gender, $category, $locationID, $image,$adminID);

    if ($conn->query($sql) === TRUE) {
      echo "Product added successfully!";
      header("Location: admin_product-list.php");
      exit; // Prevent further script execution after redirect
    } else {
      echo "Error: " . $conn->error;
  }

  // Close the connection
    $conn->close();


  ?>
</body>

