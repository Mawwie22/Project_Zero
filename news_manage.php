<?php include "admin_header.php"; ?>

<h1 class="page-header">News</h1>

<!-- main content -->
<div class="box-content">

	<?php $create_user_url = base_url()."news_create.php"; ?>
	<p>
		<a href="<?= $create_user_url ?>">
			<button type="button" class="btn btn-primary"> &nbsp; &nbsp; Add News &nbsp; &nbsp;</button>
		</a>
	</p>


	<div class="row-fluid sortable">	
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white file"></i><span class="break"></span>Latest News</h2>
			</div>
			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
				  <thead>
					  <tr>
                          <th> &nbsp </th>
						  <th> Title</th>
						  <th> URL</th>
						  <th> Date Created</th>
						  <th> Author</th>
						  <th class="span4">Actions</th>
					  </tr>
				  </thead>   
				  <tbody>

                         

                  <?php 
                  include "perfect_date.php";
                  
				  		$table_name = "latest_news";

				  		//get all records from users table
						$news_data = get($table_name);

						//fetch result set and pass it to an array (associative)
				  		foreach ($news_data as $key => $row) {
						$page_title = $row['page_title'];
						$page_url = $row['page_url'];
                        $posted_by = $row['posted_by'];
                        $fullname = get_fullname_from_id($_SESSION['user_id']);
                        $time = get_nice_date(time(), "mini");
                        $page_picture = $row['page_picture'];
						$photo_url = base_url().'news_pics/'.$page_picture;
						$id = $row['id'];

				  		$edit_user_url = base_url().'news_edit.php?id='.$id;
				  		$delete_user_url = base_url().'news_deleteconf.php?id='.$id;
				  ?>
					<tr>
                    <td class="center span2">
							<?php
							if ($page_picture == "") {
							echo "<i>No photo available.</i>";
							}
							else {
							?>
							<img src="<?= $photo_url ?>" style="height: 100;width: 100;" class="img-responsive">
							<?php
							}
							?>
						</td>                        
						<td class="center"><?= $page_title ?></td>
						<td class="center"> <a href="<?= $page_url ?>"> <?= $page_url ?> </a></td>
						<td class="center"><?= $time ?></td>
						<td class="center"><?= get_fullname_from_id($posted_by) ?></td>
						
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

<?php include "admin_footer.php"; ?>