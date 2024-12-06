<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
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
                <div id="pagetitle">Transaction Log</div>
            </header>
            <hr>
            <div id="main-content"></div>
            <table id="content-table" border="1">
                <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>User ID</th>
                        <th>ProductID</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!--This part will get deleted-->
                    <tr>
                        <td>12/3/2024 10:50pm</td>
                        <td>R01</td>
                        <td>001</td>
                        <td>500</td>
                    </tr>
                    <!--This part will get deleted-->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>