<?php
//  connection to db 
include('../connect.php');



$nameErr = $emailErr = $passworderr = $urlerr = "";
if(isset($_POST['submit'])){
// get all html fields data after click on btn 

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $url = $_POST['url'];
  
 

  // check all field required and email url
  if (empty($name)) {
    $nameErr = "Name is required";
  }elseif(empty($email)) {
    $emailErr = "Email is required";
  }
  elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  }
  
  elseif(empty($password)) {
    $passworderr = "password is required";
  }
  elseif(empty($url)) {
    $urlerr = "url is required";
  }
  elseif(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
    $urlerr = "Invalid URL";
  }
  else{

    $gender = $_POST['gender'];
    $color = $_POST['color'];
   
    //  add image to databse 
    $image = $_FILES['image']["name"];
    $tempname = $_FILES['image']["tmp_name"];    
    $folder = getcwd().DIRECTORY_SEPARATOR."image/".$image;
    // echo $folder;
    // exit;

    // move_uploaded_file($tempname,$folder);
    // exit;


    // make checkbok(colors) value as string 

    $stringColor= implode(",", $color);
     
    // echo $image."<br>";
    // echo $tempname."<br>";
    //  echo $folder."<br>";
    //  exit;
    // echo $gender."<br>";
   // echo $stringColor."<br>";
  // print_r( $stringColor);

  // insrting all data in data base 
  
    $query = "INSERT INTO `userdata`(`name`, `email`, `password`, `url`, `gender`, `color`, `image`) VALUES ('$name','$email','$password','$url','$gender','$stringColor','$image')";

    // echo $query;
    // exit;
      $rsult = mysqli_query($con,$query);

    $data = move_uploaded_file($image, $folder);

//     print_r($data);
// exit;
      if($rsult ){
        // add image in a image folder 
        move_uploaded_file($tempname, $folder);

        echo "data added in databae";
      }else{
        echo "data not save";
      }


      
  }


}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
</head>
<style>
.error {
    color: red;
}

form {
    border: 1px solid black;
    padding: 10px;
}

table,
th,
td {
    border: 1px solid black;
    align-items: center;
}
</style>

<body>
    <div class="container">
        <h4 class="text center text-danger">
            7.Write a PHP code to perform all type of form handling with required db <br>
            8.Write a PHP code to perform all type of PHP Form Validation and Required Fields <br>
            9.Write a PHP code to perform PHP Forms - Validate E-mail and URL
        </h4>

        <div class="row">
            <div class="col-4">
                <form method="post" action="task_2.php" enctype="multipart/form-data">
                    <div id="form-content">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" name="name" />
                            <span style="color:red;"><?=$nameErr?></span>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="text" name="email" />
                            <span style="color:red;"><?=$emailErr?></span>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" />
                            <span style="color:red;"><?=$passworderr?></span>
                        </div>
                        <div class="form-group">
                            <label for="url">Url</label>
                            <input class="form-control" type="text" name="url" />
                            <span style="color:red;"><?=$urlerr?></span>
                        </div>

                        <div class="form-group">
                            <label> Gender:- </label>
                            <label for="gender_male">Male </label>
                            <input type="radio" id="gender_male" value="male" name="gender" />
                            <label for="gender_female">Female</label>
                            <input type="radio" value="female" name="gender" />
                        </div><br>
                        <div class="form-group">
                            <label> Select Color:- </label><br />
                            Red <input type="checkbox" name="color[]" value="Red">
                            Green <input type="checkbox" name="color[]" value="Green">
                            Blue <input type="checkbox" name="color[]" value="Blue">
                            Cyan <input type="checkbox" name="color[]" value="Cyan">
                        </div>
                        <br>
                        <div class="form-group">
                            <label> Choose Image:- </label><br />
                            <input type="file" name="image" class="form-control">
                        </div>


                        <br /><br />

                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="submit" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-8">
                <table class="text-center">
                    <th>
                        <tr>
                            <td>Image</td>
                            <td>Name</td>
                            <td>Url</td>
                            <td>Gender</td>
                            <td>Fev. Color</td>
                        </tr>
                    </th>
                    <?php
                    // fatch dta from database 
                    
                    $fatchdata = "select * from userdata";
                    $fatchresult = mysqli_query($con,$fatchdata);

                    foreach($fatchresult as $valie){
                    ?>

                    <tr>
                        <td><img src="image/<?=$valie['image'];?>" alt="" width="100" height="100"></td>
                        <td><?= $valie['name'];?></td>
                        <td><?= $valie['url'];?></td>
                        <td><?= $valie['gender'];?></td>
                        <td><?= $valie['color'];?></td>

                    </tr>
                    <?php };?>

                </table>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>