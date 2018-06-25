<?php
	
	if ($_SERVER['PHP_AUTH_USER'] == "zaz" && $_SERVER['PHP_AUTH_PW'] == "jaimelespetitsponeys")
	{
		$image = file_get_contents("../img/42.png");
		$new = base64_encode($image);
		echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64," . $new . "'>\n</body></html>\n";
	}
	else
	{
		header('HTTP/1.0 401 Unauthorized');
		header('WWW-Authenticate: Basic realm="Espace membres"');
		echo "<html><body>That area is accessible for members only</body></html>\n";
	}
?>
