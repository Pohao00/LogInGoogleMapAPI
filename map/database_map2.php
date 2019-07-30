<?php
  //user information
  $host = "localhost";
  $user = "test123";
  $pass = "test123";

  //database information
  $databaseName = "sensor_network";
  $tableName = "sensor_value";
  
  $ad = "";
  if(!empty($_GET['add']))
    $ad = $_GET['add'];
  
  //Connect to mysql database
  $con = mysql_connect($host,$user,$pass);
  mysql_query("SET NAMES 'UTF8'");
  $dbs = mysql_select_db($databaseName, $con);

  if(!empty($ad))
  {
    $result = mysql_query("SELECT *
                            FROM $tableName
                            WHERE address = \"$ad\"
                            ORDER BY `time` ASC");
  }
  else
  {
     $result = mysql_query("SELECT * 
                            FROM $tableName
                            ORDER BY `address` ASC");
  }
  $i=0;
  while ($row = mysql_fetch_array($result)){
    $employee[$i]=$row;
    $i++;
  }
  //echo result as json 
  echo json_encode($employee);
?>
