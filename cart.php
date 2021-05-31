<?php
    include_once'header.php';
?>
<div class="title2" style="top: 20%;">
            <h1 id="h11" > YOUR CART</h1>
</div>


<?php


    require_once('includes/dbh.inc.php'); 
    require_once('includes/functions.inc.php');
    
    $userid = $_SESSION["userid"]; 
    
    $row = returnsrow($conn, $userid); 
    $event1 = $row['event1']; 
    $event2 = $row['event2']; 
    $event3 = $row['event3']; 

  
    $eventrow1 = returnsevent($conn, $event1); 
    $eventrow2 = returnsevent($conn, $event2); 
    $eventrow3 = returnsevent($conn, $event3); 


    $titleone = $eventrow1['event_title']; 
    $titletwo = $eventrow2['event_title']; 
    $titlethree = $eventrow3['event_title']; 


    $priceone = $eventrow1['event_price']; 
    $pricetwo = $eventrow2['event_price']; 
    $pricethree = $eventrow3['event_price'];



    if($titleone == false) {
      $titleone= 'Add an event!'; 
      $priceone=0;
    }

    if($titletwo == false) {
      $titletwo= 'Add an event!'; 
      $pricetwo=0;
    }

    if($titlethree == false) {
        $titlethree= 'Add an event!'; 
        $pricethree=0;
    }

    $pricetotal= $priceone +$pricetwo + $pricethree;
    $_SESSION['pricetotal'] = $pricetotal;
	$_SESSION ['titleone'] = $titleone;
	$_SESSION ['titletwo'] = $titletwo;
	$_SESSION ['titlethree'] = $titlethree;
	$_SESSION ['priceone'] = $priceone;
	$_SESSION ['pricetwo'] = $pricetwo;
	$_SESSION ['pricethree'] = $pricethree;
	$_SESSION['userid']= $userid;
	$_SESSION['email']= $email;




echo"<section class='cartbox'> 
            <div class='row'>
                <div class='col'>
                    <img src='cartimg.jpg'/>'"; 
echo"<h3 style='font-size: 40px;'>" . $titleone . "</h3>"; 
                    

echo"              </div>
                <div class='col'>
                    <img src='cartimg.jpg'/>";
echo"<h3 style='font-size: 40px;'>". $titletwo . "</h3>"; 
                    

echo"               </div>
                <div class='col'>
                    <img src='cartimg.jpg'/>";
echo"<h3 style='font-size: 40px;'>" . $titlethree .  "</h3>"; 
                    

echo"                </div>
            </div>
            <a href='#' class='btn'> TOTAL AMOUNT: " . $pricetotal . "</a>
            <a href='payment.php' class='btn'> PROCEED TO PAY </a>
            
    </section> "; 


        

?>

<?php
    include_once'footer.php';
?>






