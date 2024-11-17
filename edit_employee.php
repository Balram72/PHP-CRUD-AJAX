<?php 
  include_once "./config.php";
  $id       =     $_POST["sid"];
  $name     =     $_POST["textName"];
  $email    =     $_POST["textEid"];
  $pass     =     $_POST["textPass"];
  $cnp      =     $_POST["textCmpName"];

  $q = mysqli_query($conn,"UPDATE employee SET name='$name',email='$email',password='$pass',company_name='$cnp' WHERE id = '$id'");
  $row = mysqli_affected_rows($conn);
  if($row){
    echo "Employee Update";
  }else{
    echo "Not Update";
  }


?>