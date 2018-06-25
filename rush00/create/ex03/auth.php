<?php
	function auth($login, $passwd)
	{
		if ($login && $passwd && file_exists("../private/passwd"))
		{
			$accounts = unserialize(file_get_contents("../private/passwd"));
			foreach ($accounts as $account => $data)
			if ($data[login] == $login && $data[passwd] == hash("whirlpool", $passwd))
				return true;
		}
		else
			return false;
	}
	?>
