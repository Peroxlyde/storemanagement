<?php include('../connection.php'); 
  session_start();
  $sql = "select * from supplier";
?>
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Velotica Admin</title>
<link rel="icon" type="image/png" sizes="16x16" href="/velo-favicon.png" ></link>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: Arial, sans-serif;
    display: flex;
    width: 1535.2px;
    height: 729.6px;
  }

  .side-navbar {
    width: 250px;
    height: 100vh;
    background-color: white;
    color: #808080;
    display: flex;
    flex-direction: column;
    position: fixed;
    top: 0;
    left: 0;
    padding-top: 20px;
  }

  .side-navbar a {
    text-decoration: none;
    color: #808080;
    display: block;
    font-size: 18px;
    transition: background-color 0.3s;
  }

  .side-navbar a:focus, .side-navbar a.active {
    color: #0B63F8;
    background-color: #e0e0e0;
  }
  .side-navbar a:hover {
    color:white;
    background-color: #0B63F8;
  }
  .side-navbar .logo {
    font-size: 24px;
    font-weight: bold;
    padding: 20px;
    text-align: center;
  }

  .main-content {
    margin-left: 250px;
    height: 100%;
    flex-grow: 1;
    background-color: #f4f4f4;
  }
  .main-content h1{
    margin-top:100px;
    margin-left:50px;
  }
  .side-navbar a.active {
    color: #0B63F8;
  }

  label {
  display: block;
  font-size: 0.875rem;
  color: #4b5563;
  margin-bottom: 0.5rem;
  }

  input, button {
  border: 1px solid #4b5563;
  border-radius: 4px;
  height: 30px;
  line-height: 30 px;
  padding-left: 5px;
  }
  
  input:focus, button:focus {
  border-color: black;
  box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2);
 }

 input[type="file"] {
    background-color: white; 
    padding-top: 3px;
    border: 1px solid #4b5563;
  }

 input[type="file"]:focus {
  border-color: #3b82f6;
  box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2);
  }

 select {
  border: 1px solid #4b5563;
  width: 169px;
  border-radius: 4px;
  height: 30px;
  line-height: 30 px;
  padding-left: 5px;
  padding-right: 50px;
 }

 .form {
  display: grid;
  grid-template-columns: repeat(2,1fr);
  width: 50%;
  margin-top: 20px;
  margin-left: 50px;
 }

</style>
</head>
<body>

<div class="side-navbar">
  <div class="logo">
    <a href="admin_page.php">
      <img src="velotica-2.png" style="width:220px;height:auto;">
    </a>
  </div>

  <div style="display: flex;margin-left:30px;gap:20px;margin-top:50px;align-items:center">
    <img src="windows-8.png " style="width:20px;height:auto;">
    <a href="admin_product-list.php">Product  list</a>
  </div>
  <div style="display:flex;margin-left:29px;gap:20px;margin-top:50px; align-items:center"> 
    <img src="task.png" style="width:25px;height:auto;">
    <a href="admin_add-product.php" class="active">Add product</a>
  </div>

  <div style="display:flex;margin-left:29px;gap:20px;margin-top:50px; align-items:center"> 
    <img src="quantity.png" style="width:25px;height:auto;">
    <a href="admin_add-quantity.php">Add quantity</a>
  </div>

  <div style="display:flex;margin-left:29px;gap:20px;margin-top:50px; align-items:center"> 
    <img src="warning-sign.png" style="width:25px;height:auto;">
    <a href="admin_issue.php">Issue items</a>
  </div>

  <div style="display:flex;margin-left:29px;gap:20px;margin-top:50px; align-items:center; margin-top: 274px;">
    <img src="log-out.png" style="width:25px;height:auto;">
    <a href="#">Log out</a>
  </div>
</div>

<div class="main-content">
  <h1>Add product</h1>
    <form action="add-product_handling.php" class="form" method="post">
      <div>
        <label for="productid">Product ID:</label>
        <input type="text" id="productid" name="productid"><br><br>
      </div>
      <div>  
        <label for="productname">Product Name:</label>
        <input type="text" id="productname" name="productname"><br><br>
      </div>
      <div>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price"><br><br>
      </div>
      <div>
        <label for="quantity">Quantity:</label>
        <input type="text" id="quantity" name="quantity"><br><br>
      </div>
      <div>
        <label for="supplier">Supplier:</label>
        <select type="text" id="supplierID" name="supplierID">
        <?php 
          $result = $conn->query($sql);

          if($result-> num_rows > 0){
          while($row = $result -> fetch_assoc()){
            echo "<option value ='".$row['supplierID']."'>".$row['supplierID']."</option>";
          }
        } else {
          echo "<option>No product available.</option>";
        }

        $conn->close();
        ?>
        </select><br><br>
      </div>
      <div>
        <label for="genderCat">Gender:</label>
        <select type="text" id="genderCat" name="genderCat">
          <option value ="Men">Men</option>
          <option value ="Women">Women</option>
          <option value ="Kids">Kids</option>
        </select><br><br>
      </div>
      <div>
        <label for="category">Category:</label>
        <select type="text" id="category" name="category">
          <option value ="Clothes">Clothes</option>
          <option value ="Shoes">Shoes</option>
          <option value ="Accessories">Accessories</option>
        </select><br><br>
      </div>
      <div>
        <label for="locationid">Location:</label>
        <select type="text" id="locationid" name="locationid">
          <option value ="1">Zone A: Nike</option>
          <option value ="2">Zone B: Adidas</option>
          <option value ="3">Zone C: Puma</option>
          <option value ="4">Zone D: Vans</option>
          <option value ="5">Zone E: NB</option>
          <option value ="6">Zone F: Kids</option>
        </select><br><br>
      </div>
      <div>
        <label for="image">Image file Name:</label>
        <input type="text" id="image" name="image" style="background-color: white; padding-top: 3px; :focus{border-color:black}"><br><br>
      </div>
      <div style="margin-top:120px; margin-left: -150px;">
        <input type="submit" style="color: white;background-color: black;padding-left: 60px;padding-right: 60px;">
      </div>
    </form>
  </div>
</div>
</body>
</html>
