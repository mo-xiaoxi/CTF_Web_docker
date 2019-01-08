<div class="col-md-6 col-md-offset-4">
	<h2><?= $bug->title ?></h2>
	<?php echo base64_decode($bug->content); ?>
	<img src="<?= $bug->img_path ?>" height="100px" width="100px">
</div>