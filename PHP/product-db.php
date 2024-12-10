<?php
include_once('db_functions.php');

$selectData = new select('productstb');
$resultArray = $selectData->selectData();

if(count($resultArray) > 0) {
    foreach($resultArray as $result) {
        echo "<div id='product-card'>";
        echo "<img src='PRODUCTS/" . $result['productId'] . "/product_img.png' alt='" . $result['productName'] . "' class='product-image'>";
        echo "<h2>" . $result['productName'] . "</h2>"; 
        echo "<p>Price: $" . $result['productPrice'] . "</p>";
        echo "</div>";    
    }
} else {
    echo "fetch error";
}

/*if ($prodres->num_rows > 0) {
                        while($row = $prodres->fetch_assoc()) {
                            echo "<div id='product-card'>";
                            echo "<img src='" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['productName']) . "' class='product-image'>";
                            echo "<h2>" . htmlspecialchars($row['productName']) . "</h2>"; 
                            echo "<p>Price: $" . $row['price'] . "</p>";
                            echo "</div>";
                        }
                    
                    } else {
                        echo "No products found.";
}
?>*/