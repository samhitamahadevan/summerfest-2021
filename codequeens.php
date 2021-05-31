<?php
    include_once'header.php';
?>

<div>
<img src= "codequeen.png" height="495px" width="495px" style="position:absolute; left:10%; top:30%; border-style: solid;
  border-color:white;" >
</div>
            <div class="description" style="float: right;">
                <h4 class="gtn">
                Summerfest 2021 is proud to present Code for Queens, a hackathon exclusively for female students! Join as strangers and meet other women who share your passion for coding!
 
                     <ol>
                    <li >Sign up as a team of 3</li>
                    <li > The event goes on for 24 hours</li>
                    <li>Students must bring their own laptops</li>
                    <li> Internet connectivity will be provided </li>
                    </ol>
                </h4>
            </div>
        
            <form action="includes/cqadd.inc.php" method="post">
                <div class="button" style = "position:absolute; left:55%; top:75%;">
                    <button class ="submit-button" type="submit" name="submit" style="font-family: 'Lena';">  ADD TO CART </button>
            </div>
<?php
    include_once'footer.php';
?>