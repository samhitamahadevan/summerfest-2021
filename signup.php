<?php
    include_once'header.php';
?>


    
    <div class="signup-form">

        <h1 id="h12"> Sign up </h1>

        <div class="form-wrapper">
            <form action="includes/signup.inc.php" method="post">
                <div class="name-wrapper">
                    <label id="h13">  Name: &nbsp;  </label> 
                    <input type="text" name="name" placeholder="Your name here "/> 
                </div> 
                
                <div class="radio-wrapper"> 
                    <label id="h13"> Role: &nbsp; </label> 
                    <input style="width: 30px; outline: none;" type="radio" id="h13" value="participant" name="role"> 
                    <label for="participant" id="h13"> Participant </label> 
                    <input style="width: 30px; outline: none;" type="radio" id="h13" value="volunteer" name="role"> 
                    <label for="volunteer" id="h13"> Volunteer </label> 
                    
                </div> 
                <div class="college-wrapper">
                    <label id="h13"> College‎‎‏‏‎‏‏‎: ‎  </label> 
                    <input type="text" name="college" placeholder="College name here"/> 
                </div>

                <div class="branch-wrapper"> 
                    <label id="h13"> Branch:‏‏‎ ‎ </label> 
                    <input type="text" name="branch" placeholder="Your branch here"/> 
                </div> 

                <div class="email-wrapper"> 
                    <label id="h13"> Email: &nbsp; </label> 
                    <input type="email" name="email" placeholder="Your email here"/> 
                </div> 

                <div class="password-wrapper"> 
                    <label id="h13"> Password: </label>   
                    <input type="password" name="pwd"/> 
                </div>

                <div class="password-repeat-wrapper"> 
                    <label id="h13"> Repeat pwd: </label> 
                    <input type="password" name="pwdrepeat"/> 
                </div>

                <div class="button-wrapper"> 
                    <button class="submit-button" type="submit" name="submit"> Sign Up </button> 
                </div>

            </form> 
        <div> 
    </div>


    <?php

        if(isset($_GET["error"])) {
            if($_GET["error"] == "emptyinput") {
                echo "<p style='color:white;'> Please fill in all fields. </p>";
            }
            else if($_GET["error"] == "invalidemail") {
                echo "<p style='color:white;'> Please enter a valid email. </p>"; 
            }
            else if($_GET["error"] == "pwddontmatch") {
                echo "<p style='color:white;'> Please enter matching passwords. </p>"; 
            }
            else if($_GET["error"] == "emailregistered") {
                echo "<p style='color:white;'> This email is already registered to an account. </p>"; 
            }
            else if($_GET["error"] == "stmtfailed") {
                echo "<p style='color:white;'> Something went wrong. Try again! </p>"; 
            }
            else if($_GET["error"] == "none") {
                echo "<p style='color:white;'> Thank you for signing up! </p>"; 
            }
        }

    ?>

   



<?php
include_once'footer.php';
?>