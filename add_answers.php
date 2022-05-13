<?php
require_once 'global.php';
// $result = getQuestionForTeacher();
// $answers = array();
// while($row = mysqli_fetch_array($result) ){

//     echo $_COOKIE["'".$row['number']."'"].'<br>';
// }
echo "<pre>";
print_r($_SESSION['answers']);
echo "</pre>";
?>