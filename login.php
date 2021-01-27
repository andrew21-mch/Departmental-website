<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>login</title>
</head>
<link rel="stylesheet" href="css/registration.css">
<body >
    <center> <header>Login</header>
        <form action="login.php" method = "POST">
        <table>
            <tr>
                <td><input type="text" placeholder="Username" name = "matricule"></td>
            </tr>
            <tr>
                <td><input type="password" placeholder="Password" name = "password" id = "password"></td>
            </tr>
            <tr>
                <td style = "color: white"><input type="checkbox" onclick="myFunction()">Show Password </td>
            </tr>
            <tr>
                <td><button type="submit" value="Submit" name = "login"> Submit</button></td>
            </tr>
            <script>
                function myFunction() {
                    var x = document.getElementById("password");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                    } 
            </script>
            
        </table>
    </form></center>
    <?php 
   if(isset($_POST['login'])){
      $username=$_POST['matricule'];
      $pass=$_POST['password'];

   $sql="SELECT * FROM Student_Table WHERE Student_Matricule= '$username'";

   $result= mysqli_query ($conn,$sql);
   if(mysqli_num_rows($result)>0){
       while($Student=mysqli_fetch_assoc($result)){
          if($username==$Student['Student_Matricule'] && $pass==$Student['Student_Password']){
             $_SESSION['Student_Matricule']=$username;
             header ('location:dashboard.php');
          }else{
             echo'<script>alert("incorect Email or password");</script>';
          }
       }
    }

   }

 ?><hr>
 <center><p style = "color: white">Don't Have An account yet! <br><br><br> <a  style = "background-color: black; text-decoration: none; padding: 1% 1%"href="registration.php">Register</a></p></center>
</body>
</html>