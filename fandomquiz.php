<?php
    include_once'header.php';
?>

<div>
<img src= "fandomquiz.png" height="495px" width="495px" style="position:absolute; left:10%; top:30%; border-style: solid;
  border-color:white;" >
</div>
            <div class="description" style="float: right;">
                <h4 class="gtn">
                Marvel or DC. Summerfest 2021 is excited to present Fandom Quiz, a fun non-technical event to bring your friends to! 
                This is a chance to test your skills on a variety of fandoms
 
                     <ol>
                    <li >Sign up as individuals or teams upto 3</li>
                    <li >The event goes on from 4pm to 6pm</li>
                    <li>Direct answers get 10 points</li>
                    <li> Passed answers get 5 points</li>
                    </ol>
                </h4>
            </div>
        
            <form action="includes/fqadd.inc.php" method="post">
                <div class="button" style = "position:absolute; left:55%; top:75%;">
                    <button class ="submit-button" type="submit" name="submit" style="font-family: 'Lena';">  ADD TO CART </button>
            </div>

</body>
</html>
<?php
    include_once'footer.php';
?>