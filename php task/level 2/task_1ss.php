<?php 
// connect to database 
include('../connect.php');

// get data from form in html and insert in database start

if (isset($_POST["submit"]))
  {
    //   set data in vaarial 
   $name = $_POST["name"];
   $password = $_POST["password"];
   //    query to insert data in database 

    $query = "insert into user(email, password) values('$name','$password')";

        $result = mysqli_query($con, $query);
        if( $result){
            echo "User Added";
        }else{
            echo "Invalid User";
        }   
 }

//  get data from form in html and insert in database end


// update data in data base start
$sigledata=[];
if(!empty($_GET['up_id']) ){

  $update_id = $_GET['up_id'];
   //echo $update_id;
  $get_data = "Select * from user where id ='$update_id'";
  $sigledata = mysqli_query($con, $get_data);
 
}



if(isset($_POST['up_submit'])){

    $up_name = $_POST["up_name"];
    $up_password = $_POST["up_password"];
    $up_id= $_POST["up_id"];

    //    query to insert data in database 
 
     $up_query = "update user set email='$up_name', password='$up_password' where id='$up_id'";
    // print_r($up_query);
 
         $up_result = mysqli_query($con, $up_query);
         if( $up_result){
             echo "Updated User";
         }else{
             echo "not updated User";
         }   

}
// update data in data base End

//  <!-- delete data from database start  -->
    if(!empty($_GET['del_id'])){
        $del_id = $_GET['del_id'];

    $delete_query = "delete from user where id = '$del_id'";
     mysqli_query($con, $delete_query);
    }


//  <!-- delete data from database end  -->





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
    <h1>6.Write a php code to perform all CRUD opertations with required db </h1>

    <!-- adding data in databse in frontend start -->

    <div class="main_div">
        <form action="task_1.php" method="post">
            <label for="email">Email</label>
            <input autocomplete="off" type="text" name="name">
            <label for="email">password</label>
            <input type="password" autocomplete="off" name="password">
            <input type="submit" name="submit" value="Submit">
        </form>
        <!-- adding data in databse in frontend  End -->


        <!-- updating data in databse in frontend start -->

        <?php foreach($sigledata as $sigle)
          {?>
        <form action="task_1.php" method="post">
            <input type="hidden" name="up_id" value="<?=$sigle['id'];?>">
            <label for="email">Email</label>
            <input autocomplete="off" type="text" value="<?=$sigle['email'];?>" name="up_name">
            <label for="email">password</label>
            <input type="password" autocomplete="off" value="<?=$sigle['password'];?>" name="up_password">
            <input type="submit" name="up_submit" value="Submit">
        </form>
        <?php };?>
        <!-- updating data in databse in frontend  End -->





        <!-- get data in fronend start  -->
        <H2>Get Data</H2>
        <table>
            <th>
                <tr>
                    <td>No.</td>
                    <td>Name</td>
                    <td>Password</td>
                    <td>Action</td>
                </tr>
            </th>
            <?php 

            //  get data from database 

            $fatchdata = "Select * from user";
             $getdata = mysqli_query($con, $fatchdata);

            foreach($getdata as $row)
          {?>
            <tr>
                <td><?= $row['id']?></td>
                <td><?= $row['email']?></td>
                <td><?= $row['password']?></td>
                <td><a href="task_1.php?up_id=<?= $row['id']?>">edit</a></td>
                <td> <a href="task_1.php?del_id=<?= $row['id']?>"
                        onclick="confirm('Are you sure to delete this')">Delete</a></td>
            </tr>
            <?php }?>
        </table>

        <!-- get data in fronend End  -->
    </div>
</body>

</html>