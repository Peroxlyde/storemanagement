<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('../connection.php'); 

$sql = "SELECT product.productName, product.price, product.image, product.quantity, location.Zone, product.locationID FROM product join location on product.locationID = location.locationID Where product.supplierID IN (SELECT supplierID FROM supplier WHERE supplierName like '%Vans%')";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel = "stylesheet" href="Webpage-style.css">
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<title>Velotica Thailand Kiosk - Multi-Brand Shop sportswear</title>
<link rel="icon" type="image/png" sizes="16x16" href="/velo-favicon.png" ></link>
</head>
<body>
    <header>
        <nav>
            <div class = "abovenav">
                <ul class = "nav_location" style="margin-right: 40px">
                    <li><a href="store_map.php">Store map</a></li>
                    <li><a href=#>Help</a></li>
                </ul>
            </div> 
            <div class = "navbar">
                <a href="main.php">
                    <img src = "velotica-2.png" alt="Brand logo" style="width: 200px; height: auto; margin-left: 40px; margin-top: 15px;">
                </a>
                <ul>
                    <li><a href="all.php">All</a></li>
                    <li><a href = "men.php">Men</a></li>
                    <li><a href = "women.php">Women</a></li>
                    <li><a href = "kids.php">Kids</a></li>
                </ul>
                <div class = "search-container">
                    <div>
                        <form class="search" method="get" action="search.php">
                            <input type="text" placeholder="Search..." id="myInput" name="myInput" autocomplete="off">
                        </form>
                    </div>
                    <div class = "search-placeholder"></div>
                    <div class ="overlay"></div>
                </div>
            </div>  
        </nav>
         <div class = "promotion">
                <p>Welcome to Velotica 🎉<br><span style="font-size: small;"> Enjoy the exclusive in-store offer:</span><br><a href="new-arrival.php">New arrival</a> - fresh stock, just for you!</p>
        </div>
    </header>
    <div class="centerpage">
        <div>
            <div>
                <h1 style="text-align: center; margin-top: 80px;"><a href="main.php">Home</a>/Vans</h1>
            </div>
            <div>    
            <?php 
                $result = $conn->query($sql);

                if($result-> num_rows > 0){
                    echo '<div style="display: grid; grid-template-columns: repeat(4,1fr); margin-left: 50px; gap:20px; margin-top: 100px; padding: 5px;z-index: 1;">';
                    while($row = $result -> fetch_assoc()){
                        echo '<div style="width: 300px" >';
                        echo '<img src ="' .$row['image'].'"'. 'style ="width: 100%; height: 310px;">'; 
                        echo '<h3>'.$row['productName']. '</h3>';
                        echo '<p>฿'.$row['price']. '</[p>';
                        echo '<a href="zone.php?id='.$row['locationID'].'" style ="text-decoration: none; color: black;"><p style="color: black;">Zone'.' '.$row['Zone']. '<img src="external-link.png" style="height:16px;width:16px;margin-left: 5px;"></p><a>';
                        //echo '<a href="/Velotica/store_map.php"><p style="color: black;">Zone '.$row['Zone']. '</p><a>';
                         if ($row['quantity'] != 0){
                            echo '<p style="color: green;">In stock</p>';
                        }
                        else{
                            echo '<p style="color: red;">Out of stock</p>';
                        }
                        echo '</div>';
                    }
                    echo'</div>';
                } 
                else {
                    echo "No product found.";
                    echo '<div class="placeholder-video"></div>';
                }
            $conn->close();
            ?>
            </div>
        </div>
    </div>
    </section>
    <footer>
        <div style="background-color: black; width: 100%; height: 200px; margin-top: 50px;color: white;">
            <br><br><br><br><br>
            <p>© 2024 Velotica, Inc. All right reserved.</p>
        </div>
    </footer>  
     
</body>

</html>