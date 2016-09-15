<?php
session_start();

mysql_connect ("mysql.hostinger.com.ua","u362242719_test","pfhf,jnfkj");
mysql_select_db ("u362242719_test");
mysql_query("SET NAMES utf8");

$login = $_SESSION['login'];
$password = $_SESSION['password'];
$id_user = $_SESSION['id'];
?>