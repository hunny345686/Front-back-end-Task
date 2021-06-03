<?php 

function my_func($item){
    return strlen($item);
}

$data =["data1","data2","datadaat"];

$lengths = array_map("my_func", $data);



?>

<?php
function exclaim($str) {
  return $str . "! ";
}

function ask($str) {
  return $str . "? ";
}

function printFormatted($str, $format) {
  echo $format($str);
}

// Pass "exclaim" and "ask" as callback functions to printFormatted()
printFormatted("Hello world", "exclaim");
printFormatted("Hello world", "ask");
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
    <div class="man_div">
        <h2>15.Write a PHP code to perform all possible PHP Callback Functions and JSON operations</h2>

        <h3>Callback Functions</h3>
        <p>A callback function (often referred to as just "callback") is a function which is passed as an argument into
            another function. <br>
            Any existing function can be used as a callback function. To use a function as a callback function, pass a
            string containing the name of the function as the argument of another function:

        </p>
        <p> using coll back fuction result : <span><?php print_r($lengths);?></span></p>

        <h3>What is JSON?</h3>
        <p>Since the JSON format is a text-based format, it can easily be sent to and from a server, and used as a data
            format by any programming language.
        </p>
        <h4>PHP - json_encode()</h4>
        <p>The json_encode() function is used to encode a value to JSON format.</p>
        <span><?php $data = ['one' =>"data",'two' =>"data2",'three' =>"data3",'four' => "data5"];
            $result =json_encode($data);
            echo $result;
        ?></span>

        <h4>PHP - json_decode()</h4>
        <p>The json_decode() function is used to decode a JSON object into a PHP object or an associative array.</p>
        <span><?php var_dump(json_decode($result,true));?></span>

    </div>

</body>

</html>