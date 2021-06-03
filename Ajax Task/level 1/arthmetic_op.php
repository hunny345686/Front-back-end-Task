<?php

//  connection to db 
$con = mysqli_connect("localhost","root","","task");



if(isset($_POST['name']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  $insert_query = "INSERT INTO `ajax_task`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";

  $insert_result = mysqli_query($con,$insert_query);

  // echo $insert_query;
  // exit;

  if($insert_result==true){
    echo "added";
  }else{
    echo "erro";
  }
}



//arthmetic opration code

if(isset($_POST['no1']))
{
$no1 =$_POST['no1'];
$no2 =$_POST['no2'];
$oprator =$_POST['oprator'];

// echo $no1."<br>";
// echo $no2."<br>";
// echo $oprator."<br>";

if($oprator ==="plus"){
echo $no1 + $no2;
}elseif($oprator ==="subs")
{
echo $no1 - $no2;
}elseif($oprator ==="mult")
{
echo $no1 * $no2;
}else{
echo $no1 / $no2;
}
}

?>