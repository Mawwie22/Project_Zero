<?php include "admin_header.php"; ?>



<h1 class="page-header">Bible Verses</h1>

<!-- main content -->

<div class="box-content">

	
	<p>
		<a href="<?= base_url().'bible_create.php' ?>">
			<button type="button" class="btn btn-primary"> &nbsp; &nbsp; Add Bible Verse&nbsp; &nbsp;</button>
		</a>
	</p>
	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white file"></i><span class="break"></span>Users</h2>
			</div>
			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
				  <thead>
					  <tr>
						  <th> Book</th>
						  <th> Chapter</th>
						  <th> Verse</th>
						  <th> Text</th>
						  <th class="span4">Actions</th>
					  </tr>
				  </thead>   
				  <tbody>
				  <?php 
				  		$table_name = "bible_verses";

				  		//get all records from users table
						$user_data = get($table_name);

						//fetch result set and pass it to an array (associative)
				  		foreach ($user_data as $key => $row) {
						$book = $row['book'];
						$chapter = $row['chapter'];
						$verse = $row['verse'];
						$text = $row['text'];
						$id = $row['id'];

				  		$edit_user_url = base_url().'bible_edit.php?id='.$id;
				  		$delete_user_url = base_url().'bible_delete_conf.php?id='.$id;
				  ?>
					<tr>
						<td class="center"><?= $book ?></td>
						<td class="center"><?= $chapter ?></td>
						<td class="center"><?= $verse ?></td>
						<td class="center"><?= $text ?></td>
						<td class="center">
							<a class="btn btn-danger" href="<?= $delete_user_url ?>">
								<i class="halflings-icon white trash"></i> delete 
							</a>
							<a class="btn btn-info" href="<?= $edit_user_url ?>">
								<i class="halflings-icon white edit"></i> edit
							</a>
						</td>
					</tr>
					<?php } ?>
				  </tbody>
				</table> 
			</div>
		</div>
	</div>
</div>

<!-- close main content -->

<?php include "admin_footer.php"; ?>