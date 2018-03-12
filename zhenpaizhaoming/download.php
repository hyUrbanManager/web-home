<html>
	<meta charset='UTF-8'>
    <head>
        <title>download</title>
    </head>
    <body>
	
<?php
date_default_timezone_set('Asia/Shanghai');
$time_str = date('Y/m/d H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];

// 连接数据库。
$con = mysql_connect('localhost','root','!(19960317)xkw!');

if ($con) {
	
	// 入数据库。
	mysql_query('use zpzm;');
	mysql_query("insert into zpzm_download (ip, time) values('{$ip}', '{$time_str}');");

	mysql_close($con);
} 

header('location:zhaoduceliang.apk');

?>

若未跳出下载界面，请点击右上角使用其他浏览器打开。

    </body>
</html>