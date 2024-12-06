<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Customers</title>
    <link rel="stylesheet" href="/CSS/admin.css">
</head>
<body>
    <div id="wrapper">
        <div id="sidebar">
            <h2>Admin.</h2>
            <ul>
                <li><a href="admin-receipt.html"><img src="/RSC/admin-page-icons/receipt.png">Receipt</a></li>
                <li><a href="admin-customers.html"><img src="/RSC/admin-page-icons/customers.png">List of Customers</a></li>
                <li><a href="admin-inventory.html"><img src="/RSC/admin-page-icons/inventory.png"></i>Inventory</a></li>
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
                            <th>Customer ID</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--This part will get deleted-->
                        <tr>
                            <td>001</td>
                            <td>Miguel</td>
                            <td>12/3/2024</td>
                            <td></td>
                        </tr>
                        <!--This part will get deleted-->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>