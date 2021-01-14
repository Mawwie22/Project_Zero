
<?php include "admin_header.php";
include "perfect_date.php";

_auto_clear();
?>



<h1>HELLO 

<?= _get_firstname_from_id($_SESSION['user_id']) ?>,

</h1>

<h3>WELCOME TO DASHBOARD! </h3>

<?php

$table_name = "logs";
$mysql_query ="select * from logs order by id DESC";
$log_data = custom_query($mysql_query);



foreach ($log_data as $key => $row) {
	$text = $row['text'];
	$datetime = get_nice_date($row['datetime'], "full");

	?>
	



<div class="alert alert-info">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong><?= $datetime ?> </strong> <br>
							<?= $text ?>
						</div>
						<?php
                          }
                          ?>

<?php include "admin_footer.php";?>