<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
	<title>ViSRC</title>
	<?php echo $this->html->style(['bootstrap.min', 'lithified', 'font-awesome.min']); ?>
	<?php echo $this->html->script(['bootstrap.min', 'jquery.min']); ?>
	<?php echo $this->scripts(); ?>
	<?php echo $this->styles(); ?>
	<?php echo $this->html->link('Icon', null, ['type' => 'icon']); ?>
</head>
<body class="lithified">
	<div class="container-narrow">

		<div class="masthead">
			<ul class="nav nav-pills pull-right">
				<li>
					<a href="/">首页</a>
				</li>
				<li>
					<a href="/users">个人中心</a>
				</li>
				<li>
					<a href="/users/logout">登出</a>
				</li>
			</ul>
			<h3>&#10177;</h3>
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