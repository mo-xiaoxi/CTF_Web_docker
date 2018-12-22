// JavaScript Document
var base = {
	args : {
		sign : null,
		left : null,
		right : null,
		result : null,
		memory : null,
		isConcat : true,
		isOperator : false
	},
	input : function(btn){
		var value = btn.value;
		if(/[0-9]/.test(value)){
			if($("resultIpt").value.length >= 16 && base.args.isConcat){return false;}
			$("resultIpt").style.fontSize = "40";
			if((base.args.sign == "=" || base.args.sign == null) && !base.args.isConcat){base.output(null,"");}
			if(base.args.isConcat){
				if($("resultIpt").value == "0"){
					$("resultIpt").value = "";
				}
				base.output($("resultIpt").value + value,$("expressBox").innerHTML + value);
			}else{
				base.output(value,$("expressBox").innerHTML + value);
			}
			base.args.isConcat = true;
			base.args.isOperator = false;
		}
		if(/\./.test(value)){
			if($("resultIpt").value.length > 16 && base.args.isConcat){return false;}
			if($("resultIpt").value.indexOf(".") != -1 && base.args.isConcat){return false;}
			if(base.args.isConcat){
				base.output($("resultIpt").value + value,$("expressBox").innerHTML + value);
			}else{
				base.output("0" + value,$("expressBox").innerHTML + value);
				base.args.isConcat = true;
			}
		}
		if(/[\+|\-|¡Â|¡Á]/.test(value) && value.length < 2){
			if(!base.args.isOperator){
				base.set();
				base.args.result = base.calculate();
				if(base.args.result){
					base.output(base.args.result,$("expressBox").innerHTML + "=" + base.args.result);
					base.clear(true);
					base.args.left = base.args.result;
				}
				base.output(null,$("expressBox").innerHTML + value);
			}else{
				base.output(null,$("expressBox").html().substring(0,$("expressBox").html().length-1) + value);
			}
			base.args.sign = value;
			base.args.isConcat = false;
			base.args.isOperator = true;
		}
		if(/[\+\/-]/.test(value) && value.length > 2){
			var result = $("resultIpt").value;
			$("expressBox").innerHTML = $("expressBox").innerHTML.substr(0,($("expressBox").innerHTML.length - result.length));
			if(Number(result) != 0 && result != ""){
				result = -Number(result);
			}
			base.output(result,$("expressBox").innerHTML + result);
			base.set();
		}
		if(/=/.test(value)){
			base.set();
			base.args.result = base.calculate();
			//if(/^\-?\d+(?=\.{0,1}\d+$|$)/.test(base.args.result)){//^[0-9]+.?[0-9]*$/
				base.output(base.args.result,$("expressBox").innerHTML + "=" + base.args.result);
				base.args.sign = value;
				base.clear(true);
				base.args.left = base.args.result;
			//}
			base.args.isConcat = false;
		}
		if(btn.maxLength >= 0 && (String(btn.maxLength).length == 1)){
			switch(btn.maxLength){
				case 5:
					base.save();
				break;
				case 1:
					var memory = base.get();
					if(memory == null){return false;}
					base.args.isConcat = false;
					base.output(memory,$("expressBox").innerHTML + memory);
				break;
				case 2:
					base.saveAdd();
				break;
				case 3:
					base.saveMultiple();
				break;
				case 4:
					base.saveClear();
				break;
				case 8:
					base.remove();
				break;
				case 9:
					base.clear();
				break;
			}
		}
	},
	output : function(value,html){
		if(value != null){
			//if((value+"").length > 16){$("resultIpt").style.fontSize = "35";}
			if((value+"").length > 16){//$("resultInput").style.fontSize = "35";
				if((value+"").indexOf(".") != -1){
					var r = (value+"").split(".")[1];
					var count = (value+"").length - 16;
					if(r.length > count){
						r = r.substring(0,(r.length - count));
						value = (value+"").split(".")[0] + "." + r;
					}else{
						$("resultIpt").style.fontSize = "35";
					}
				}else{
					$("resultIpt").style.fontSize = "35";
				}
			}
			$("resultIpt").value = value;
		}
		if(html != null){$("expressBox").innerHTML = html;}
	},
	accurate : {
		add : function(num1,num2){
			var index1 = 0,index2 = 0,index = 0;
			try{index1 = String(num1).split(".")[1].length}catch(e){index1 = 0;}
			try{index2 = String(num2).split(".")[1].length}catch(e){index2 = 0;}
			index = Math.pow(10,Math.max(index1,index2));
			return parseFloat((num1 * index + num2 * index) / index);
		},
		sub : function(num1,num2){
			var index1 = 0,index2 = 0,index = 0;
			try{index1 = String(num1).split(".")[1].length}catch(e){index1 = 0;}
			try{index2 = String(num2).split(".")[1].length}catch(e){index2 = 0;}
			index = Math.pow(10,Math.max(index1,index2));
			return (num1 * index - num2 * index) / index;
		},
		mul : function(num1,num2){
			var index = 0;
			try{index += String(num1).split(".")[1].length}catch(e){}
			try{index += String(num2).split(".")[1].length}catch(e){}
			return (Number(String(num1).replace(".","")) * Number(String(num2).replace(".","")))/Math.pow(10,index);
		},
		div : function(num1,num2){

			var index1 = 0,index2 = 0;
			try{index1 = String(num1).split(".")[1].length}catch(e){}
			try{index2 = String(num2).split(".")[1].length}catch(e){}
			//alert(index1 + " @@ " + index2);
			//return (Number(String(num1).replace(".","")) / Number(String(num2).replace(".",""))) * Math.pow(10,(index2 - index1));
			var a = Number(String(num1).replace(".",""));
			var b = Number(String(num2).replace(".",""));
			var c = Math.pow(10,(index2 - index1));
			var result = null;
			if((a/b).toString().indexOf("e") != -1){result = (a/b) * c;}
			else{result = base.accurate.mul((a/b),c);}
			return result;
		}
	},
	calculate : function(){
		if(base.args.left != null && base.args.sign != null && base.args.right != null){
			switch(base.args.sign){
				case "+":
					return base.accurate.add(Number(base.args.left),Number(base.args.right));
				break;
				case "-":
					return base.accurate.sub(Number(base.args.left),Number(base.args.right));
				break;
				case "¡Á":
					return base.accurate.mul(Number(base.args.left),Number(base.args.right));
				break;
				case "¡Â":
					return base.accurate.div(Number(base.args.left),Number(base.args.right));
				break;
			}
		}
	},
	set : function(){
		var value = $("resultIpt").value;
		if(base.args.sign == null){
			//left
			base.args.left = value;
		}else{
			//right
			base.args.right = value;
		}
	},
	remove : function(){
		var html = $("expressBox").innerHTML;
		var value = $("resultIpt").value;
		if(html.length >= 1){
			if(/[0-9|\.]/.test(html.substr(html.length-1,1))){
				html = html.substring(0,html.length-1);
				value = String(value).substring(0,value.length-1);
				if(value == ""){value = 0;}
				base.output(value,html);
				base.set();
			}
		}
	},
	clear : function(flag){
		if(flag != true){
			base.args.sign = null;
			base.args.left = null;
			base.args.right = null;
			base.args.result = null;
			//base.args.memory = null;
			$("expressBox").innerHTML = "";
			$("resultIpt").value = 0;
		}else if(flag == true){
			base.args.sign = null;
			base.args.left = null;
			base.args.right = null;
		}
	},
	save : function(){
		base.args.memory = $("resultIpt").value;
		base.args.isConcat = false;
	},
	get : function(){
		return (base.args.memory == null) ? 0 : base.args.memory;
	},
	saveAdd : function(){
		if(base.args.memory != null){
			base.args.memory = base.accurate.add(Number(base.args.memory),Number($("resultIpt").value));
		}else{base.save();}
	},
	saveMultiple : function(){
		if(base.args.memory != null){
			base.args.memory = base.accurate.mul(Number(base.args.memory),Number($("resultIpt").value));//base.args.memory * Number($("resultIpt").value);// accurate
		}else{base.save();}
	},
	saveClear : function(){
		base.args.memory = null;
	},
	showStyle : function(btn){
		btn.style.backgroundPosition = "0 0";
		try{clearTimeout(itv);}catch(e){}
		var itv = setTimeout(function(){btn.style.backgroundPosition = "0px -44px";},100);
	}
}
my.loaded(function(){
	// tabs click
	var tabs = $t("LI");
	var i = 0;
	while(i<tabs.length){
		tabs[i].index = i;
		tabs[i].sibling = tabs[i ? 0 : 1];
		tabs[i].bind("click",function(){
			var e = my.events.get();
			var target = e.target;
			var href = "";
			var args = ((location.search.indexOf("canvas_pos=search") != -1) ? "?canvas_pos=search" : "")
			target.style.background = "none";
			if(target.index){
				target.sibling.style.background = "url(images/cal_tab_top.gif) no-repeat 0 0";
				href = "senior.html";
			}else{
				target.sibling.style.background = "url(images/cal_tab_bottom.gif) no-repeat 0 0";
				href = "base.html"
			}
			self.location.href = href + args;
		});
		i++;
	}
	// btns mousedown
	var btns = $t("INPUT").$css("btnCss");
	for(var i=0;i<btns.length;i++){
		btns[i].bind("mousedown",function(){
			var e = my.events.get();
			var target = e.target;
			target.style.backgroundPosition = "0 0";
		});
		btns[i].bind("mouseup",function(){
			var e = my.events.get();
			var target = e.target;
			target.style.backgroundPosition = "0px -44px";
		});
		btns[i].bind("click",function(){
			var e = my.events.get();
			var target = e.target;
			target.blur();
			base.input(target);
		});
	}
	// keybroad
	my.events.bind(document,"keydown",function(){
		var e = my.events.get();
		var keyCode = e.keyCode;
		var btn = null;
		if(keyCode == 48 || keyCode == 96){btn = $("num0Btn");}
		if(keyCode == 49 || keyCode == 97){btn = $("num1Btn");}
		if(keyCode == 50 || keyCode == 98){btn = $("num2Btn");}
		if(keyCode == 51 || keyCode == 99){btn = $("num3Btn");}
		if(keyCode == 52 || keyCode == 100){btn = $("num4Btn");}
		if(keyCode == 53 || keyCode == 101){btn = $("num5Btn");}
		if(keyCode == 54 || keyCode == 102){btn = $("num6Btn");}
		if(keyCode == 55 || keyCode == 103){btn = $("num7Btn");}
		if(keyCode == 56 || keyCode == 104){btn = $("num8Btn");}
		if(keyCode == 57 || keyCode == 105){btn = $("num9Btn");}
		if(keyCode == 190 || keyCode == 110){btn = $("dotBtn");}
		if(keyCode == 109 || keyCode == 189){btn = $("subBtn");}
		if(keyCode == 111 || keyCode == 191){btn = $("divBtn");}
		if(keyCode == 13 || keyCode == 187){btn = $("equBtn");}
		if(keyCode == 107){btn = $("addBtn");}
		if(keyCode == 106){btn = $("mulBtn");}
		if(keyCode == 46){btn = $("removeBtn");}
		if(btn){
			btn.click();
			base.showStyle(btn);
		}
	});
});