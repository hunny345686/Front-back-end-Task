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
    <h1>3.Write a php code to perform all type of PHP Math & Number Functions</h1>

    <div class="main_div">
        <h2>PHP Numbers Function</h2>
        <p> var_dump used for check data type of value. $a = 123; var_dump($a); (2) var_dump(is_int($a)); and output:-
            <span><?php $a = 123;
              var_dump($a);
              var_dump(is_int($a));
            
         ?></span>
        </p>

        <p> to check Not A Number is_nan()and . $a = abc; var_dump($a);var_dump(is_nan($a));output:-
            <span><?php $a = 1;
              var_dump($a);
              var_dump(is_nan($a));
            
         ?></span>
        </p>

        <h2>PHP Math Function</h2>

        <p> The pi() function returns the value of echo(PI())output:-
            <span>
                <?= pi();?>
            </span>
        </p>
        <p>The abs() function returns the absolute (positive) value of a number echo( abs(-6.7)) output:-
            <span>
                <?= abs(-6.7);?>
            </span>
        </p>
        <p>The rand() function generates a random number. echo(rand()). (2)echo(rand(10, 100)); output:-
            <span>
                <?= rand();?>
                <?= rand(10, 100);?>
            </span>
        </p>

    </div>
</body>

</html>