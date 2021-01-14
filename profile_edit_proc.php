<?php
	include "perfect_function.php";

	$table_name = 'users';

	//get user ID from URL
	$id = $_GET['id'];

	$username = $_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$status = _get_status_from_id($_GET['id']);
	if ($status!=1) {
		$status = 0;
	}

	$user_editedvalues = array (
			"username" => $username, 
			"firstname" => $firstname,
			"lastname" => $lastname, 
			"status" => $status
	);

	update($user_editedvalues, $id, $table_name);

;

	header("Location: profile.php");
?>