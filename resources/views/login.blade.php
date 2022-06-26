<?php

$con = mysqli_connect("localhost", "root", "");
	
$db = mysqli_select_db($con,"nanashie");

$username = $_POST['Username']= $_GET[('Username')];  
$password = $_POST['Password']= $_GET[('Password')];  
      
       
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from aziel where Username = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql)or die( mysqli_error($con));  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>"; 
            echo "<a href='http://127.0.0.1:8000/home'><input type='button' value='Go to Home'/></a>"; 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            echo "<a href='http://127.0.0.1:8000'><input type='button' value='Back'/></a>";
        }     
?>