<?php 

require_once 'connect.php';

require_once 'header.php';
?>
<div class="container">
	<?php 

	if(isset($_POST['addnew'])){

		if( empty($_POST['firstname']) || empty($_POST['total_slp']) || empty($_POST['in_game_slp']) || empty($_POST['address']) || empty($_POST['mmr']) ){
			echo "Please fillout all required fields"; 
		}else{		
			$firstname  	= 	$_POST['firstname'];
			$total_slp 		= 	$_POST['total_slp'];
			$in_game_slp 	= 	$_POST['in_game_slp'];
			$address 		= 	$_POST['address'];
			$mmr 			= 	$_POST['mmr'];
			
			$sql = "INSERT INTO total_slp(Name,Ronin_Address,total_slp,in_game_slp,mmr) 
		    VALUES('$firstname','$address','$total_slp','$in_game_slp','$mmr')";

			if( $con->query($sql) === TRUE){
				echo "<div class='alert alert-success'>Successfully added new user</div>";
			}else{
				echo '<script type="text/javascript">toastr.success("Have Fun")</script>';
			}
		}
	}
	?>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Add New User</h3> 
			<form action="" method="POST">
				<label for="firstname">Firstname</label>
				<input type="text" id="firstname"  name="firstname" class="form-control"><br>
				<label for="total_slp">Total SLP</label>
				<input type="text"  name="total_slp" id="tolal_slp" class="form-control"><br>
				<label for="in_game_slp">In game SLP</label>
				<input type="text"  name="in_game_slp" id="in_game_slp" class="form-control"><br>
				<label for="address">Ronin Address</label>
				<textarea rows="4" name="address" class="form-control"></textarea><br>
				<label for="mmr">MMR</label> 
				<input type="text"  name="mmr" id="MMR" class="form-control"><br>
				<br>
				<input type="submit" name="addnew" class="btn btn-success" value="Add New">
			</form>
		</div>
	</div>
</div>
</div>

<?php 

 require_once 'footer.php';