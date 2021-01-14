<?php include "admin_header.php"; ?>

<h1><b> My Profile </h1>

<hr>
<!-- main content -->
<?php
	//get user ID from URL
	$id = $_SESSION['user_id'];

	$table_name = "users";

	//select user record where ID (column from table) = user ID from URL 
	$user_data = get_where($table_name, $id);

	//fetch result and pass it  to an array
	foreach ($user_data as $key => $row) {
		$id =  $row['id'];
		$username = $row['username'];
		$firstname =  $row['firstname'];
		$lastname = $row['lastname'];

	}

	?>

					
		<label>Username: <?= $username ?> </label>

	<br><br>

		<label>Firstname: <?= $firstname ?></label>	<br><br>		
	
		<label>Lastname: <?= $lastname ?></label><br><br><br>
		<a class="btn btn-primary" href="profile_edit.php">Edit Profile</a>

<!-- close main content -->

<?php include "admin_footer.php"; ?>