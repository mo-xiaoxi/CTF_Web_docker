<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
	<title>ViSRC</title>
	<?php echo $this->html->style(['bootstrap.min', 'font-awesome.min', 'my/common.css', 'my/home.css', 'my/main.css', 'my/count']); ?>
	<?php echo $this->html->script(['jquery-3.3.1', 'bootstrap.min']); ?>
	<?php echo $this->html->link('Icon', null, ['type' => 'icon']); ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<ul class="nav navbar-nav navbar-right">

						<li><a href="/"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
						<li><a href="/pages/news"><span class="glyphicon glyphicon-book"></span> 文章</a></li>
						<li><a href="/pages/bugs"><span class="glyphicon glyphicon-screenshot"></span> 已公开的漏洞</a></li>
						<?php if (\lithium\storage\Session::read('isLogin') === 1): ?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-th-list"></span> 菜单</a>
								<ul class="dropdown-menu">
									<li><a href="/users">个人中心</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="/users/bugs">我的漏洞</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="/pages/reportbug">提交漏洞</a></li>
								</ul>
							</li>
							<li><a href="/users/logout"><span class="glyphicon glyphicon-log-out"></span> 登出</a></li>
						<?php else: ?>
							<li><a href="/users/register"><span class="glyphicon glyphicon-user"></span> 注册</a></li>
							<li><a href="/users/login"><span class="glyphicon glyphicon-log-in"></span> 登录</a></li>
						<?php endif ?>
					</ul>
					<h3>&#10177;</h3>
				</div>
			</nav>
		</div>

		<hr>

		<div class="content">
			<?php echo $this->content(); ?>
		</div>

		<hr>

		<div class="footer">
			<p>&copy; ViSRC<?php echo date('Y') ?></p>
		</div>

	</div>
</body>
</html>