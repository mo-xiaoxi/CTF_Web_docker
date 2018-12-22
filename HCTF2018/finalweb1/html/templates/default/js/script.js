$( function(){
			
	var imgField=$('#J_imgList');
	var imgList=$('#J_imgList>li');
	var navField=$('#J_navList');
	var navList=$('#J_navList>li');
	var btnPrev=$('#J_prev');
	var btnNext=$('#J_next');
	var turnPage=4;//每屏显示数
	var T=5000;//切换间隔时间
	var turnT=300;//animate时间
	var N=0;//图片初始索引
	var P=1;//屏初始索引

	var goFun=null;
	var hoverFun=null;
	var triggerFun=null;
	var delayFun=null
	var navListW=navList.outerWidth(true);
	var turnPages=Math.ceil(navList.size()/turnPage);
	//初始图片区域高度与标题区域宽度
	imgField.height(imgList.size()*imgList.height());
	navField.width(navList.size()*navListW);
	
	//初始自动切换
	GO();
	
	//自动切换
	function GO() {
		imgField.stop().animate({marginTop:-N*(imgList.height())},turnT);
		navList.eq(N).addClass('hover').siblings().removeClass('hover');
		if(N%turnPage==0) {
			navField.stop().animate({
				marginLeft:-N*navListW+'px'
			},turnT);
		}
		N++;
		//console.log(N)
		N= N>=imgList.size()?0:N;
		P=Math.ceil(N/turnPage);
		goFun=setTimeout(GO,T);
	}

	//停止切换
	function STOP() {
		clearTimeout(goFun);
	}

	//标题划过移出
	navList.hover( function() {
		clearTimeout(delayFun);
		STOP();
		N=navList.index(this);
		imgField.stop().animate({
			marginTop:-N*(imgList.height())
		},turnT);
		$(this).addClass('hover').siblings().removeClass('hover');
	}, function() {
		N++;
		delayFun=setTimeout(GO,T)
	});
	
	//图片划过移出
	imgList.hover( function() {
		N=imgList.index(this);
		navList.eq(N).trigger('mouseover');
	}, function() {
		navList.eq(N).trigger('mouseleave');
	});
	
	//左切换
	btnPrev.click( function() {
		if(P==1) {
			navField.animate({marginLeft:-turnPage*navListW*(turnPages-1)+'px'},turnT);
			P=turnPages;
		} else {
			STOP();
			P--;
			navField.animate({marginLeft:-turnPage*navListW*(P-1)+'px'},turnT);
		}
		navList.eq((P-1)*turnPage).trigger('mouseover');
		GO();
	});
	
	//右切换
	btnNext.click( function() {
		if(P==turnPages) {
			navField.animate({marginLeft:0},turnT);
			P=1;
		} else {
			STOP();
			P++;
			navField.animate({
				marginLeft:-turnPage*navListW*P+'px'
			});
		}
		navList.eq((P-1)*turnPage).trigger('mouseover');
		GO();
	});
	
});