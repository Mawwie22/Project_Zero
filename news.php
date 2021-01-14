<?php include "public_header.php"; ?>
<?php include "perfect_date.php"; ?>

<?php
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));
$lastUriSegment = array_pop($uriSegments);

$data = get_where_custom("latest_news", "page_url", $lastUriSegment);

foreach ($data as $key => $row) {
    $page_title = $row['page_title'];
    $page_content = $row['page_content'];
    $page_description = $row['page_description'];
    $page_url = $row['page_url'];
    $date_published = $row['date_published'];
    $date_created = get_nice_date($date_published, 'mini');
    $posted_by = $row['posted_by'];
    $page_picture = $row['page_picture'];
	$photo_url = base_url().'news_pics/'.$page_picture;
    $whoami = get_fullname_from_id($posted_by);
    $id = $row['id'];
}
?>

<div class="row">
    <div class="col-md-12">
    <h1>
    <?= $page_title ?>
    </h1>
    <p style="color: green; "><strong>by: <?= $whoami ?></strong></p>
    <img src="<?= $photo_url ?>">
    <h4>
    <?= $page_description ?>
    </h4>
    <hr>
    <p>
    <?= $page_content ?>
    </p>
    </div>
</div>
<?php include "public_footer.php"; ?>