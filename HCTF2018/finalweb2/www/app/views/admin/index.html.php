<?php echo $this->html->script(['echarts.common.min']); ?>
<div class="row">
	<div class="col-md-1 sidebar">
		<ul class="list-group">
			<a href="/admin" class="list-group-item active">
				项目概况
			</a>
			<a href="/admin/users" class="list-group-item">查看用户</a>
			<a href="/admin/bugs" class="list-group-item">漏洞列表</a>
			<a href="/admin/news" class="list-group-item">文章列表</a>
			<a href="#" class="list-group-item">漏洞评论</a>
			<a href="#" class="list-group-item">文章评论</a>
		</ul>
	</div>
	<div class="col-md-6">
		<div id="bugs" style="width: 500px;height:300px;"></div>
	</div>
	<div class="row col-md-4">
		<div class="counter blue">
			<div class="counter-content">
				<div class="counter-icon fa fa-newspaper-o"></div>
				<span class="counter-value"><?= $newsCount ?></span>
			</div>
			<h3 class="title">文章数量</h3>
		</div>
		<div class="counter purple">
			<div class="counter-content">
				<div class="counter-icon fa fa-user"></div>
				<span class="counter-value"><?= $usersCount ?></span>
			</div>
			<h3 class="title">用户数量</h3>
		</div>
	</div>
</div>
<script type="text/javascript">
	var bugChart = echarts.init(document.getElementById('bugs'));

	option = {
		title: {
			text: '漏洞总数: <?= $bugsCount ?>\n\n已公开漏洞数: <?= $publicCount ?>',
			left: 'right',
		},
		tooltip: {
			trigger: 'item',
			formatter: "{a} <br/>{b}: {c} ({d}%)"
		},
		legend: {
			orient: 'vertical',
			x: 'left',
			data:['高危漏洞','中危漏洞','低危漏洞']
		},
		series: [
			{
				name:'漏洞数据',
				type:'pie',
				radius: ['50%', '70%'],
				avoidLabelOverlap: false,
				label: {
					normal: {
						show: false,
						position: 'center'
					},
					emphasis: {
						show: true,
						textStyle: {
							fontSize: '30',
							fontWeight: 'bold'
						}
					}
				},
				labelLine: {
					normal: {
						show: false
					}
				},
				data:[
					{value:<?= $highRiskCount ?>, name:'高危漏洞'},
					{value:<?= $midRiskCount ?>, name:'中危漏洞'},
					{value:<?= $lowRiskCount ?>, name:'低危漏洞'}
				]
			}
		]
	};
	bugChart.setOption(option);
</script>