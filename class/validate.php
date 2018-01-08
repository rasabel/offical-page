<?php
require "insert_db.php";
class validate
{

  function __construct()
  {

  }

  function check_form(){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
      $net=array();
      foreach ($_POST as $key => $value) {
        if(empty($value)){
          echo "please fill the form corectly";
          exit();
        }else{
          $data_a=validate::data_analyzer($value);
          $net[$key]=$data_a;
        }
      }
      insert_db::insert_to_db($net);
      //header("Location: /myweb/class/insert_db.php");
    }
  }

  public function data_analyzer($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
  }
}

validate::check_form();





?>
