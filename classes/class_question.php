<?php
require_once 'global.php';
class class_question  {

 private $questionId;
 private $question;
 private $category;
 private $choices;

 public function set_questionId($questionId) {
        $this->questionId = $questionId;
      }
 public function get_questionId() {
        return $this->questionId;
      }
public function set_question($question) {
        $this->question = $question;
      }
public function get_question($question) {
        return $this->question ;
      }
public function add_question ($question,$category){
  $string1 = '"'.$question.'"' ;
  $sql = 'INSERT INTO question (category_num, content ,adminID) VALUES ('.$category.','.$string1.','.$_SESSION["id"].')';

  mysqli_query($GLOBALS['connection'], $sql);

}
function deletequestion($questionId){
  $sql = "DELETE FROM question WHERE number =".$questionId ;
  mysqli_query($GLOBALS['connection'], $sql);
}

}

?>