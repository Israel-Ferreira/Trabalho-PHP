<?php
class DbConn {
    private $host;
    private $user;
    private $password;
  

    function __construct($database){
        $this->host = "localhost";
        $this->user = "root";
        $this->password = "";
    }

    function connect(string $database ){
        mysqli_connect($this->host,$this->user,$this->password,$database);
    }
}
?>