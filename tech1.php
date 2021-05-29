<?php
    include_once'header.php';
?>
<div class="title">
            <h1 id="h11" >TECHNICAL EVENTS</h1>
</div>

<div class="button">

<?php
	$con=mysqli_connect("localhost","root","","eventmgmt");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM events WHERE type_id = 1");

echo "<table border='2' style='color:white;' >
<tr>
<th style='color: white; width:300px; height:20%; font-size: 20px;'>Event ID</th>
<th style='color: white; width:300px; height:20%; font-size: 20px;' >Event Name</th>
<th style='color: white; width:300px; height:20%; font-size: 20px;' >Event Price</th>
<th style='color: white; width:300px; height:20%; font-size: 20px;' >Remaining Tickets</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
	$name = str_replace(' ', '', $row['event_title'] );
echo "<tr>";
echo "<td style='color: white; width:300px; height:20%; font-size: 20px;'>" . $row['event_id'] . "</td>";
echo "<td style='color: white; width:300px; height:20%; font-size: 20px;'> <a  style='color:white;' href='$name.php'</a>" . $row['event_title'] . " </td>";
echo "<td style='color: white; width:300px; height:20%; font-size: 20px;'>" . $row['event_price'] . "</td>";
echo "<td style='color: white; width:300px; height:20%; font-size: 20px;'>" . $row['remaining_tickets'] . "</td>";
echo "</tr>";
}
echo "</table>";


mysqli_close($con);
?>
</div>

<?php
    include_once'footer.php';
?> 