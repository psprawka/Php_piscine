<?php

$admin_usr = "admin";
$admin_password = "mary_shelley";
$user_password = "rip_silk_road";
$username_err = $password_err = "";
$username = $_GET['username'];
$password = $_GET['password'];
if ("OK" == $_GET['submit']) {
	if ($username == $admin_usr && $password == $admin_password) {
		session_start();
		echo "welcome admin";
		$_SESSION['login'] = "admin";
		$_SESSION['access'] = "full";
		header("Location: http://localhost:8100/admin/admin_login.php");
	} else if ($username == true && $password == $user_password) {
		session_start();
		echo "welcome user";
		$_SESSION['login'] = $username;
		$_SESSION['access'] = "basic";
		header("Location: http://localhost:8100/cart.php");
	} else {
		echo "incorrect login";
		if ($username == false){
			$username_err = "please type a username";
		}if ($password == false){
			$password_err = "please type a password";
		}
	}
}

?>

<html>
<title>enter credentials</title>
<body>
	<form action="head_logon.php" method="get">
		<p>enter credentials for access to the marketplace</p>
		<p><span class="error">* required field.</span></p>
		<p>Username: <input type="text" name="username" value=<?php echo $username; ?>>
		<span class="error">* <?php echo $username_err;?></span></p>
		<p>Password: <input type="password" name="password" value=<?php echo $password; ?>>
		<span class="error">* <?php echo $password_err;?></span></p>
		<input type="submit" name="submit" value="OK">
	</form>
</body>
</html>
