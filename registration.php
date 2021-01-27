<?php
include 'connection.php'
?>
<!DOCTYPE html>
<html>

<head>
    <title>registration form</title>
</head>
<link rel="stylesheet" href="css/registration.css">
<body >
    <center>
        <header>Registration Form</header>
        <form method="POST" action="registration.php">
            <table>
                <tr>
                    <td><input type="text" placeholder="Name" name="name"></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Matricule" name="matricule"></td>
                </tr>
                <tr>
                    <td><input type="email" placeholder="Email" name="email"></td>
                </tr>
                <tr><td><input type="password" placeholder="Password" name = "pass1"></td></tr>
                <tr><td><input type="password" placeholder="Password Again" name="pass2"></td></tr>

                <tr><td><button type="submit" value="Submit" name="submit"> Submit</button></td></tr>
            </table>
        </form>
</center>
<?php
if(isset($_POST["submit"])){
$name = $_POST["name"];
$matricule = $_POST["matricule"];
$email = $_POST["email"];
$pass1 = $_POST["pass1"];
$pass2 = $_POST["pass2"];

if($pass1 == $pass2 && strlen($pass2) >= 8){
    $sql = "INSERT INTO `Student_Table` (`Student_Matricule`, `Student_name`, `Student_Email`, `Student_Password`) VALUES ('$matricule', '$name', '$email', '$pass2') ";
    if(mysqli_query($conn,$sql)){
        echo"<script>alert('Account created successfull');</script>";
    }

}
else{
    echo "<script>alert('Passwords Did Not Match!!');</script>";
}
}
?>
<br>
<br>
<center><a  style ="color: white; text-decoration: none; background-color: black; padding: 1% 1% "href="landingpage.php">Return to home Page</a></center>
</body>
</html>