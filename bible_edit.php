<?php include "admin_header.php"; ?>

<h1 class="page-header">Edit Bible Verse</h1>

<!-- main content -->

<div class="box-content">
	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white file"></i><span class="break"></span>Bible Verses</h2>
			</div>
			<div class="box-content">
				<?php
				//get s ID from URL
				$id = $_GET['id'];

				$form_location = base_url()."bible_edit_proc.php?id=".$id; 
				?>


				<?php
				$table_name = "bible_verses";

				//select user record where ID (column from table) = user ID from URL 
				$get_bibleData = get_where($table_name, $id);

				//fetch result and pass it  to an array
				foreach ($get_bibleData as $key => $row) {
					$book = $row['book'];
					$chapter = $row['chapter'];
					$verse = $row['verse'];
					$text = $row['text'];
					$id = $row['id'];

				}
				?>

				<form class="form-horizontal" method="post" action="<?= $form_location ?>">
					<fieldset>
						<div class="control-group">
							<label class="control-label">Book:</label>
							<div class="controls">
								<input type="text" class="span4" name="book" value="<?= $book ?>" required>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">chapter:</label>
							<div class="controls">
								<input type="text" class="span4" name="chapter" value="<?= $chapter ?>" required>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">verse:</label>
							<div class="controls">
								<input type="text" class="span4" name="verse" value="<?= $verse ?>" required>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">text:</label>
							<div class="controls">
								<textarea name="text" style="resize:none;" id="textarea2" rows="4"><?= $text ?></textarea>
							 </div>
						</div>

						<div class="form-actions">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit">Update changes</button>
							<a class="btn" href="bible_manage.php">Cancel</a>
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