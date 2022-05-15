<?php
require_once 'global.php';
require_once 'classes/class_student.php';

$result = getQuestionForStudentAboutTeacher();
$sql = "SELECT ID FROM teacher where username = ".$_COOKIE['st_teacherName'];
$student1 = new Student();
$student1->setId($_SESSION['id']);
while($row = mysqli_fetch_array($result) ){

    $key = $row['number'];
    if($_COOKIE[$row['number']] != "undefined"){
        $check = $student1->submitStudentAnswersAboutTeacher( $_COOKIE["st_teacherId"],$row['number'] ,$_COOKIE[$key]);
        if($check == false){
            break;
        }
        // echo $row['number']."<br>".$_COOKIE[$row['number']]."<br>" ;
    }

}
if (isset($_POST['comment'])) {

    $tirm = trim(htmlentities($_POST['comment']));
    if($tirm != ""){
    // Escape any html characters
        $student1->SendCommentsToTeacher($tirm,$_COOKIE["teacherId"]);
    }
}
// echo '<script>alert("Your review has been successfully added");</script>' ;

// header("Location: student_evaluate_teacher.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="refresh" content="0;url=student_evaluate_teacher.php" />
    </head>

    <body>
    </body>
</html>