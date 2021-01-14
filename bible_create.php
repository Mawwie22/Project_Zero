<?php include "admin_header.php"; ?>

<h1 class="page-header">Add Bible Verse</h1>

<!-- main content -->

<div class="box-content">
	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white file"></i><span class="break"></span>Bible Verses</h2>
			</div>

			<div class="box-content">
				<?php $form_location = base_url()."bible_create_proc.php"; ?>
				<form class="form-horizontal" method="post" action="<?= $form_location ?>">
					<fieldset>
						<div class="control-group">
							<label class="control-label">Book:</label>
							<div class="controls">
								<input type="text" class="span4" name="book" required>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">chapter:</label>
							<div class="controls">
								<input type="text" class="span4" name="chapter" required>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">verse:</label>
							<div class="controls">
								<input type="text" class="span4" name="verse" required>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">text:</label>
							<div class="controls">
								<textarea name="text" style="resize:none;" id="textarea2" rows="4"></textarea>
							 </div>
						</div>


						<div class="form-actions">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit">Save changes</button>
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