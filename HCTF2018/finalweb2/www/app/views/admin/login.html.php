<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<?php foreach ($errors as $error): ?>
			<?php foreach ($error as $msg): ?>
				<div class="alert alert-warning">
					<a href="#" class="close" data-dismiss="alert">
						&times;
					</a>
					<?= $msg ?>
				</div>
			<?php endforeach ?>
		<?php endforeach ?>
	</div>
	<div class="col-md-5 col-md-offset-3">
		<div class="row">
			<div class="title1">
				<p>管理员登陆</p>
			</div>
		</div>
		<form class="form-horizontal" action="/admin/login" method="post">
			<div class="form-group">
				<label for="username" class="col-sm-2 control-label">用户名</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="username" placeholder="请输入用户名">
				</div>
			</div>
			<div class="form-group">
				<label for="pwd" class="col-sm-2 control-label">密码</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="password" placeholder="请输入密码">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-success">登录</button>
				</div>
			</div>
		</form>
	</div>
</div>
