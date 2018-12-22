$(document).ready(function(){
	context.init({preventDoubleContext: false});
	context.settings({compress: true});
	context.attach('html', [
		{header: '右健菜单'},
		{text: '退后一页', href: 'javascript:history.go(-1)'},
		{text: '刷新当前页', href: 'javascript:window.location.reload()'},
		{divider: true},
		{text: '复制快捷键：Ctrl+c', href: '#'},
		{text: '粘贴快捷键：Ctrl+v', href: '#'}
	]);
	
	
	$(document).on('mouseover', '.me-codesta', function(){
		$('.finale h1:first').css({opacity:0});
		$('.finale h1:last').css({opacity:1});
	});
	
	$(document).on('mouseout', '.me-codesta', function(){
		$('.finale h1:last').css({opacity:0});
		$('.finale h1:first').css({opacity:1});
	});
	
});