<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "bagsntops";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$productsql = "SELECT * FROM products";
$prodres = $conn->query($productsql);




$conn->close()
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/productspage.css">
    <title>Order Page</title>
</head>
<body>
    <div id="top-bar">
        <div id="top-bar-1">
            <section id="tb-1-title">Bags N' Tops</section>
        </div>
        <div id="top-bar-2">
            <ul id="nav-bar">
                <li><a href="index.php">Home</a></li>
                <li><a href="#news">Shop</a></li>
                <li><a href="index.php#three">About Us</a></li>
            </ul>
        </div>
        <div id="top-bar-3">
            <ul id="nav-bar-2">
                <li><a href="loginpage.php"><img src="RSC/nav-bar-icons/person-icon-pink.png" width="25px" height="25px"></a></li>
                <li><a href="#news"><img src="RSC/nav-bar-icons/bag-icon-pink.png" width="25px" height="25px"></a></li>
            </ul>
        </div>
    </div>

    <div id="main-content">
        <div id="mc-left">
            <hr id="top-hr">
            <div id="prod-container">
                <div id="products-grid">
                    <?php 
                    if ($prodres->num_rows > 0) {
                        while($row = $prodres->fetch_assoc()) {
                            echo "<div id='product-card'>";
                            echo "<img src='" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['productName']) . "' class='product-image'>";
                            echo "<button id='product-button'>" . htmlspecialchars($row['productName']) . "</button>";
                            echo "<p>Price: $" . $row['price'] . "</p>";
                            echo "<p>" .$row['prodDescription'] . "</p>";
                            echo "</div>";
                        }
                    
                    } else {
                        echo "No products found.";
                    }
                    ?>
                </div>
                <div id="prod-overview">
                    <h1>Name of the Item</h1>
                    <h1>Price</h1>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </div>
            <hr id="top-hr">
        </div>
        <div id="mc-right">
            <img src="RSC/home-page/front-2-img.png" alt="" width="790px" height="820px">
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const productButtons = document.querySelectorAll('#product-button');
        const prodOverview = document.getElementById('prod-overview');
        const productsGrid = document.getElementById('products-grid');

        productButtons.forEach(button => {
            button.addEventListener('click', () => {
                prodOverview.classList.add('active'); // Show #prod-overview
                productsGrid.style.opacity = 0.5; // Dim the grid for focus
            });
        });

        // Optional: Add a close button or click outside to close
        prodOverview.addEventListener('click', (e) => {
            if (e.target === prodOverview) { // Close only when clicking outside
                prodOverview.classList.remove('active'); // Hide #prod-overview
                productsGrid.style.opacity = 1; // Restore grid opacity
            }
        });
    });
</script>


</body>
</html>