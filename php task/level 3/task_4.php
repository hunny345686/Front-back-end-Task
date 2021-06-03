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
    <div class="man_div">
        <h2>14.Write a PHP code to perform all possible Filters & Advanced Filters</h2>
        <h4>PHP Filters</h4>
        <p>Validating data = Determine if the data is in proper form.
        <p>Sanitizing data = Remove any illegal character from the data.</p>
        <p>PHP filters are used to validate and sanitize external input.</p>
        </p>
        <p>The filter_list() function can be used to list what the PHP filter extension offers: </p>

        <h2>Why Use Filters?</h2>
        <p>Many web applications receive external input. External input/data can be:

            User input from a form
            Cookies
            Web services data
            Server variables
            Database query results</p>

        <h4>Sanitize a String</h4>
        <p>The following example uses the filter_var() function to remove all HTML tags from a string:
            <span>
                <?php
                $str = "<h1>Prem Singh</h1>";
                $newstr = filter_var($str, FILTER_SANITIZE_STRING);
                echo $newstr;
        ?></span>
        </p>
        <h4>Sanitize and Validate an Email Addressd</h4>
        <p>filter_var() function to first remove all illegal characters from the $email
            variable, then check if it is a valid email address:

            <span><?php $email = "prem@gmail.com";

              $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            
                if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                echo("$email is a valid email address");
                } else {
                echo("$email is not a valid email address");
                }
            ?>


            </span>

        </p>
        <h4>Sanitize and Validate a URL</h4>
        <p> filter_var() function to first remove all illegal characters from a URL, then
            check if $url is a valid URL:

            <span>
                <?Php $url = "wwwd.prem.com";
                $url = filter_var($url,FILTER_SANITIZE_URL);
                if(!filter_var($url,FILTER_VALIDATE_URL)=== false){
                    echo " $url is valid url";
                }else{
                    echo " $url is not valid url";
                }
            ?>
            </span>

        </p>

    </div>

</body>

</html>