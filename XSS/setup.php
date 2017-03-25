<?php
$hostname = 'localhost';
$dbname = 'xss';
$username = 'root';
$pw = '';
$sqlfile = 'xssplatform.sql';
$sql = file_get_contents($sqlfile);

$conn = mysql_connect($hostname,$username,$pw) or die("无法连接数据库");

if (mysql_select_db($dbname, $conn)) {
	exit(0);
}

mysql_query("set names utf8;");

mysql_query("CREATE DATABASE xss;", $conn) or die("unable create xss");;

mysql_select_db($dbname,$conn) or die("无法连接到数据库");

$ar = explode("aaa", $sql);

foreach ($ar as $key => $value) {
	mysql_query($value);
};


mysql_query("INSERT INTO oc_user (id, adminLevel, userName, userPwd, email) VALUES (1, 1, 'admin', MD5('OldCMS|admin123'), 'admin@admin.com');");
mysql_query("UPDATE oc_module SET code=REPLACE(code,'http://localhost','http://ip:port');");
?>