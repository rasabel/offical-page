<?php

// $name="abel";
require("test.view.php");
include ("testClass.php");

$obj=new person();
  $obj->set_name("abel");
  echo $obj->get_name();
?>
