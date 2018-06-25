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

$_SESSION['edit_items'] = true;
$_SESSION['edit_users'] = false;

if (!$conn) {
    die("Oups can't connect to db (" . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

function fill_table() {
	global $conn;

	echo '<table class="actual">';
	$query = mysqli_query($conn, "SELECT * FROM items ORDER BY id ASC");
	while ($row = mysqli_fetch_assoc($query))
	{
		$col_number = 0;
		echo '
			<tr>
				<td>
				<form type = "text" method ="get" action="/admin/insert.php">';
					foreach ($row as $content_name => $cell)
				{
					if ($content_name == 'id') {
						echo '<input type="text" value="'. $cell .'"name="id" style="visibility:hidden" />';
						continue;
					}
					echo '<input type="text" name=';
					echo "'".$col_number."'";
					echo " value ='".$cell."'>";
					$col_number++;
				}
		echo '	
					<input type="submit" value="update" name="button">
					<input type="submit" value="del" name="button">
				</form>
				</td>
			</tr>';
	}
	echo "</table>";
	mysqli_close($conn);
}
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="main_admin.css">
		<title>Surgeon's panel</title>
	</head>
	<body>
		<header>
			<div class="header">
				<span class="header_name"> Surgeon's Panel </span>
			</div>
		</header>
		<div class="main_view">
			<div class ="table">
				<?php fill_table() ?>
				<br>
				<div class = "button_wrapper">
					<a href = "edit_items.php" class = "buttons"> <button type="button">Edit items</button> </a>
					<a href = "edit_users.php" class = "buttons"> <button type="button">Edit users</button> </a>
					<a href = "/admin/insert.php" class = "buttons"> <button type="button">Add</button></a>
				</div>
			</div>
		</div>
	</body>
</html>
