<?php
class db{
  var $conn;
  function connection(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $this->conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
    echo "Connected successfully";

  }

  function close_connection(){
    $this->conn->close();
    echo "connection closed";
  }
}
?>
