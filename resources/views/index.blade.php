<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aziel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Blaka&display=swap" rel="stylesheet">
</head>
<body>
    


   <br><br>
    <div class= "registration">
    <form action="register">
        <h1>REGISTRATION</h1>
       <table>
   
     <input type="text" name="Student_ID"  placeholder="Student ID" required><br> 
    <input type="text" name="Firstname"  placeholder="Firstname" required>
      <input type="text" name="Lastname"  placeholder="Lastname" required><br>
   
   <input type="text" name="Course"  placeholder="Course" required> 
      <input type="text" name="Yearlevel"  placeholder="YearLevel" required>
      <input type="text" name="Username"  placeholder="Username" required> 
      <input type="password" name="Password" placeholder="Password" required> 
    
       <td colspan="4">
       <button class= "btn_register">Register</button>

</table>
    
    </form>
    
    </div>
    <div class= "login">
     <h2>Login</h2>
     <form action="login">
       <table>
   <tr>
      
      <td><input type="text" name="Username"  placeholder="Username" required> </td>
      <td><input type="password" name="Password" placeholder="Password" required> </td>
      </tr><tr>
       <td colspan="4">
   <button class= "btn_login">Login</button>
</td>
</table>
    
    </form>
    </div>
</body>
</html>