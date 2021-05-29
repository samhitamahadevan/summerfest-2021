<?php
    include_once'header.php';
?>


    
    <div class="login-form">

        <h1 id="h12"> Log in </h1>

        <div class="form-wrapper">
            <form action="includes/login.inc.php" method="post">
                
                <div class="email-wrapper"> 
                    <label id="h13"> Email: &nbsp;&nbsp;&nbsp; </label> 
                    <input type="email" name="email" placeholder="Your email here"/> 
                </div> 

                <div class="password-wrapper"> 
                    <label id="h13"> Password: </label> 
                    <input type="password" name="pwd"/> 
                </div>

                <div class="button-wrapper"> 
                    <button class="submit-button" type="submit" name="submit"> Log In </button> 
                </div>

            </form> 
        <div> 
    </div>

    <?php

        if(isset($_GET["error"])) {
            if($_GET["error"] == "emptyinput") {
                echo "<p style='color:white;'> Please fill in all fields. </p>";
            }

            if($_GET["error"] == "invalidemail") {
                echo "<p style='color:white;'> Please fill in a correct email. </p>";
            }

            if($_GET["error"] == "wrongpwd") {
                echo "<p style='color:white;'> Your password is incorrect. </p>";
            }
            
        }

    ?>



<?php
include_once'footer.php';
?>