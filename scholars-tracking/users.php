<?php 

require_once 'connect.php';

require_once 'header.php';

echo "<div class='container'>";

if( isset($_POST['delete'])){
	$sql = "DELETE FROM total_slp WHERE Name='". $_POST['firstname']."'";
	echo $sql;
	if($con->query($sql) === TRUE){
		echo "<div class='alert alert-success'>Successfully delete  user</div>";
	}
	else
	 echo $_POST['firstname'];
}

$sql 	= "SELECT * FROM total_slp";
$result = $con->query($sql); 

if( $result->num_rows > 0)
{ 
	?>
	<h2>List of all Users</h2>
	<table class="table success  table-bordered  cus-table">
		<tr style="background:#cc66ff">
			<td>Firstname</td>
			<td>Ronin Address</td>
			<td>Total SLP</td>
			<td>In Game SLP</td>
			<td>MMR</td>
			<td width="70px">Delete</td>
			<td width="50px">Edit</td>
		</tr>
	<?php
	while( $row = $result->fetch_assoc()){ 
		echo "<form action='' method='POST'>";	//added
		echo "<input type='hidden' value='". $row['Name']."' name='firstame' />"; //added
		echo "<tr>";
		echo "<td>".$row['Name'] . "</td>";
		echo "<td>".$row['Ronin_Address'] . "</td>";
		echo "<td>".$row['total_slp'] . "</td>";
		echo "<td>".$row['in_game_slp'] . "</td>";
		echo "<td>".$row['mmr'] . "</td>";
		echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td>";  
		echo "<td><a href='edit.php?name=".$row['Name']."' class='btn btn-info'>Edit</a></td>";  
		echo "</tr>";
		echo "</form>"; //added 
	}
	?>
	</table>
<?php 
}
else
{
	echo "<br><br><div class='alert alert-success'>No Record Found!r</div>";
}
?> 
</div>

<?php 

 require_once 'footer.php';