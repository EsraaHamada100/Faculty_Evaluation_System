<?php
require_once 'global.php';
require_once 'classes/class_student.php';

$student1 = new Student();
$student1->setId($_SESSION['id']);


$result = getQuestionForStudentAboutCo_teacher();
while($row = mysqli_fetch_array($result) ){

    $key = $row['number'];
    if($_COOKIE[$row['number']] != "undefined"){
        $student1->submitStudentAnswersAboutCo_teacher( $_COOKIE["co_teacherId"],$row['number'] ,$_COOKIE[$key]);
        // echo $row['number']."<br>".$_COOKIE[$row['number']]."<br>" ;
    }

}
if (isset($_POST['comment'])) {

    $tirm = trim(htmlentities($_POST['comment']));
    if($tirm != ""){
    // Escape any html characters
    $student1->SendCommentsToCo_teacher($tirm,$_COOKIE["co_teacherId"]);
    }
}
echo '<script>alert("Your review has been successfully added");</script>' ;

header("Location: student_evaluate_co_teacher.php");
?>