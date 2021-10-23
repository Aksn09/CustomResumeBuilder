<?php
require 'header.php';
?>
<html>
<body>
<div class = 'container'>
<div>
</div>
<div class ="container">
        <div class="login-center">
    <!-- </div> -->
            <div class="col">
            <div><h1>Register your Account</h1></div>
            <br>
                <form action = 'backend.php' method = 'POST' >
                    <!-- <label>Username : </label> -->
                    <input class= type="text" name="username" placeholder="username">
                    <!-- <label>Password :</label> -->
                    <input type="password" name="password" id="password" autocomplete="off" placeholder = "password">
                    <input type="submit" name="register" value= 'register' class="submit">
                </form>
                <br>
                <div id="footer-box">
                <a href="login.php" class="sign-up">Return to login!</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>