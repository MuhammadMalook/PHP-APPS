<?php 

require_once 'connect.php';

require_once 'header.php';

?>
<div class="container">
	<?php 
	
	if(isset($_POST['update'])){

		if( empty($_POST['firstname']) || empty($_POST['total_slp']) || empty($_POST['in_game_slp']) || empty($_POST['address']) || empty($_POST['mmr']) )
		{
			echo "Please fillout all required fields"; 
		}else{		
			$firstname  = $_POST['firstname'];
			$total_slp 	= $_POST['total_slp'];
			$address 	= $_POST['address'];
			$in_game_slp  	= $_POST['in_game_slp'];
			$mmr = 			$_POST['mmr'];
			$sql = "UPDATE total_slp SET Name='{$firstname}', total_slp = '{$total_slp}',
						Ronin_Address = '{$address}', in_game_slp = '{$in_game_slp}', mmr='{$mmr}'
						WHERE Name='". $_POST['firstname']."'";

			if( $con->query($sql) === TRUE){
				echo "<div class='alert alert-success'>Successfully updated  user</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: There was an error while updating user info</div>";
			}
		}
	}
	$Name = $_GET['name'];
	$sql = "SELECT * FROM total_slp WHERE Name='{$Name}'";
	$result = $con->query($sql);
	if($result->num_rows < 1){
		header('Location: index.php');
		exit;
	}
	$row = $result->fetch_assoc();
	?>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY User</h3> 
			<form action="" method="POST">
				<input type="hidden" value="<?php echo $row['Name']; ?>" name="firstname">
				<label for="firstname">Firstname</label>
				<input type="text" id="firstname"  name="firstname" value="<?php echo $row['Name']; ?>" class="form-control"><br>
				<label for="total_slp">Total SLP</label>
				<input type="text"  name="total_slp" id="total_slp" value="<?php echo $row['total_slp']; ?>" class="form-control"><br>
				<label for="in_game_slp">In game SLP</label>
				<input type="text"  name="in_game_slp" id="in_game_slp" value="<?php echo $row['in_game_slp']; ?>" class="form-control"><br>
				<label for="address">Ronin Address</label>
				<textarea rows="4" name="address" class="form-control"><?php echo $row['Ronin_Address']; ?></textarea><br>
				<label for="mmr">MMR</label> 
				<input type="text"  name="mmr" id="mmr"  value="<?php echo $row['mmr']; ?>" class="form-control"><br>
				<br>
				<input type="submit" name="update" class="btn btn-success" value="Update">
			</form>
		</div>
	</div>
</div>
</div>

<?php 

 require_once 'footer.php';