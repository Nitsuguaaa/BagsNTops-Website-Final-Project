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