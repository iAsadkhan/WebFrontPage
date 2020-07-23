<?php 

$db_user = "root";
$db_pass = "";
$db_name = "mydatabase";

$db = new PDO('mysql:host=localhost:3325; dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

































$con = mysqli_connect('localhost:3325','root');

mysqli_select_db($con,'mydatabase');
?>