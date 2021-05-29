<?php
    include_once'adminheader.php';
?>


    
    <div class="signup-form" style="text-align: right;">

        <h1 id="h12"> Delete An Event </h1>

        <div class="form-wrapper" style="text-align: right;" enctype="multipart/form-data">
            <form action="includes/admindelete.inc.php" method="post">
			
				<div class="id-wrapper">
                    <label id="h13">  Event ID: &nbsp;  </label> 
                    <input type="text" name="id" placeholder="Event's ID Here "/> 
                </div> 
				
                <div class="name-wrapper">
                    <label id="h13">  Event Name: &nbsp;  </label> 
                    <input type="text" name="name" placeholder="Event's Name Here "/> 
                </div> 
                
                <div class="button-wrapper"> 
                    <button class="submit-button" type="submit" name="submit"> Delete </button> 
                </div>

            </form> 
        <div> 
    </div>
	
    <?php

        if(isset($_GET["error"])) {
            if($_GET["error"] == "emptyinput") {
                echo "<p style='color:red;'> Please specify which event to delete </p>";
            }
            else if($_GET["error"] == "eventregistered") {
                echo "<p style='color:red;'> This event already exists. </p>"; 
            }
            else if($_GET["error"] == "stmtfailed") {
                echo "<p style='color:red;'> Something went wrong. Try again! </p>"; 
            }
            else if($_GET["error"] == "none") {
                echo "<p style='color:white;'> Event deleted </p>"; 
            }
        }

    ?>

   



<?php
include_once'footer.php';
?>