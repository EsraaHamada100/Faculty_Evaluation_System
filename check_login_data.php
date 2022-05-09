<?php 
require_once "global.php";
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
                exit();
            }
        }
    }
}
findUser('admin', 'index.html');
findUser('teacher','teacher.html');
findUser('co_teacher', 'co_teacher.html');
findUser('student', 'student.html');
header("Location: login.php");

// echo $_POST['userName'];
// echo $_POST['password'];
