
/*这是公共的js代码*/
$(function() {
	/*回到顶部，判断是否是index制定id页面，不是则先打开，再回到顶部*/
	$('#index,.returntop').click(function() {
		jugdePage("#top-na");
		$('html,body').animate({
			scrollTop: "0px"
		});
	})
	$('#about').click(function() {
		jugdePage('#wrap1');
	})
	$('#we').click(function() {
		jugdePage("#wrap3");
	})
	/*模态框的提醒未做好！*/
	$('#register,#dologin,#doregister').click(function() {
		alert('说出来你可能不信，我后台还没做好……');
		$('#loginModal,#registerModal').slideUp(500, function() {
			$('.modal-backdrop,.modal').hide();
		});
	})

	$('.top-text').mouseenter(function() {
		$('.top-text').stop();
		$('.top-text span').hide().toggle("explode").css('text-shadow', '1px 1px 10px #ccc,-1px 1px 50px #fff').html('Aww yeah,Welcome to my personal website! You are so lucky that you meet me!');
		$('.top-text').unbind('mouseenter');
	})

})

function jugdePage(targetId) {
	var currentName = window.location;
	var regExp = /index/;
	var result = regExp.test(currentName);
	if(result) {
		window.open('index.php' + targetId, "_self");

	}
}

function getStyle(obj, name) {
	if(obj.currentStyle) {
		return obj.currentStyle[name];
	} else {
		return getComputedStyle(obj, false)[name];
	}
}

function startMove(obj, json, fnEnd) {
	clearInterval(obj.timer);
	obj.timer = setInterval(function() {
		var bStop = true;
		for(var attr in json) {
			var cur = 0;
			if(attr == 'opacity') {
				cur = Math.round(parseFloat(getStyle(obj, attr)) * 100);
			} else {
				cur = parseInt(getStyle(obj, attr));
			}
			var speed = (json[attr] - cur) / 6;
			speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
			if(cur != json[attr])
				bStop = false;
			if(attr == 'opacity') {
				obj.style.filter = 'alpha(opacity:' + (cur + speed) + ')';
				obj.style.opacity = (cur + speed) / 100;
			} else {
				obj.style[attr] = cur + speed + 'px';
			}

		}
		if(bStop) {
			clearInterval(obj.timer);
			if(fnEnd) fnEnd();
		}
	}, 30);
}