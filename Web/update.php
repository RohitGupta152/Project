<?php
//create connection
$conn=mysqli_connect("localhost","root","","bscit");
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}
//update records from form
$prollno=$_POST['rno'];
$pname=$_POST['myname'];
$pdob=$_POST['mydob'];

$sql="UPDATE fyit SET dob='$pdob',name='$pname' 
WHERE rollno=$prollno";

if(mysqli_query($conn,$sql)){
	echo "records  updated";
}
else{
	echo "Error ho gaya in record updation: ". mysqli_error($conn);
}
mysqli_close($conn);
?>