<?php
require_once("config.php");
$username_list=$_POST['username_list'];
$mysqli = new mysqli($config['host'],$config['user'],$config['pass'],$config['database']);
if(mysqli_errno())
{
	echo "Error connecting to database";
	exit;
}
$mysqli->query("select * from students")

?>