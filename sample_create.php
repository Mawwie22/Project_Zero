<?php include "admin_header.php"; ?>

<h1 class="page-header">Sample</h1>

<div class="box-content">
	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white file"></i><span class="break"></span>Users</h2>
			</div>
			<div class="box-content">
				<?php $form_location = base_url()."bibleverse_create_proc.php"; ?>
				<form class="form-horizontal" method="post" action="<?= $form_location ?>">
					<fieldset>
					
						<div class="control-group">
							<label class="control-label">Sample Input Text:</label>
							<div class="controls">
							<textarea type="text" class="span4" name="" rows="4" style="resize:none;"></textarea>
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