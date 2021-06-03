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
    <h1>5.Write a php code to use all type of PHP Loops & Functions </h1>

    <div class="main_div">
        <h2>PHP Functions</h2>
        <p> normal function -: function test(){
            return 4 + 9;
            }
            echo test(); output :

            <span>
                <?php function test(){
            return 4 + 9;
            }
            echo test();?> </span>
        </p>
        <p>parameters function-: function test($a,$b){
            return $a + $b;
            }
            echo test(4,8); output :

            <span>
                <?php function test1($a,$b){
                   return $a + $b;
            }
            echo test1(4,8);?> </span>
        </p>

        <h2>PHP Loops</h2>
        <p>while loop - Loops through a block of code as long as the specified condition is true.
            <span><?php $count = 1; while($count <= 10) {
                echo " No.- ".$count;
                $count ++;
            }?></span>
        </p>

        <p> <b>for</b> loop is used when you know in advance how many times the script should. run output- ;
            <span><?php 
               $no = 2;
                for($table = 1; $table <=10; $table++){
                    echo $no * $table;
                    echo "  ";
                }
            ?></span>
        </p>

        <p>do while loop will always execute the block of code once, it will then check the condition, and repeat the
            loop while the specified condition is true. output-
            <span><?php
            $no = 4;
            do{
                echo $no;
                $no++;
            }while($no < 5);
            
            ?></span>
        </p>

        <p>foreach loop Loops through a block of code for each element in an array

            <span>

                <?php $alphabets = array("a","b","c","d","e","f","d","h","l");
                
                foreach($alphabets as $data) 
                {
                    echo $data." ";
                }          
                ?>
            </span>
        </p>

    </div>
</body>

</html>