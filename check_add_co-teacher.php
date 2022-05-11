<?php
 require 'global.php';

//  mysqli_query($GLOBALS['connection'], $sql);
//      $ID = "";
//      $username ="";
//      $password =""; 
     
     
     if(isset($_POST['username'])&& isset($_POST['password'])){
         $username = $_POST['username'];
         $password = $_POST['password'];
         echo $username.'<br'.$password. '<br'.'Hello';
         $string1 = '"'.$username.'"' ;
         echo $string1;
         $string = 'INSERT INTO co_teacher ( username, password, adminID) VALUES ('.$string1.','.$password.','.$_SESSION["id"].')';
         // $string = 'INSERT INTO co_teacher ( username, password , adminID) VALUES ("dai", 123, 1)';
         $sql = $string ;
         mysqli_query($GLOBALS['connection'], $sql);
          
     }
    
 
      
      header("location:add_student.php");
 ?>