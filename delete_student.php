<?php
<<<<<<< HEAD
 require 'global.php';
 $sql = "DELETE FROM student WHERE ID =". $_GET["ID"] ;
 mysqli_query($GLOBALS['connection'], $sql);
    header("location:manage_student.php");
   

?>
=======
require 'global.php';
?>
<?php

    // sql to delete a record
    $sql = "DELETE FROM student WHERE id='3' ";
    header("Location: manage_student.php");
?>


>>>>>>> ff9572e6ded12a7b76adc9e523d07f203f45d1d7
