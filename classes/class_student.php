<?php  
require_once 'user.php';
class Student extends User {

    function numberOfWrittenComments(){
        $sql = "SELECT count(*) AS total_comments FROM(
            SELECT * FROM comment_to_teacher
            WHERE studentID = ".$this->getId()."
            GROUP BY teacherID
            UNION
            SELECT * FROM comment_to_co_teacher
            WHERE studentID = ".$this->getId()."
            GROUP BY co_teacherID) as t";
            $result = mysqli_query($GLOBALS['connection'], $sql);
            return $result;
    }   

    function numberOfFacultyMembersEvaluated(){
        $sql = "SELECT count(*) AS faculty_member_evaluated FROM(
            SELECT * FROM student_answer_teacher
            WHERE studentID = ".$this->getId()."
            GROUP BY teacherID
            UNION
            SELECT * FROM student_answer_co_teacher
            WHERE studentID = ".$this->getId()."
            GROUP BY co_teacherID) as t";
            $result = mysqli_query($GLOBALS['connection'], $sql);
            return $result;
    }

    function answerQuestionsAboutCo_teacher($co_teacherID, $question_number, $answer){
        $sql = 
        "INSERT INTO student_answer_co_teacher
        (studentID, co_teacherID, question_number, answer)
        VALUES(".$_SESSION['id'].", ".$co_teacherID.", ".$question_number.", ".$answer.")";
        $result = mysqli_query($GLOBALS['connection'], $sql);
        return $result;
    }

    function answerQuestionsAboutTeacher($teacherID, $question_number, $answer){
        $sql = 
        "INSERT INTO student_answer_co_teacher
        (studentID, teacherID,  question_number, answer)
        VALUES(".$_SESSION['id'].", ".$teacherID.", ".$question_number.", ".$answer.")";
        $result = mysqli_query($GLOBALS['connection'], $sql);
        return $result;
    }
    function commentToTeasher($teacherID, $content){
        $sql = 
        "INSERT INTO comment_to_teasher
        (studentID, teacherID, content)
        VALUES(".$_SESSION['id'].", ".$teacherID.", ".$content.")";
        $result = mysqli_query($GLOBALS['connection'], $sql);
        return $result;
    }
    function commentToCoTeasher($co_teacherID, $content){
        $sql = 
        "INSERT INTO comment_to_co_teasher
        (studentID,co_teacherID, content)
        VALUES(".$_SESSION['id'].", ".$co_teacherID.", ".$content.")";
        $result = mysqli_query($GLOBALS['connection'], $sql);
        return $result;
    }
    function submitStudentAnswersAboutTeacher($teacherId, $questionNumber, $answer){
        $sql = "INSERT INTO student_answer_teacher(studentID, teacherID,question_number, answer
        )VALUES(".$this->getId().",".$teacherId.", ".$questionNumber.", ".$answer.");";
        mysqli_query($GLOBALS['connection'], $sql);
    }

    function submitStudentAnswersAboutCo_teacher($co_teacherId, $questionNumber, $answer){
        $sql = "INSERT INTO student_answer_co_teacher(studentID, co_teacherID,question_number, answer
        )VALUES(".$this->getId().",".$co_teacherId.", ".$questionNumber.", ".$answer.");";
        mysqli_query($GLOBALS['connection'], $sql);
    }

    function SendCommentsToTeacher($content, $teacherId){
        $sql = 'INSERT INTO comment_to_teacher(content, studentID, teacherID)VALUES("'.$content.'",'.$this->getId().','.$teacherId.');';
        mysqli_query($GLOBALS['connection'], $sql);
    }
    function SendCommentsToCo_teacher($content, $co_teacherId){
        $sql = 'INSERT INTO comment_to_co_teacher(content, studentID, co_teacherID)VALUES("'.$content.'",'.$this->getId().','.$co_teacherId.');';
        mysqli_query($GLOBALS['connection'], $sql);
    }
}

?>