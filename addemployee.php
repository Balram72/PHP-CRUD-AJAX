<?php
  include_once "./config.php";

      $name     =     $_POST["textName"];
      $email    =     $_POST["textEid"];
      $pass     =     $_POST["textPass"];
      $cnp      =     $_POST["textCmpName"];

    $q = mysqli_query($conn,"INSERT INTO employee(name, email, password, company_name) VALUES ('$name','$email','$pass','$cnp')");
    if($q){
          // Response
         echo "Add Employee";

    }

 ?>