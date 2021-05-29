<?php

if(isset($_POST["submit"])) {

    session_start();

    require_once('dbh.inc.php'); 
    require_once('functions.inc.php');
    
    $eventid = 'E03'; 
    $userid = $_SESSION["userid"]; 

    

    updateEvent($conn, $eventid, $userid); 


}

else {
    header("location: ../codequeen.php"); 
}