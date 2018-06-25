<?php

	session_start();

	if ($_GET[submit] == "OK")
	{
		$_SESSION[login] = $_GET[login];
		$_SESSION[passwd] = $_GET[passwd];
	}
?>


<!DOCTYPE HTML>
<html><body>

	<form action="index.php" method="get">
		<label><b>Login:</b></label>
		<br/>
		<input type="text" name="login" value="<?php echo $_SESSION[login]; ?>">
		<br/>
			<label><b>Password:</b></label>
		<br/>
		<input type="password" name="passwd" value="<?php echo $_SESSION[passwd]; ?>">
		<br/>
		<button type="submit" name="submit" value="OK">OK</button>
	</form>

</body></html>

