<?php
    include_once'header.php';
?>
<div class="title2" style="top: 15%;">
            <h1 id="h11" > SUMMER FEST PASS</h1>
</div>
<?php
    require_once('includes/dbh.inc.php'); 
    require_once('includes/functions.inc.php');  
?>

<div class="description2">
	<div class='form-wrapper' style='text-align: left;'>
		
		<div class="email-wrapper"> 
			<label id="h13"> Email: <?php echo  $_SESSION['email'];  ?> </label>
		</div>
		<div class="email-wrapper"> 
			<label id="h13"> User ID: <?php echo  $_SESSION['userid'];  ?> </label>
		</div>
		<div class="email-wrapper"> 
			<label id="h13"> Events: &nbsp; </label> 
			<label id="h13"> <?php echo  $_SESSION['titleone']; ?> </label>
			<label id="h13"> , &nbsp; <?php echo $_SESSION['titletwo']; ?> </label>
			<label id="h13">, &nbsp; <?php echo $_SESSION['titlethree'];  ?> </label>
		</div>
		<div class="email-wrapper"> 
			<label id="h13"> Total Price: <?php echo  $_SESSION['pricetotal'];  ?> </label>
		</div>
		<div class="email-wrapper" > 
			<label id="h13"> Date: <?php echo $todaydate = date('m/d/Y'); ?></label>
		</div>
		<div class="email-wrapper" > 
			<label id="h13"> Time: <?php date_default_timezone_set("Asia/Calcutta"); echo date("h:i:sa");?></label>
		</div>
		
</div>


<?php
include_once'footer.php';
?>
 