<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
    </head>
    <link rel="stylesheet" href="css/index.css">
    <link rel = "stylesheet" href = "css/left.css">

    <body style="background-image: url(images/dl.jpg) ">
    
            
          <?php include "header.php";
          include "leftnav.php"?>
          <center><section><p style = "color: white"><b> WELCOME!!</b></p></section></center>
        <div>
            <div class="first" style = "background-image: url(images/cor.jpeg); background-repeat: no-repeat; " ><a href="#" style = "color: white" ><b id = "bg">My Courses</b></a> </div>
            <div class="second" style = "background-image: url(images/cor.jpeg); background-repeat: no-repeat; "><a href="CourseReg.php" style = "color: white"><b id = "bg">Register Courses</b></a> </div>
            <div class="third" style = "background-image: url(images/cor.jpeg); background-repeat: no-repeat; "><a href="#" style = "color: white"><b id = "bg">Assignements</b></a> </div>
            <div class="fourth" style = "background-image: url(images/cor.jpeg); background-repeat: no-repeat; c"><a href="$" style = "color: white"><b id = "bg">Upcoming Classes</b></a> </div>
            <div class="fifth" style = "background-image: url(images/cor.jpeg); background-repeat: no-repeat; c"><a href="$" style = "color: white"><b id = "bg">Upcoming Classes</b></a> </div>
            <div class="sixth" style = "background-image: url(images/cor.jpeg); background-repeat: no-repeat; c"><a href="$" style = "color: white"><b id = "bg">Upcoming Classes</b></a> </div>
            <div class="fifth" style = "background-image: url(images/cor.jpeg); background-repeat: no-repeat; c"><a href="$" style = "color: white"><b id = "bg">Upcoming Classes</b></a> </div>
            <div class="sixth" style = "background-image: url(images/cor.jpeg); background-repeat: no-repeat; c"><a href="$" style = "color: white"><b id = "bg">Upcoming Classes</b></a> </div>
            <div class="sixth" style = "background-image: url(images/cor.jpeg); background-repeat: no-repeat; c"><a href="$" style = "color: white"><b id = "bg">Upcoming Classes</b></a> </div>
          
            
            
        </div><br>

       
       <section id="option">
        <center><<p>Not Your Account? <br>
        <a id = "logout" style="color: red" href="landingpage.php" name = "logout">Logout</a>
        <?php
        if (isset($_COOKIE[session_name()])){
            setcookie(session_name(), '', time() - 3600);
            session_destroy();
        }
        ?>
        </p></center>
        
       </section>
      

    </body>

   <center><footer >
    <p ><h2 style = "color: red">$Powered by AndMarc</h2></p>
</footer></center> 
</html>