<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Velotica Admin</title>
<link rel="icon" type="image/png" sizes="16x16" href="/velo-favicon.png" ></link>
<style>
  /* General Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html, body {
  height: 100%;
}

body {
  font-family: Arial, sans-serif;
  display: flex;
  min-height: 100vh;
  background-color: #f4f4f4;
}

/* Sidebar Styling */
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
  padding: 20px 0;
  z-index: 1000;
}

.side-navbar .logo {
  text-align: center;
  margin-bottom: 40px;
}

.side-navbar .logo img {
  width: 200px;
  height: auto;
}

/* Navigation Links */
.side-navbar a {
  text-decoration: none;
  color: #808080;
  display: flex;
  align-items: center;
  font-size: 18px;
  padding: 10px 20px;
  transition: background-color 0.3s, color 0.3s;
}

.side-navbar a:hover {
  color: white;
  background-color: #0B63F8;
}

.side-navbar a.active {
  color: #0B63F8;
  background-color: #e0e0e0;
}

/* Navigation Items Styling */
.side-navbar .nav-item {
  display: flex;
  align-items: center;
  gap: 15px; /* Space between icon and text */
  margin-bottom: 30px; /* Space between links */
  padding-left: 20px; /* Align links */
}

.side-navbar .nav-item img {
  width: 25px;
  height: auto;
}

/* Main Content Styling */
.main-content {
  margin-left: 250px;
  flex-grow: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #f4f4f4;
}

.main-content h1 {
  font-size: 24px;
  color: #333;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
  .side-navbar {
    width: 200px;
  }

  .main-content {
    margin-left: 200px;
  }
}

@media (max-width: 576px) {
  .side-navbar {
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
      <img src="velotica-2.png" alt="Velotica Logo">
    </a>
  </div>

  <div class="nav-item">
    <img src="windows-8.png" alt="Product List Icon">
    <a href="admin_product-list.php">Product List</a>
  </div>

  <div class="nav-item">
    <img src="task.png" alt="Add Product Icon">
    <a href="admin_add-product.php">Add Product</a>
  </div>

  <div class="nav-item">
    <img src="quantity.png" alt="Add Quantity Icon">
    <a href="admin_add-quantity.php">Add Quantity</a>
  </div>

  <div class="nav-item">
    <img src="warning-sign.png" alt="Issue Items Icon">
    <a href="admin_issue.php">Issue Items</a>
  </div>

  <div class="nav-item" style="margin-top: auto;"> <!-- Push logout to the bottom -->
    <img src="log-out.png" alt="Log Out Icon">
    <a href="#">Log Out</a>
  </div>
</div>

<div class="main-content">
  <h1>Welcome to Admin Page</h1>
</div>
</body>
</html>
