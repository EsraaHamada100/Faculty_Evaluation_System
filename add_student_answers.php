<?php
require_once 'global.php';
require_once 'classes/class_student.php';

$result = getQuestionForStudentAboutTeacher();
$sql = "SELECT ID FROM teacher where name = ".$_COOKIE['teacherName']."";
while($row = mysqli_fetch_array($result) ){

    $key = $row['number'];
    $student1 = new Student();
    $student1->setId($_SESSION['id']);
    if($_COOKIE[$row['number']] != "undefined"){
        $student1->submitStudentAnswersAboutTeacher( $_COOKIE["teacherId"],$row['number'] ,$_COOKIE[$key]);
        // echo $row['number']."<br>".$_COOKIE[$row['number']]."<br>" ;
    }

}
echo '<script>alert("Your review has been successfully added");</script>' ;

header("Location: student_evaluate_teacher.php");
?>