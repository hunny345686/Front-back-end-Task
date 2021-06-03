<?php
// Start the session

session_start();

$_SESSION["fev_color"] = array("red","green","blue");

$_SESSION["fev_animal"] = array("cat","dog","elephent");


setcookie('name','Prem Singh',time()+(24*60*60*30));






?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>
<style>
.man_div {
    margin-left: 60px
}

p {
    color: blue
}

span {
    color: red;
    font-weight: bold;
}
</style>

<body>
    <h1>13.Write a PHP code to perform all type PHP Session,Cookies and its related operations</h1>

    <h5>What is a PHP Session?</h5>
    <p>When you work with an application, you open it, do some changes, and then you close it. This is much like a
        Session. The computer knows who you are. It knows when you start the application and when you end. But on the
        internet there is one problem: the web server does not know who you are or what you do, because the HTTP address
        doesn't maintain state.
        Session variables solve this problem by storing user information to be used across multiple pages (e.g.
        username, favorite color, etc). By default, session variables last until the user closes the browser.

        So; Session variables hold information about one single user, and are available to all pages in one application.
    </p>

    <h5>Start a PHP Session</h5>
    <p>A session is started with the session_start() function.
        Session variables are set with the PHP global variable: $_SESSION.</p>

    <div class="man_div">
        <h3> $_SESSION["fev_animal"] = array("cat","dog","elephent"); You Fev Animals Store in session outPut:-
            <span><?php print_r($_SESSION["fev_animal"]);?></span>
        </h3>

        <h2>Destroy a PHP Session</h2>
        <p>To remove all global session variables and destroy the session, use session_unset() and session_destroy():
        </p>
        <p>for remove all session variables use session_unset(); function</p>
        <p>for remove all session use session_destroy(); function</p>
        <?php  session_destroy(); ?>


        <h2>What is a Cookie?</h2>
        <p>A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's
            computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP,
            you can both create and retrieve cookie values.</p>

        <h3>Syntax</h3>
        <p>setcookie(name, value, expire, path, domain, secure, httponly);</p>
        <h3>setcookie('name','Prem Singh',time()+(24*60*60*30)); your name is store in cookie for 30 day :-
            <span><?php print_r($_COOKIE['name']) ;?></span>
        </h3>
    </div>
</body>

</html>