<?php
require_once 'user.php';
require_once 'faculty_member.php';

class Teacher extends User implements FacultyMember {

    function viewUsersRating(){

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

    function viewStudentsComments(){

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
    function answerQuestionsAboutCo_teacher($co_teacherID, $question_number, $answer){
        $sql = 
        "INSERT INTO teacher_answer_co_teacher
        (teacherID, co_teacherID, question_number, answer)
        VALUES(".$_SESSION['id'].", ".$co_teacherID.", ".$question_number.", ".$answer.")";
        $result = mysqli_query($GLOBALS['connection'], $sql);
        return $result;
    }
    static function submitTeacherAnswers($teacherId, $co_teacherId, $questionNumber, $answer){

        $sql = "INSERT INTO teacher_answer_co_teacher(teacherID,co_teacherID,question_number, answer
        )VALUES(".$teacherId.",".$co_teacherId.", ".$questionNumber.", ".$answer.");";
        mysqli_query($GLOBALS['connection'], $sql);

    }


}

?>