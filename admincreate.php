<?php
    include_once'adminheader.php';
?>


    
    <div class="signup-form">

        <h1 id="h12"> Create An Event </h1>

        <div class="form-wrapper" style="text-align: right;" enctype="multipart/form-data">
            <form action="includes/admincreate.inc.php" method="post">
			
				<div class="id-wrapper">
                    <label id="h13">  Event ID: &nbsp;  </label> 
                    <input type="text" name="id" placeholder="Event's ID Here "/> 
                </div> 
				
                <div class="name-wrapper">
                    <label id="h13">  Event Name: &nbsp;  </label> 
                    <input type="text" name="name" placeholder="Event's Name Here "/> 
                </div> 
                    
                </div> 
                <div class="price-wrapper">
                    <label id="h13"> Event's Price‎‎‏: ‎  </label> 
                    <input type="number_format" name="price" placeholder="Event's Price Here"/> 
                </div>
				
				<div class="totaltickets-wrapper">
                    <label id="h13">  Total Tickets: &nbsp;  </label> 
                    <input type="number" name="total" /> 
                </div> 
				
				<div class="bookedtickets-wrapper">
                    <label id="h13">  Booked Tickets: &nbsp;  </label> 
                    <input type="number" name="booked" /> 
                </div> 
				
				<div class="remainingtickets-wrapper">
                    <label id="h13">  Remaining Tickets: &nbsp;  </label> 
                    <input type="number" name="remaining"/> 
                </div> 
                
                <div class="remainingtickets-wrapper">
                    <label id="h13">  Volunteer ID: &nbsp;  </label> 
                    <input type="text" name="userid"/> 
                </div> 
				
				<div class="image-wrapper">
                    <label id="h13"> Event Image:  &nbsp;  </label> 
                    <input type="file" name="fileToUpload"/>
					
                </div> 
				
				<div class="type-wrapper">
                    <label id="h13">  Type of Event: &nbsp;  </label> 
                    <input type="number" name="type" /> 
                </div> 

    
      

                
                <div class="button-wrapper"> 
                    <button class="submit-button" type="submit" name="submit"> Create Event! </button> 
                </div>

            </form> 
        <div> 
    </div>
	
    <?php

        if(isset($_GET["error"])) {
            if($_GET["error"] == "emptyinput") {
                echo "<p style='color:red;'> Please fill in all fields. </p>";
            }
            else if($_GET["error"] == "eventregistered") {
                echo "<p style='color:red;'> This event already exists. </p>"; 
            }
            else if($_GET["error"] == "stmtfailed") {
                echo "<p style='color:red;'> Something went wrong. Try again! </p>"; 
            }
            else if($_GET["error"] == "none") {
                echo "<p style='color:white;'> Event Created! </p>"; 
            }
        }

    ?>

   



<?php
include_once'footer.php';
?>