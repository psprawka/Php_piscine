<?php

session_start();

if (!$_POST['login'] || !$_POST['password'])
	header("Location: /admin/admin.html");


$secret_admin_login = "superadmin";
$secret_admin_password = "reallybadpassword";

$user = $_POST['login'];
$password = $_POST['password'];

if ($user === $secret_admin_login && $password === $secret_admin_password)
{
	$_SESSION['adminlogged'] = true;
	$_SESSION['db_name'] = 'main';
	header("Location: /admin/main_admin.php");
}

?>
