/*刚进入网页进度条的js*/
$(function(){
	$('#super').hide();
})

var i = 0,
loadTimer = null;
document.title = "loading……";
function loading() {
	document.title = (i % 2 == 0) ? "loading……" : "loading…";
	i++;
}
loadTimer = setInterval(loading, 400);
var loadWidth = 0;
var x = 0;
var loadingTimer1 = null;
function loadAnimation(toWidth) {
	var loadingBar = document.getElementsByClassName('progress-bar')[0];
	var widthPercent = document.getElementsByClassName('w-percent')[0];
	loadWidth = parseInt(loadingBar.style.width);

	var loadingTimer1 = setInterval(function() {
		if(loadWidth < toWidth) {
			var speed = Math.ceil((toWidth - loadWidth) /5);
			loadWidth += speed;
			widthPercent.innerHTML = loadWidth + '%';
			loadingBar.style.width = loadWidth + '%';
			//alert('loadwith:'+loadWidth);	

			if(loadWidth >= 100) {
				var loadPage = document.getElementById('loading');
				var welcomeTxt = document.getElementsByClassName('welcome')[0];
				welcomeTxt.style.block = 'none';
				welcomeTxt.style.top = '-160px';
				welcomeTxt.innerHTML = '<span class="glyphicon glyphicon-ok" style="color:#fff";></span>';
				startMove(welcomeTxt, {
					opacity: 100,
					top: 50
				}, function() {
					welcomeTxt.innerHTML = '<span class="l3">WELCOME TO MY WORLD</span>';
				});

				var loadingText = setTimeout(function() {
					$('#loading').toggle({
						effect: "scale",
						direction: "vertical"
					});
					$('#loading').remove();
					$('#super').fadeIn(400);
				
				}, 1000);
			}
		} else {
			clearInterval(loadingTimer1);
		}
	}, 100);

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

