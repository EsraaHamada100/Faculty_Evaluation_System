<?php
 require 'global.php';
//  "DELETE FROM question WHERE content =". $_GET["content"] 

$sql = "DELETE FROM question WHERE number =". $_GET["number"]  ;

//  $sql = "DELETE FROM question WHERE content ='Does your co-teacher explain the practical parts of the subject clearly ?'" ;
 mysqli_query($GLOBALS['connection'], $sql);

    header("location:add_questionaire.php");
   

?>