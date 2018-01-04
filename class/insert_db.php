<?php
require "db_conn.php";
class insert_db{


  function insert_to_db($net){

    print_r($net);
    if(sizeof($net)==1){
        $table="notification_table";
      }else{
        $table="contact_table";
      }
    $key=array_keys($net);
    $value=array_values($net);

    $sql="INSERT INTO `notification_table`(`".implode('`,`',$key)."`)
          VALUES (`".implode('`,`',$value)."`)";

      if (db::connection()->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

  }
  function display_result(){
          header("Location: /myweb/index.php#contact_us");
          echo "<sctipt>alert('hell');</sctipt>";
  }

}
  //insert_db::display_result();
?>
