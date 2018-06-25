<?php

session_start();

if (!$_SESSION['adminlogged'])
	header("Location: /admin/main_admin.php");

$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = $_SESSION['db_name'];

$conn = mysqli_connect(
	$host,
	$username,
	$password,
	$dbname
);

if (!$_GET)
{
	if ($_SESSION['edit_items'] === true)
	{
		mysqli_query($conn, "INSERT INTO `items`(`name`, `des`, `price`, `img`, `cat`) VALUES ('change', 'this', 2, 'text', 'cat')");
		$_SESSION['edit_items'] = false;
		header("Location: /admin/edit_items.php");
	}
	else if ($_SESSION['edit_users'] === true)
	{
		mysqli_query($conn, "INSERT INTO `account`(`username`, `password`) VALUES ('dummy', 'dummy-pass')");
		$_SESSION['edit_users'] = false;
		header("Location: /admin/edit_users.php");
	}
}


if ($_SESSION['edit_items'] === true)
{
	$var_id = $_GET['id'];
	$var0 = $_GET[0];
	$var1 = $_GET[1];
	$var2 = $_GET[2];
	$var3 = $_GET[3];
	$var4 = $_GET[4];
	if ($_GET["button"] == "update")
		mysqli_query($conn, "UPDATE `items` SET `name`='$var0',`des`='$var1',`price`='$var2',`img`='$var3',`cat`='$var4' WHERE id = $var_id");
	else if ($_GET["button"] == "del")
		mysqli_query($conn, "DELETE FROM `items` WHERE `id`=$var_id");
	$_SESSION['edit_items'] = false;
	header("Location: /admin/edit_items.php");
}
else if ($_SESSION['edit_users'] === true)
{
	$var_id = $_GET['id'];
	$var1 = $_GET[0];
	$var2 = hash("sha512", $_GET[1]);
	if ($_GET["button"] == "update")	
		mysqli_query($conn, "UPDATE `account` SET `username`='$var1',`password`='$var2' WHERE id = $var_id");
	else if ($_GET["button"] == "del")
		mysqli_query($conn, "DELETE FROM `account` WHERE `id`=$var_id");
	$_SESSION['edit_users'] = false;
	header("Location: /admin/edit_users.php");
}
?>
