<?php
// Enable error reporting for debugging (Remove in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection details
include('../connection.php');

// SQL query to fetch data
$sql = "SELECT * FROM request";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Velotica Developer</title>
<link rel="icon" type="image/png" sizes="16x16" href="/velo-favicon.png" ></link>
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
    width: 1535.2px;
    height: 729.6px;
  }

  /* Side Navbar */
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

  .side-navbar a:focus, .side-navbar a.active{
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

  /* Main Content */
  .main-content {
    margin-left: 250px;
    height: 100%;
    flex-grow: 1;
    background-color: #f4f4f4;
  }
  .main-content h1{
    margin-top:100px;
    margin-bottom: 20px;
    margin-left:50px;
  }
  .side-navbar a.active {
        color: #0B63F8;
  }

  table {
    width: 90%;
    border-collapse: collapse;
    margin: 0 auto; /* Center the table */
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  th, td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: center;
  }

  td {
    font-size: small;
  }

  th {
    background-color: #f4f4f4;
    font-weight: bold;
    font-size: small;
  }

  tr:hover {
    background-color: #f1f1f1;
  }
</style>
</head>
<body>

<div class="side-navbar">
  <div class="logo">
    <a href="dev_page.php">
      <img src="velotica-2.png" style="width:220px;height:auto;">
    </a>
  </div>
  <div style="display: flex;margin-left:30px;gap:20px;margin-top:50px;align-items:center;">
    <img src="question.png " style="width:25px;height:auto;">
    <a href="dev_received-report.php" class="active">received request</a>
  </div>

  <div style="display:flex;margin-left:29px;gap:20px;margin-top:50px; align-items:center; margin-top: 495px;">
    <img src="log-out.png" style="width:25px;height:auto;">
    <a href="../welcome.php">Log out</a>
  </div>

</div>

<div class="main-content">
  <h1>Received request</h1>
  <table>
    <thead>
        <tr>
            <th>Request ID</th>
            <th>Manager ID</th>
            <th>Details</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
          if ($result->num_rows > 0) {
             // Output data of each row
            while ($row = $result->fetch_assoc()) {
              $requestID = $row['requestID'];
                echo "<tr>
                <td>{$row['requestID']}</td>
                <td>{$row['managerID']}</td>
                <td>{$row['detail']}</td>
                <td>
                    <a href='del_request.php?id={$requestID}'><img src='bin.png'  alt='Delete' style='width:20px;height:auto;'></a>
                </td>
                </tr>";
                }
          } 
          else {
              echo "<tr><td colspan='4'>No requests found</td></tr>";
          }
        ?>
    </tbody>
 </table>
</div>
</body>
</html>
