<?php

if(isset($_POST["submit"])) {
    
    $id = $_POST["id"]; 
    $name = $_POST["name"]; 

    require_once('dbh.inc.php'); 
    require_once('admindeletefunctions.inc.php');

    if(eventDoesNotExist($conn, $id) !== false) {
        header("location: ../admindelete.php?error=eventDoesNotExist"); 
        exit(); 
    }

    deleteEvent($conn, $id, $name);


}

else {
    header("location: ../admindelete.php"); 
}
