<?php
include "perfect_function.php";

$table_name = "users";
$id = $_GET['id'];
$photo = "";

$user_editedvalues = array (
    //columname from table => value from post
        "photo" => $photo
);

update($user_editedvalues, $id, $table_name);

header("Location: news_edit.php?id=".$id);

?>