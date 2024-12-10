<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory | Admin</title>
    <link rel="stylesheet" href="/CSS/admin.css">
</head>
<body>
    <div id="wrapper">
        <div id="sidebar">
            <h2>Admin.</h2>
            <ul>
                <li><a href="admin-receipt.php"><img src="/RSC/admin-page-icons/receipt.png">Transaction Log</a></li>
                <li><a href="admin-inventory.php"><img src="/RSC/admin-page-icons/inventory.png"></i>Inventory</a></li>
                <li><a href="admin-customers.php"><img src="/RSC/admin-page-icons/customers.png">User Management</a></li>
            </ul>
        </div>

        <div id="main">
            <header>
                <div id="pagetitle">Inventory</div>
            </header>   
            <hr>
            <div id="main-content"></div>
            <div id="btn">
                <button type="button" id="show-button" class="add-btn">+ Product</button>
            </div>
                <table id="content-table" border="1">
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Name</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--This part will get deleted-->
                            <?php
                            require('./PHP/db_functions.php');
                            $accSel = new select('productstb');
                            $result_array = $accSel->selectData($column='productId, productName, productPrice, productStock');

                            for($x = 0; $x < count($result_array); $x++) {
                                echo "<tr>";
                                echo "<td>".$result_array[$x]["productId"]."</td>";
                                echo "<td>".$result_array[$x]["productName"]."</td>";
                                echo "<td>".$result_array[$x]["productStock"]."</td>";
                                echo "<td>".$result_array[$x]["productPrice"]."</td>";
                                echo "<td><button id='show-button' class='action-btns'><img src='/RSC/admin-page-icons/edit-btn.png'></button>";
                                echo "<button class='action-btns'><img src='/RSC/admin-page-icons/delete-btn.png'></button></td>";
                                echo "</tr>";
                            }
                            ?>
                        <!--This part will get deleted-->
                    </tbody>
                </table>
        </div>
    </div>

    <div id="popup-form" class="modal-bg">
        <div class="product-details-box animate">
            <form class="prod-input-group">
                <label>Product Name:</label>
                <input type="text" class="cs-input-field">
                <br>
                <label>Price:</label>
                <input type="text" class="cs-input-field">
                <br>
                <label>Description:</label>
                <input type="text" class="cs-input-field">
                <br>
                <label>Quantity:</label>
                <input type="text" class="cs-input-field">
                <br>
                <label>Image:</label>
                <input type="file" class="form-image" accept="image/*">
                <button type="submit" class="submit-btn">Done</button>
            </form>
        </div>
    </div>

    <script src="./JS/admin-script.js"></script>
</body>
</html>