<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
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
                <div id="pagetitle">Inventory</div>
            </header>   
            <hr>
            <div id="main-content"></div>
            <div id="btn">
                <button type="button" id="add-btn">+ Product</button>
            </div>
                <table id="content-table" border="1">
                    <thead>
                        <tr>
                            <th>Products</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--This part will get deleted-->
                        <tr>
                            <td>T-shirt</td>
                            <td>30</td>
                            <td>500</td>
                            <td>button</td>
                        </tr>
                        <!--This part will get deleted-->
                    </tbody>
                </table>
        </div>
    </div>
</body>
</html>