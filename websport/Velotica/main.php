<?php
session_destroy();

session_start();
// default
$category = 'men';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['category'])) {
    $category = $_POST['category'];
    $_SESSION['selected_category'] = $category;
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
} elseif (isset($_SESSION['selected_category'])) {
    $category = $_SESSION['selected_category'];
} else {
    $_SESSION['selected_category'] = $category;
}


$images = [
    'men' => [
        'clothes' => 'poster/men-clothes-1.jfif',
        'shoes' => 'poster/men-shoes-1.jpg',
        'accessories' => 'poster/men-accessory.avif'
    ],
    'women' => [
        'clothes' => 'poster/women-cloth.jpg',
        'shoes' => 'poster/women-shoe.png',
        'accessories' => 'poster/women-accessory-1.jpg'
    ],
    'kids' => [
        'clothes' => 'poster/kids-clothes-1.jpg',
        'shoes' => 'poster/kids-shoes-1.jpg',
        'accessories' => 'poster/kids-accessory.jpg'
    ]
];

$links =[
    'men'=> [
        'clothes' => 'men-clothes.php',
        'shoes'=>'men-shoes.php',
        'accessories'=> 'men-accessories.php'
    ], 
    'women'=> [
        'clothes'=> 'women-clothes.php',
        'shoes' => 'women-shoes.php',
        'accessories'=>'women-accessories.php'
    ],
    'kids' => [
        'clothes' =>'kids-clothes.php',
        'shoes' => 'kids-shoes.php',
        'accessories' => 'kids-accessories.php'
    ]
];

// Select images based on the chosen category
$selectedImages = $images[$category];
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Webpage-style.css">
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet">
    <title>Velotica Thailand Kiosk - Multi-Brand Shop sportswear</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/velo-favicon.png" ></link>                  
</head>
<body>
    <header>
        <nav>
            <div class="abovenav">
                <ul class="nav_location" style="margin-right: 40px">
                    <li><a href="store_map.php">Store map</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </div> 
            <div class="navbar">
                <a href="main.php">
                    <img src="velotica-2.png" alt="Brand logo" style="width: 200px; height: auto; margin-left: 40px; margin-top: 15px;">
                </a>
                <ul>
                    <li><a href="all.php">All</a></li>
                    <li><a href="men.php">Men</a></li>
                    <li><a href="women.php">Women</a></li>
                    <li><a href="kids.php">Kids</a></li>
                </ul>
                <div class="search-container">
                    <div>
                        <form class="search" method="get" action="search.php">
                            <input type="text" placeholder="Search..." id="myInput" name="myInput" autocomplete="off">
                        </form>
                    </div>
                    <div class="search-placeholder"></div>
                    <div class="overlay"></div>
                </div>
            </div>  
        </nav>
        <div class="promotion">
            <p>Welcome to Velotica 🎉<br><span style="font-size: small;"> Enjoy the exclusive in-store offer:</span><br><a href="new-arrival.php">New arrival</a> - fresh stock, just for you!</p>
        </div>
    </header>
    <section>
        <div class="centerpage">    
            <div class="poster">    
                <video width="100%" height="auto" loop autoplay muted>
                    <source src="velotica-video-promo.mp4" type="video/mp4">
                </video>
                <h3>Coming up</h3>
                <h1>12.12 Sales</h1>
                <p>Buy 2 Get 30% OFF | Buy 3 Get 40% OFF</p>
            </div>
        </div>
</section>
<section id="category-buttons">   
        <h3 style="margin-left: 80px;">Choose by brand</h3>
        <div class="brands">
            <a href="nike.php"><img src="Brand/NIKE.avif"></a>
            <a href="adidas.php"><img src="Brand/ADIDAS.avif"></a>
            <a href="puma.php"><img src="Brand/PUMA.avif"></a>
            <a href="vans.php"><img src="Brand/VANS.avif"></a>
            <a href="nb.php"><img src="Brand/NB.avif"></a>
        </div>
  
        <div class="items">
            <div class="category-tab">
                <h3>Choose by category</h3>
                <form method="POST" action="#category-buttons">
                    <ul>
                        <li><button type="submit" name="category" value="men" <?php if ($category == 'men') echo 'style="background-color: black; color: white;"'; ?>>Men</button></li>
                        <li><button type="submit" name="category" value="women" <?php if ($category == 'women') echo 'style="background-color: black; color: white;"'; ?>>Women</button></li>
                        <li><button type="submit" name="category" value="kids" <?php if ($category == 'kids') echo 'style="background-color: black; color: white;"'; ?>>Kids</button></li>
                    </ul>
                </form>
            </div>
        </div>    
        <div class="image-container">
            <div class="image-card">
                <a href="<?php echo $links[$category]['clothes']?>"> <!-- Link for Clothes -->
                    <img src="<?php echo $selectedImages['clothes']; ?>" alt="Clothes">
                </a>
                <p class="text-overlay">Clothes</p>
            </div>
            <div class="image-card">
                <a href="<?php echo $links[$category]['shoes']?>"> <!-- Link for Shoes -->
                    <img src="<?php echo $selectedImages['shoes']; ?>" alt="Shoes">
                </a>
                <p class="text-overlay">Shoes</p>
            </div>
            <div class="image-card">
                <a href="<?php echo $links[$category]['accessories']?>"> <!-- Link for Accessories -->
                    <img src="<?php echo $selectedImages['accessories']; ?>" alt="Accessories">
                </a>
                <p class="text-overlay">Accessories</p>
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
