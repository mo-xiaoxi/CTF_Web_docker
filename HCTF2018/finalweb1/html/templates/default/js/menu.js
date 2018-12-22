//menu

$(document).ready(function(){
	
$(".item").on("mouseenter", function () {
    var $this = $(this);
    $this.addClass("indexgb");

}).on("mouseleave", function () {
    var $this = $(this);
    $this.removeClass("indexgb");
});

//index-product
$('.productli li').hover(function(){
	$(this).addClass('cur');
	},function(){
	$(this).removeClass('cur');
	})
//index-news	
$('.news li').hover(function(){
	$(this).addClass('cur');
	},function(){
	$(this).removeClass('cur');
	
	})
	//view-pro
	
	$('.l_pro dd').hover(function(){
		$(this).children('ul').show();
		
		},function(){
		$(this).children('ul').hide();
		
		})
	
//view-left	
	//banner
	
	$(function(){
  
  var gs = $(".ul01 li").length;
  var s;
  
  $(".ul02 li").bind("mouseover",TheClick);
  function TheClick(){
	  var Dq = $(".ul02 li").index(this);
	  $(".li01").removeClass("li01");
	  $(".ul01 li").eq(Dq).attr("class","li01");
	  $("#li02").removeAttr("id");
	  $(this).attr("id","li02");
  }
  s = setInterval(zdbf,5000);
      
  function zdbf(){
	  var Dq01 = $(".ul01 li").index($(".li01"));
	  $(".li01").removeClass("li01");
	  //alert($("ul01 li").length);
	  if(Dq01==$("ul01 li").length-1){
		  //alert($("ul01 li").length)
		  $(".ul01 li").eq(0).attr("class","li01"); 
		  $("#li02").removeAttr("id");
		  $(".ul02 li").eq(0).attr("id","li02"); 
	   }if(Dq01==$(".ul01 li:last").index($(".li01")-1)){
		   $(".ul01 li").eq(0).attr("class","li01"); 
		  $("#li02").removeAttr("id");
		  $(".ul02 li").eq(0).attr("id","li02"); 
		   }else{
		 $(".ul01 li").eq(Dq01+1).attr("class","li01"); 
		 $("#li02").removeAttr("id");
		  $(".ul02 li").eq(Dq01+1).attr("id","li02"); 
	   }
  }
	
})

	
  });


