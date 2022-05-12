<?php
require_once 'global.php';
class Admin extends User{

    function addStudent($studentName , $studentPassword){
        $string1 = '"'.$studentName.'"' ;
        $string = 'INSERT INTO student ( username, password, adminID) VALUES ('.$string1.','.$studentPassword.','.$_SESSION["id"].')';
       //  $string = 'INSERT INTO student ( username, password , adminID) VALUES ("Hany", 123, 1)';
        $sql = $string ;
        mysqli_query($GLOBALS['connection'], $sql);
    }

    function addteacher($teacherName , $teacherPassword){
        $string1 = '"'.$teacherName.'"' ;
        $string = 'INSERT INTO teacher ( username, password, adminID) VALUES ('.$string1.','.$teacherPassword.','.$_SESSION["id"].')';
       //  $string = 'INSERT INTO teacher ( username, password , adminID) VALUES ("Hany", 123, 1)';
        $sql = $string ;
        mysqli_query($GLOBALS['connection'], $sql);
    }

    function addCo_teacher($co_teacherName , $co_teacherPassword){
        $string1 = '"'.$co_teacherName.'"' ;
        $string = 'INSERT INTO co_teacher ( username, password, adminID) VALUES ('.$string1.','.$co_teacherPassword.','.$_SESSION["id"].')';
       //  $string = 'INSERT INTO co_teacher ( username, password , adminID) VALUES ("Hany", 123, 1)';
        $sql = $string ;
        mysqli_query($GLOBALS['connection'], $sql);
    }

    function deleteStudent($studenId){
        $sql = "DELETE FROM student WHERE ID =".$studentId ;
        mysqli_query($GLOBALS['connection'], $sql);
    }

    function deleteTeacher($teacherId){
        $sql = "DELETE FROM teacher WHERE ID =".$teacherId ;
        mysqli_query($GLOBALS['connection'], $sql);
    }

    function deleteCo_teacher($co_teacherId){
        $sql = "DELETE FROM co_teacher WHERE ID =".$co_teacherId ;
        mysqli_query($GLOBALS['connection'], $sql);
    }

    function addQuestion($content, $categoryNum){
        $string1 = '"'.$content.'"' ;
        $string = 'INSERT INTO question ( content, category_num, adminID) VALUES ('.$string1.','.$categoryNum.','.$_SESSION["id"].')';
        $sql = $string ;
        mysqli_query($GLOBALS['connection'], $sql);
    }

    function adminAnswerTeacher($teacherId, $questionNum, $answer){
        $string = 'INSERT INTO admin_answer_teacher ( adminID, teacherID, question_number, answer) VALUES ('.$_SESSION["id"].','.$teacherId.','.$questionNum.','.$answer.')';
        $sql = $string ;
        mysqli_query($GLOBALS['connection'], $sql);
    }
    function adminAnswerCo_teacher($co_teacherId, $questionNum, $answer){
        $string = 'INSERT INTO admin_answer_co_teacher ( adminID, co_teacherID, question_number, answer) VALUES ('.$_SESSION["id"].','.$co_teacherId.','.$questionNum.','.$answer.')';
        $sql = $string ;
        mysqli_query($GLOBALS['connection'], $sql);
    }
    static function getTeachersRating(){
        $sql = 
        "SELECT teacherID, SUM(num_of_answers) AS num_of_answers, round(SUM(rating) /COUNT(*), 1) AS total_rating FROM(
            SELECT teacherID, count(*) AS num_of_answers, round(SUM(answer) /COUNT(*), 1)AS rating FROM admin_answer_teacher
            GROUP BY teacherID
            UNION
            SELECT teacherID, count(*) AS num_of_answers ,round(SUM(answer) /COUNT(*), 1)AS rating FROM co_teacher_answer_teacher
            GROUP BY teacherID
            UNION 
            SELECT teacherID, count(*) AS num_of_answers , round(SUM(answer) /COUNT(*), 1)AS rating FROM student_answer_teacher
            GROUP BY teacherID) AS data 
            GROUP BY data.teacherID";
            $result = mysqli_query($GLOBALS['connection'], $sql);
            return $result;
    }

    static function getCo_teachersRating(){
        $sql = 
        "SELECT co_teacherID, SUM(num_of_answers) AS num_of_answers, round(SUM(rating) /COUNT(*), 1) AS total_rating FROM(
            SELECT co_teacherID, count(*) AS num_of_answers, round(SUM(answer) /COUNT(*), 1)AS rating FROM admin_answer_co_teacher
            GROUP BY co_teacherID
            UNION
            SELECT co_teacherID, count(*) AS num_of_answers ,round(SUM(answer) /COUNT(*), 1)AS rating FROM teacher_answer_co_teacher
            GROUP BY co_teacherID
            UNION 
            SELECT co_teacherID, count(*) AS num_of_answers , round(SUM(answer) /COUNT(*), 1)AS rating FROM student_answer_co_teacher
            GROUP BY co_teacherID) AS data 
            GROUP BY data.co_teacherID";
            $result = mysqli_query($GLOBALS['connection'], $sql);
            return $result;
    }

}

?>