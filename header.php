<?php 

session_start(); 

?>


<!DOCTYPE html>
<html>
<head>
    <title> SUMMER FEST 2021</title>
    <link rel="stylesheet" type="text/css" href ="index.css">
    
    
	
</head>
<body>
    <header>
        <div class="main">
            <div class="logo">
                <img class="img1" src="logo.png">
            </div>
            <ul>
                <li class="active"> <a href="index.php">Home</a></li>
                <li> <a href="about.html">About</a></li>
                
                
                <?php 

            if(isset($_SESSION["userid"])) {
                echo " <li> <a href='cart.php' class='navb'> Your Cart </a> </li>";
                echo "<li> <a href='includes/logout.inc.php' class='navb'> Logout </a> </li>";
                echo "<li> <a href='events.php' class='navb'> Events </a> </li>"; 
                echo "<li> <a href='userprof.php' class='navb'> Profile </a> </li>";
            }
            ?>
            <script>
			$(document).ready(function(){
			$('[data-toggle="popover"]').popover();   
			});
		    </script>
                

            </ul>
        </div>
        
           
    </header>
