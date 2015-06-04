<!DOCTYPE HTML>


<html>
    <head>
        <meta http-equiv = "Content-Type" content = "text/html;charset=utf-8"/>
        <link type="text/css" rel="stylesheet" href="assets/css/loginpage.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
        <title>Login</title>
        <link rel="icon" type="image/png" href="assets/image/favicon.png">
        <script type="text/javascript" src="assets/js/script_login.js"></script>
    </head>

    <body>
    <div id="titulo">Talkative</div>
    <div class="login">
        <div class="heading">
            <h2>Sign in</h2>
            <form action="#">

                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Username or email">
                </div>

                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Password">
                </div>

                <div class="input-group input-group-lg" id="confirm_password">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Confirm Password">
                </div>


                <button type="submit" class="float">Login</button>
                <button type="submit" id="btnNewAccount" class="float">New Account</button>
            </form>
        </div>
    </div>

    <div id="bottom_bar">
        <div id="barra_inferior">
            <div id="text_bottom_bar">© 2015 Haycristhine's Head and Patience</div>
        </div>

    </div>



    </body>
</html>