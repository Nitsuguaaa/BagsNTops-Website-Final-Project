<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Log | Admin</title>
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
                <div id="pagetitle">Transaction Log</div>
            </header>
            <hr>
            <div id="main-content"></div>
            <table id="content-table" border="1">
                <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>Customer Name</th>
                        <th>Transaction Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            require('./PHP/db_functions.php');
                            $accSel = new select('transactionstb');
                            $result_array = $accSel->selectData($column='transactionId, accountId, accountAddress, accountPNum');

                            for($x = 0; $x < count($result_array); $x++) {
                                echo "<tr>";
                                echo "<td>".$result_array[$x]["transactionId"]."</td>";
                                echo "<td>".$result_array[$x]["accountAddress"]."</td>";
                                echo "<td>".$result_array[$x]["accountPNum"]."</td>";
                                echo "<td><button id='show-button' data-id='" .$result_array[$x]['accountId']. "' class='action-btns'><img src='/RSC/admin-page-icons/details-btn.png'></button>";
                                echo "<button class='action-btns'><img src='/RSC/admin-page-icons/delete-btn.png'></button></td>";
                                echo "</tr>";
                            }
                            ?>
                </tbody>
            </table>
        </div>
    </div>


    <div id="popup-form" class="modal-bg">
        <div class="details-box animate">
            <div class="top-head">
                <header>Customer Details</header>
                Name:
                <br>Address:
                <br>Contact:
            </div>

            <table border="1" id="details-table">
                <thead>
                    <th>Product Name</th>
                    <th>Product ID</th>
                    <th>Quantity</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Sample Product Name</td>
                        <td>Sample Product ID</td>
                        <td>Sample Quantity</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>
    <script src="./JS/admin-script.js"></script>

</body>
</html>