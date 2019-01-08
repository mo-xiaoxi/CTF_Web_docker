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
	<div class="col-md-6 col-md-offset-2">
		<form class="form-horizontal" action="/admin/createnews" method="post" id="news">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">标题</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="name" name="title" placeholder="请输入标题">
				</div>
			</div>
			<div class="form-group">
				<label for="content" class="col-sm-2 control-label">内容</label>
				<div class="col-sm-10">
					<textarea class="form-control" id="content" name="content" placeholder="请输入内容" rows="6"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-success" id="get">提交</button>
				</div>
			</div>
		</form>
	</div>
</div>
<script>
	$(document).ready(function () {
		$('#get').click(function () {
			$('#bug').submit();
			alert('提交成功');
		});
	})
</script>