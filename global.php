
<?php
session_start();
// database variables
$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "automated_teacher_evaluation";
$connection = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
$res = mysqli_query($connection ,"select * from student ");
$res_1 = mysqli_query($connection ,"select * from teacher ");
$res_2 = mysqli_query($connection ,"select * from co_teacher ");
$res_3 = mysqli_query($connection ,"SELECT * FROM `question` WHERE category_num =1 ");
$res_4 = mysqli_query($connection ,"SELECT * FROM `question` WHERE category_num =2");
$res_5 = mysqli_query($connection ,"SELECT * FROM `question` WHERE category_num =3");
$res_6 = mysqli_query($connection ,"SELECT * FROM `question` WHERE category_num =4");
$res_7 = mysqli_query($connection ,"SELECT * FROM `question` WHERE category_num =5");
$res_8 = mysqli_query($connection ,"SELECT * FROM `question` WHERE category_num =6");



function getTeacherRatingData(){
    $stringforSql = 
    "SELECT  content, COUNT(*) as num_of_answers,round(SUM(student_answer_teacher.answer) /COUNT(*), 1)AS rating
    FROM question
    JOIN student_answer_teacher
    ON question.number = student_answer_teacher.question_number
    WHERE student_answer_teacher.teacherID = ".$_SESSION['id']."
    GROUP BY question.number
    
    UNION
    SELECT content, COUNT(*) as num_of_answers,round(SUM(admin_answer_teacher.answer) /COUNT(*), 1)AS rating
    FROM question
    JOIN admin_answer_teacher
    ON question.number = admin_answer_teacher.question_number
    WHERE admin_answer_teacher.teacherID = ".$_SESSION['id']."
    GROUP BY question.number
    
    UNION
    SELECT content, COUNT(*) as num_of_answers,round(SUM(co_teacher_answer_teacher.answer) /COUNT(*), 1)AS rating
    FROM question
    JOIN co_teacher_answer_teacher
    ON question.number = co_teacher_answer_teacher.question_number
    WHERE co_teacher_answer_teacher.teacherID = ".$_SESSION['id']."
    GROUP BY question.number;
    ";
    $sql =$stringforSql ;
    $result = mysqli_query($GLOBALS['connection'], $sql);
    return $result;
}


function getTeacherComments(){
    $stringforSql = 
    "SELECT student.username, content
    FROM comment_to_teacher
    JOIN student
    ON student.ID = comment_to_teacher.studentID
    WHERE teacherID = ".$_SESSION['id']." ;";
    $sql = $stringforSql ;
    $result = mysqli_query($GLOBALS['connection'], $sql);
    return $result;
}

function getTeacherCommentsAndRating(){
    $stringforSql = 
    "SELECT student.username, content,round(
    SUM(student_answer_teacher.answer) /COUNT(*), 1)AS rating
    FROM comment_to_teacher
    JOIN student
    ON student.ID = comment_to_teacher.studentID
    JOIN student_answer_teacher
    on comment_to_teacher.studentID = student_answer_teacher.studentID
    WHERE comment_to_teacher.teacherID = ".$_SESSION['id']."
    GROUP BY comment_to_teacher.studentID ;";
    $sql = $stringforSql ;
    $result = mysqli_query($GLOBALS['connection'], $sql);
    return $result;
}

function getQuestionForTeacher(){
    $sql = 
    "SELECT number, content
    FROM question
    WHERE category_num = 6";
    $result = mysqli_query($GLOBALS['connection'], $sql);
    return $result;

}
function co_teachersData() {
    $sql = 'SELECT ID , username FROM co_teacher' ;
    $result = mysqli_query($GLOBALS['connection'], $sql);
    return $result;
}

function teachersData() {
    $sql = 'SELECT ID , username FROM teacher' ;
    $result = mysqli_query($GLOBALS['connection'], $sql);
    return $result;
}

function getQuestionForStudentAboutTeacher(){
    $sql = 
    "SELECT number, content
    FROM question
    WHERE category_num = 1";
    $result = mysqli_query($GLOBALS['connection'], $sql);
    return $result;
}




?>