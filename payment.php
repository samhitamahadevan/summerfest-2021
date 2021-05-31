<?php
    include_once'header.php';
?>
<div class="title2" style="top: 30%;">
            <h1 id="h11" > PAYMENT</h1>
</div>

<?php
    require_once('includes/dbh.inc.php'); 
    require_once('includes/functions.inc.php');  
?>
<div class='login-form'>



        <div class='form-wrapper' style='text-align: left;'>
            <form  method="post" action="includes/payment.inc.php">
			
				<div class="email-wrapper"> 
				<label id="h13"> Total Price: <?php echo  $_SESSION['pricetotal'];  ?> </label>
				</div>
		
                <div class='email-wrapper'> 
                    <label for = "payment_mode" id="h13"> Payment Mode: &nbsp;&nbsp;&nbsp; </label> 
					<select name="payment_mode" >
						<option value='Cash On Day'>Cash On Day</option>
						<option value='Net Banking'>Net Banking</option>
						<option value='Credit/Debit Card'>Credit/Debit Card</option>
					</select>
                </div> 

				 <div class='button-wrapper' style="align : center;"> 
                    <button class="submit-button" type="submit" name="generate" value="Generate Receipt" > Generate Summer Fest Pass </button> 
                </div>

            </form> 
			<div> 
    </div>




    <?php

        if(isset($_GET["error"])) {
            if($_GET["error"] == "emptyinput") {
                echo "<p style='color:white;'> Please fill in all fields. </p>";
            }

		}

    ?>



<?php
include_once'footer.php';
?>
