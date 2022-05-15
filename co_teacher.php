<?php
require_once 'global.php';
require_once 'user.php';
require_once 'faculty_member.php';

class Co_teacher implements FacultyMember{

    function viewUsersRating(){

        $stringforSql = 
        "SELECT  content, COUNT(*) as num_of_answers,round(SUM(student_answer_co_teacher.answer) /COUNT(*), 1)AS rating
        FROM question
        JOIN student_answer_co_teacher
        ON question.number = student_answer_co_teacher.question_number
        WHERE student_answer_co_teacher.co_teacherID = ".$_SESSION['id']."
        GROUP BY question.number
        
        UNION
        SELECT content, COUNT(*) as num_of_answers,round(SUM(admin_answer_co_teacher.answer) /COUNT(*), 1)AS rating
        FROM question
        JOIN admin_answer_co_teacher
        ON question.number = admin_answer_co_teacher.question_number
        WHERE admin_answer_co_teacher.co_teacherID = ".$_SESSION['id']."
        GROUP BY question.number
        
        UNION
        SELECT content, COUNT(*) as num_of_answers,round(SUM(teacher_answer_co_teacher.answer) /COUNT(*), 1)AS rating
        FROM question
        JOIN teacher_answer_co_teacher
        ON question.number = teacher_answer_co_teacher.question_number
        WHERE teacher_answer_co_teacher.co_teacherID = ".$_SESSION['id']."
        GROUP BY question.number";
        $sql =$stringforSql ;
        $result = mysqli_query($GLOBALS['connection'], $sql);
        return $result;

    }

    function viewStudentsComments(){

        $stringforSql = 
        "SELECT student.username, content
        FROM comment_to_co_teacher
        JOIN student
        ON student.ID = comment_to_co_teacher.studentID
        WHERE co_teacherID = ".$_SESSION['id']." ;";
        $sql = $stringforSql ;
        $result = mysqli_query($GLOBALS['connection'], $sql);
        return $result;

    }
    function answerQuestionsAboutTeacher($teacherID, $question_number, $answer){
        $sql = 
        "INSERT INTO teacher_answer_co_teacher
        (co_teacherID, teacherID,  question_number, answer)
        VALUES(".$_SESSION['id'].", ".$teacherID.", ".$question_number.", ".$answer.")";
        $result = mysqli_query($GLOBALS['connection'], $sql);
        return $result;
    }

    static function getTotalNumberOfRating(){
        
        $sql = 
        "SELECT SUM(number_of_ratings) AS total_rating FROM(
           SELECT co_teacherID, count(*) AS number_of_ratings
           FROM student_answer_co_teacher
           WHERE co_teacherID = ".$_SESSION['id']."
           UNION ALL
           SELECT co_teacherID, COUNT(*) AS number_of_ratings
           FROM teacher_answer_co_teacher
           WHERE co_teacherID = ".$_SESSION['id']."
           UNION ALL
           SELECT co_teacherID, COUNT(*) AS number_of_ratings
           FROM admin_answer_co_teacher
           WHERE co_teacherID = ".$_SESSION['id']."
       ) as t" ;

       $result = mysqli_query($GLOBALS['connection'], $sql);
       return $result;

    }
    static function getTotalNumberOfComments(){
        $sql = "SELECT count(*) AS total_comments
        FROM comment_to_co_teacher
        WHERE co_teacherID = ".$_SESSION['id'];
        $result = mysqli_query($GLOBALS['connection'], $sql);
        return $result;
        
    }

    static function submitCo_teacherAnswers( $co_teacherId, $teacherId, $questionNumber, $answer){

        $sql = "INSERT INTO co_teacher_answer_teacher(co_teacherID,teacherID,question_number, answer
        )VALUES(".$co_teacherId.",".$teacherId.", ".$questionNumber.", ".$answer.");";
        mysqli_query($GLOBALS['connection'], $sql);

    }
}
?>