<?php
$con = mysqli_connect("localhost","root","","task");
// get data from database using 
$get_query = "SELECT * FROM `ajax_task`";
$get_result = mysqli_query($con,$get_query);

$table ="";

foreach($get_result as $alldata){
?>
<tr>
    <td><?=$alldata['name'];?></td>
    <td><?=$alldata['email'];?></td>
    <td><?=$alldata['password'];?></td>
    <td><a href="getdata.php?edit_id=<?= $alldata['id']?>"> Edit </a></td>
    <td><a href="getdata.php?delete_id=<?= $alldata['id']?>"> Delete </a></td>

    <?php 
  
  }

$id = $_GET['edit_id'];
echo "this id".$id;
?>