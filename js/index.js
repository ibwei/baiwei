var timer4 = null;
var timer1 = null;
var timer2 = null;
var visitTotal = 1;
var startTime = null;
var endTime = null;
var startDate;
var startTime;
var lastIndex = null;
var $iIndex;
$(function() {
	/*查看手机样式*/
	$('#responsive-btn1').click(function() {
		//alert('hah');
		//你要固定的浏览器宽度
		var h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;; //你要固定的浏览器高度
		var w=window.open('index.php','', 'width=350,height=760');
		w.resizeTo(350,height + h);
	})
	/*页面滑动*/
	$('#slide-one,#iAbout').click(function() {
		var targetTop = document.getElementById('wrap1').offsetTop - 60 + "px";
		$('html,body').animate({
			scrollTop: targetTop
		}, 800);
		$('#phone-menu').slideUp();
		$('.modal-backdrop,.modal').hide();
		$('body').removeClass('modal-open');
	})
	$('#slide-two,#iWe').click(function() {
		var targetTop = document.getElementById('wrap3').offsetTop - 60 + "px";
		$('html,body').animate({
			scrollTop: targetTop
		}, 800);
		$('#phone-menu').slideUp();
		$('.modal-backdrop,.modal').hide();
		$('body').removeClass('modal-open');
	})
	/*repost网页部分的高亮效果*/
	$('#wrap5 .thumbnail').mouseenter(function() {

		$iIndex = $('#wrap5 .thumbnail').index(this);
		if($iIndex == 0) {
			var sColor = "#e5eaed";
		} else if($iIndex == 1) {
			var sColor = "#d3e8d3";
		} else {
			var sColor = "#a5dcbc";
		}

		$('#wrap5 .thumbnail:eq(' + $iIndex + ')').hide().toggle({
			effect: 'highlight',
			color: sColor,
			duration: 800
		});
		$('#wrap5 .thumbnail:eq(' + $iIndex + ') .caption').css('opacity', '1');
	}).mouseleave(function() {
		$('#wrap5 .thumbnail').stop();
		$('#wrap5 .thumbnail:eq(' + $iIndex + ') .caption').css('opacity', '0.9');
		$('#wrap5 .thumbnail').css('background', '#fff');
	})
	/*刮刮乐功能的实现*/
	var loaded = function() {
		var canvas = document.getElementById("map");
		var context = canvas.getContext("2d");
		var mousedown = false;
		//底码
		var answer = new Array("RMB:0.1元", "RMB:0.01元", "很遗憾，什么也没有", "白小唯亲笔签名一份", "请自行领取鸡汤一份", "香吻一个", "特制狗粮一份", "真心祝福一份", "RMB:0.09元", "三分钟陪聊服务", "找我领取一句祝福语", "RMB：0.02元", "RMB：0.3元");
		var alength = answer.length;
		var code = Math.ceil(Math.random() * alength) - 1;
		var reward = answer[code];
		//绘制遮罩
		function drawMask() {
			context.save();
			context.fillStyle = "#A3A3A3";
			context.fillRect(0, 0, canvas.width, canvas.height);
			context.lineWidth = 5;
			context.strokeStyle = "#fff";
			context.strokeRect(0, 0, canvas.width, canvas.height);
			context.restore();
			context.fillStyle = "#fff";
			context.font = "36px 微软雅黑 ";
			context.textBaseline = 'middle';
			context.textAlign = 'center';
			context.fillText("刮刮乐", canvas.width / 2, canvas.height / 2);
			context.restore();
		}
		//绘制涂抹
		function drawClip(x, y) {
			context.save();
			//设置组合方式 
			context.globalCompositeOperation = "destination-out";
			//设置新图形（红色圆形）
			context.beginPath();
			context.fillStyle = "red";
			context.arc(x || canvas.width / 2, y || canvas.height / 2, 30, 0, Math.PI * 2, false);
			context.fill();
			context.restore();
		}

		function canvasMouseDown(event) {
			mousedown = true;
		}

		function canvasMouseUp(event) {
			mousedown = false;
		}

		function canvasMouseMove(event) {
			if(mousedown) {
				var event = event || window.event;
				drawClip(event.offsetX, event.offsetY);
			}
		}

		function canvasTouchMove(event) {
			if(mousedown) {
				var event = event || window.event;
				if(event.targetTouches.length == 1) {
					event.preventDefault();
					var touch = event.targetTouches[0];
					// 把元素放在手指所在的位置
					drawClip(touch.clientX - mapbox.offsetLeft, touch.clientY - mapbox.offsetTop);
				}
			}
		}
		canvas.addEventListener("mousedown", canvasMouseDown, false);
		canvas.addEventListener("mouseup", canvasMouseUp, false);
		canvas.addEventListener("mousemove", canvasMouseMove, false);
		canvas.addEventListener("touchstart", canvasMouseDown, false);
		canvas.addEventListener("touchend", canvasMouseUp, false);
		canvas.addEventListener("touchmove", canvasTouchMove, false);
		drawMask();
		var mapbox = document.getElementById("mapbox");
		mapbox.style.color = "#000";
		mapbox.getElementsByTagName("label")[0].innerText = "[" + reward+"]" ;
	}
	window.addEventListener("load", loaded, false);

		/*关于我的hover图片长生的jq-ui效果*/
	$('.img-area1 div').mouseenter(function() {
		var $iIndex = $('.img-area1 div').index(this);
		//alert($iIndex);
		var aEffect = new Array("slide", "drop", "bounce", "shake", "clip", "blind", "fold", "fade");
		var aLength = aEffect.length;
		var iIndex = Math.floor(Math.random() * aLength);
		var aDirection = new Array("up", "down", "left", "right");
		var aLength1 = aDirection.length;
		var iIndex1 = Math.floor(Math.random() * aLength1);
		$('.img-area1 div:eq(' + $iIndex + ') img').hide().toggle({
			effect: aEffect[iIndex],
			direction: aDirection[iIndex1],
			duration: 800
		});
	})
	
	/*在进入关于我们的图片之后，检测方向*/
	$(".we-pic").bind("mouseenter mouseleave",
		function(e) {
			$('.we-pic .text-wrap').hide();
			$(this).stop();
			var $picIndex = $(".we-pic").index(this);
			//$(this).css("border","1px solid red");
			var myTop1 = document.documentElement.scrollTop || document.body.scrollTop;
			var myTop2 = window.screen.availHeight;
			var w = $('.we-pic:eq(' + $picIndex + ') .text-wrap').width();
			var h = $('.we-pic:eq(' + $picIndex + ') .text-wrap').height();
			var x = (e.pageX - $('.we-pic:eq(' + $picIndex + ') .text-wrap').offset().left - (w / 2)) * (w > h ? (h / w) : 1);
			var y = (e.pageY - $('.we-pic:eq(' + $picIndex + ') .text-wrap').offset().top - (h / 2)) * (h > w ? (w / h) : 1);
			var direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) + 180) / 90) + 3) % 4;
			//alert(w+"--"+h+"--"+x+"--"+y);
			//alert(document.documentElement.clientHeight-this.offsetHeight+myTop1);
			var eventType = e.type;
			var dirName = new Array('up', 'left', 'down', 'right');
			//alert(dirName[direction]);
			if(e.type == 'mouseenter') {

				var direciton1 = dirName[direction];
				//alert($picIndex);
				if((lastIndex > $picIndex) && ($picIndex < 4) && (lastIndex < 4)) {
					direciton1 = "right";
					//alert(lastIndex+"---"+$picIndex);
				} else if((lastIndex > $picIndex) && ($picIndex >= 4) && (lastIndex >= 4)) {
					direciton1 = "right";
				} else if((lastIndex < 4) && ($picIndex >= 4)) {
					direciton1 = "up";
				} else if((lastIndex >= 4) && ($picIndex < 4)) {
					direciton1 = "down";
				}

				if(direciton1 == "right") {
					$('.we-pic:eq(' + $picIndex + ') .text-wrap').css("text-align", "left");
					$('.we-pic:eq(' + $picIndex + ') .text-wrap .title').css("top", "20px");
				} else if(direciton1 == "left") {
					$('.we-pic:eq(' + $picIndex + ') .text-wrap').css("text-align", "right");
					$('.we-pic:eq(' + $picIndex + ') .text-wrap .title').css("top", "20px");
				} else if(direciton1 == "up") {
					$('.we-pic:eq(' + $picIndex + ') .text-wrap').css("text-align", "center");
					$('.we-pic:eq(' + $picIndex + ') .text-wrap .title').css("top", "150px");
				} else if(direciton1 == "down") {
					$('.we-pic:eq(' + $picIndex + ') .text-wrap').css("text-align", "center");
					$('.we-pic:eq(' + $picIndex + ') .text-wrap .title').css("top", "20px");
				}
				$('.we-pic:eq(' + $picIndex + ') .text-wrap').hide().toggle({
					effect: "drop",
					direction: direciton1,
					duration: 600,
					complete: myHide($picIndex)
				});
			} else {
				$('.we-pic:eq(' + $picIndex + ') .text-wrap').hide();
			}

			lastIndex = $picIndex;

		});
	var strgreet = "";
	var datetime = new Date();
	var hour = datetime.getHours();
	var minu = datetime.getMinutes();
	var seco = datetime.getSeconds();
	strtime = hour + ":" + minu + ":" + seco + " ";
	if(hour >= 0 && hour <= 6) {
		strgreet = "在这个阴森的午夜";
	}
	if(hour >= 6 && hour < 11) { //判断是否为上午
		strgreet = "在这个美丽的早晨";
	}
	if(hour >= 11 && hour < 13) { //判断是否为中午
		strgreet = "在这个平淡的中午";
	}
	if(hour >= 13 && hour < 18) { //判断是否为下午
		strgreet = "在这个慵懒的午后";
	}
	if(hour >= 18 && hour < 24) { //判断是否为晚上
		strgreet = "在这个静谧的晚上";
	}
	document.getElementById("visitime").innerHTML = strgreet + "，";

	var localStoragepagecount = 500;
	//alert(localStoragepagecount);

	var speed;
	if(localStoragepagecount > 0 && localStoragepagecount < 250) {
		speed = 5
	}
	if(localStoragepagecount >= 250 && localStoragepagecount < 500) {
		speed = 4;
	}
	if(localStoragepagecount >= 500 && localStoragepagecount < 1000) {
		speed = 3;
	}
	if(localStoragepagecount >= 1000 && localStoragepagecount < 2000) {
		speed = 2;
	}
	if(localStoragepagecount > 2000) {
		speed = 1;
	}
	startTime = new Date();
	startDate = startTime.getSeconds();

	timer1 = setInterval(visitorCount, speed);
	var timer3 = setTimeout(changeLovebg, 1000);

	$('.lover div img').hover(function() {
		clearInterval(timer4);
	}, function() {
		timer4 = setTimeout(changeLovebg, 7000);
	})
	window.onscroll = function() {
		var myTop = document.documentElement.scrollTop || document.body.scrollTop;
		if(myTop > 1) {
			$('#top-nav').css({
				"padding-bottom": "0px",
				"padding-top": "0px"
			});
			$('.left img').css({
				"transform": "scale(0.8,0.8)"
			});

		} else {
			$('#top-nav').css({
				"padding-bottom": '10px',
				"padding-top": "10px"
			});
			$('.left img').css({
				"transform": "scale(1.0,1.0)"
			});

		}
	}

	$('.img-wrap').click(function() {
		$(this).slideUp(2000);
		$('#wrap4 .text-wrap').slideUp();
	})

	/*此段代码是网站几何图形背景，跟随鼠标移动！系从别的网站借鉴*/
	! function() {
		function o(w, v, i) {
			return w.getAttribute(v) || i
		}

		function j(i) {
			return document.getElementsByTagName(i)
		}

		function l() {
			var i = j("script"),
				w = i.length,
				v = i[w - 1];
			return {
				l: w,
				z: o(v, "zIndex", 0),
				o: o(v, "opacity", 0.3),
				c: o(v, "color", "70,100,51"),
				n: o(v, "count", 78)
			}
		}

		function k() {
			r = u.width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth, n = u.height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight
		}

		function b() {
			e.clearRect(0, 0, r, n);
			var w = [f].concat(t);
			var x, v, A, B, z, y;
			t.forEach(function(i) {
				i.x += i.xa, i.y += i.ya, i.xa *= i.x > r || i.x < 0 ? -1 : 1, i.ya *= i.y > n || i.y < 0 ? -1 : 1, e.fillRect(i.x - 0.5, i.y - 0.5, 1, 1);
				for(v = 0; v < w.length; v++) {
					x = w[v];
					if(i !== x && null !== x.x && null !== x.y) {
						B = i.x - x.x, z = i.y - x.y, y = B * B + z * z;
						y < x.max && (x === f && y >= x.max / 2 && (i.x -= 0.03 * B, i.y -= 0.03 * z), A = (x.max - y) / x.max, e.beginPath(), e.lineWidth = A / 2, e.strokeStyle = "rgba(" + s.c + "," + (A + 0.2) + ")", e.moveTo(i.x, i.y), e.lineTo(x.x, x.y), e.stroke())
					}
				}
				w.splice(w.indexOf(i), 1)
			}), m(b)
		}
		var u = document.createElement("canvas"),
			s = l(),
			c = "c_n" + s.l,
			e = u.getContext("2d"),
			r, n, m = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(i) {
				window.setTimeout(i, 1000 / 45)
			},
			a = Math.random,
			f = {
				x: null,
				y: null,
				max: 20000
			};
		u.id = c;
		u.style.cssText = "position:fixed;top:0;left:0;z-index:" + s.z + ";opacity:" + s.o;
		j("body")[0].appendChild(u);
		k(), window.onresize = k;
		window.onmousemove = function(i) {
			i = i || window.event, f.x = i.clientX, f.y = i.clientY
		}, window.onmouseout = function() {
			f.x = null, f.y = null
		};
		for(var t = [], p = 0; s.n > p; p++) {
			var h = a() * r,
				g = a() * n,
				q = 2 * a() - 1,
				d = 2 * a() - 1;
			t.push({
				x: h,
				y: g,
				xa: q,
				ya: d,
				max: 6000
			})
		}
		setTimeout(function() {
			b()
		}, 50)
	}();
	/*此段代码是网站几何图形背景，跟随鼠标移动！系从别的网站借鉴*/
})

/*统计访问人数的动画效果，待完善！*/
function visitorCount() {
	var substracValue;
	var endDate;
	//alert(visitTotal);
	//alert(localStorage.pagecount);
	if(visitTotal < localStorage.pagecount) {
		//$("#visitor span").text(visitTotal);
	} else {

		//$('#visitor span').text(localStorage.pagecount);
		clearInterval(timer1);
		$('#visitor span').css("animation", "none");
	}
	endTime = new Date();
	endDate = endTime.getSeconds();
	//alert("kaishi:"+startDate+"jieshu:"+endDate);

	mm = Math.abs(endDate - startDate);
	//alert(mm);

	if(mm >= 5 || (mm > -60 && mm < -55)) {
		//$('#visitor span').text(localStorage.pagecount);
		clearInterval(timer1);
		$('#visitor span').css("animation", "none");
	}

	visitTotal++;

}
var loveIndex = 1;
function changeLovebg() {
	loveIndex += 1;
	$('.lover div img').toggle({
		effect: "clip",
		direction: "right",
		duration: 500,
		complete: special

	});
	//alert(loveIndex)

	$('.lover div img').toggle({
		effect: "clip",
		direction: "left",
		duration: 4000
	}).show();
	timer4 = setTimeout(changeLovebg, 10000);

}

/*因为采用的jq-ui的动画，出了点小问题，先采用了最笨的方法，待优化！（亲测循环无效）*/
function special() {
	if(loveIndex == 1) {
		$('#lover-1').attr('src', 'img/lover-' + 1 + '.jpg');
		$('#lover-2').attr('src', 'img/lover-' + 2 + '.jpg');
		$('#lover-3').attr('src', 'img/lover-' + 3 + '.jpg');
	} else if(loveIndex == 2) {
		$('#lover-1').attr('src', 'img/lover-' + 2 + '.jpg');
		$('#lover-2').attr('src', 'img/lover-' + 3 + '.jpg');
		$('#lover-3').attr('src', 'img/lover-' + 4 + '.jpg');
	} else if(loveIndex == 3) {
		$('#lover-1').attr('src', 'img/lover-' + 3 + '.jpg');
		$('#lover-2').attr('src', 'img/lover-' + 4 + '.jpg');
		$('#lover-3').attr('src', 'img/lover-' + 5 + '.jpg');
	} else if(loveIndex == 4) {
		$('#lover-1').attr('src', 'img/lover-' + 4 + '.jpg');
		$('#lover-2').attr('src', 'img/lover-' + 5 + '.jpg');
		$('#lover-3').attr('src', 'img/lover-' + 6 + '.jpg');
	} else if(loveIndex == 5) {
		$('#lover-1').attr('src', 'img/lover-' + 5 + '.jpg');
		$('#lover-2').attr('src', 'img/lover-' + 6 + '.jpg');
		$('#lover-3').attr('src', 'img/lover-' + 1 + '.jpg');
	} else if(loveIndex == 6) {
		$('#lover-1').attr('src', 'img/lover-' + 6 + '.jpg');
		$('#lover-2').attr('src', 'img/lover-' + 1 + '.jpg');
		$('#lover-3').attr('src', 'img/lover-' + 2 + '.jpg');
		loveIndex = 0;
	}
}

function myHide($picIndex) {
	$('.we-pic:eq(' + $picIndex + ') .text-wrap').hide();
}