<?php
//create connection
$conn=mysqli_connect("localhost","root","","bscit");
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}
//delete records 
$sql="DELETE FROM fyit WHERE rollno=22";

if(mysqli_query($conn,$sql)){
	echo "record/s  deleted";
}
else{
	echo "Error ho gaya in record deletion: ". mysqli_error($conn);
}
mysqli_close($conn);
?>