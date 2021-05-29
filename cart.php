<?php
    include_once'header.php';
?>
<div class="title2 ">
            <h1 id="h11"> YOUR CART</h1>
    </div>

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
?>