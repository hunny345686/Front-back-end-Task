<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>
<style>
.main_div {
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
    <h1>10.Write a PHP code to perform PHP Date and Time </h1>
    <div class="main_div">
        <h4>The PHP Date() Function</h4>
        <h5>The PHP date() function formats a timestamp to a more readable date and time.</h5>
        <p>
            get today date. date(y/m/d) output-: <span><?=date('y/m/d');?></span>
        </p>
        <p>
            get today date with day. date('y/m/d'), date("l") output-:
            <span><?=date('y-m-d'); echo " ".date('l')?></span>
        </p>

        <h3>Get Time from Date();</h3>

        <span>add indian date & time zone date_default_timezone_set('Asia/Kolkata')</span>
        <?php date_default_timezone_set('Asia/Kolkata');?>


        <ul>
            <li> H - 24-hour format of an hour (00 to 23)</li>
            <li>h - 12-hour format of an hour with leading zeros (01 to 12)</li>
            <li> i - Minutes with leading zeros (00 to 59)</li>
            <li> s - Seconds with leading zeros (00 to 59)</li>
            <li> a - Lowercase Ante meridiem and Post meridiem (am or pm)</li>

        </ul>

        <p>
            get current time. date('h:i:sa') output-:
            <span><?=date('h:i:sa');?></span>
        </p>

        <h3>Create a Date With mktime()</h3>
        <p>Syntax:- <span>mktime(hour, minute, second, month, day, year)</span></p>
        <p>$a = mktime(2,76,45,5,23,2021); echo date("y-m-d h:i:sa",$a) & Output-:
            <span><?php $a = mktime(2,76,45,5,23,2021); echo date("y-m-d h:i:sa",$a);?></span>
        </p>


    </div>
</body>

</html>