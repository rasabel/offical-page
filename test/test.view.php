<?php


// $name=htmlspecialchars($_GET['name']);
// echo "hello {$name}";
require 'class/db_conn.php';

$db=new db();

$conn=$db->connection();

// $db->close_connection();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test php</title>
  </head>
  <body>
    <!-- <?= $name;?> -->
  </body>
</html>
