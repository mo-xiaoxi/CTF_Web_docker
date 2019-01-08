<div class="row">
<?php if ($multi === false): ?>
	<div class="col-md-6 col-md-offset-3">
			<h2><?= $news->title ?></h2>
			<hr>
			<?php echo base64_decode($news->content); ?>
			<hr>
	</div>
<?php elseif ($multi === true): ?>
	<div class="">
		<table class="table table-hover">
			<?php foreach ($articles as $article): ?>
				<tr>
					<td><a href="/pages/news/<?= $article->id ?>"><?= $article->title ?></a></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
<?php endif; ?>
</div>
