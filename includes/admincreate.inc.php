<?php

if(isset($_POST["submit"])) {
    
    $id = $_POST["id"]; 
    $name = $_POST["name"]; 
    $price = $_POST["price"]; 
    $total = $_POST["total"]; 
    $booked = $_POST["booked"]; 
    $remaining = $_POST["remaining"]; 
	$fileToUpload = $_POST["fileToUpload"]; 
    $userid = $_POST["userid"]; 
    $type = $_POST["type"]; 
   


    require_once('dbh.inc.php'); 
    require_once('admincreatefunctions.inc.php');

     #if(emptyInput($id, $name, $price, $total, $booked, $remaining, $userid, $fileToUpload, $type) !== false) {
    #   header("location: ../admincreate.php?error=emptyinput"); 
     #  exit(); 
  # } 

    if(eventRegistered($conn, $id) !== false) {
        header("location: ../admincreate.php?error=eventregistered"); 
        exit(); 
    }

    createEvent($conn, $id, $name, $price, $total, $booked, $remaining, $userid, $fileToUpload, $type);


}

else {
    header("location: ../admincreate.php"); 
}
