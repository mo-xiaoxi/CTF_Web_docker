<div class="row">
	<div class="col-md-6 col-md-offset-2">
		<form class="form-horizontal" action="/pages/reportbug" method="post" id="bug">
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
				<label for="upload" class="col-sm-2 control-label">验证图片</label>
				<div class="col-sm-3">
					<input type="file" class="form-control" id="upload">

				</div>
				<div class="col-sm-offset-1">
					<button type="button" class="btn btn-primary" id="pic" >确定</button>
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
		$('#pic').click(function () {
			var formData = new FormData();
			formData.append('file', $('#upload')[0].files[0]);
			$.ajax({
				url: '/files/upload',
				type: 'POST',
				cache: false,
				data: formData,
				processData: false,
				contentType: false
			}).done(function(res) {
				if(res['status'] === 'success') {
					$('#bug').append('<input type="hidden" name="img_path" id="img_path" value="'+res['filename']+'">')
					alert('上传成功');
				}
			}).fail(function(res) {});
		});

		$('#get').click(function () {
			$('#bug').submit();
			alert('提交成功');
		});
	})
</script>