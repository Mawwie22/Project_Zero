<?php
	include "perfect_function.php";

	$table_name = 'bible_verses';

	//get user ID from URL
	$id = $_GET['id'];

	$book = $_POST['book'];
	$chapter = $_POST['chapter'];
	$verse = $_POST['verse'];
	$text = $_POST['text'];

	$user_editedvalues = array (
		//columname from table => value from post
			"book" => $book, 
			"chapter" => $chapter, 
			"verse" => $verse,
			"text" => $text
	);

	update($user_editedvalues, $id, $table_name);
	header("Location: bibleverses_manage.php");
?>