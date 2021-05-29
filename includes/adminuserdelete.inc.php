<?php

if(isset($_POST["submit1"])) {
    
    $id = $_POST["id"]; 
    $email = $_POST["email"]; 

    require_once('dbh.inc.php'); 
    require_once('adminuserdeletefunctions.inc.php');

    if(eventDoesNotExist($conn, $id) !== false) {
        header("location: ../adminuserdelete.php?error=eventDoesNotExist"); 
        exit(); 
    }

    deleteEvent($conn, $id, $email);


}

else {
    header("location: ../adminuserdelete.php"); 
}
