<?php
$dbLocation = 'localhost';
$dbName = 'prokop_project';
$dbUser = 'root';
$dbPassword = '';

$dbConnect = mysql_connect($dbLocation,$dbUser,$dbPassword);
if(!$dbConnect){
	exit('ошибка соединения');
}
$db = mysql_select_db($dbName,$dbConnect);
if(!$db){
	exit('ошибка соединения');
}
@mysql_query("set names 'utf8'");// prokop111101 prokop111101