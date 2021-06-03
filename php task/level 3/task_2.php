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
    <h1>12.Write a PHP code to perform all types of PHP File Upload with possible conditional statements</h1>

    <div class="man_div">
        <h3>Configure The "php.ini" File</h3>
        <h3><span> in php.inp file code should be:- file_uploads = On</span></h3>
        <h2>Rules for uploading file</h2>
        <ul>
            <li>Make sure that the form uses method="post" </li>
            <li>The form also needs the following attribute: enctype="multipart/form-data". It specifies which
                content-type to use when submitting the form </li>
            <li>The type="file" attribute of the input tag shows the input field as a file-select control, with a
                "Browse" button next to the input control</li>
        </ul>


        <form action="task_2.php" method="post" enctype="multipart/form-data">
            <input type="file" name="upload">
            <input type="submit" value="Upload Img" name="submit">
        </form>
    </div>
</body>

</html>

<?php

if(isset($_POST['submit'])){

  
  $target_file = getcwd().DIRECTORY_SEPARATOR."upload_folder/".$_FILES['upload']['name'];
   $imageFileType = strtolower(pathinfo($_FILES["upload"]["name"],PATHINFO_EXTENSION));

//     echo $target_file;
//     //print_r($_FILES['upload']);
//     exit;
//  // echo $_FILES['upload']['tmp_name']."<br>";
//   echo $_FILES['tmp_name']."<br>";
 

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
  } else if ($_FILES["upload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    
  }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
   
  }else{
   if( (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file))){
       echo "added";
   }else
   echo "error";
  }


}

?>