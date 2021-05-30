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

    if($titlethree == false) {
      $titlethree= 'Add an event!'; 
    }

    if($titlethree == false) {
      $titlethree= 'Add an event!'; 
    }

    if($titlethree == false) {
        $titlethree= 'Add an event!'; 
    }





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

            <a href='payment.php' class='btn'> PROCEED TO PAY </a>

    </section> "; 


        

?>

<?php
    include_once'footer.php';
?>





































<!-- 
<div class="cards" style="transform: translate(0%, -110%); top:30% left:50%">
  <div class="card">
    <img class="card__img" src="cartimg.jpg" alt="Card Image" style="width:70%; display: block; margin-left: auto; margin-right: auto; border-style: solid;
  border-color:white;">

        <div class="card__content">
            <p class="pcart" style="color:white; text-align:center; "> EVENT 1</p>
            <a href="events.php"  class="btn" style="color:white; display: block; margin-left: auto; margin-right: auto; text-align: center;">ADD TO CART </a>
        </div>
    </div>



  <div class="card">
    <img class="card__img" src="cartimg.jpg" alt="Card Image" style="width:70%; display: block; margin-left: auto; margin-right: auto; border-style: solid;
  border-color:white; ">
        <div class="card__content">
            <p class="pcart" style="color:white; text-align:center; "> EVENT 2</p>
            <a href="events.php"  class="btn" style="color:white; display: block; margin-left: auto; margin-right: auto; text-align: center;">ADD TO CART </a>
            
        </div>
    </div>



  <div class="card">
    <img class="card__img" src="cartimg.jpg" alt="Card Image" style="width:70%; display: block; margin-left: auto; margin-right: auto; border-style: solid;
  border-color:white;">
        <div class="card__content">
            <p class="pcart" style="color:white; text-align:center; "> EVENT 3 </p>
            <a href="events.php"  class="btn" style="color:white; display: block; margin-left: auto; margin-right: auto; text-align: center;">ADD TO CART </a>
         
        </div>
    </div>
</div>
<div  style="position:relative; left:620px; top: -475px;">
    <a href="payment.php" class="btn">PROCEED TO PAYMENTS </a>
</div>

        
       
        
        
            


<?php
    include_once'footer.php';
?> -->