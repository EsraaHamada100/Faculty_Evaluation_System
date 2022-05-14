<?php
require_once 'global.php';
require_once 'teacher.php';

$result = getQuestionForTeacher();
$sql = "SELECT ID FROM co_teacher where name = ".$_COOKIE['co_teacherName']."";
while($row = mysqli_fetch_array($result) ){

    $key = $row['number'];
    if($_COOKIE[$row['number']] != "undefined"){
        Teacher::submitTeacherAnswers($_SESSION['id'], $_COOKIE["co_teacherId"],$row['number'] ,$_COOKIE[$key]);
        // echo $row['number']."<br>".$_COOKIE[$row['number']]."<br>" ;
    }

}
echo '<script>alert("Your review has been successfully added");</script>' ;

header("Location: teacher_evaluate_co_teacher.php");
?>