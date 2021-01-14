<?php include "admin_header.php"; ?>

<h1 class="page-header">Edit Bible Verse</h1>

<!-- main content -->

<div class="box-content">
	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white file"></i><span class="break"></span>Users</h2>
			</div>
			<div class="box-content">
				<?php
				//get user ID from URL
				$id = $_GET['id'];

				$form_location = base_url()."bibleverses_edit_proc.php?id=".$id; 
				?>


				<?php
				$table_name = "bible_verses";

				//select user record where ID (column from table) = user ID from URL 
				$get_userData = get_where($table_name, $id);

				//fetch result and pass it  to an array
				foreach ($get_userData as $key => $row) {
					$id =  $row['id'];
					$book =  $row['book'];
					$chapter=  $row['chapter'];
					$verse = $row['verse'];
					$text = $row['text'];
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
							<label class="control-label">Chapter:</label>
							<div class="controls">
								<input type="text" class="span4" name="chapter" value="<?= $chapter ?>" required>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Verses:</label>
							<div class="controls">
								<input type="text" class="span4" name="verse" value="<?= $verse ?>" required>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Text:</label>
							<div class="controls">
							<textarea type="text" class="span4" name="text" rows="4"  style="resize:none;"><?= $text ?></textarea>
							</div>
						</div>

						<div class="form-actions">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit">Save changes</button>
							<a class="btn" href="bibleverses_manage.php">Cancel</a>
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