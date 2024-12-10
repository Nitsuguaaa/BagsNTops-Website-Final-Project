<?php 
include_once './PHP/db-init.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/productspage.css">
    <title>Shop | Bags N' Tops</title>
</head>
<body>
    <div id="logout-screen">
        <div id="logout-box">
            <button id="logoutBtn">Logout</button>
        </div>    
    </div>
    <div id="top-bar">
        <div id="top-bar-1">
            <section id="tb-1-title">Bags N' Tops</section>
        </div>
        <div id="top-bar-2">
            <ul id="nav-bar">
                <li><a href="index.php">Home</a></li>
                <li><a href="productspage.php">Shop</a></li>
                <li><a href="index.php#three">About Us</a></li>
            </ul>
        </div>
        <div id="top-bar-3">
            <ul id="nav-bar-2">
                <li><button id="loginBtn"><img src="./RSC/nav-bar-icons/person-icon-pink.png" alt="" width="25px" height="25px" style="margin:0px;padding-top:11px;padding-left:5px;"></button></li>
                <li><a href="#news"><img src="RSC/nav-bar-icons/bag-icon-pink.png" width="25px" height="25px"></a></li>
            </ul>
        </div>
    </div>

    <div id="main-content">
        <div id="mc-left">
            <hr id="top-hr">
            <div id="prod-container">
                <div id="products-grid">
                    <?php include './PHP/product-db.php';?>
                </div>
                <div id="prod-overview">
                    <div id="prod-overview-text">
                        <h1>Name of the Item</h1><br>
                        <h1>Price</h1><br>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div id="prod-add-cart-btns">
                        <button class="add-crt-btn">Add to Cart</button>
                        <div id="item-ctr">
                            <span class="minus">-</span>
                            <span class="num">01</span>
                            <span class="plus">+</span>
                        </div>
                    </div>
                </div>
            </div>
            <hr id="top-hr">
        </div>
        <div id="mc-right">
            <img src="RSC/home-page/front-2-img.png" alt="" width="790px" height="820px">
        </div>
    </div>

    <script src="./JS/product-overview.js"></script>

    <div id="login-form" class="modal-bg">
        <div class="form-box animate">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="loginAnimate()">Log In</button>
                <button type="button" class="toggle-btn" onclick="signupAnimate()">Sign Up</button>
            </div>
            <form id="loginForm" class="input-group" method="POST">
                <label>Email</label>
                <input type="email" class="input-field" name="loginEmail" id="loginEmail" autocomplete="email" required>
                <label>Password</label>
                <input type="password" class="input-field" name="loginPassword" id="loginPassword" autocomplete="current-password" required>
                <button type="submit" class="submit-btn">LOGIN</button>
            </form>
            <form id="signupForm" class="input-group">
                <label>Name</label>
                <input type="text" class="input-field" required>
                <label>Email</label>
                <input type="text" class="input-field" required>
                <label>Password</label>
                <input type="text" class="input-field" required>
                <label>Confirm Password</label>
                <input type="text" class="input-field" required>
                <button type="submit" class="submit-btn">Create</button>
            </form>
        </div>
    </div>

    <div id="show-cart" class="temp-modal-bg">
        <div class="cart-box">
            <div class="top-head">
                <header>
                    Your Cart <br>
                    Customer Details
                </header>
                Name:
                <br>Address:
                <br>Contact:
            </div>

            <table border="1" id="details-table">
                <thead>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Delete Item</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Sample Product Name</td>
                        <td>Sample Quantity</td>
                        <td>Sample Price</td>
                        <td>delete</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>

    <script src="./JS/login-animations.js"></script>
    <script src="./JS/login-script.js"></script>

</body>
</html>