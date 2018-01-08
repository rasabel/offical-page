<?php
class db{
  var $conn;
  function connection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="company";
    // Create connection
    $conn = new mysqli($servername, $username, $password,$db);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }else{
    return $conn;
    //echo "Connected successfully";
    }
  }




  function close_connection(){
    $this->conn->close();
    echo "connection closed";
  }
}


?>
