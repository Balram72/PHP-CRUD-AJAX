<?php
include_once "./config.php";
 $id  = $_POST['uid'];

 $q = mysqli_query($conn,"DELETE from employee WHERE id = '$id' ");
 if($q){
  echo "Employee Delete";
 }

?>