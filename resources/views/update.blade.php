<?php
$con= mysqli_connect("localhost", "root", "");
$mysql = mysqli_select_db($con,"nanashie"); 
$query = mysqli_query($con,"Update aziel SET status='Deleted' WHERE Student_ID ='".$_GET['id']."'") or die(mysqli_error());

if(!$query){
	echo "Record not updated!";
}
else{
	echo"Record successfully updated";
}

echo "<a href=http://127.0.0.1:8000/home><input type='button' value='Back'/></a>";
?>