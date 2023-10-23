<?php
//create connection
$conn=mysqli_connect("localhost","root","");
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}
//create database
$sql="CREATE DATABASE bscit";

if(mysqli_query($conn,$sql))
{
	echo "database created successfully";
}
else{
	echo "error in creating database". mysqli_error($conn);
}

mysqli_close($conn);
?>