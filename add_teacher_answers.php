<?php
require_once 'global.php';
require_once 'teacher.php';

$result = getQuestionForTeacher();
// $sql = "SELECT ID FROM co_teacher where username = ".$_COOKIE['co_teacherName']."";
while($row = mysqli_fetch_array($result) ){

    $key = $row['number'];
    if($_COOKIE[$row['number']] != "undefined"){
        $check = Teacher::submitTeacherAnswers($_SESSION['id'], $_COOKIE["co_teacherId"],$row['number'] ,$_COOKIE[$key]);
        if($check == false){
            break;
        }
        // echo $row['number']."<br>".$_COOKIE[$row['number']]."<br>" ;
    }

}
// echo '<script>alert("Your review has been successfully added");</script>' ;

// header("Location: teacher_evaluate_co_teacher.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="refresh" content="0;url=co-teacher_evaluate_teacher.php" />
    </head>

    <body>
    </body>
</html>