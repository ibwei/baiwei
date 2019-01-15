<!DOCTYPE html>
<html lang="zh">
	<head>
		<meta charset="UTF-8" />
		<script type="text/javascript" src="js/loading.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<meta name="author" content="白唯" />
		<meta name="Keywords" content="白唯,白小唯,番茄小姐,高桥,个人网页,网站创意欣赏,酷站,html案例,css设计案例，响应式网站，responsive website" />
		<meta name="Description" content="这是白小唯的personal website,白小唯的小站，认识我，从这里开始。" />
		<link rel="shortcut icon" href="img/title.ico" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/joint.css"/>
		<link rel="stylesheet" type="text/css" href="css/message.css"/>
		<script type="text/javascript" src="js/joint.js"></script>
		<script type="text/javascript" src="js/message.js"></script>
		<script type="text/javascript" src="js/PrefixFree.js"></script>
		<!--
			作者：997132391@qq.com
			时间：2017-06-24
			描述：头部是搜索优化，引入jquery，公共样式，bootstrap，以及prefixfree。
			<link rel="stylesheet" type="text/less" href="css/index.less"/>
			<link rel="stylesheet" type="text/less" href="css/joint.less"/>
			<script type="text/javascript" src="js/less.js"></script>
		
		------------------本站由jQuery+boostrap驱动--------------------------------------
		
		-->
	</head>
	<body>
		<!--描述：登录模态框-->
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
		<!-- 登录模态框 -->
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
									<input type="register_phone" class="form-control" id="register_phone" placeholder="请输入手机号码">
								</div>
								<label class="col-sm-3 control-label" style='text-align:left;'>
								<button class='layui-btn layui-btn-small' id='send_register_code'>
								获取验证码
								</button> </label>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">验证码</label>
								<div class="col-sm-5">
									<input type="text" id="yzm" class="form-control" placeholder="请输入验证码">
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
		<!--描述：主容器起始处-->
		<div id="wrap">
			<!--描述：导航条起始处-->
			<div id="main-nav">
				<div class="row">
					<!--描述：顶部文字-->
					<div class="top-text">
						<span>Aww yeah,Welcome to my message board!</span>
					</div>
				</div>
				<div class="row" style="border-bottom: 1px solid rgba(2,117,216,0.6);">
					<div class="container center-block">
						<!--描述：导航条-->
						<nav class="navbar" role="navigation">
							<div class="container-fluid">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">

									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="index.php">
										<img src="img/logo.gif" alt="logo.gif"/>
									</a>
								</div>
								<div class="collapse navbar-collapse" id="example-navbar-collapse">
									<ul class="nav navbar-nav">
										<li >
											<a href="index.php">
												<span class="glyphicon glyphicon-home"></span> 主页
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" id="about">
												<span class="glyphicon glyphicon-heart"></span> 关于我
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" id="we">
												<span class="glyphicon glyphicon-film"></span> 时光影集
											</a>
										</li>
										<li >
											<a href="works.html">
												<span class="glyphicon glyphicon-book"></span> 文字小站
											</a>
										</li>
										<li class="active">
											<a href="message.php">
												<span class="glyphicon glyphicon-envelope"></span> 留言板
											</a>
										</li>
									</ul>

									<ul class="nav navbar-nav navbar-right enroll hidden-xs hidden-sm">
										<span class="form-group hidden-md" >
										<input type="text" class="form-inline" style="height: 28px;" placeholder="请输入感兴趣的内容……">
										<button class="btn btn-success btn-xs" type="button">
										<span class="glyphicon glyphicon-search" style="color:white;"></span>
										</button> </span>
										<span class="badge progress-bar-success" data-toggle="modal" data-target="#registerModal"><span class="glyphicon glyphicon-user"></span> 注册</span>
										<span class="badge progress-bar-success"  data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> 登录</span>
									</ul>
								</div>

							</div>

						</nav><!--描述：导航条结束-->
					</div>
				</div>
			</div>
			<!--描述：留言板顶部开始-->
			<div class="row main-broad">
				<div class="container">
					<div class="position">
						<span class="glyphicon glyphicon-map-marker"></span>
						<a href="index.php">
							主页
						</a>
						<span class="glyphicon glyphicon-chevron-right" style="transform: scale(0.8,0.8);"></span>
						<a href="message.php">
							留言板
						</a>
					</div>
					<div class="message-broad col-sm-7 text-center bd-blue">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Read First,Or you will miss something interesting!</h3>
							</div>
							<div class="panel-body">
								<div class="body-text text-left">
									<p>
										<span class="glyphicon glyphicon-hand-right"></span> 首先呢，是非常欢迎大家留言的
									</p>
									<p>
										<span class="glyphicon glyphicon-hand-right"></span> 对于是那些踊跃留言要抨击我的人，特别特别是那些要说我菜的人，我要说一句：
									</p>
									<p>
										<span class="glyphicon glyphicon-hand-right"></span> 请你不要批评我，因为我是一个经不起批评的人（好像认真的脸）。
									</p>
									<p>
										<span class="glyphicon glyphicon-hand-right"></span> 那些懂SQL 注入、XSS 攻击、CSRF 攻击技术大牛们，请你们纵情，如果炸了，算我输。
									</p>
									<p>
										<span class="glyphicon glyphicon-hand-right"></span> 针对上面这一条我要说一句：我输了。
									</p>
									<p>
										<span class="glyphicon glyphicon-hand-right"></span> 来都来了，就留一条再走吧，万一有惊喜呢!
									</p>
								</div>
								<!--描述：留言表单开始处-->
								<div class="jumbotron memo">
									<h1><span class="s1">S</span><span class="s1">h</span><span class="s1">a</span><span class="s1">r</span><span class="s1">e</span></h1>
									<p>
										如果没有什么疑问，就点击开始留言吧
									</p>
									<div class="watchLogo">
										<div class="w2">
											<img src="img/title.ico"  width="70px" height="100%" alt="" style="text-align: center;"/>
										</div>
									</div>
								</div>
								<div class="input-panel">
									<div class="input-panel1"></div>
									<form class="form-horizontal" role="form" action="add.php" method="post" onsubmit="return safeCheck();">
										<div class="form-group has-success">
											<label class="col-sm-2 control-label" for="input1">你的名字:</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name='name' id="input1" placeholder="enter your name">
											</div>
											<label class="col-sm-2 control-label" for="input2">你的标签:</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" id="input2" name='label' placeholder="可从右侧标签栏选择">
											</div>
										</div>
										<div class="avatar-list">
											<div class="text-success">
												从下面选择一个作为你的头像
											</div>
											<label class="checkbox-inline col-lg-1 col-xs-2">
											<input type="radio" name="optionsRadiosinline" id="optionsRadios3" value="avatar1.jpg">
											<img src="img/avatar1.jpg" class="img-responsive"/>
											</label>
											<label class="checkbox-inline col-lg-1 col-xs-2">
											<input type="radio" name="optionsRadiosinline" id="optionsRadios3" value="avatar2.jpg">
											<img src="img/avatar2.jpg" class="img-responsive"/>
											</label>
											<label class="checkbox-inline col-lg-1 col-xs-2">
											<input type="radio" name="optionsRadiosinline" id="optionsRadios3" value="avatar3.jpg">
											<img src="img/avatar3.jpg" class="img-responsive"/>
											</label>
											<label class="checkbox-inline col-lg-1 col-xs-2">
											<input type="radio" name="optionsRadiosinline" id="optionsRadios3" value="avatar4.jpg">
											<img src="img/avatar4.jpg" class="img-responsive"/>
											</label>
											<label class="checkbox-inline col-lg-1 col-xs-2">
											<input type="radio" name="optionsRadiosinline" id="optionsRadios3" value="avatar5.jpg">
											<img src="img/avatar5.jpg" class="img-responsive"/>
											</label>
											<label class="checkbox-inline col-lg-1 col-xs-2">
											<input type="radio" name="optionsRadiosinline" id="optionsRadios3" value="avatar6.jpg">
											<img src="img/avatar6.jpg" class="img-responsive"/>
											</label>
											<label class="checkbox-inline col-lg-1 col-xs-2">
											<input type="radio" name="optionsRadiosinline" id="optionsRadios3" value="avatar7.jpg">
											<img src="img/avatar7.jpg" class="img-responsive"/>
											</label>
											<label class="checkbox-inline col-lg-1 col-xs-2">
											<input type="radio" name="optionsRadiosinline" id="optionsRadios3" value="avatar1.gif">
											<img src="img/avatar1.gif" class="img-responsive"/>
											</label>
											<label class="checkbox-inline col-lg-1 col-xs-2">
											<input type="radio" name="optionsRadiosinline" id="optionsRadios3" value="avatar2.gif">
											<img src="img/avatar2.gif" class="img-responsive"/>
											</label>
											<label class="checkbox-inline col-lg-1 col-xs-2">
											<input type="radio" name="optionsRadiosinline" id="optionsRadios3" value="avatar3.gif">
											<img src="img/avatar3.gif" class="img-responsive"/>
											</label>
										</div>

										<div class="form-group has-success">
											<div class="notice bg-warning center-block">
												<span></span>
												<br />
												<div>
													请注意上面内容，轻击重新编辑。
												</div>
											</div>
											<textarea class="form-control" rows="5" id="message" placeholder="在此输入你的留言内容" name="content"></textarea>
											<br />
											<div class="form-group">
												<button class="btn btn-success" type="submit">
												发表
												</button>
												<button type="reset" class="btn btn-default">
												重新编辑
												</button>
											</div>
										</div>
									</form>

								</div>

							</div>

						</div>
						<!--描述：留言区域结束-->
						<div class="floor">
							<?php
$host="localhost:3306";
$userName="*****";
$password="*****";
$link= mysql_connect($host,$userName,$password);  //连接数据库
$dbName="a0913135035";
mysql_query("set names utf8");
mysql_select_db($dbName,$link);    //打开表
$page_size=5;//每页显示的留言数是5
$page=isset($_GET["page"])?$_GET["page"]:1;
$query="select count(*) as total  from message";  //查找并生成一个临时表单
$result=mysql_query($query);
$message_count=mysql_result($result,0,"total"); //总条数
$page_count=ceil($message_count/$page_size);//计算页数
$offset=($page-1)*$page_size;
$sql=mysql_query("select * from message order by id desc limit $offset, $page_size"); //每页的条数是几到几
$row=mysql_fetch_object($sql);

if(!$row){
echo "<font color='red'>暂无公告信息！</font>"; //如果没有条数，则显示无
}else{
do{

?>
<div class="panel panel-default">
<div class="panel-body">
<div class="avatar col-sm-2 thumbnail">
<img class="img-responsive"  src="img/<?php echo $row -> avatar; ?>" alt="avatar1"/>
</div>
<div class="floor-text">
<span class="label-class bg-success">
<?php echo htmlspecialchars($row -> label); ?>的
</span>
<span class="name-class bg-warning">
<?php echo htmlspecialchars($row -> name); ?>
</span>
<span class="floor-count">
第<?php echo $row -> id; ?>楼
</span>
<p><?php echo htmlspecialchars($row -> content); ?></p>
</div>
</div>
<div class="panel-footer"><?php echo $row->date?></div>
</div>
<?php
}while($row=mysql_fetch_object($sql));
}
							?>
						</div>
						<div class="page-list">
							<ul class="pagination pagination-sm">
								<?php echo "<li class='disabled'><a>共" . ($page_count) . "页，当前第" . $page . "页</a></li>";
								echo "<li><a href=message.php?page=1>首页</a></li>";

								for ($mylist = 0; $mylist < $page_count; $mylist++) {
									if ($page == $mylist + 1) {
										echo "<li class='active'><a  href=message.php?page=" . ($mylist + 1) . ">" . ($mylist + 1) . "</a></li>";
									} else {
										echo "<li><a  href=message.php?page=" . ($mylist + 1) . ">" . ($mylist + 1) . "</a></li>";
									}
								}

								echo "<li><a href=message.php?page=" . ($page_count) . ">尾页</a></li>";
								mysql_free_result($sql);
								mysql_close($link);
								?>

							</ul>
						</div>
					</div>
					<!--描述：这是右侧标签栏部分-->
					<div class="mylabel  col-sm-4 col-md-4  bd-blue hidden-xs">
						<br />
						<p class="text-center text-info">
							<span class="glyphicon glyphicon-hand-down"></span> 可点击选择你的标签噢
						</p>

						<div class="container">
							<div class="col-sm-6 l-blue">
								<span>风骚无比<span>So coquettish</span></span>
							</div>
							<div class="col-sm-6 l-purple">
								<span>清新脱俗<span>Transcendent</span></span>
							</div>
							<div class="col-sm-6 l-green">
								<span>秀外慧中<span>emily in Sau outside</span></span>
							</div>
							<div class="col-sm-6 l-red">
								<span>孤独寂寞冷<span>loneliness</span></span>
							</div>
							<div class="col-sm-6 l-orange">
								<span>闭月羞花<span>putting the flowers to shame.</span></span>
							</div>
							<div class="col-sm-6 l-yellow">
								<span>千娇百媚<span>beautiful and charming</span></span>
							</div>

							<div class="col-sm-6 l-green">
								<span>撩妹狂魔<span>narcissist</span></span>
							</div>
							<div class="col-sm-6 l-purple">
								<span>奋不顾身<span>to forget about one's own</span></span>
							</div>
							<div class="col-sm-6 l-orange">
								<span>鼠目寸光<span>as blind as a bat</span></span>
							</div>
							<div class="col-sm-6 l-green">
								<span>菜得抠脚<span>rubbish</span></span>
							</div>
							<div class="col-sm-6 l-red">
								<span>极致猥琐<span>obscene</span></span>
							</div>
							<div class="col-sm-6 l-blue">
								<span>可爱得发芽<span>So sweet</span></span>
							</div>

							<div class="col-sm-6 l-orange">
								<span>高冷艳丽<span>indifference</span></span>
							</div>
							<div class="col-sm-6 l-red">
								<span>与众不同<span>Think Different</span></span>
							</div>
							<div class="col-sm-6 l-purple">
								<span>丑得想哭<span>ugly and ugly</span></span>
							</div>
							<div class="col-sm-6 l-blue">
								<span>油菜花<span>intelligent</span></span>
							</div>
							<div class="col-sm-6 l-green">
								<span>帅气逼人<span>handsome</span></span>
							</div>
							<div class="col-sm-6 l-yellow">
								<span>放荡不羁<span>sow one's wild oats</span></span>
							</div>
							<div class="col-sm-12 l-purple">
								<span>手动输入自己想要的标签<span>enter by your self</span></span>
							</div>
						</div>

					</div>
				</div>
			</div>	<!--描述：这是右侧标签栏部分-->
			
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

		</div>
		<!--描述：公用底部-->
		<!--描述：回到顶部的标签-->
		<div class="returntop">
			<div class="icon">
				<span class="glyphicon glyphicon-bookmark"></span>
			</div>
			<div class="text">
				返回顶部
			</div>
		</div>
		<!--描述：回到顶部的标签-->
		<!--描述：初始化完成-->
		<script type="text/javascript">document.title = "白小唯小站|留言板[http://www.ibwei.com/responsive-website]";
clearInterval(loadTimer);</script>
		<!--描述：初始化完成-->
	</body>

</html>
