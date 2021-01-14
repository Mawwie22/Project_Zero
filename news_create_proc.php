<?php
include "perfect_function.php";
session_start();

$title = $_POST['title'];
$page_url = base_url().'news.php/'.str_replace(" ", "-", $title);
$keywords = $_POST['keywords'];
$description = $_POST['description'];
$content = $_POST['content'];
$posted_by = $_SESSION['user_id'];

$news_data = array(
                  "page_title" => $title,
                  "page_url" => $page_url,
                  "page_keywords" => $keywords,
                  "page_description" => $description,
                  "page_content" => $content,
                  "date_published" => time(),
                  "posted_by" => $posted_by
);

insert($news_data, "latest_news");
header("Location: news_manage.php")

?>