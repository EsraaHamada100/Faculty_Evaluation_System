<?php
 require 'global.php';
 $sql = "DELETE FROM student WHERE ID =". $_GET["ID"] ;
 mysqli_query($GLOBALS['connection'], $sql);
    header("location:manage_student.php");
   

?>
