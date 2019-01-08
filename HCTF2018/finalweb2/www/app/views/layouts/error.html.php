<!doctype html>
<html>
<head>
	<?php echo $this->html->charset(); ?>
	<title>Unhandled exception</title>
	<?php echo $this->html->style(['bootstrap.min', 'lithified', 'debug']); ?>
	<?php echo $this->scripts(); ?>
	<?php echo $this->styles(); ?>
	<?php echo $this->html->link('Icon', null, ['type' => 'icon']); ?>
</head>
<body class="lithified">
	<div class="container">
		<div class="masthead">
			<ul class="nav nav-pills pull-right">
				<li>
					<a href="/">首页</a>
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
			<p>&copy; ViSRC <?php echo date('Y') ?></p>
		</div>
	</div>
</body>
</html>