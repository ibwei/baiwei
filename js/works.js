var workTimer=null;
var tim5=null;
$(function() {
	/*网页打开淡入效果*/
	$('html,body').hide().fadeIn(1500);
	var myTr = $('table tr');
	for(i = 0; i < myTr.length; i++) {
		$('table tr:eq('+i+')').hide().fadeIn(2000);
		if(i > 12) {
			myTr[i].style.display = "none";
		}
	}
	/*点击文章页数的判断*/
	$(".pagination li").click(function(){
		var myTr = $('table tr');
		var $index=$(".pagination li").index(this);
		if($(".pagination li:eq(2)").hasClass('active')){
			 currentIndex=1;
		}else{
			currentIndex=2;
		}
		if(currentIndex==1&&$index<2){
			alert("温馨提醒：已经是该页啦！");
			return false;
		}
		if(currentIndex==2&&$index>3){
			alert("温馨提醒：已经页尾啦！");
			return false;
		}
		
		
		/*文章列表的载入效果*/
				for(i = 0; i < myTr.length; i++){
					if($index<3){
						$(".pagination li:eq(2)").addClass('active').siblings().removeClass('active');
						if(i<12){
						myTr[i].style.display = "table-row";
						$('table tr:eq('+i+')').hide().fadeIn(500);
						}else{
						myTr[i].style.display="none"
						}
					}else{
						$(".pagination li:eq(3)").addClass('active').siblings().removeClass('active');
						if(i>12){
						myTr[i].style.display = "table-row";
						$('table tr:eq('+i+')').hide().fadeIn(500);
						}else{
						myTr[i].style.display="none";
						}
					}
			
				}
		})
	/*监听鼠标滚动，然后固定导航栏*/	
	window.onscroll = function() {
		var myTop = document.documentElement.scrollTop || document.body.scrollTop;
		if(myTop > 1) {
			$('.top-text').hide();
			var myNav = document.getElementById('main-nav');
			myNav.className = 'fixed-top';
			//myNav.style.top=myTop+'px';
		} else {
			$('#main-nav').removeClass('fixed-top');
		}

	}
	/*文章与列表切换*/
	$('.return-btn').click(function(){
		switchDisplay();
		 $('html,body').animate({scrollTop: '50px'}, 800);
	})
	var $myIndex;
	$('table tr').click(function(){
		//return false;
		 $myIndex=$('table tr').index(this);
		//alert($myIndex);
		switchDisplay();
		$myIndex+=1;
		$('#platform').load("other/works.txt #works"+$myIndex);
		$('.low').hide().fadeIn(2500);
		
	})
	/*每篇文章底部功能按钮的实现*/
	$('.pre-btn').click(function(){
		$myIndex-=1;
		if($myIndex==0){
			alert('温馨提示：已经是第一篇文章！');
			$myIndex=1;
			return false;
		}
		$('#platform').hide().load("other/works.txt #works"+$myIndex).fadeIn(2000);
		$('.low').hide().fadeIn(2500);
		 $('html,body').animate({scrollTop: '150px'}, 800);
	})
	$('.next-btn').click(function(){
		$myIndex+=1;
		if($myIndex>20){
			alert('温馨提示：已经是最后一篇文章！');
			$myIndex=20;
			return false;
		}
		$('#platform').hide().load("other/works.txt #works"+$myIndex).fadeIn(2000);
		$('.low').hide().fadeIn(2500);
		 $('html,body').animate({scrollTop: '150px'}, 800);	
	})
	
	$('.top-btn').click(function(){
		 $('html,body').animate({scrollTop: '150px'}, 800);
	})
	
	$('#input1,#date').change(function(){
		alert('此功能还在完善之中！');
	
		$(this).val("").blur();
			return false;
	}).keypress(function(e){
		if(e.keyCode==13){
				alert('此功能还在完善之中！');
			
				$(this).val("").blur();
				return false;
				$(this).val("").blur();
				
		}
	})
	/*右侧选择文章功能的代码*/
	$('.label1 div').click(function(){
		var $listIndex=$('.label1 div').index(this);
		if($listIndex==0){
			switchDisplay1();
			$('table tr').show();
			
		}
		if($listIndex==1){
			switchDisplay1();
			$('table tr').hide();
			$('table tr:eq(1)').show();
		}
		if($listIndex==2){
			switchDisplay1();
			$('table tr').hide();
			$('table tr:eq(3),table tr:eq(7),table tr:eq(11),table tr:eq(17),table tr:eq(15)').show();
		}
		if($listIndex==3){
			switchDisplay1();
			$('table tr').hide();
			$('table tr:eq(4),table tr:eq(16)').show();
		}
		if($listIndex==4){
			switchDisplay1();
			$('table tr').hide();
			$('table tr:eq(0),table tr:eq(2),table tr:eq(5),table tr:eq(17),table tr:eq(15),table tr:eq(9),table tr:eq(10)').show();
		}
		if($listIndex==5){
			switchDisplay1();
			$('table tr').hide();
			for(i=0;i<12;i++){
				var trIndex=Math.floor(Math.random()*20);
				$('table tr:eq('+trIndex+')').show();
			}
			
			
			
		}
		
		$('html,body').animate({scrollTop: '10px'});
	})
	/*背景画布的功能的实现*/
	tim5=setInterval(timer3,1000);
	
	$('.w-private').click(function(){
		$(this).addClass('active').siblings().removeClass('active');
		$('.subtitle,.table-responsive').hide();
		$('.privacy').hide().toggle( "highlight" );
	})
	$('.w-public').click(function(){
		$(this).addClass('active').siblings().removeClass('active');
		$('.privacy').hide();
		$('.subtitle,.table-responsive').hide().toggle( "highlight" );
	})
	
	var can = document.getElementById("canvas");
	var cxt = can.getContext('2d'); //设置绘图环境
	var w = canvas.width = window.screen.width;
	var h = canvas.height = 750;

	var words = Array(256).join('0').split('');
	var text = '';
	var x = 0;
	draw();
	function draw() {
		cxt.fillStyle = 'rgba(255,255,255,0.25)';
		cxt.fillRect(0, 0, w, h);
		cxt.fillStyle = color();
		cxt.font = "15px 微软雅黑";
		cxt.border = "1px dashed gray";
		words.map(function(y, n) {
			// text = String.fromCharCode(65+Math.ceil(Math.random()*57));
			var sentence = "白小唯小站讲三个我和她的小故事那些比爱情更值得热爱的没有比我更好的春天考试后没有比你更长的夏天一枝橘树的繁荣下着雪的故乡秋天里的稻草人归来长相思梦我从未停止过爱你我和你的陈奕迅先生在盛开的罂粟花下哭泣让我给你讲一个梦一枝孤独的梦我为什么哭了呢一枝蝴蝶的美丽";
			var myArray = new Array();
			myArray = sentence.split("");
			i = Math.floor(Math.random() * myArray.length);

			text = myArray[i];

			x = n * 16;
			cxt.fillText(text, x, y);

			words[n] = y > (600 + Math.random() * 484) ? 0 : y + 16;
		});
		workTimer=setTimeout(draw, 80);
		
	}
		var m=1;
		function timer3(){
			m++;
			if (m>6){
				clearTimeout(workTimer);
				workTimer=setTimeout(draw,40);
				
			}
			if(m>10){
				$('canvas').animate({opacity:"0.2"},1000);
				clearInterval(tim5);
				clearTimeout(workTimer);
				
			}
		}
		
	function color() {
		var r = Math.floor(Math.random() * 40);
		var g = Math.floor(Math.random() * 100 + 50);
		var b = Math.floor(Math.random() * 40);

		return "rgb(" + r + "," + g + "," + b + ")"

	}
	

})

/*文章与列表的切换*/
function switchDisplay(){
		$('.platform').slideToggle();
		$('.w').slideToggle();
}
function switchDisplay1(){
			$('.privacy').hide();
			$('.w-public').addClass('active').siblings().removeClass('active');
			$('.subtitle,.table-responsive').show();
			$('.platform').slideUp();
			$('.w').hide().toggle( "highlight" );
			
}
