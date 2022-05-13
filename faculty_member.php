<?php
interface FacultyMember {

   function viewUsersRating();
   function viewStudentsComments();
   static function getTotalNumberOfRating();
   static function getTotalNumberOfComments();
}
?>