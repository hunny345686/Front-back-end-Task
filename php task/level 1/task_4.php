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
    <h1>4.Write a php code to perform all type of PHP Conditional Statements & Operators</h1>

    <div class="main_div">
        <h2>PHP Operators</h2>
        <ol>
            <li> Arithmetic operators (+,-,*,/,%)</li>
            <p> 5 + 8 = <span><?= 5 + 8?></span></p>
            <p> 8 - 6 = <span><?= 8 - 6?></span></p>
            <li> Assignment operators(=,+=,-=,*=,/=,%=)</li>
            <p> $x= 8, = <span><?php $x= 8; echo $x?></span></p>
            <li> Comparison operators (==,===,!=,<,>)</li>
            <p> $x= 8,$y = 8. outPut- <span><?php $x= 8;$y = 8; echo $x == $y;?></span>. 1 = true & 0 = False</p>
            <li> Increment/Decrement operators (++,--)</li>
            <p> $x= 5; $y = 5; echo $x++; echo ++$y;. outPut-
                <span><?php $x= 5; $y = 5; echo $x++; echo"<br>"; echo ++$y;?></span>
            </p>
            <li> Logical operators (&&,||,!)</li>
            <p>$x =6 ,$y=8.. $x == 6 && $y==8. both should be true Output-
                <span>
                    <?php $x =6; $y=8;
                    
                    if($x == 6 && $y==8)
                    {
                        echo "both condition are true";
                    }
                    ?>
                </span>
            </p>
        </ol>

        <h2>PHP Conditional Statements</h2>
        <p>The if else Statement if(condition) {code if condition true} Else{ if condition false}

            <span>
                <?php
        $name = "prem singh";
         if ($name == "prem singh"){
             echo "Name is ". $name;
         }else{
             echo $name." is the right name";
         }
        ?>
            </span>
        </p>

        <p>PHP switch Statement $fruits = "banana"; switch($fruits){case:"apple":echo "fruits is apple";break;
            case:"banana":echo "fruits is banana";break;
            default:echo "no fruit"} output-
            <span><?php $fruits = "banana"; switch($fruits){case "apple": 
            echo "fruits is apple";break;
            case "banana": 
            echo "fruits is banana";break;
            default:echo "no fruit";} ?></span>
        </p>

    </div>
</body>

</html>