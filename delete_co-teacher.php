<?php
 require 'global.php';
 $sql = "DELETE FROM co_teacher WHERE ID =". $_GET["ID"] ;
 mysqli_query($GLOBALS['connection'], $sql);
    header("location:mange_co-teacher.php");
   

?>