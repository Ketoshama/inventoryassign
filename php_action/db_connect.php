<?php 	
//LocalConnection 
//$localhost = "localhost";
//$username = "root";
//$password = "";
//$dbname = "store";

//Online Line Connection
$localhost = "remotemysql.com";
$username = "HRuMbOQK18";
$password = "bXMBfC3jDO";
$dbname = "HRuMbOQK18";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>