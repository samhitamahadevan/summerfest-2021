<?php

function emptyInput($id, $name) {
    $result; 
    if(empty($id) || empty($name) ) {
        $result = true; 
    }
    else {
        $result = false; 
    }

    return $result; 
}


function eventDoesNotExist($conn, $id) {
    $sql = "SELECT * FROM events WHERE event_id = ?;"; 
    $stmt = mysqli_stmt_init($conn); 

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../admindelete.php?error=stmtfailed"); 
        exit(); 
    }

    mysqli_stmt_bind_param($stmt, "s", $e); 
    mysqli_stmt_execute($stmt); 

    $resultData = mysqli_stmt_get_result($stmt); 

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row; 
    }

    else {
        $result = false; 
        return $result; 
    }

    mysqli_stmt_close($stmt); 

}

function deleteEvent($conn, $id, $name) {
    $sql = "DELETE FROM events WHERE event_id= ?;"; 
    $stmt = mysqli_stmt_init($conn); 

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../admindelete.php?error=stmtfailed"); 
        exit(); 
    }

    mysqli_stmt_bind_param($stmt, "s", $id ); 
    mysqli_stmt_execute($stmt); 

    mysqli_stmt_close($stmt); 

    header("location: ../admindelete.php?error=none"); 
    exit(); 

}