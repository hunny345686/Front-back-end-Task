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
    <h1>2.Write a php code to use all type of PHP String Functions & Arrays</h1>

    <div class="man_div">
        <h2>PHP String Functions</h2>
        <p> return Length of a String strlen("prem singh") output :- <span><?= strlen("Prem Singh")?></span></p>
        <p> return Count Words in a String str_word_count("prem singh") output :-
            <span><?= str_word_count("Prem Singh")?></span>
        </p>
        <p> Reverse a String strrev("Prem Singh") output :-
            <span><?= strrev("Prem Singh")?></span>
        </p>

        <p> Search For a Text Within a String strpos("prem singh", "gh") output :-
            <span><?= strpos("prem singh","gh");?></span>
        </p>
        <p> Replace Text Within a String str_replacestr_replace("singh","Singh rawat","prem singh" ) output :-
            <span><?= str_replace("singh","Singh rawat","prem singh" );?></span>
        </p>
        <p>there is a lot more string function For this <a href="https://www.w3schools.com/php/php_ref_string.asp">Click
                on this Link</a></p>

        <h2>PHP Array Functions</h2>
        <p> Split an array into chunks of two array_chunk(array("apple", "banana","mango","graps"))
            <span><?php $friuts = array("apple", "banana","mango","graps");
                print_r(array_chunk($friuts,2));
            ?></span>
        </p>

        <p> Create an array by using the elements from one "keys" array and one "values" array array_combine()
            <span><?php $friuts = array("apple", "banana","mango","graps");
                        $veg = array("tometo","poteto","onieon","test");
                print_r(array_combine($veg,$friuts))
            ?></span>
        </p>

        <p> Insert new value to the end of an array "values" array_push()
            <span><?php $friuts = array("apple", "banana","mango","graps");
                        $veg = array("tometo","poteto","onieon","test");
                array_push($veg,$friuts);
                print_r($veg);
            ?></span>
        </p>

        <p> Return the number of elements in an array count(Array_name)
            <span><?php $friuts = array("apple", "banana","mango","graps");
                print_r(count( $friuts));
            ?></span>
        </p>
        <p>there is a lot of array function <a href="https://www.w3schools.com/php/php_ref_array.asp">Click on this
                link</a></p>
    </div>
</body>

</html>