<?php
    include_once'volheader.php';
?>
<div class="title2">
            <h1 id="h11" > EVENTS</h1>
</div>

<div class="button">

<?php
	$con=mysqli_connect("localhost","root","","eventmgmt");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM events");

echo "<table border='2' style='color:white;' >
<tr>
<th style='color: white; width:300px; height:15%;'>Event ID</th>
<th style='color: white; width:300px; height:15%;' >Event Name</th>
<th style='color: white; width:300px; height:15%;' >Event Price</th>
<th style='color: white; width:300x;  height:15%;' >Total Tickets</th>
<th style='color: white; width:300px; height:15%;' >Booked Tickets</th>
<th style='color: white; width:300px; height:15%;' >Remaining Tickets</th>
<th style='color: white; width:300px; height:15%;' >Volunteer ID</th>
<th style='color: white; width:300px; height:15%;' >Image Link</th>
<th style='color: white; width:300px; height:15%;' >Type Of Event</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td style='color: white; width:300px; height:15%;'>" . $row['event_id'] . "</td>";
echo "<td style='color: white; width:300px; height:15%;'>" . $row['event_title'] . "</td>";
echo "<td style='color: white; width:300px; height:15%;'>" . $row['event_price'] . "</td>";
echo "<td style='color: white; width:300px; height:15%;'>" . $row['total_tickets'] . "</td>";
echo "<td style='color: white; width:300px; height:15%;'>" . $row['booked_tickets'] . "</td>";
echo "<td style='color: white; width:300px; height:15%;'>" . $row['remaining_tickets'] . "</td>";
echo "<td style='color: white; width:300px; height:15%;'>" . $row['user_id'] . "</td>";
echo "<td style='color: white; width:300px; height:15%;'>" . $row['img_link'] . "</td>";
echo "<td style='color: white; width:300px; height:15%;'>" . $row['type_id'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</div>


<?php
include_once'footer.php';
?>