<?php

function emptyInput($id, $email) {
    $result; 
    if(empty($id) || empty($email) ) {
        $result = true; 
    }
    else {
        $result = false; 
    }

    return $result; 
}


function eventDoesNotExist($conn, $id) {
    $sql = "SELECT * FROM users WHERE usersId = ?;"; 
    $stmt = mysqli_stmt_init($conn); 

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminuserdelete.php?error=stmtfailed"); 
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

function deleteEvent($conn, $id, $email) {
    $sql = "DELETE FROM users WHERE usersId= ?;"; 
    $stmt = mysqli_stmt_init($conn); 

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adminuserdelete.php?error=stmtfailed"); 
        exit(); 
    }

    mysqli_stmt_bind_param($stmt, "s", $id ); 
    mysqli_stmt_execute($stmt); 

    mysqli_stmt_close($stmt); 

    header("location: ../adminuserdelete.php?error=none"); 
    exit(); 

}