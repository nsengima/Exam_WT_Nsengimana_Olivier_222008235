<?php  
$servername="localhost";
$username="root";
$password="";
$databasename="virtual_cooking_class";
$connection=new mysqli($servername,$username,$password,$databasename);
if ($connection->connect_error) {
	die("connection failed.".$connection->connect_error);
}
?>