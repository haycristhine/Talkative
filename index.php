<?php
session_start();

if( isset($_SESSION['username']))
{
    header('location:home.php');
}
?>

<!DOCTYPE HTML>

<html>
    <head>
        <meta http-equiv = "Content-Type" content = "text/html;charset=utf-8"/>
        <link type="text/css" rel="stylesheet" href="assets/css/loginpage.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/sessionControl.js"></script>
        <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
        <title>Login</title>
        <link rel="icon" type="image/png" href="assets/image/favicon.png">
    </head>

    <body>

    <video autoplay loop poster="assets/image/Sway.jpg" id="bgvid">
        <source src="assets/video/sway.webm" type="video/webm">
        <source src="assets/video/sway.mp4" type="video/mp4">
    </video>

    <div id="titulo">Bau's</div>
    <div class="login">
        <div class="heading">
            <h2>Sign in</h2>
            <form>

                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input id="input_username" type="text" class="form-control" placeholder="Username or email">
                </div>

                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input id="input_password" type="password" class="form-control" placeholder="Password">
                </div>

                <div id="loginbuttons">
                    <button type="submit" class="float" onclick="login(document.getElementById('input_username').value,document.getElementById('input_password').value); return false;">Login</button>
                    <button type="submit" id="btnNewAccount" class="float">Register</button>
                </div>

            </form>
        </div>
    </div>

    <div id="bottom_bar">
        <div id="barra_inferior">
            <div id="icons">
                <a href="https://www.facebook.com/hayde.cristhine">
                    <img src="assets/image/icon_f.png" style="height: 35px;"/>
                </a>
               <a href="https://twitter.com/haycristhine">
                   <img src="assets/image/icon_t.png" style="height: 35px;"/>
               </a>

            </div>
            <div id="text_bottom_bar">|<a> About </a>| Copyright © 2015 Haycristhine's Imaginary Company. All rights reserved</div>
        </div>

    </div>



    </body>
</html>