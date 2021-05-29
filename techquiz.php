<?php
    include_once'header.php';
?>

<div >
<img src= "techquiz.png" height="400px" width="400px" style="position:absolute; left:5%; top:35%; border-style: solid;
  border-color:white;" >
</div>
            <div class="description" style="float: right;">
                <h4 class="gtn">
                    Summerfest 2021 is proud to present Tech Quiz, a quiz exclusively for all the tech nerds out there! Use your tech knowledge to win an exciting cash prize!
 
                     <ol>
                    <li >Individual participation only</li>
                    <li > The event is from 2pm-4pm</li>
                    <li> Laptops not necessary</li>
                    </ol>
                </h4>
            </div>
            <form action="includes/tqadd.inc.php" method="post">
                <div class="button" style = "position:absolute; left:55%; top:75%;">
                    <button class ="submit-button" type="submit" name="submit" style="font-family: 'Lena';">  ADD TO CART </button>
            </div>
<?php
    include_once'footer.php';
?>