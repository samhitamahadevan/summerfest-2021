<?php
    include_once'header.php';
?>
<div class="body">
  <div class="countdown" id="countdown">
    <div class="time">
      <h2 id="days">00</h2>
      <small> Days </small>
    </div>
    <div class="time">
      <h2 id="hours">00</h2>
      <small> Hours </small>
    </div>
    <div class="time">
      <h2 id="mins">00</h2>
      <small> Minutes </small>
    </div>
    <div class="time">
      <h2 id="secs">00</h2>
      <small> Seconds </small>
    </div>
  </div>
</div>
<script>
    var countDownDate = new Date("Jun 25, 2021 16:37:52").getTime();

// Run myfunc every second
var myfunc = setInterval(function() {

var now = new Date().getTime();
var timeleft = countDownDate - now;

// Calculating the days, hours, minutes and seconds left
var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

// Result is output to the specific element
document.getElementById("days").innerHTML = days
document.getElementById("hours").innerHTML = hours
document.getElementById("mins").innerHTML = minutes
document.getElementById("secs").innerHTML = seconds

// Display the message when countdown is over
if (timeleft < 0) {
    clearInterval(myfunc);
    document.getElementById("days").innerHTML = ""
    document.getElementById("hours").innerHTML = ""
    document.getElementById("mins").innerHTML = ""
    document.getElementById("secs").innerHTML = ""
    document.getElementById("end").innerHTML = "TIME UP!!";
}
}, 1000);
</script>

    <div class="title">
            <h1 id="h11"> SUMMER FEST 2021</h1>
    </div>
    
    <div class="registerbox"> 
         <div class="button">
            <!-- <a href="login.php" class="btn">LOGIN </a> 
            <a href="signup.php" class="btn">SIGN UP/REGISTER </a> -->
            

        <?php 

            if(isset($_SESSION["userid"])) {
                echo "<a href='cart.php' class='btn'> Your Cart </a>";
                echo "<a href='includes/logout.inc.php' class='btn'> Logout </a>";
                echo "<a href='events.php' class='btn'> Events </a>"; 
            }

            else {

                echo "<a href='login.php' class='btn'>LOGIN </a>"; 
                echo "<a href='signup.php' class='btn'>SIGN UP/REGISTER </a>"; 
            }

        ?>

        </div> 

    </div> 




<?php
include_once'footer.php';
?>