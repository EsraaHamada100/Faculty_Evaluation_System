<?php
class faculty {
    private $username;
    private $id;
    private $password
  
    // Methods
    function set_username($username) {
      $this->username = $username;
    }
    function get_username() {
      return $this->username;
    }
    function set_id($id) {
        $this->id = $id;
      }
      function get_id() {
        return $this->id;
      }
      function set_password($password) {
        $this->password = $password;
      }
      function get_password() {
        return $this->password;
      }
}
?>