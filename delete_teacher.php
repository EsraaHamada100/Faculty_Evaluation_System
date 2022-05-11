<?php
 require 'global.php';
 $sql = "DELETE FROM teacher WHERE ID =". $_GET["ID"] ;
 mysqli_query($GLOBALS['connection'], $sql);
    header("location:manage_teacher.php");
   

?>