<!DOCTYPE html>
<html lang="zh">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<meta name="author" content="白唯" />
		<meta name="Keywords" content="白唯,白小唯,番茄小姐,高桥,个人网页,网站创意欣赏,酷站,html案例,css设计案例，响应式网站，responsive website" />
		<meta name="Description" content="这是白小唯的personal website,白小唯的小站，认识我，从这里开始。" />
		<link rel="shortcut icon" href="img/title.ico" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/index.css"/>
		<script type="text/javascript" src="js/joint.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
		<script type="text/javascript" src="js/PrefixFree.js"></script>
		<script type="text/javascript" src="js/loading.js"></script>
		<!--
			作者：997132391@qq.com
			时间：2017-06-24
			描述：头部是搜索优化，引入jquery，jqury-ui，bootstrap，以及prefixfree。
			<link rel="stylesheet" type="text/less" href="css/index.less"/>
			<link rel="stylesheet" type="text/less" href="css/joint.less"/>
			<script type="text/javascript" src="js/less.js"></script>
		
		------------------本站由jQuery+boostrap驱动--------------------------------------
		
		-->
	</head>
	<body>
		<?php
		//创建一个.dat数据文件来保存访问的次数！
		@session_start();
		error_reporting(E_ALL ^ E_NOTICE);
		$counter = intval(file_get_contents("counter.dat"));
		//创建一个dat数据文件
		if (!$_SESSION['#']) {
			$_SESSION['#'] = true;
			$counter++;
			//刷新一次+1
			$fp = fopen("counter.dat", "w");
			//以写入的方式，打开文件，并赋值给变量fp
			fwrite($fp, $counter);
			//将变量fp的值+1
			fclose($fp);
		}
		?>
		<!--描述：预加载进度条-->
		<div id="loading">
			<div class="loadingbar">
				<div class="container">
					<div class="center-block text-center">
						<div class="text-center w-percent" style="color:#008000">
							0%
						</div>
						<h3 class="text-info welcome center-block">
							<span class="glyphicon glyphicon-refresh" id="lo-refresh" style="color: rgb(255, 255, 255);"></span></h3>
					</div>
				</div>
				<div class="progress progress-striped active" style="height:6px;">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"style="width:0%;color:#008000"></div>
					<script type="text/javascript">loadAnimation(5);</script>
				</div>
			</div>
		</div>
		<!--描述：预加载进度条-->
		<!--描述：超级大的容器-->
		<div id="super">
		<!--描述：顶部的导航栏-->
		<div id="top-nav">
			<div class="col-sm-2 col-md-2 hidden-xs left">
				<img src="img/logo1.gif" />
			</div>
			<div class="col-sm-8 col-xs-12 text-center center">
				<div class="visible-xs phone col-xs-12">
					<div class="text-left col-xs-6">
						<img src="img/phone-top.png" height="40px"/>
					</div>
					<div class="text-right col-xs-6">
						<button class="btn btn-default" id="menu-btn" data-toggle="modal" data-target="#phone-menu">
						<span class="glyphicon glyphicon-list"></span>
						</button>
					</div>

				</div>
				<ul class="hidden-xs text-center">
					<li>
						<a href="javascript:void(0)" id="index">
							<span class="glyphicon glyphicon-home"></span> 主页
						</a>
						<span></span>
					</li>
					<li class="midot">
						&middot;
					</li>
					<li>
						<a href="javascript:void(0)" id="iAbout">
							<span class="glyphicon glyphicon-heart"></span> 关于我
						</a>
						<span></span>
					</li>
					<li class="midot">
						&middot;
					</li>
					<li>
						<a href="javascript:void(0)" id="iWe">
							<span class="glyphicon glyphicon-film"></span> 关于他们
						</a>
						<span></span>
					</li>
					<li class="midot">
						&middot;
					</li>
					<li >
						<a href="works.html">
							<span class="glyphicon glyphicon-book"></span> 文字小站
						</a>
						<span></span>
					</li>
					<li class="midot">
						&middot;
					</li>
					<li>
						<a href="message.php">
							<span class="glyphicon glyphicon-envelope"></span> 留言板
						</a>
						<span></span>
					</li>
				</ul>

			</div>
			<div class="col-sm-2 text-right hidden-xs right">
				<span class="progress-bar-default" data-toggle="modal" data-target="#registerModal"><span class="glyphicon glyphicon-user "></span></span>
				<span class="progress-bar-default"  data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in "></span></span>
			</div>
		</div>
		<!--描述：预加载进度条-->
		<!--描述：加载进度为10%-->
		<script type="text/javascript">loadAnimation(10);</script>
		<!--描述：第一个容器-->
		<div id="wrap">
			<div class="row">

			</div>

			<div id="first">
				<div class="jumbotron">
					<div class="container">
						<h1 class="text-center">我是白唯</h1>
						<h2>一个渴望在WEB领域混碗饭吃的满腹骚气的少年</h2>
						<p>
							<span id="visitime"></span>我终于等到你，第<span id="visitor"><?php echo "$counter" ?></span></span>位的访客
						</p>
						<p>
							<button class="slide-button" id="slide-one">
							开始认识我
							</button>
							<button class="slide-button hidden-xs" id="responsive-btn1">
							查看手机版
							</button>
						</p>
					</div>
					<ul class="bg-bubbles">
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
			</div>
		</div>
		<!--描述：预加载进度条-->
		<!--描述：关于我的部分-->
		<div id="wrap1">
			<div class="row">
				<div class="container me">
					<div class="col-sm-4 text-left title">
						<h1>关于我的简述</h1>

					</div>
					<div class="col-sm-8 content">
						<p>
							白唯，也叫白小唯。
						<p>
							基于从小被放养的成长环境，我的爱好十分广泛。我曾非常热爱写作，基于此热情，也非常喜欢看微型小说，喜欢带有发散性思维的文学作品，也曾在一些刊物上发表过一些散文和随笔。我喜欢诗句，但艺术却不可道明。值得一提的是，我喜欢远足，去探险，个人对大自然有着与生俱来的喜爱。此外，我热爱观看电子竞技比赛，不常常玩游戏的我对此热情高亢，这是简直是一个迷之爱好。
						</p>
						<p>
							现在，我致力于成为一名能够在WEB前端领域混碗饭吃的满腹骚气的程序员。我一直在想，也许我会成为一名大艺术家吧，不管是哪一方面，但我知道，我总会是的，这种盲目的自信来自于内心最深处的渴望。
						</p>
						<p class="text-success">
							<b>我是白小唯，若不出众，就一定出柜。</b>
						</p>

					</div>
					<div class="img-area1 col-sm-12">
						<div class="col-xs-6 col-md-4">
							<img src="img/m2.PNG"/>
							<div class="label">
								<div class="label-title">
									你别是个假的程序猿吧
								</div>
								<div class="label-content">
									2014.05
								</div>
							</div>

						</div>
						<div class="col-xs-6 col-md-4">
							<img src="img/m1.PNG"/>
							<div class="label">
								<div class="label-title">
									有程序猿鼓励师嘛，不开心了
								</div>
								<div class="label-content">
									2015.09
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-4">
							<img src="img/me3.PNG"/>
							<div class="label">
								<div class="label-title">
									在WEB道路上越走越丑的我
								</div>
								<div class="label-content">
									2016.10
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-4">
							<img src="img/m4.png"/>
							<div class="label">
								<div class="label-title">
									其实，我是个演员
								</div>
								<div class="label-content">
									2017.04
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-4">
							<img src="img/me5.png"/>
							<div class="label">
								<div class="label-title">
									未曾怒马鲜衣，只好好学习
								</div>
								<div class="label-content">
									2016.05
								</div>

							</div>
						</div>
						<div class="col-xs-6 col-md-4">
							<img src="img/me6.PNG"/>
							<div class="label">
								<div class="label-title">
									假文艺什么的，我可厉害了
								</div>
								<div class="label-content">
									2014.10
								</div>
							</div>
						</div>
					</div>

					<div class="me2 col-sm-12">
						<div class="col-sm-4 text-left title">
							<h1>更多关于我</h1>
						</div>
						<div class="col-sm-8 content">
							<p>
								这里，肯定不得不提到跟我专业相关的一些爱好，首先是我以前特别喜欢使用Photoshop.时日如飞，大学之门，幸得戴老指引，现在比较喜欢web前端这一块领域，并且我希望自己能够在web前端开发做到的不仅仅是混一碗饭吃。
							</p>

							<p>
								提及特长，我都差点笑出了声。也许是中国人自古以来谦逊的传承，一直羞于说出来自己的特长。那我就说说我的特长吧——根据他人评价和自我印象来说，我觉得我比较突出的特长就是文本编辑能力强，其次是我的实践能力强，宏观意识良好，创意良好，具有想象力，自我风格明显，好像自我膨胀太多了,哈哈。最后，如果幽默也是一种特长的话，我会把它写在最前面。
							</p>
							<p>
								风牛马不相及的是，我觉得，大概美的东西是不能靠太近的。另外，我出生于一九九四年，那一年，电影大爆炸，对于电影人和喜爱电影的我来说，那是一个不平常的时代。也正因为生于艺术之年，<b>所以我的“艺术”与生俱来。</b>
							</p>
							<p>
								<a href="http://ybdy365.baijia.baidu.com/article/234252" target="_blank">
									点击看看那个传奇的1994年。
								</a>
							</p>

						</div>
					</div>

				</div>
			</div>

		</div>
		<!--描述：关于我的部分-->
		<!--描述：预加载进度条25%-->
		<script type="text/javascript">loadAnimation(25);</script>
		<!--描述：中间的大slogan-->
		<div id="wrap2">
			<div class="row">
				<div class="container">
					<div class="title">
						“不出众，便出柜。”
					</div>
					<div class="footer">
						白小唯
					</div>
				</div>

			</div>
			<div class="bg">
				<div class="text-center">
					<button class="slide-button" id="slide-two">
					关于他们
					</button>
				</div>
			</div>
		</div>
		<!--描述：关于他们的模块-->
		<div id="wrap3">
			<div class="row">
				<div class="container we">
					<div class="col-sm-4 title visible-xs">
						关于他们
					</div>
					<div class="col-sm-8 content">
						<p class="text-success">
							<b>她。</b>
						</p>
						<p>
							她叫张的美，叫长得美的那种张的美。情人眼里出西施，我却不知道怎样去形容她。因为说她漂亮，她要说哪里漂亮嘛，人家长得丑；可是当你说她长得丑的时候，她一定会报之以歌般夸赞到：你才丑，你最丑。可爱吗？可爱。淘气吗？淘气。美好吗？美好。
						</p>
						<p class="text-success">
							<b>爱情不过是两张天真的脸，爱情不过是她清晨给我送的鸡蛋。</b>
						</p>
						<p>
							张的美，我心中的小仙女，小可爱，小女生，小孩子，传奇女生，不过，她所有的样子我都喜欢。喜欢每个中午她在教室等我的样子，喜欢她看我时天真的眼神，喜欢她努力抢我手机的样子，喜欢她静静不说话的样子，喜欢她牵我手心跳的样子，喜欢课间操时摸她头乖巧的样子，喜欢三更半夜找她聊天视频的样子，喜欢她在每一次在秀一中那条路等我的样子，喜欢她在电动车后座抱着我的样子，喜欢和她一起看星星的样子，喜欢她撒娇的样子，喜欢她卖萌的样子，喜欢她傻比的样子，喜欢她在雨中触碰我心跳的样子，喜欢她和我一起领略夏夜美好的样子，喜欢她和我一起在人流中拥挤的样子，喜欢她所有的样子……
						</p>
						<p class="text-success">
							<b>愿我的热情永远如初,故事永不被辜负。</b>
						</p>
					</div>
					<div class="col-sm-4 title hidden-xs">
						关于她
					</div>
					<div class="col-sm-12 img-area2">
						<div class="col-sm-4 cube-wrap">

							<div class="box">
								<div class="cude">
									<div class="front surface">
										自信的 Confidence
									</div>
									<div class="surface left">
										美丽的 Beautiful
									</div>
									<div class="surface right">
										可爱的 Lovely
									</div>
									<div class="surface bottom">
										美好的 Nice
									</div>
									<div class="surface top">
										优雅的 Graceful
									</div>
									<div class="surface back">
										天真的 Childish
									</div>
									<div class="surface-in front-in">
										<img src="img/lover1.jpg" alt="" />
									</div>
									<div class="surface-in back-in">
										<img src="img/lover2.jpg" alt="" />
									</div>
									<div class="surface-in left-in">
										<img src="img/lover3.jpg" alt="" />
									</div>
									<div class="surface-in right-in">
										<img src="img/lover4.jpg" alt="" />
									</div>
									<div class="surface-in top-in">
										<img src="img/lover5.jpg" alt="" />
									</div>
									<div class="surface-in bottom-in">
										<img src="img/lover6.jpg" alt="" />
									</div>
								</div>
							</div>

						</div>
						<div class="col-sm-8 lover text-center">
							<div class="col-xs-4 text-center">
								<img src="img/lover-1.jpg" id="love-1"/>
							</div>
							<div class="col-xs-4">
								<img src="img/lover-2.jpg" id="lover-2" />
							</div>
							<div class="col-xs-4">
								<img src="img/lover-3.jpg" id="lover-3"/>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!--描述：关于他们的模块-->
		<!--描述：预加载进度条40%-->
		<script type="text/javascript">loadAnimation(40);</script>
		<!--描述：关于我们的模块-->
		<div id="wrap4">
			<div class="container" id="p1">
				<div class="aboutwe col-sm-12">
					<div class="col-sm-12 text-center we-title">
						关于我们
					</div>
					<div class="col-xs-12 we-content">
						<div class="col-xs-6 col-md-3 we-pic" id="p">
							<img src="img/we-1.PNG"/>
							<div class="text-wrap">
								<div class="title">
									风在吹她的叶子
									<br />
									梦在结它的种子
									<br />
									我们站着，不说话
									<br />
									就十分美好
									<div class="footer">
										2017.04 重庆&middot;杨家坪
									</div>
								</div>

							</div>
						</div>
						<div class="col-xs-6 col-md-3 we-pic">
							<img src="img/we-2.PNG" alt="" />
							<div class="text-wrap" id="text-wrap">
								<div class="title">
									你走
									<br />
									我不送你
									<br />
									你来
									<br />
									多大风多大雨我都去接你
									<div class="footer">
										2017.05 重庆&middot;万州万达
									</div>
								</div>

							</div>
						</div>
						<div class="col-xs-6 col-md-3 we-pic">
							<img src="img/we-3.PNG" alt="" />
							<div class="text-wrap">
								<div class="title">
									那天晚自习
									<br />
									我送了她几颗星星
									<br />
									某天早上
									<br />
									她送了我一颗鸡蛋
									<br />
									然后那天有张的美的夏天
									<br />
									轰然来临
									<div class="footer">
										2017.06 重庆&middot;南岸&middot;洋人街
									</div>
								</div>

							</div>
						</div>
						<div class="col-xs-6 col-md-3 we-pic">
							<img src="img/we-4.PNG" alt="" />
							<div class="text-wrap">
								<div class="title">
									<br />
									你来人间一趟，
									<br />
									你要看看太阳，
									<br />
									和你的心上人
									<br />
									一起走在街上
									<div class="footer">
										2017.06 重庆&middot;万州&middot;万达
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-3 we-pic">
							<img src="img/we-5.PNG" alt="" />
							<div class="text-wrap">
								<div class="title">
									<br />
									那个美丽无比夏天
									<br />
									无论我走到哪里
									<br />
									我都不会忘记

									<div class="footer">
										2016.08 重庆&middot;秀山&middot;小店
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-3 we-pic">
							<img src="img/we-7.PNG" alt="" />
							<div class="text-wrap">
								<div class="title">
									<br />
									今夜，我不关心人类
									<br />
									我只想你
									<div class="footer">
										2017.06 重庆&middot;秀山
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-3 we-pic imgs">
							<img src="img/we-6.PNG" alt=""/>
							<div class="text-wrap">
								<div class="title">
									<br />
									是谁这么告诉过你：
									<br />
									答应我
									<br />
									忍住你的痛苦
									<br />
									不发一言
									<br />
									穿过整座城市
									<br />
									<div class="footer">
										2017.06 重庆&middot;秀山
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-3 we-pic imgs" >
							<img src="img/we-8.PNG" alt="" />
							<div class="img-wrap">
								<div class="loader circle-round-fade">
									<span></span>
									<span></span>
									<span></span>
									<span></span>
									<span></span>
									<span></span>
									<span></span>
									<span></span>
								</div>
								<div class="text-center title">
									图片尺度大到损坏
								</div>
							</div>
							<div class="text-wrap">
								<div class="title">
									<br />
									草原尽头我两手空空
									<br />
									悲痛时握不住一颗泪滴
									<div class="footer">
										2017.06 重庆&middot;秀山
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--描述：关于他们的模块-->
		<!--描述：进度条加载到70%-->
		<script type="text/javascript">loadAnimation(70);</script>
		<!--描述：关于repost一些网站的模块-->
		<div id="wrap5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 title">
						Repost一些网站
					</div>
					<div class="col-sm-4">
						<div class="thumbnail">
							<img src="img/jq.PNG" alt="通用的占位符缩略图">
							<div class="caption">
								<h3>一个小站</h3>
								<p class="hidden-xs">
									这是一个我比较喜欢，然后想推荐的网站，也是推荐中唯一不是自己写的。大家可以点进去看看它的效果，可谓别树一帜。
								</p>
								<p >
									<a href="http://www.peranchina.com/#/home" class="btn btn-success" target="_blank" role="button">
										访问
									</a>
									<a href="javascript:void(0)" class="btn btn-default" disabled="disabled" role="button">
										收藏
									</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="thumbnail">
							<img src="img/tonggong.PNG"alt="通用的占位符缩略图">
							<div class="caption">
								<h3>佟工在线</h3>
								<p class="hidden-xs">
									这是我初次制作的一个在线计算平台，也是我接的第一个小项目，计划有十几组页面，目前已做好雏形。基于bootstrap，有可响应手机的简单版本。
								</p>
								<p>
									<a href="http://tonggong.net/index.asp" class="btn btn-success" target="_blank" role="button">
										访问
									</a>
									<a href="javascript:void(0)" class="btn btn-default" disabled="disabled" role="button">
										收藏
									</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="thumbnail">
							<img src="img/first.png"alt="通用的占位符缩略图">
							<div class="caption">
								<h3>青涩的纪念</h3>
								<p class="hidden-xs">
									这是我第一次制作的网页，现在看来，简直不堪回首，但我会更好的。与此同时，我注定在WEB前端的道路上越走越远。
								</p>
								<p>
									<a href="http://www.ibwei.com/first/home.html" class="btn btn-success"  target="_blank"  role="button">
										访问
									</a>
									<a href="javascript:void(0)" class="btn btn-default" disabled="disabled" role="button">
										收藏
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--描述：关于repost一些网站的模块-->
		<!--描述：预加载到80%-->
		<script type="text/javascript">loadAnimation(80);</script>
		<!--描述：最后的福利区的模块-->
		<div id="wrap6">

			<div class="container">
				<div class="row">
					<div class="col-sm-12 title">
						最后的福利区
						<br />
						<h4>能看到这里也很不容易，所以准备了一份惊喜，奖品真实有效。该功能在手机上兼容不好，但多刮几次也能刮开。</h4>
					</div>
					<div class="col-sm-12 content">
						<div class="mapbox" id="mapbox">
							<label></label>
							<canvas id="map"></canvas>
						</div>
					</div>
					<div class="footer text-center">
						<img src="img/end.gif" width=""/>
					</div>
				</div>
			</div>
		</div>
		<!--描述：最后的福利区的模块-->

		<!-- 登录模态框 -->
		<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="loginModalLabel">账号登录</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label class="col-sm-2 control-label">用户名</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="lusername" placeholder="请输入用户名或手机号码">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">密码</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" id="lpassword" placeholder="请输入密码">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label"></label>
								<div class="col-sm-10 checkbox">
									<label>
									<input name="auto-login" type="checkbox" checked>
									自动登录 </label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="button" class=" btn btn-default" id="dologin">
									登录
									</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">
									取消
									</button>
									<button type="button" class=" btn btn-default" id="doregister">
									注册
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- 注册模态框 -->
		<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="registerModalLabel">账号注册</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label class="col-sm-2 control-label">用户名</label>
								<div class="col-sm-10">
									<input type="text" id="username" class="form-control" placeholder="请输入用户名">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">密码</label>
								<div class="col-sm-10">
									<input type="password" id="password" class="form-control" placeholder="请输入密码">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">确认密码</label>
								<div class="col-sm-10">
									<input type="password" id="repassword" class="form-control" placeholder="请确认密码">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">手机号码</label>
								<div class="col-sm-7">
									<input type="register_phone" class="form-control" id="register_phone" placeholder="此项暂时不用输入">
								</div>
								<label class="col-sm-3 control-label" style='text-align:left;'>
								<button class='layui-btn layui-btn-small' id='send_register_code'>
								获取验证码
								</button> </label>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">验证码</label>
								<div class="col-sm-5">
									<input type="text" id="yzm" class="form-control" placeholder="不用输入">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<input name="xy" type="checkbox" checked>
									<a href='javascript:void(0)' target="_blank">
										我已阅读并同意相关服务条款和隐私政策
									</a>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="button" class=" btn btn-default" id="register">
									注册
									</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">
									取消
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- 注册模态框 -->
		<!--描述：这是手机登录的模态框-->
		<div class="modal fade" id="phone-menu" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">

			<ul class="text-left">
				<li>
					<a href="javascript:void(0)" id="index">
						我的主页
					</a>

				</li>

				</li>
				<li>
					<a href="javascript:void(0)" id="iAbout">
						关于白唯
					</a>

				</li>

				</li>
				<li>
					<a href="javascript:void(0)" id="iWe">
						关于他们
					</a>

				</li>

				</li>
				<li >
					<a href="works.html">
						文字小站
					</a>

				</li>

				</li>
				<li>
					<a href="message.php">
						给我留言
					</a>

				</li>
			</ul>

			<div class="col-xs-12 text-center">
				<span class="progress-bar-default" data-toggle="modal" data-target="#registerModal">注册</span>

				<span class="progress-bar-default"  data-toggle="modal" data-target="#loginModal">登录</span>
			</div>

		</div>
		<!--描述：这是手机登录的模态框-->
		<!--描述：进度条预加载到90%-->
		<script type="text/javascript">loadAnimation(90);</script>
		<!--描述：公用底部-->
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="f1 col-sm-4">
						<div class="title">
							关于白小唯小站
						</div>
						<div class="content">
							<p>
								欢迎来到这里，这里是白小唯小站。
							</p>
							<p>
								如你所见，这是一个叫白小唯的男人设计制作的web小站，网站设计灵感来自bootstrap优选酷站。小站内容主要是以展示自己为主，然后设计模式是响应式的，初次制作，多有瑕疵，希望有想法的朋友能够多多在本站留言板跟我分享，不胜感激。
							</p>
							<p>
								反馈或建议请发送邮件至
								<a style="text-decoration: underline;" href="mailto://997132391@qq.com?CC=782553956@qq.com&BCC=782553956@qq.com&Subject=这是我的建议&Body=我觉得你的网站还应该……">
									997132391@qq.com
								</a>
							</p>
						</div>
					</div>
					<div class="f2 col-sm-2">
						<div class="title">
							技术链接
						</div>
						<div class="content">
							<a href="http://www.golaravel.com/">
								Laravel 中文网
							</a>
							<br />
							<a href="http://www.jquery123.com/">
								jQuery API 中文文档
							</a>
							<br />
							<a href="https://v4.bootcss.com/">
								bootstrap4.0 预览
							</a>
							<br />
							<a href="http://expo.bootcss.com/">
								酷站精选
							</a>
							<br />
							<a href="http://www.bootcdn.cn/">
								bootCDN
							</a>

						</div>
					</div>
					<div class="f3 col-sm-3">
						<div class="title">
							一些轻微的话
						</div>
						<div class="content">
							<p>
								远方除了遥远一无所有
								<br />
								更远的地方，更加孤独
								<br />
								远方的幸福，是多少痛苦。
							</p>
							<p>
								所以，请忍住你的痛苦
								<br />
								不发一言，穿过整座城市
							</p>

						</div>
					</div>
					<div class="f4 col-sm-2" >
						<div class="title">
							&nbsp;&nbsp;Follow Me
						</div>

						<div class="col-sm-12">
							<img src="img/weixin.png" id="wechat"/>
						</div>
					</div>
				</div>
			</div>
			<div class="row copyright hidden-xs">
				白小唯小站 Copyright © ibwei.com 2016 渝ICP备16013204号-1
			</div>
			<div class="row copyright visible-xs">
				白小唯小站 Copyright © ibwei.com
			</div>
		</div>
		<!--描述：公用底部-->
		<!--描述：返回顶部的小标签-->
		<div class="returntop">
			<div class="icon">
				<span class="glyphicon glyphicon-bookmark"></span>
			</div>
			<div class="text">
				返回顶部
			</div>
		</div>
		<!--描述：返回顶部的小标签-->
		<!--描述：初始化完成，加载title，去除进度条-->
		<script type="text/javascript">document.title = "白小唯小站|主页[http://www.ibwei.com/responsive-website]";
		clearInterval(loadTimer);
		loadAnimation(100);</script>
		<!--描述：初始化完成，加载title，去除进度条-->
		</div>
		<!--描述：超级大的容器-->
	</body>

</html>
