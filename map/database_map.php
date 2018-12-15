<?php

  //user information
  $host = "localhost";
  $user = "test123";
  $pass = "test123";

  //database information
  $databaseName = "sensor_network";
  $tableName = "sensor_value";
  
  
  //Connect to mysql database
  $con = mysql_connect($host,$user,$pass);
  mysql_query("SET NAMES 'UTF8'");
  $dbs = mysql_select_db($databaseName, $con);

  session_start();
  //Query database for data
  $result = mysql_query("SELECT * FROM $tableName
                          WHERE username = '".$_SESSION['viewer']."'");
  //store matrix
  $i=0;
  while ($row = mysql_fetch_array($result)){
    $employee[$i]=$row;
    $i++;
  
  }

  
  //echo result as json 
    echo json_encode($employee);
?>
