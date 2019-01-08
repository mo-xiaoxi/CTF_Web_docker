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
						<li data-target="#myCarousel" data-slide-to="<?= $i ?>"></li>
					<?php endif; ?>
					<?php $i += 1; ?>
				<?php endforeach; ?>
			</ol>
			<div class="carousel-inner">
				<?php $i = 1; ?>
				<?php foreach ($indexNews as $key => $news): ?>

					<?php if ($i === 1): ?>
						<div class="item active">
							<a href="/pages/news/<?= $news->id ?>"><img src="/img/790678.png" alt="<?= $i ?>"></a>
							<div class="carousel-caption"><h3><?= $news->title ?></h3></div>
						</div>
					<?php else: ?>
						<div class="item">
							<a href="/pages/news/<?= $news->id ?>"><img src="/img/790678.png"" alt="<?= $i ?>"></a>
							<div class="carousel-caption"><h3><?= $news->title ?></h3></div>
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
					<a href="/pages/news/<?= $article->id ?>" class="list-group-item"><?= $article->title ?></a>
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
						<p class="title"><?= $second['username'] ?></p>
						<p><span class="score"><?= $second['score'] ?></span>Scores</p>
					</div>
				<?php endif; ?>
				<?php if (!empty(current(reset($indexRanks)))): ?>
					<div class="pack first">
						<p class="title"><?= current($indexRanks)['username'] ?></p>
						<p><span class="score"><?= current($indexRanks)['score'] ?></span>Scores</p>
					</div>
				<?php endif; ?>
				<?php reset($indexRanks); $third = end($indexRanks); if(!empty($third)): ?>
					<div class="pack third">
						<p class="title"><?= $third['username'] ?></p>
						<p><span class="score"><?= $third['score'] ?></span>Scores</p>
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
				<td><?= $bug->title ?></td>
				<td><?php switch ($bug->risk) { case 1: echo '低危'; break; case 2: echo '中危'; break; case 3: echo '高危'; break; } ?></td>
				<td><?php echo $bug->user->username ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>