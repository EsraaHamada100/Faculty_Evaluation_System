<?php 
abstract class User {
    private $id;
    private $name;
    private $password;
    function login($name , $page) {
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
                    exit();
                }
            }
        }
    } 
    function getId(){
        return $id;
    }
    function setId($id){
      $this->id = $id;
    }
    function getName(){
        return $name;
    }
    function setName($name){
        $this->name = $name;
    }

    function getPassword(){
        return $password;
    }
    function setPassword($password){
        $this->password = $password;
    }


    
}

?>