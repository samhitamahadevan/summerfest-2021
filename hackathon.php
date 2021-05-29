<?php
    include_once'header.php';
?>

<div>
<img src= "hackathon.png" height="400px" width="400px" style="position:absolute; left:5%; top:35%; border-style: solid;
  border-color:white;" >
</div>
            <div class="description" style="float: right;">
                <h4 class="gtn">
                Summerfest 2021 is proud to present our annual hackathon! Join as strangers and meet other students who share your passion for coding!
 
                     <ol>
                    <li >Sign up as a team of 3</li>
                    <li > The event goes on for 24 hours</li>
                    <li>Students must bring their own laptops</li>
                    <li> Internet connectivity will be provided </li>
                    </ol>
                </h4>
            </div>
        
            <form action="includes/hkadd.inc.php" method="post">
                <div class="button" style = "position:absolute; left:55%; top:75%;">
                    <button class ="submit-button" type="submit" name="submit" style="font-family: 'Lena';">  ADD TO CART </button>
            </div>

<?php
    include_once'footer.php';
?>