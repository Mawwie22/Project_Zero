<?php include "admin_header.php"; ?>

<h1 class="page-header">Add News</h1>

<!-- main content -->

<div class="box-content">
	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white file"></i><span class="break"></span>Latest News</h2>
			</div>

			<div class="box-content">
				<?php $form_location = base_url()."news_create_proc.php"; ?>
				<form class="form-horizontal" method="post" action="<?= $form_location ?>">
					<fieldset>
						<div class="control-group">
							<label class="control-label">Title:</label>
							<div class="controls">
								<textarea class="none" name="title" style="resize:none;" id="textarea2" rows="4"></textarea>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Keywords:</label>
							<div class="controls">
								<textarea class="none" name="keywords" style="resize:none;" id="textarea2" rows="4"></textarea>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Description:</label>
							<div class="controls">
							<textarea class="none" name="description" style="resize:none;" id="textarea2" rows="4"></textarea>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Content:</label>
							<div class="controls">
								<textarea class="cleditor" name="content" style="resize:none;" id="textarea2" rows="4"></textarea>
							 </div>
						</div>

						<?php
                         
                         $fullname = get_fullname_from_id($_SESSION['user_id']);

						?>
						<div class="control-group">
							<label class="control-label">Posted by:</label>
							<div class="controls">
								<input type="text" class="span4" name="posted" value="<?= $fullname ?>" readonly>
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