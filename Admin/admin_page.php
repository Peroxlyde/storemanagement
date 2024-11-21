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
    flex-direction: row;
    min-height: 100vh;
    background-color: #f4f4f4;
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
    display: flex;
    justify-content: center;
    align-items: center;
    flex-grow: 1;
    background-color: #f4f4f4;
  }
  .main-content h1{
    margin-top:100px;
    margin-left:50px;
  }

  @media (max-width: 768px){
    .side-navbar{
      width: 200px;
    }
    .main-content {
      margin-left: 200px;
    }
  }

  @media (max-width: 576px){
    .side-navbar{
      width: 100%;
      height: auto;
      position: relative;
    }
    .main-content {
      margin-left: 0;
    }
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
    <a href="admin_add-product.php">Add product</a>
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
  <h1>Welcome to Admin Page</h1>
</div>


</body>
</html>
