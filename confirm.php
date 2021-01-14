<?php
include "perfect_function.php";
$token = $_GET['token'];

$user_id = _get_id_from_token($token);
$user_data = array (
			"status" => 1
);

//update STATUS of the user
update($user_data, $user_id, "users");
?>

<h1>ACCOUNT SUCCESSFULLY VERIFIED!</h1>