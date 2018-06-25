<?php
	
	session_start();
	require_once("auth.php");
	
	
	
	if ($_POST[submit] == "OK" && $_POST[login] && $_POST[passwd])
	{
		if (auth($_POST[login], $_POST[passwd]))
		{
			$_SESSION[login] = $_POST[login];
			$_SESSION[logged] = 1;
			header("Location: index.php");
		}
		else echo "Username or/and password incorrect\n";
	}
	
	if ($_POST[submit] == "Create")
		header("Location: create.html");
	if ($_POST[submit] == "Modify")
		header("Location: modif.html");
	
	?>



<!DOCTYPE HTML>
<html><body>

	<form action="login.php" method="post">
		<label><b>Login:</b></label>
		<br/>
		<input type="text" name="login" value="<?php echo $_SESSION['login']; ?>">
		<br/>
		<label><b>Password:</b></label>
		<br/>
		<input type="password" name="passwd" value="<?php echo $_SESSION['passwd']; ?>">
		<br/>
		<button type="submit" name="submit" value="OK">OK</button><br><br>
		<button type="submit" name="submit" value="Create">Create an account</button><br/>
		<button type="submit" name="submit" value="Modify">Modify password</button><br/>
	</form>

</body></html>
