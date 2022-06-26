<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
<?php
$con = mysqli_connect("localhost", "root", "");
	
$db = mysqli_select_db($con,"nanashie"); 
             
$query = mysqli_query($con, "SELECT * FROM aziel") or die(mysqli_error());
         ?>    
       <table border=1>
          <tr>
              <th>Student ID</th>
              <th>Last name</th>
              <th>First name</th>
              <th>Course</th>
              <th>Year level</th>
              <th>Username</th>
              <th>Password</th>
              <th>User Level</th>
              <th>Status</th>
              <th>Action</th>
              <th>Action</th>
          </tr>
          <?php 
           while($row = mysqli_fetch_array($query)){
			echo "
            <tr>
					<td>$row[Student_ID]</td>
					<td>$row[Firstname]</td>
					<td>$row[Lastname]</td>
					<td>$row[Course]</td>
					<td>$row[Yearlevel]</td>
                    <td>$row[Username]</td>
                    <td>$row[Password]</td>
                    <td>$row[Userlevel]</td>
                    <td>$row[status]</td>
                    <td align='center'><a style='text-decoration:none;' href='http://127.0.0.1:8000/delete?id=$row[Student_ID]'>X</a></td>
                    <td align='center'><a style='text-decoration:none;' href='http://127.0.0.1:8000/update?id=$row[Student_ID]'>Update</a></td>

                    </tr>
                  ";
           } 
          ?>
          <button class= "logout"><a href="http://127.0.0.1:8000/">Logout</a></button>
          <button class= "add"><a href="http://127.0.0.1:8000/add">Add</a></button>
          
         
</body>
</html>