<?php

$con= mysqli_connect("localhost", "root", "");
$mysql = mysqli_select_db($con,"nanashie"); 


$_POST[('Student_ID')]= $_GET[('Student_ID')];
$_POST[('Firstname')]= $_GET[('Firstname')];
$_POST[('Lastname')]= $_GET[('Lastname')];
$_POST[('Course')]= $_GET[('Course')];
$_POST[('Yearlevel')]= $_GET[('Yearlevel')];
$_POST[('Username')]= $_GET[('Username')];
$_POST[('Password')]= $_GET[('Password')];
$query = mysqli_query($con,"INSERT INTO aziel (Student_ID,Firstname,Lastname,Course, Yearlevel, Username, Password) VALUES ('$_POST[Student_ID]','$_POST[Firstname]','$_POST[Lastname]','$_POST[Course]','$_POST[Yearlevel]','$_POST[Username]','$_POST[Password]')");
if(!$query){
    echo "Alert! User not added.";
}
else{
    echo "User successfully added!";
}

echo "<a href='http://127.0.0.1:8000/home'><input type='button' value='Back'/></a>";

?>