<?php
    include_once'adminheader.php';
?>
<div class="title2">
            <h1 id="h11" > REGISTERED USERS</h1>
</div>

<div class="button">

<?php
	$con=mysqli_connect("localhost","root","","eventmgmt");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM users");

echo "<table border='2' style='color:white;' >
<tr>
<th style='color: white; width:300px; height:15%;' >User ID</th>
<th style='color: white; width:300px; height:15%;' >Username</th>
<th style='color: white; width:300px; height:15%;' >Registered Email</th>
<th style='color: white; width:300x;  height:15%;' >Role</th>
<th style='color: white; width:300px; height:15%;' >College</th>
<th style='color: white; width:300px; height:15%;' >Branch</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td style='color: white; width:300px; height:15%;'>" . $row['usersId'] . "</td>";
echo "<td style='color: white; width:300px; height:15%;'>" . $row['usersName'] . "</td>";
echo "<td style='color: white; width:300px; height:15%;'>" . $row['usersEmail'] . "</td>";
echo "<td style='color: white; width:300px; height:15%;'>" . $row['usersRole'] . "</td>";
echo "<td style='color: white; width:300px; height:15%;'>" . $row['usersCollege'] . "</td>";
echo "<td style='color: white; width:300px; height:15%;'>" . $row['usersBranch'] . "</td>";
echo "</tr>";
}
echo "</table>";

echo "<div style='position:relative; left:250px; top: 150px;' > <a href='adminuserdelete.php' class ='btn'> Delete Users</a> </div>";

mysqli_close($con);
?>
</div>


<?php
include_once'footer.php';
?>