<?php
 require 'global.php';


     if(isset($_POST['username'])&& isset($_POST['password'])){
         $username = $_POST['username'];
         $password = $_POST['password'];
         $string1 = '"'.$username.'"' ;
         $string = 'INSERT INTO co_teacher ( username, password, adminID) VALUES ('.$string1.','.$password.','.$_SESSION["id"].')';
         // $string = 'INSERT INTO co_teacher ( username, password , adminID) VALUES ("dai", 123, 1)';
         $sql = $string ;
         mysqli_query($GLOBALS['connection'], $sql);
          
         try {
            mysqli_query($GLOBALS['connection'], $sql);
            echo "<script>
            alert('Added Successfully');
            </script>";
        } catch (mysqli_sql_exception $e) {
            echo "<script>
            alert('This name is duplicated');
            </script>";
        }
        
    }
        
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="refresh" content="0;url=add_co-teacher.php" />
    </head>

    <body>
    </body>
</html>