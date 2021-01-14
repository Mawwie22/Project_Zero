<?php include "public_header.php"; ?>


<div class="row">
  <div class="col-md-12">
    <div class="col-md-6">
      <h2>Welcome to SITE's online news website</h2>      
    </div>
    <div class="col-md-6">
      <a href="<?= base_url() ?>signup.php" class="pull-right">
        <button class="btn btn-primary btn-lg">JOIN THE BROWSER</button>
      </a>    
    </div>
  </div>
</div>

<?php
$table_name = "sliderpics";
$count_rows = count_rows($table_name);
?>

<?php
if ($count_rows > 0) {
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->

<ol class="carousel-indicators">
  <?php for ($i=0; $i <= $count_rows-1 ; $i++) {
  if ($i==0) { ?>
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <?php 
  } else {
  ?>
  <li data-target="#myCarousel" data-slide-to="<?= $i ?>"></li>
  <?php } } ?>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner">
  <?php
  $sliderpics_data = get($table_name);

  $i = 0;
  foreach ($sliderpics_data as $key => $row) {
  $picture = $row['picture'];

  if ($i==0) { ?>
  <div class="item active">
  <?php } else { ?>
  <div class="item">
  <?php } ?>
    <img src="<?= base_url() ?>slider_pics/<?= $picture ?>" alt="<?= $picture ?>" style="width:100%;">
  </div>
  <?php $i++; } //end foreach ?>
</div>

<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  <span class="sr-only">Next</span>
</a>
</div>

<?php
}
?>

<?php include "public_footer.php"; ?>