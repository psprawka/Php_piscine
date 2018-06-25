<?php
	if ($_POST[submit] === "OK" && $_POST[login] && $_POST[passwd])
	{
		$user = 0;
		if (!file_exists("../private"))
			mkdir("../private");
		if (file_exists("../private/passwd"))
		{
			$accounts = unserialize(file_get_contents("../private/passwd"));
			foreach ($accounts as $account => $data)
			{
				if ($data[login] === $_POST[login])
				{
//					echo "ERROR\n";
					$user = 1;
				}
			}
		}
		if ($user != 1)
		{
			$data[login] = $_POST[login];
			$data[passwd] = hash("whirlpool", $_POST[passwd]);
			$accounts[] = $data;
			file_put_contents("../private/passwd", serialize($accounts));
//			echo "OK\n";
		}
	}
//	else
//		echo "ERROR\n";
	header("Location: login.php");
?>
