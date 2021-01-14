<?php
	include "perfect_function.php";

	$table_name = 'bible_verses';

	//get user ID from URL
	$id = $_GET['id'];
	$book = $_POST['book'];
	$chapter = $_POST['chapter'];
	$verse = $_POST['verse'];
	$text = $_POST['text'];

	$bible_editedvalues = array (
		//columname from table => value from post
			"book" => $book, 
			"chapter" => $chapter, 
			"verse" => $verse,
			"text" => $text
	);

	$_SESSION['upd_msg'] = "Bible details were successfully updated.";
	update($bible_editedvalues, $id, $table_name);


insert($bible_data, $table_name);

$recent_id = get_max($table_name);
$whoami = _get_username_from_id($_SESSION['user_id']);



$text = "User $whoami has succesfully edit a bible verse";
$text.= "with an ID of $recent_id";

save_logs($text);
	header("Location: bible_manage.php");
?>