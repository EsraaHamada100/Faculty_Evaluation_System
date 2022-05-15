
<?php
    require 'global.php';

    if(isset($_POST['username'])&& isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
    //  echo $username.'<br'.$password. '<br'.'Hello';
        $string1 = '"'.$username.'"' ;
    //  echo $string1;
        $string = 'INSERT INTO teacher ( username, password, adminID) VALUES ('.$string1.','.$password.','.$_SESSION["id"].')';
        //$string = 'INSERT INTO teacher ( username, password , adminID) VALUES ("Maged", 123, 1)';
        $sql = $string ;
        
        

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
        <meta http-equiv="refresh" content="0;url=add_teacher.php" />
    </head>

    <body>
    </body>
</html>