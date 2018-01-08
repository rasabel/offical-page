<?php
require "db_conn.php";
class insert_db extends db{

  function insert_to_db($net){
    // print_r($net);
    $table='';
    if(sizeof($net)==1){
        $table="notification_table";
      }else{
        $table="contact_table";
      }
    $key=array_keys($net);
    $value=array_values($net);
    $net_value=implode("','",$value);
    // print_r($net_value);
    $sql="INSERT INTO `".$table."`(`".implode('`,`',$key)."`)
          VALUES ('".$net_value."')";
    // echo $sql;
      if (db::connection()->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . db::connection()->error;
      }

  }
  function display_result(){
          // header("Location: /myweb/index.php#contact_us");
          // echo "<sctipt>alert('hell');</sctipt>";
  }

}
  //insert_db::display_result();
?>
