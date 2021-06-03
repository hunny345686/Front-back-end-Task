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
    <h1>11.Write a PHP code to perform PHP File Handling & Manipulating</h1>

    <div class="man_div">

        <h3>PHP readfile() Function</h3>
        <h5>The readfile() function reads a file and writes it to the output buffer.</h5>
        <span><?= readfile("./file.txt") ?></span>

        <h3>PHP File Open/Read/Close</h3>
        <h5>A better method to open files is with the fopen() function. This function gives you more options than the
            readfile() function.</h5>

        <span><?php $file = fopen('./file.txt', 'r');
             echo fread($file,filesize('./file.txt'))
        
        ?></span>

        <h3>PHP File Create/Write</h3>
        <h5>PHP Create File - fopen(), If you use fopen() on a file that does not exist, it will create it, given that
            the file is opened for writing (w) or appending</h5>

        <span> fopen('file_name','w')</span>
        <h3>PHP Write to File - fwrite()</h3>
        <h5>The fwrite() function is used to write to a file</h5>

        <span><?php 
            
            $file = fopen('./newfile.txt', 'w');
            $txt = "this file is created \n";
            fwrite($file,$txt);
            $data = fopen('./newfile.txt', 'r');
            $res=  fread($data,filesize('./newfile.txt'));
            echo $res;
            ?></span>

    </div>
</body>

</html>