$(document).ready(function(){
	$(".shoplistleft ul li").hover(function(){
	  $(this).find(".d").toggle();
	  if($(this).attr("class") == 'aaa'){
		$(this).addClass('cur');
		$(this).find("img").attr('src', '/templates/default/shop/images/btn_unfold.gif');
	  }else{
		$(this).removeClass('cur');
		$(this).find("img").attr('src', '/templates/default/shop/images/btn_fold.gif');
	  }
	});
});