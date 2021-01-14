<?php
include "perfect_function.php";
session_start();

$table_name = "users";
$username = $_POST['username'];
$password = $_POST['password'];
$user_id = _get_id_from_username($username);
$status =  _get_status_from_id( $user_id);



$pword_table = _get_pword_from_username($username, $table_name);


if ($status==0){
		$_SESSION['error_msg'] = "Account is inactive.";
		header("Location: login.php");
}


elseif (isset($pword_table)) {
	$result = _verify_hash($password, $pword_table);
	if ($result==true) {
		header("Location: dashboard.php");
		$_SESSION['user_id'] = $user_id;
		$text = "User $username hAs succesfully logged in.";
		save_logs($text);
		

	}
	else {
		$_SESSION['error_msg'] = "Password is incorrect. Please try again.";
		header("Location: login.php");
	}
} else {
	$_SESSION['error_msg'] = "Username invalid. Please try again.";
	header("Location: login.php");
}
?>