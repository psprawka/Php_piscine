<?php
	if ($_POST[submit] == "OK" && $_POST[login] && $_POST[oldpw] && $_POST[newpw])
	{
		$user = 0;
		if (file_exists("../private/passwd"))
		{
			$accounts = unserialize(file_get_contents("../private/passwd"));
			foreach ($accounts as $account => $data)
			{
				if ($data[login] == $_POST[login] && $data[passwd] == hash("whirlpool", $_POST[oldpw]))
				{
					$accounts[$account][passwd] = hash("whirlpool", $_POST[newpw]);
					$changed = 1;
					file_put_contents("../private/passwd", serialize($accounts));
					echo "OK\n";
				}
			}
		}
		if ($changed != 1)
			echo "ERROR\n";
	}
	else
		echo "ERROR\n";
?>
