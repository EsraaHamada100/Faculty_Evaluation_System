<?php 
require "global.php";
//  echo $connection ;
function findUser($tableName, $pageLink){
    $sql = "SELECT * FROM $tableName;";
    // show you some informatin about your table
    $result = mysqli_query($GLOBALS['connection'], $sql);
    if(mysqli_num_rows($result) > 0){
        // mysqli_fetch_array($result) give you the data row by row
        while($row = mysqli_fetch_array($result)){
            if($row['username'] == $_POST["userName"] && $row['password'] == $_POST["password"]){
                // navigate to this page
                header("Location: $pageLink");
                // start session
                session_start();
                $_SESSION['id'] = $row['ID'];
                $_SESSION['userName'] = $row['username'] ;
                $_SESSION['type'] = $tableName ;
                $_SESSION['login_error'] = 0;
                exit();
            }
        }
    }
}
function userNotFound(){
    $_SESSION['login_error'] = 1;
    header("Location: login.php");
}
findUser('admin', 'index.php');
findUser('teacher','teacher_dashboard.php');
findUser('co_teacher', 'co-teacher_dashboard.php');
findUser('student', 'student.php');
userNotFound();
// echo "<script>alert('Make sure that you entered a correct username and password')</script>";

// echo $_POST['userName'];
// echo $_POST['password'];
