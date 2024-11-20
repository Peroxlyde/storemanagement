<?php
// Enable error reporting for debugging (Remove in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection details
$servername = "localhost";      // Change if not using localhost
$username = "root";             // Replace with your database username
$password = "root";             // Replace with your database password
$database = "velotica_inventory"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data
$sql = "SELECT * FROM product";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velotica Admin</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/velo-favicon.png">
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            min-height: 100vh; /* Use min-height for responsiveness */
        }

        /* Side Navbar */
        .side-navbar {
            width: 250px;
            background-color: white;
            color: #808080;
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
            height: 100vh;
        }

        .side-navbar a {
            text-decoration: none;
            color: #808080;
            display: block;
            font-size: 18px;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 4px;
        }

        .side-navbar a:focus, .side-navbar a.active {
            color: #0B63F8;
            background-color: #e0e0e0; 
        }

        .side-navbar a:hover {
            color: white;
            background-color: #0B63F8;
        }

        .side-navbar .logo {
            font-size: 24px;
            font-weight: bold;
            padding: 20px;
            text-align: center;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            padding: 20px;
            flex-grow: 1;
            background-color: #f4f4f4;
        }

        .main-content h1 {
            margin-bottom: 20px;
            margin-top: 80px;
            margin-left: 40px;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto; /* Center the table */
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
        }

        td {
          font-size: small;
          text-align: center;
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
            font-size: small;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            body {
                flex-direction: column;
            }

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
                <img src="velotica-2.png" alt="Velotica Logo" style="width:220px;height:auto;">
            </a>
        </div>

        <div style="display: flex; margin-left: 30px; gap: 20px; margin-top: 50px; align-items: center;">
            <img src="windows-8.png" alt="Icon" style="width:20px;height:auto;">
            <a href="admin_product-list.php" class="active">Product list</a>
        </div>
        <div style="display:flex; margin-left:29px; gap:20px; margin-top:50px; align-items:center;"> 
            <img src="task.png" alt="Icon" style="width:25px;height:auto;">
            <a href="admin_add-product.php">Add product</a>
        </div>

        <div style="display:flex; margin-left:29px; gap:20px; margin-top:50px; align-items:center;"> 
            <img src="quantity.png" alt="Icon" style="width:25px;height:auto;">
            <a href="admin_add-quantity.php">Add quantity</a>
        </div>

        <div style="display:flex; margin-left:29px; gap:20px; margin-top:50px; align-items:center;"> 
            <img src="warning-sign.png" alt="Icon" style="width:25px;height:auto;">
            <a href="admin_issue.php">Issue items</a>
        </div>

        <div style="display:flex; margin-left:29px; gap:20px; margin-top:50px; align-items:center; margin-top: 274px;">
            <img src="log-out.png" alt="Icon" style="width:25px;height:auto;">
            <a href="#">Log out</a>
        </div>
    </div>

    <div class="main-content">
        <h1>Product list</h1>
        
        <!-- Product Table -->
        <table>
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Supplier ID</th>
                    <th>Gender</th>
                    <th>Category</th>
                    <th>Created By</th>
                    <th>Location ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        // Assuming 'image' contains the path to the image
                        $imagePath = htmlspecialchars($row['image']);
                        $productID = $row['ProductID'];
                        echo "<tr>
                                <td>{$row['ProductID']}</td>
                                <td>{$row['productName']}</td>
                                <td>฿{$row['price']}</td>
                                <td>{$row['quantity']}</td>
                                <td><img src='{$imagePath}' style='width:50px;height:auto;'></td>
                                <td>{$row['supplierID']}</td>
                                <td>{$row['gender']}</td>
                                <td>{$row['category']}</td>
                                <td>{$row['createBy']}</td>
                                <td>{$row['locationID']}</td>
                                <td>
                                  <a href='del_product.php?id={$productID}'><img src='bin.png'  alt='Delete' style='width:20px;height:auto;'></a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='11'>No products found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>

<?php
// Close the connection
$conn->close();
?>
