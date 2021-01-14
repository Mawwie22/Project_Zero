<?php include "admin_header.php"; ?>

<h1><b> Edit Profile </h1>

<br><br>


<!-- main content -->
<?php
	//get user ID from URL
	$id = $_SESSION['user_id'];

	$form_location = base_url()."profile_edit_proc.php?id=".$id; 
	$table_name = "users";

	//select user record where ID (column from table) = user ID from URL 
	$get_userData = get_where($table_name, $id);

	//fetch result and pass it  to an array
	foreach ($get_userData as $key => $row) {
		$id =  $row['id'];
		$username = $row['username'];
		$firstname =  $row['firstname'];
		$lastname = $row['lastname'];

	}
	?>



				<form class="form-horizontal" method="post" action="<?= $form_location ?>">

					<label>Username: &nbsp;&nbsp </label>

					<input type="text" name="username" value="<?= $username ?>" required><br><br>
					

					<label>Firstname: &nbsp;&nbsp </label>
					
					<input type="text" name="firstname" value="<?= $firstname ?>" required><br><br>
				

					<label>Lastname: &nbsp;&nbsp </label>
					<input type="text" name="lastname" value="<?= $lastname ?>" required>

					<br><br>

					<button type="submit" class="btn btn-primary" name="submit" value="Submit">Update changes</button>
						
							
				</form>
	

<!-- close main content -->

<?php include "admin_footer.php"; ?>