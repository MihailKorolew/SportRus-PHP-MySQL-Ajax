<<?php
  $mysqli = false;
  function connectDB(){
    global $mysqli;
    $mysqli = new mysqli("MySQL-5.7", "root", "", "SportRus");
    $mysqli -> query("SET NAMES 'utf-8'");
  }

  function closeDB(){
    global $mysqli;
    $mysqli -> close();
  }

  function getnew_table(&limit){
    global $mysqli;
    connectDB();
    $result = $mysql -> query("SELECT * FROM `new_table` ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    return resultTOArray($result);
  }

  function resultToArray($result){
    $array = array();
    while(($row = $result -> fetch_assox()) != false){
      $array[] = $row;
    }
    return $array;
  }
 ?>
