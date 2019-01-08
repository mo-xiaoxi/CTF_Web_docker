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
		<div class="row">
			<div class="col-md-6">
				<div class="info" id="info1">
					<div id="headPic">
						<div class="pic-main">
							<img src="<?= $src ?>">
						</div>
					</div>
					<div id="infoHead">

					</div>
					<div class="info-body">
						<div class="field">
							<div class="key-field">用户名</div>
							<div class="value-field"><?= $user->username ?></div>
						</div>
						<div class="field">
							<div class="key-field">性别</div>
							<div class="value-field"><?php if($user->sex) { echo '男'; } else { echo '女'; } ?></div>
						</div>
						<div class="field">
							<div class="key-field">邮箱</div>
							<div class="value-field"><?= $user->email ?></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="info" id="info2">
					<div class="info-body">
						<div class="field">
							<div class="key-field">团队</div>
							<div class="value-field"><?= $user->team ?></div>
						</div>
						<div class="field">
							<div class="key-field">分数</div>
							<div class="value-field"><?= $user->score ?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>