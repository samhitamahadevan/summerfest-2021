<?php
    include_once'adminheader.php';
?>


    
    <div class="signup-form" style="text-align: right;">

        <h1 id="h12"> Delete An User </h1>

        <div class="form-wrapper" style="text-align: right;" enctype="multipart/form-data">
            <form action="includes/adminuserdelete.inc.php" method="post">
			
				<div class="id-wrapper">
                    <label id="h13">  User ID: &nbsp;  </label> 
                    <input type="text" name="id" placeholder="Users ID Here "/> 
                </div> 
				
                <div class="name-wrapper">
                    <label id="h13">  Event Name: &nbsp;  </label> 
                    <input type="text" name="name" placeholder="Users Email here"/> 
                </div> 
                
                <div class="button-wrapper"> 
                    <button class="submit-button" type="submit" name="submit1"> Delete User </button> 
                </div>

            </form> 
        <div> 
    </div>
	
    <?php

        if(isset($_GET["error"])) {
            if($_GET["error"] == "emptyinput") {
                echo "<p style='color:red;'> Please specify which user to delete </p>";
            }
            else if($_GET["error"] == "eventregistered") {
                echo "<p style='color:red;'> This user  doesnt exist. </p>"; 
            }
            else if($_GET["error"] == "stmtfailed") {
                echo "<p style='color:red;'> Something went wrong. Try again! </p>"; 
            }
            else if($_GET["error"] == "none") {
                echo "<p style='color:white;'> User deleted </p>"; 
            }
        }

    ?>

   



<?php
include_once'footer.php';
?>