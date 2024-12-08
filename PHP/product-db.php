<?php
if ($prodres->num_rows > 0) {
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
?>