<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bags N' Tops</title>
    <link rel="stylesheet" href="/CSS/loginpage.css">
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                    <button type="button" class="toggle-btn" onclick="signup()">Sign Up</button>
            </div>
            <form id="login" class="input-group">
                <label>Email</label>
                <input type="text" class="input-field" required>
                <label>Password</label>
                <input type="text" class="input-field" required>
                <input type="checkbox" class="chech-box"><span>Remember Me</span> 
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
                <input type="checkbox" class="chech-box"><span>I agree to the terms & conditions</span> 
                <button type="submit" class="submit-btn">Create</button>
            </form>
        </div>
    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("signup");
        var z = document.getElementById("btn");

        function signup() {
            x.style.left = "-750px";
            y.style.left = "50px";
            z.style.left = "130px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "850px";
            z.style.left = "0px";
        }


    </script>
</body>
</html>