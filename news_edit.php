<?php include "admin_header.php"; ?>

<h1 class="page-header">Edit News</h1>

<!-- main content -->
<?php
	//get user ID from URL
    $id = $_GET['id'];                  
    include "perfect_date.php";

	$form_location = base_url()."news_edit_proc.php?id=".$id; 
	$table_name = "latest_news";

	//select user record where ID (column from table) = user ID from URL 
	$get_newsData = get_where($table_name, $id);

	//fetch result and pass it  to an array
	foreach ($get_newsData as $key => $row) {
		$id =  $row['id'];
		$page_title = $row['page_title'];
		$page_keywords = $row['page_keywords'];
		$page_description = $row['page_description'];
		$page_content = $row['page_content'];
		$page_url = $row['page_url'];
        $posted_by = $row['posted_by'];
        $fullname = get_fullname_from_id($_SESSION['user_id']);
        $time = get_nice_date(time(), "mini");
        $date_published = $row['date_published'];
        $id = $row['id'];
        $page_picture = $row['page_picture'];
		$photo_url = base_url().'news_pics/'.$photo;
	}
	?>

    <div class="box-content">
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2>
					<i class="halflings-icon white file"></i>
					<span class="break"></span>Additional Options
				</h2>
			</div>
			<div class="box-content">
				<?php
				if ($page_picture == ""){
				?>
				<a href="<?= base_url() ?>news_uploadphoto.php?id=<?= $id ?>">
					<button type="button" class="btn btn-primary">Upload Photo</button>
				</a>
				<?php
				} else {
				?>
				<img src="<?= $photo_url ?>" style="height: 200px;width: 200px;" class="img-responsive">
				<br><br>
				<a href="<?= base_url() ?>news_deletephoto.php?id=<?= $id ?>">
					<button type="button" class="btn btn-danger">Delete Photo</button>
				</a>
				<br>
				<?php
				}
				?>
			</div>
		</div>
	</div>
<div class="box-content">
	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white file"></i><span class="break"></span>News</h2>
			</div>
			<div class="box-content">

				<form class="form-horizontal" method="post" action="<?= $form_location ?>">
                <fieldset>
						<div class="control-group">
							<label class="control-label">Title:</label>
							<div class="controls">
								<textarea class="none" name="title" style="resize:none;" id="textarea2" rows="4" ><?= $page_title ?></textarea>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Keywords:</label>
							<div class="controls">
								<textarea class="none" name="keywords" style="resize:none;" id="textarea2" rows="4"><?= $page_keywords ?></textarea>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Description:</label>
							<div class="controls">
							<textarea class="none" name="description" style="resize:none;" id="textarea2" rows="4"><?= $page_description ?></textarea>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Content:</label>
							<div class="controls">
								<textarea class="cleditor" name="content" style="resize:none;" id="textarea2" rows="4"><?= $page_content ?></textarea>
							 </div>
						</div>

						<?php
                         
                         //$fullname = get_fullname_from_id($_SESSION['user_id']);

						?>
						<div class="control-group">
							<label class="control-label">Posted by:</label>
							<div class="controls">
								<input type="text" class="span4" name="posted" value="<?=  get_fullname_from_id($posted_by) ?>" readonly>
							</div>
						</div>


						<div class="form-actions">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit">Save changes</button>
							<a class="btn" href="news_manage.php">Cancel</a>
						</div>
						
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- close main content -->

<?php include "admin_footer.php"; ?>