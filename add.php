
<?php
	//此功能是将留言板的留言存入数据库
	header("Content-type: text/html; charset=utf-8");
	$host="localhost:3306";
	$userName="root";
	$password="08150512love";
	
	$link= mysql_connect($host,$userName,$password);  //连接数据库
	$dbName="a0913135035";
	mysql_select_db($dbName,$link);    //打开表
	mysql_query("set names utf8");
	
	error_reporting(E_ALL ^ E_NOTICE);
	date_default_timezone_set(PRC);
	$name=$_POST['name'];
	$label=$_POST['label'];
	$content=$_POST['content'];
	$avatar=$_POST['optionsRadiosinline'];
	$date=date("Y-m-d H:i:s",time());
	$id=mysql_num_rows(mysql_query("select * from message"))+1;
	
	if(empty($avatar)){
	$avatar='avatar1.jpg';
	}
	if(!empty($content)&&!empty($name)&&!empty($label)){  //如果都不为空且通过了js的验证即可留言成功
		header("refresh:0.1,url=message.php");
		echo "<script>alert('你真幸运，居然留言成功了！')</script>";
	}
	mysql_query("set names utf8",$link);
	mysql_query("insert into message(id,name,label,content,date,avatar) values ('$id','$name','$label','$content','$date','$avatar')");
	mysql_close($link);
?>