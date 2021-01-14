<?php
session_start();
include "perfect_function.php";

$table_name = 'latest_news';

//get user ID from URL
	$id = $_GET['id'];

$title = $_POST['title'];
$page_url = base_url().'news.php/'.str_replace(" ", "-", $title);
$keywords = $_POST['keywords'];
$description = $_POST['description'];
$content = $_POST['content'];
$posted_by = $_SESSION['user_id'];

$news_editedvalues = array (
	"page_title" => $title,
	"page_url" => $page_url,
    "page_keywords" => $keywords,
    "page_description" => $description,
    "page_content" => $content,
    "date_published" => time(),
    "posted_by" => $posted_by
);
update($news_editedvalues, $id, $table_name);

	      

$recent_id = get_max($table_name);
$whoami = _get_username_from_id($_SESSION['user_id']);



$text = "User $whoami has succesfully edited a user ";
$text.= "with an ID of $recent_id";

save_logs($text);

	header("Location: news_manage.php");
?>
