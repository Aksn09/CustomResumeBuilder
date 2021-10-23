<?php
    require 'header.php';
    require 'connection.php';
?>
<body>
        <!-- <div class="container">
            <div class="col">
            <div class="login-center">
                <form action="backend.php" method="POST">
                    <input type="text" name="username" id="inputdefault" placeholder="Username" required>
                    <input type="password" name="password" id="inputdefault" placeholder="Password" required>
                    <input type="submit" value="Login" id="inputdefault">
                    <p>Not a User? </p><a href="register.php">Register Here!</a>
                </form>
            </div>
        </div>
        </div> -->

    <div class ="container">
        <div class="login-center">
    <!-- </div> -->
            <div class="col">
            <div><h1>Login your Account!</h1></div>
            <br>
                <form method = 'POST' action = 'backend.php' >
                    <!-- <label>Username : </label> -->
                    <input class= type="text" name="username" placeholder="username">
                    <!-- <label>Password :</label> -->
                    <input type="password" name="password" id="password" autocomplete="off" placeholder = "password">
                    <input type="submit" name="login" value= 'login' class="submit">
                </form>
                <br>
                <div id="footer-box">
                <p>Not a member? <a href="register.php" class="sign-up">Sign up now</a></p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>