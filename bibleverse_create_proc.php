<?php

include "perfect_function.php";

$table_name = "bible_verses";

$book = $_POST['book'];

$chapter = $_POST['chapter'];

$verse = $_POST['verse'];
$text = $_POST['text'];

$user_data = array(
	//columname from table => value from post
			"book" => $book, 
			"chapter" => $chapter, 
			"verse" => $verse,
			"text" => $text
);

insert($user_data, $table_name);
header("Location: bibleverses_manage.php");
?>