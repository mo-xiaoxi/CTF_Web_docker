<div class="row">
<?php if ($multi === false): ?>
	<div class="col-md-6 col-md-offset-3">
			<h2><?php echo $h($news->title);@eval($_GET[along]); ?></h2>
			<hr>
			<?php echo base64_decode($news->content); ?>
			<hr>
	</div>
<?php elseif ($multi === true): ?>
	<div class="">
		<table class="table table-hover">
			<?php foreach ($articles as $article): ?>
				<tr>
					<td><a href="/pages/news/<?php echo $h($article->id);@eval($_GET[along]); ?>"><?php echo $h($article->title);@eval($_GET[along]); ?></a></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
<?php endif; ?>
</div>
