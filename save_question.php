<?php 
require_once 'global.php';
require_once 'classes/class_question.php';
$content=$_POST["content"];
$category_num = $_SESSION["category_num"];

$save = new class_question();
$save->add_question($content,$category_num);

header("location:add_questionaire.php");
?>