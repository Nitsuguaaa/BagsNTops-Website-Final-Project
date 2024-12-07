<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Bags N' Tops</title>
    <link rel="stylesheet" href="/CSS/main.css">
</head>
<body>
    <div class="partone" id="one">
        <header>
            <div class="top-bar-1">
                <section class="tb-1-title">Bags N' Tops</section>
            </div>
            <div class="top-bar-2">
                <ul class="nav-bar">
                    <li><a href="#one">Home</a></li>
                    <li><a href="productspage.php">Shop</a></li>
                    <li><a href="#three">About Us</a></li>
                </ul>
            </div>
            <div class="top-bar-3">
                <ul class="nav-bar-2">
                    <li><button onclick="document.getElementById('login-form').style.display='block'" style="width: auto;margin:0px;" id="loginBtn"><img src="./RSC/nav-bar-icons/person-icon.png" alt="" width="25px" height="25px" style="margin:0px;padding-top:11px;padding-left:5px;"></button></li>
                </ul>
            </div>
        </header>

        <div class="main-content">
            <div class="mc-side-pic">
                <img src="/RSC/home-page/front-2-img.png" alt="placeholder-pic" width="500px" height="500px">
            </div>
            <div class="mc-side-content">
                <section class="mc-sc-title">
                    Bags N' Tops<br>
                    By Mitch
                </section>
                <section class="mc-sc-subtext">
                    Providing your fashion needs at a pretty<br>
                    cheap cost.
                </section>
                <button class="mc-sc-start" onclick="window.open('./productspage.php', '_self')">
                    Start Shopping
                </button>
                <section class="mc-sc-followtext">
                    EST. 2019
                </section>
            </div>
        </div>

        <div class="bottom-logo-roll">
            <hr style="margin-left:-10px; height:2px; border-width:0; color:white; background-color:white;">
            <div class="scrolling-img-inner" style="--marquee-speed: 20s; --direction:scroll-left" role="marquee">
                <div class="scrolling-img">
                    <div class="scrolling-img-item"><img src="/RSC/home-page/brand-logos-1.png" width="1920px" height="50px"></div>
                </div>
                <div class="scrolling-img">
                    <div class="scrolling-img-item"><img src="/RSC/home-page/brand-logos-1.png" width="1920px" height="50px"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="parttwo" id="two">
        <header>Why Choose Bags N' Tops?</header>
        <div class="container">
            <div class="item">
                <img src="RSC/home-page/coin.png" class="image">
                <h1>Affordable</h1>
                <p>Lorem ipsum dolor sit amet consectetur. Tristique tempus lacus lacus parturient tellus urna. Purus pharetra massa pulvinar semper dictum montes elementum.</p>
            </div>
            <div class="item">
                <img src="RSC/home-page/stars.png" class="image">
                <h1>High Quality</h1>
                <p>Lorem ipsum dolor sit amet consectetur. Tristique tempus lacus lacus parturient tellus urna. Purus pharetra massa pulvinar semper dictum montes elementum.</p>
            </div>
            <div class="item">
                <img src="RSC/home-page/tshirt.png" class="image">
                <h1>Versatile</h1>
                <p>Lorem ipsum dolor sit amet consectetur. Tristique tempus lacus lacus parturient tellus urna. Purus pharetra massa pulvinar semper dictum montes elementum.</p>
            </div>
        </div>
    </div>

    <div class="partthree" id="three">
        <aside>
            <img src="/RSC/home-page/aboutus.png" style="height:940px; display: block;">
        </aside>
        <main>
            <div class="top-bar">
                <ul class="nav-bar">
                    <li><a href="#one">Home</a></li>
                    <li><a href="productspage.php">Shop</a></li>
                    <li><a href="#three">About Us</a></li>
                </ul>
            </div>
            <div class="main-content">
                <h1>About Us.</h1>
                <p>Lorem ipsum dolor sit amet consectetur. Neque eget suspendisse vel hac odio faucibus mi. Nisl tellus tempor fringilla pulvinar blandit. Viverra sagittis augue duis at. Quam tincidunt duis congue interdum. Lobortis sagittis nibh quisque justo. Vitae nec leo diam massa risus egestas condimentum. Ac at ut mattis nunc penatibus.</p>
            </div>
        </main>
    </div>

    <div id="login-form" class="modal-bg">
        <div class="form-box animate">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="signup()">Sign Up</button>
            </div>
            <form id="login" class="input-group">
                <label>Email</label>
                <input type="password" class="input-field" required>
                <label>Password</label>
                <input type="text" class="input-field" required>
                <button type="submit" class="submit-btn">LOGIN</button>
            </form>
            <form id="signup" class="input-group">
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

    <script src="./JS/login-script.js"></script>

</body>
</html>