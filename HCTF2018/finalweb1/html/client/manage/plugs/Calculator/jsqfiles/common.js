
var fn = Function.prototype;
fn.extend = function(foo){
	foo.call(this);
}
var date = Date.prototype;
date.toString = function(format){
	var year = this.getFullYear(),month = this.getMonth(),day = this.getDate();
	if(format){
		return format.replace(/yyyy/gi,year).replace(/yy/gi,year.toString().substr(2,2)).replace(/m/gi,month+1).replace(/d/gi,day);
	}else{return (year + "-" + (month + 1) + "-" + day);}
}
Date.diff = date.diff = function(lastDate,firstDate){
	if(!firstDate){firstDate = this;}
	var diff = {};
	diff.days = Math.floor((lastDate.getTime() - firstDate.getTime())/(1000*3600*24));
	diff.years = parseFloat(diff.days/365).toFixed(2);
	diff.months = parseFloat(diff.days/30).toFixed(2);
	diff.hours = diff.days*24;
	diff.seconds = diff.days*24*3600;
	diff.mins = diff.days*24*60;
	return diff;
}
Date.get = function(dateString){
	if(dateString){
		var re = /(\d{2,4}).+(\d{1,2}).+(\d{1,2})/g;
		var isCurrect = re.test(dateString);
		if(isCurrect){return new Date(RegExp.$1,RegExp.$2,RegExp.$3);}
	}
	return new Date();
}
var string = String.prototype;
string.toNum = function(){return Number(this.replace(/\D/gi,""));}
string.trim = function(isGlobal){
	if(isGlobal){return this.replace(/\s+/g,"");}
	else{return this.replace(/(^\s+)|(\s+$)/g,"");}
}
var array = Array.prototype;
array.insert = function(index,element){
	this.splice(index,0,element);
}
array.remove = function(index){
	this.splice(index,1);
}
array.replace = function(index,element){
	this.splice(index,1,element);
}
array.include = function(element){
	var count = this.length;
	var i = 0;
	var indexes = [];
	while(i < count){
		if(this[i] == element){indexes.push(i);}i++;
	}
	return ((indexes.length < 1) ? -1 : indexes);
}
array.clone = function(cloner){
	this.clear();
	var count = cloner.length;
	for(var i=0;i<count;i++){
		this.push(cloner[i]);
	}
}
array.merger = function(target,index){
	index = (index ? index : 0);
	var count = target.length;
	for(var i=0;i<count;i++){
		this.insert((index+count),target[i]);
	}
}
array.each = function(foo){
	var count = this.length;
	var i = 0;
	while(i < count){
		foo(this[i],i,this);
		i++;
	}
}
array.filter = function(foo,isReverse){
	var count = this.length;
	var i = count - 1;
	while(i >= 0){
		var result = foo(this[i]);
		if(isReverse){
			if(result){
				this.remove(i);
			}
		}else{
			if(!result){
				this.remove(i);
			}
		}
		i--;
	}
}
array.distance = function(){
	var count = this.length;
	var i = count - 1;
	while(i >= 0){
		var indexes = this.include(this[i]);
		if(indexes.length && indexes.length > 1){
			this.remove(i);
		}
		i--;
	}
}
array.clear = function(){
	this.length = 0;
}
/******************** prototype end ********************/
/******************** myjs ********************/
var $ = function(obj,scoper){
	if(scoper){
		if(scoper.length && scoper.instance){
			var count = scoper.length;
			for(var i=0;i<count;i++){
				if(typeof obj == "string"){
					if(scoper[i].id){
						if(scoper[i].id.toLowerCase() == obj.toLowerCase()){obj = document.getElementById(obj);}
					}
				}else{
					if(scoper[i] == obj){obj = scoper[i];}
				}
			}
		}else{
			if(typeof obj == "string"){obj = scoper.getElementById(obj);}
		}
	}else{obj = document.getElementById(obj);}
	my.expand.call(obj);
	return obj;
}
var $n = function(name,scoper){
	var objs = [];
	if(scoper){
		if(scoper.length && scoper.instance){
			var count = scoper.length;
			for(var i=0;i<count;i++){
				if(scoper[i].name){
					if(scoper[i].name.toLowerCase() == name.toLowerCase()){objs.push(scoper[i]);}
				}
			}
		}else{objs = scoper.getElementsByName(name);}
	}else{objs = document.getElementsByName(name);}
	objs.instance = "array";
	my.expand.call(objs);
	for(var i=0;i<objs.length;i++){my.expand.call(objs[i]);}
	return objs;
}
var $t = function(tagName,scoper){
	var objs = [];
	if(scoper){
		if(scoper.length && scoper.instance){
			var count = scoper.length;
			for(var i=0;i<count;i++){
				if(scoper[i].tagName){
					if(scoper[i].tagName.toLowerCase() == tagName.toLowerCase()){objs.push(scoper[i]);}
				}
			}
		}else{objs = scoper.getElementsByTagName(tagName);}
	}else{objs = document.getElementsByTagName(tagName);}
	objs.instance = "array";
	my.expand.call(objs);
	for(var i=0;i<objs.length;i++){my.expand.call(objs[i]);}
	return objs;
}
var $css = function(cssName,scoper){
	var objs = [];
	var scope = scoper || document.body;
	if(scope.length && scope.instance){objs = scope;}
	else{objs = scope.childNodes;}
	var count = objs.length;
	var cObjs = [];
	for(var i=0;i<count;i++){
		if(objs[i].className){
			if(objs[i].className.toLowerCase() == cssName.toLowerCase() || (objs[i].className.toLowerCase().indexOf(cssName.toLowerCase()) != -1)){
				my.expand.call(objs[i]);
				cObjs.push(objs[i]);
			}
		}
	}
	cObjs.instance = "array";
	my.expand.call(cObjs);
	return cObjs;
}
var $c = function(tagName){
	tagName = tagName || "DIV";
	var obj = document.createElement(tagName);
	my.expand.call(obj);
	return obj;
}
var my = {
	vars : {
		methods : []
	},
	// 对象方法扩展
	expand : function(){
		this.$ = function(obj){return $(obj,this);}
		this.$t = function(tagName){return $t(tagName,this);}
		this.$css = function(cssName){return $css(cssName,this);}
		this.$n = function(name){return $n(name,this);}
		this.appendTo = function(render){render.appendChild(this);return this;}
		this.removeBy = function(render){render.remove(this);}
		this.remove = function(obj){
			if(obj.parentNode == this){
				this.removeChild(obj);
			}
		}
		this.html = function(html){
			if(html != null){this.innerHTML = html;}
			else{return this.innerHTML;}
		}
		this.text = function(text){
			if(text != null){this.innerText = text;}
			else{return this.innerText;}
		}
		this.parent = function(){
			if(this.parentNode){
				var node = this.parentNode
				my.expand.call(node);
				return node;
			}
			return null;
		}
		this.prev = function(){
			if(this.previousSibling){
				var node = this.previousSibling;
				my.expand.call(node);
				return node;
			}
			return null;
		}
		this.next = function(){
			if(this.nextSibling){
				var node = this.nextSibling;
				my.expand.call(node);
				return node;
			}
			return null;
		}
		this.bind = function(eventType,eventMethod,capture){my.events.bind(this,eventType,eventMethod,capture);}
		this.release = function(eventType,eventMethod,capture){my.events.release(this,eventType,eventMethod,capture);}
		this.attr = function(attrs){
			for(var key in attrs){this[key] = attrs[key];}
			return this;
		}
		this.css = function(sheet){
			if(typeof sheet == "string"){
				sheet.replace(/\{?\}?/,"");
				var shts = sheet.split(';');
				for(var i=0;i<shts.length-1;i++){
					var itm = shts[i].split(':');
					this.style[itm[0]] = itm[1];
				}
			}else{
				for(var key in sheet){this.style[key] = sheet[key];}
			}
			return this;
		}
	},
	/* 
		作用：检测浏览器
		返回值：
			各个浏览器信息组成的json对象
	*/
	browser : function(){
		var navor = {};
		var agent = navigator.userAgent.toLowerCase();
		try{
			window.ActiveXObject ? navor.ie = agent.match(/msie ([\d.]+)/)[1] :
			document.getBoxObjectFor ? navor.firefox = agent.match(/firefox\/([\d.]+)/)[1] :
			window.MessageEvent && !document.getBoxObjectFor ? navor.chrome = agent.match(/chrome\/([\d.]+)/)[1] :
			window.opera ? navor.opera = agent.match(/opera.([\d.]+)/)[1] :
			window.openDatabase ? navor.safari = agent.match(/version\/([\d.]+)/)[1] : 0;
		}catch(e){}
		return navor;
	},
	/* 
		作用：检测操作系统(仅检测是否为windows操作系统)
		返回值：
			布尔值
	*/
	system : function(){
		var isWindows = null;
		var plat = navigator.platform.toLowerCase();
		try{
			isWindows = ((plat.indexOf("win") != -1) ? true : false);
		}catch(e){}
		return isWindows;
	},
	/* 
		作用：页面加载事件 调用了vars中的loaded.methods变量
		参数：
			@foo : 需要加载的事件的引用
	*/
	loaded : function(foo){
		var methods = my.vars.methods;
		if((window.onload == null || window.onload == undefined) && methods.length < 1){
			my.events.bind(window,"load",function(){
				for(var i=0;i<methods.length;i++){
					try{methods[i]();}catch(e){throw e;}
				}
			});
		}
		methods.push(foo);
	},
	attach : {
		script : function(path,method){
			var heads = $t("head");
			var head = (heads.length) ? heads[0] : heads;
			var scriptObj = $c("script").attr({
				type : "text/javascript",
				charset : "utf-8"
			});
			var ajax = my.ajax;
			var loadScript = function(){
				if(ajax.args.xhr){
					if(ajax.args.xhr.readyState == 4){
						if(ajax.args.xhr.status == 200){// || ajax.args.xhr.status == 0
							scriptObj.text = ajax.args.xhr.responseText;
							scriptObj.appendTo(head);
							method();
						}
					}
				}
			}
			ajax.args.url = path;
			ajax.args.callback = loadScript;
			ajax.request();
		}
	},
	// 事件
	events : {
		/* 
			作用：绑定
			参数：
				@target : 需要绑定事件的对象
				@eventType : 事件类型(如:click/mouseover等)
				@eventMethod : 事件处理函数的引用
				@capture : 是否全屏捕捉事件
		*/
		bind : function(target,eventType,eventMethod,capture){
			eventType = eventType.replace(/on/gi,"");
			if(window.attachEvent){
				target.attachEvent("on" + eventType,eventMethod);
			}else if(window.addEventListener){
				target.addEventListener(eventType,eventMethod,capture || false);
			}else{target["on" + eventType] = eventMethod;}
		},
		/*
			作用：释放
			参数：
				同bind函数
		*/
		release : function(target,eventType,eventMethod,capture){
			eventType = eventType.replace(/on/gi,"");
			if(window.detachEvent){
				target.detachEvent("on" + eventType,eventMethod);
			}else if(window.removeEventListener){
				target.removeEventListener(eventType,eventMethod,capture || false);
			}else{target["on" + eventType] = null;}
		},
		/* 
			作用：获取
			返回值：
				经过格式化(仅为windows且ie条件下)的event对象
		*/
		get : function(){
			var isMicrosoft = my.browser().ie && my.system();
			var e = window.event || my.events.get.caller.arguments[0];
			// windows下需格式化事件 以保证不同浏览器之间的用法一致
			if(isMicrosoft){
				e.charCode = ((e.type == "keypress") ? e.keyCode : 0);
				e.eventPhase = 2;
				e.isChar = (e.charCode > 0);
				e.pageX = e.clientX + document.body.scrollLeft;
				e.pageY = e.clientY + document.body.scrollTop;
				e.preventDefault = function(){this.returnValue = false;}
				if(e.type == "mouseover"){
					e.relateElement = e.fromElement;
				}else if(e.type == "mouseout"){
					e.relateElement = e.toElement;
				}
				e.stopPropagation = function(){this.cancleBubble = true;}
				e.target = e.srcElement;
				e.time = (new Date()).getTime();
			}
			return e;
		}
	},
	compatMode : function(){
		return ((document.compatMode.toLowerCase() == "css1compat") ? true : false);
	},
	/* 
		作用：得到指定对象的位置
		参数：
			@target : 指定对象
		返回值:
			对象的left(x)和top(y)值
	*/
	xy : function(target){
		var targetTop = target.offsetTop;
		var targetLeft = target.offsetLeft;
		while(target = target.offsetParent){
			targetTop += target.offsetTop;
			targetLeft += target.offsetLeft;
		}
		return {
			x : targetLeft,
			y : targetTop
		}
	},
	// 样式
	rules : {
		/* 
			作用：动态添加css样式
			参数：
				@selector : css选择器名称(如body/.txtCss)
				@cssText : css样式
				@index : 索引(添加到当前样式的第几个位置)
		*/
		add : function(selector,cssText,index){
			var heads = $t("head");
			var head = (heads.length) ? heads[0] : heads;
			var sheet = null;
			if(document.styleSheets.length < 1){
				$c("style").attr({type : "text/css"}).appendTo(head);
			}
			sheet = document.styleSheets[document.styleSheets.length - 1];
			if(sheet.addRule){
				sheet.addRule(selector,cssText,index);
			}else if(sheet.insertRule){
				sheet.insertRule(selector + "{" + cssText + "}",index);
			}
			
		},
		/*
			作用：动态删除css样式
			参数：
				@index : css样式的索引
		*/
		remove : function(index){
			var sheet = null;
			if(document.styleSheets.length < 1){return false;}
			else{sheet = document.styleSheets[document.styleSheets.length - 1];}
			if(sheet.removeRule){sheet.removeRule(index);}
			else if(sheet.deleteRule){sheet.deleteRule(index);}
		},
		/*
			作用：获取css样式
			参数：
				@selector : css选择器名称
				@index : style的索引 文档中第几个style标签 默认为第一个
			返回值：
				若有selector 则返回单个样式对象
				若无selector 则返回全部样式集合
		*/
		get : function(selector,index){
			var sheet = document.styleSheets[document.styleSheets.length - 1];
			if(index){sheet = document.styleSheets[index];}
			var rules = (sheet.rules ? sheet.rules : sheet.cssRules);
			if(selector){
				for(var i=0;i<rules.length;i++){
					var rule = rules[i];
					if(rule.selectorText.toLowerCase() == selector.toLowerCase()){return rule;}
				}
			}else{return rules;}
		},
		css : function(path){
			var heads = $t("head");
			var head = (heads.length) ? heads[0] : heads;
			return $c("style").attr({type : "text/css",href:path}).appendTo(head);
		}
	},
	// cookies
	cookies : function(key,value,expires,domain,path,secure){
		this.key = null;
		this.value = null;
		this.expires = null;
		this.domain = null;
		this.path = null;
		this.secure = null;
		this.cook = "";
		this.create = function(k,v,e,d,p,s){
			if(this.key == null && this.value == null){
				if(!(k && v)){
					return false; // already set
				}else{
					this.set(k,v,e,d,p,s);
				}
			}
			this.cook = this.key + "=" + escape(this.value);
			if(this.expires){this.cook += ";expires=" + this.expires.toGMTString();}
			if(this.domain){this.cook += ";domain=" + this.domain;}
			if(this.path){this.cook += ";path=" + this.path;}
			if(this.secure){this.cook += ";" + this.secure;}
			document.cookie = this.cook;
		}
		this.set = function(k,v,e,d,p,s){
			this.key = null || k;
			this.value = null || v;
			this.expires = null || e;
			this.domain = null || d;
			this.path = null || p;
			this.secure = null || s;
		}
		this.get = function(key){
			var cookie = document.cookie;
			var key = key || this.key;
			if(cookie.length > 0){
				var c_start = cookie.indexOf(key + "=");
				if(c_start != -1){
					c_start = c_start + key.length + 1;
					c_end = cookie.indexOf(";",c_start);
					if(c_end == -1){c_end = cookie.length;}
					return unescape(cookie.substring(c_start,c_end));
				}
			}
			return null;
		}
		this.remove = function(key){
			var key = key || this.key;
			var expires = Date.get();
			expires.setTime(expires.getTime() - (expires.getTime() + 1));
			document.cookie = key + "=my;expires=" + expires.toGMTString();
			if((!key) || (this.key == key)){this.clear();}
		}
		this.clear = function(){
			this.key = null;
			this.value = null;
			this.expires = null;
			this.domain = null;
			this.path = null;
			this.secure = null;
			this.cook = "";
		}
		this.isExist = function(key){
			var value = this.get(key);
			if(value != null && value != ""){return value;}
			return false;
		}
		this.set(key,value,expires,domain,path,secure);
		if(this.key != null && this.value != null){
			this.create();
		}
	},
	// another expand
//	extend : function(namespace,json){
//		// = fn;
//		var cls = my[namespace] = {};
//		for(var key in json){
//			cls[key] = json[key];
//		}
//	},
	ajax : {
		args : {
			xhr : null,
			url : null,
			analy : true,
			sendType : "GET",
			sendData : null,
			callback : null
		},
		request : function(){
			try{my.ajax.args.xhr = new ActiveXObject("Msxml2.XMLHTTP");}
			catch(e){
				try{my.ajax.args.xhr = new ActiveXObject("Microsoft.XMLHTTP");}
				catch(e){
					try{my.ajax.args.xhr = new XMLHttpRequest();}
					catch(e){my.ajax.args.xhr = null;}
				}
			}
			if(!my.ajax.args.xhr){return false;}
			else{
				my.ajax.args.xhr.open(my.ajax.args.sendType,my.ajax.args.url,my.ajax.args.analy);
				// header
				my.ajax.args.xhr.onreadystatechange = my.ajax.args.callback;
				my.ajax.args.xhr.send(my.ajax.args.sendData);
				//return my.ajax.args.xhr;
			}
		}/*,
		receive : function(){
			if(my.ajax.args.xhr){
				if(my.ajax.args.xhr.readyState == 4){
					if(my.ajax.args.xhr.status == 200){
						return true;
					}
				}
			}
		},*/
	}
}
window.my = window.M = my;
/******************** myjs end ********************/