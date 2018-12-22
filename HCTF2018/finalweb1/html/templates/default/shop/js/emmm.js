//逸祺UI 弹出二维码
function tcjs(type){
  $("."+type).hover(function(){
    $("#"+type).show();
    },function(){
    $("#"+type).hide();
  });
}

//逸祺UI 弹出单组导航条(适用于商城弹出一组导航菜单)
function navjs(type){
  $("."+type).hover(function(){
		$('#'+type).show();
    },function(){
		$('#'+type).hover(function(){
			$('#'+type).show();
		},function(){
			$('#'+type).hide();
		});
		$("#"+type).hide();
  });
}