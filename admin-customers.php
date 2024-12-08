<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management | Admin</title>
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
                <div id="pagetitle">List of Customers</div>
            </header>
            <hr>
            <div id="main-content">
                <table id="content-table" border="1">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            require('./PHP/db_functions.php');
                            $accSel = new select('accountstb');
                            $result_array = $accSel->selectData($column='accountId, accountName,accountEmail');

                            for($x = 0; $x < count($result_array); $x++) {
                                echo "<tr>";
                                echo "<td>".$result_array[$x]["accountId"]."</td>";
                                echo "<td>".$result_array[$x]["accountName"]."</td>";
                                echo "<td>".$result_array[$x]["accountEmail"]."</td>";
                                echo "<td><button id='action-btns'><img src='/RSC/admin-page-icons/edit-btn.png'></button>";
                                echo "<button id='action-btns'><img src='/RSC/admin-page-icons/delete-btn.png'></button></td>";
                                echo "</tr>";
                            }
                            
                            ?>
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>