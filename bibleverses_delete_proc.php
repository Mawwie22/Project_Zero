<?php
include "perfect_function.php";

$submit = $_POST['submit'];
if ($submit=='cancel') {
	header("Location: biblevesrses_manage.php");
}

$table_name = "bible_verses";

//get user ID from URL
$id = $_GET['id'];

delete($id, $table_name);

header("Location: bibleverses_manage.php");

?>