<?php

function emptyInput($id, $name, $price, $total, $booked, $remaining, $userid, $fileToUpload, $type) {
    $result; 
    if(empty($id) || empty($name) || empty($price) || empty($total) || empty($booked) || empty($remaining) || empty($userid) || empty($fileToUpload) || empty($type)) {
        $result = true; 
    }
    else {
        $result = false; 
    }

    return $result; 
}


function eventRegistered($conn, $id) {
    $sql = "SELECT * FROM events WHERE event_id = ?;"; 
    $stmt = mysqli_stmt_init($conn); 

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../admincreate.php?error=stmtfailed"); 
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

function createEvent($conn, $id, $name, $price, $total, $booked, $remaining, $userid, $fileToUpload, $type) {
    $sql = "INSERT INTO events (event_id, event_title, event_price, total_tickets, booked_tickets, remaining_tickets, user_id, img_link, type_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);"; 
    $stmt = mysqli_stmt_init($conn); 

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../admincreate.php?error=stmtfailed"); 
        exit(); 
    }

    mysqli_stmt_bind_param($stmt, "sssssssss", $id, $name, $price, $total, $booked, $remaining, $userid,  $fileToUpload, $type); 
    mysqli_stmt_execute($stmt); 

    mysqli_stmt_close($stmt); 

    header("location: ../admincreate.php?error=none"); 
    exit(); 

}