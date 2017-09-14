/*留言版的js代码*/

$(function() {
	/*打开网页时的淡入效果*/
	$('html,body').hide().fadeIn(1500);
	$(".input-panel1,.w2").click(function() {
		$('.input-panel1').slideToggle();
		$('.input-panel').toggleClass('myopacity');

	});

	var i = 0;
	var j = null;
	var timer1;
	var classS1 = document.getElementsByClassName('s1');

	function share() {
		if(i > 4) {
			i = 0;
		}
		$('.s1:eq(' + i + ')').animate({
			"text-shadow": "1px 1px 10px black",
			"opacity": "1",
			"color": "red"
		}, 50).animate({
			"text-shadow": "none",
			"opacity": "0.3",
			"color": "black"
		}, 600);
		$('.label-class').animate({
			"opacity": "1"
		}, 1000).animate({
			"opacity": "0.5"
		}, 500);
		i++;
	}
	timer1 = setInterval(share, 500);
	/*点击右侧，自动赋值*/
	$('.mylabel>.container>div>span').click(function() {
		$('.input-panel1').slideUp();
		$('.input-panel').addClass('myopacity');
		var reg_expression = /</;
		$mylabel = $(this).html();
		endIndex = $mylabel.search(reg_expression);
		labelString = $mylabel.slice(0, endIndex);
		$('#input2').val(labelString);
		document.getElementById('input2').focus();
	})
		/*监听滑动，固定顶部*/
	window.onscroll = function() {
		var olabel = document.getElementsByClassName('mylabel')[0];
		var myTop = document.documentElement.scrollTop || document.body.scrollTop;
		if(myTop > 1) {
			$('.top-text').hide();
			var myNav = document.getElementById('main-nav');
			myNav.className = 'fixed-top';
			//myNav.style.top=myTop+'px';
		} else {
			$('#main-nav').removeClass('fixed-top');
		}

		if(myTop > 100) {
			lPos = myTop + 20;

			$('.mylabel').stop().animate({
				top: lPos
			}, 500);
		} else {
			startMove(olabel, "top", 0)
		}
	}

	$('.label').click(function() {
		var olabel = document.getElementsByClassName('mylabel')[0];
		var myTop = document.documentElement.scrollTop || document.body.scrollTop;
		if(myTop > 600)

			startMove(olabel, "top", 0)
	})
	/*兼容手机 uc浏览器打开时 导航条会下移！*/
	$('#input1,#input2,#message').focus(function() {

		if(window.innerWidth) {
			winWidth = window.innerWidth;
		} else if((document.body) && (document.body.clientWidth)) {
			winWidth = document.body.clientWidth;
		}
		if(winWidth < 769) {
			$('#main-nav').hide();
		}

	}).blur(function() {
		var focus1 = $("#input1").is(":focus");
		var focus2 = $("#input2").is(":focus");
		var focus3 = $('#message').is("focus");
		if(!(focus1 && focus2 && focus3)) {
			$('#main-nav').show();
		}
	})

})
var tag = 0;
/*表单的有效性检查*/
function safeCheck() {

	var $name = $('#input1').val();
	var $label = $('#input2').val();
	var $content = $('#message').val();

	if(!$name) {
		alert('阿猫阿狗都有名字噢！');
		return false;
	} else if(!$label) {
		alert('哪怕是条咸鱼也总有标签嘛！');
		return false;
	} else if(!$content.length) {
		alert('天啦，你居然什么都没有留！');
		return false;
	}

	safeScript($name);
	if(tag == 1) {
		return false;
	} else {
		safeScript($label);
		if(tag == 1) {
			return false;
		} {
			safeScript($content);
			if(tag == 1) {
				return false;
			} else {
				return true;
			}
		}
	}

	//var modify1=$name.replace(reg_expression,"<span class='bg-danger'>script</span>");			
	//var modify2=$label.replace(reg_expression,"<span class='bg-danger'>script</span>");

}
/*检测是否输入了恶意代码*/
function safeScript(obj) {
	var reg_expression = new RegExp("<script|<\?php|<\%|<", "g");
	var result = reg_expression.test(obj);
	if(result) {
		var modify3 = obj.replace(reg_expression, "<span class='bg-danger' style='border:1px solid red;color:#f00;'>-no-script</span>");
		//$('#input1').val(modify1);
		//$('#input2').val(modify2);
		$('.notice span').html(modify3);
		$('.notice').toggle("pulsate");
		$('#message,.notice').click(function() {
			$('.notice').stop().hide(1000, function() {
				$('#message').focus();
			});
		});
		obj.innerHTML = "";
		tag = 1;
	} else {
		tag = 0;
	}
}
/*公共动画*/
function getStyle(obj, name) {
	if(obj.currentStyle) {
		return obj.currentStyle[name];
	} else {
		return getComputedStyle(obj, false)[name];
	}
}
/*公共动画*/
function startMove(obj, attr, iTarget) {
	clearInterval(obj.timer);
	obj.timer = setInterval(function() {
		var cur = 0;
		if(attr == 'opacity') {
			cur = Math.round(parseFloat(getStyle(obj, attr)) * 100);
		} else {
			cur = parseInt(getStyle(obj, attr));
		}
		var speed = (iTarget - cur) / 6;
		speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
		if(cur == iTarget) {
			clearInterval(obj.timer);
		} else {
			if(attr == 'opacity') {
				obj.style.filter = 'alpha(opacity:' + (cur + speed) + ')';
				obj.style.opacity = (cur + speed) / 100;
				document.getElementById('txt1').value = obj.style.opacity;
			} else {
				obj.style[attr] = cur + speed + 'px';
			}
		}
	}, 30);
}