<?php
include "perfect_function.php";

$submit = $_POST['submit'];
if ($submit=='cancel') {
	header("Location: bible_manage.php");
}

$table_name = "bible_verses";

//get user ID from URL
$id = $_GET['id'];
delete($id, $table_name);



$recent_id = get_max($table_name);
$whoami = _get_username_from_id($_SESSION['user_id']);



$text = "User $whoami has succesfully delete a bible verse ";
$text.= "with an ID of $recent_id";

save_logs($text);

header("Location: bible_manage.php");

?>