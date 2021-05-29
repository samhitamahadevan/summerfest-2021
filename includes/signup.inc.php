<?php

if(isset($_POST["submit"])) {
    
    $name = $_POST["name"]; 
    $role = $_POST["role"]; 
    $college = $_POST["college"]; 
    $branch = $_POST["branch"]; 
    $email = $_POST["email"]; 
    $pwd = $_POST["pwd"]; 
    $pwdrepeat = $_POST["pwdrepeat"]; 

    require_once('dbh.inc.php'); 
    require_once('functions.inc.php');

    if(emptyInputSignup($name, $role, $college, $branch, $email, $pwd, $pwdrepeat) !== false) {
        header("location: ../signup.php?error=emptyinput"); 
        exit(); 
    }

    if(invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail"); 
        exit(); 
    }

    if(pwdDontMatch($pwd, $pwdrepeat) !== false) {
        header("location: ../signup.php?error=pwddontmatch"); 
        exit(); 
    }

    if(emailRegistered($conn, $email) !== false) {
        header("location: ../signup.php?error=emailregistered"); 
        exit(); 
    }

    createUser($conn, $name, $email, $role, $college, $branch, $pwd);


}

else {
    header("location: ../signup.php"); 
}