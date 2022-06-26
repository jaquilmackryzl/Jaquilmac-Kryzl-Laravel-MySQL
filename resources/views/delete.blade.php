<?php

$con = mysqli_connect("localhost", "root", "");
	
$db = mysqli_select_db($con,"nanashie"); 

$query = mysqli_query($con,"DELETE FROM aziel WHERE Student_ID = '".$_GET['id']."'") or die(mysql_error());
// $query = mysqli_query($con,"Update registration SET status='Deleted' WHERE studID ='".$_GET['id']."'") or die(mysqli_error());

if(!$query){
	echo "Record not deleted!";
}
else{
	echo"Record successfully deleted";
}

echo "<a href='http://127.0.0.1:8000/home'><input type='button' value='Back'/></a>";
?>