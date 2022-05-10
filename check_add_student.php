<?php
 require 'glabal.php';

//  mysqli_query($GLOBALS['connection'], $sql);
//      $ID = "";
//      $username ="";
//      $password =""; 
     
     
     if(isset($_POST['username'])&& isset($_POST['password'])){
         $username = $_POST['username'];
         $password = $_POST['Password'];
         $string = 'INSERT INTO student(username, password, adminID) VALUES ('.$username.$password.','.$_SESSION["id"].')';
         $sql = $string ;
         mysqli_query($GLOBALS['connection'], $sql);
          
     }
    
 
      
      header("location:add_student.php");
 ?>



