<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('../connection.php'); 

$sql = "SELECT image, Zone FROM location where locationID =" .$_GET['id'];

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
                    <li><a href="help.php">Help</a></li>
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
        <!--<div style="text-align: center;">    
            <h1 style="text-align: center; margin-top: 80px;"><a href="main.php">Home</a>/<a href="store_map.php">Store map</a>/Zone</h1>
            <img src="map/storemap.png" width="80%" height="auto">
        </div>-->
        <?php 
            $result = $conn->query($sql);
            if($result-> num_rows > 0){
                while($row = $result -> fetch_assoc()){
                    //echo $_GET['id'];
                    //print_r($_GET);
                    echo '<div style="text-align: center;">';
                    echo '<h1 style="text-align: center; margin-top: 80px;"><a href="main.php">Home</a>/<a href="store_map.php">Store map</a>/Zone'.' '.$row['Zone'].'</h1>';
                    echo '<img src ="'.$row['image'].'" width="80%" height= "auto">';
                    echo '</div>';
                }   
            }
            else {
                echo "No location found.";
                echo '<div class="placeholder-video"></div>';
            }


            $conn->close();
        ?>
    </div>
    </section>
    <section>
    <footer>
        <div style="background-color: black; width: 100%; height: 200px; margin-top: 50px;color: white;">
            <br><br><br><br><br>
            <p>© 2024 Velotica, Inc. All right reserved.</p>
        </div>
    </footer>    
     
</body>

</html>