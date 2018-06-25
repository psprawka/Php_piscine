<?php
	session_start();
	require_once("load.php");
	
	if (!$_SESSION[logged])
		header('Location: login.php');


	function get_item_id($add_name)
	{
		$items = 0;
		$add_name = trim(strstr($add_name, " "));
		
		while ($items < $_SESSION[products_nb])
		{
			$row = $_SESSION[products][$items];
			if ($add_name == $row[name])
				return ($row[id]);
			$items += 1;
		}
	}
	
	
	
	
	
	if ($_GET[submit])
	{
		$_SESSION['products'] = get_data($_GET[submit]);
		$_SESSION['products_nb'] = count($_SESSION['products']);
	}
	else if (!$_SESSION['products'])
	{
		$_SESSION['products'] = "";
		$_SESSION['products_nb'] = 0;
	}

	if ($_GET[add] && $_GET[add] != "")
	{
		$item_id = get_item_id($_GET[add]);
		$_SESSION[cart][] = $item_id;
		$_GET[add] = "";
	}
?>




<!DOCTYPE html>
<html lang="en"><head>
	<meta charset="UTF-8">
	<title>42 DARKWEB</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="container">
		
		<div class="rectangle" name="header">
		<div id="logo"><img id="imglogo" src="img/logo2.png"></div>
		<div id="text">Selling ALL NATURAL, high demand 'primate' organs</div>
		</div>
		
		<div class="sidebar" id="menu">
			<div style="width: 100%; height: 4vw; padding: 6% 0 7% 0; color: grey;
				text-shadow: 1px 1px 1px black;">PRODUCTS:</div>
			<form id="list" action="index.php" method="get">
				<input class="listel" type="submit" name="submit" value="-> endocrine glands"><br>
				<input class="listel" type="submit" name="submit" value="-> limbs"><br>
				<input class="listel" type="submit" name="submit" value="-> cardiorespiratory"><br>
				<input class="listel" type="submit" name="submit" value="-> nephrotic"><br>
				<input class="listel" type="submit" name="submit" value="-> neural"><br>
			</form>
		</div>
		
<div id="content" style="text-align:center;">
<?php
	$items = 0;

	while ($items < $_SESSION[products_nb])
	{
		$row = $_SESSION[products][$items];
		echo "<div class=\"product\"><div class=\"imgprdbox\"><div><img class=\"imgprd\" align=\"center\" src=\"$row[img]\"></div><div class=\"imgname\">$row[name]</div></div><div class=\"txtprd\">$row[des]</div><div class=\"payment\"><div class=\"price\">$row[price]</div><img class=\"add\" src=\"/img/doge.jpg\" style=\"border-radius: 45%;\"></div><div style=\"clear: both;\"></div><form class=\"button\" action=\"index.php\" method=\"get\"><input class=\"button_press\"type=\"submit\" name=\"add\" value=\"add $row[name]\"<br></form></div>";
		$items += 1;
	}
	if ($_SESSION[products_nb] == 0)
	echo "<b style=\"color:darkgreen;\">Welcome on <i>FRANKENSTEIN.COM!</i><br> Fresh, juicy and fast delivery only here.<br><br><br>Buy some products!</br><----</b>";
?>
		</div>
		<div class="sidebar" style="margin-right: 0;" name="menu">
			<div class="cart_item">YOUR CART:</div>

<?php
	
	function find_item($id)
	{
		$connection = mysqli_connect('localhost', 'root', 'root', 'main');
		$sql ="SELECT * FROM items WHERE id=$id";
		$result = mysqli_query($connection, $sql);
		$row = mysqli_fetch_assoc($result);
		return ($row);
	}
	
	$elem = 0;
	$price = 0;
	$cart = count($_SESSION[cart]);

	while ($elem < $cart)
	{
		$id = $_SESSION[cart][$elem];
		$row = find_item($id);
		echo "<div class=\"cart_item\"><div class=\"cart_item_name\" style=\"width:70%\";>$row[name]</div><div class=\"remove_item\">$row[price]</div><div class=\"remove_item\">-</div><div style=\"clear: both;\"></div></div>";
		$price += intval($row[price]);
		$elem += 1;
	}
	$_SESSION[total] = $price;
	
	echo "<div class=\"cart_item\"><button type=\"submit\" name=\"submit\"><a id=\"check\" href=\"checkout.php\">Total price: $_SESSION[total]<br>Validate your order</a></button></div>";
	
?>
		<div class="cart_item"><a id="check" href="logout.php">logout</a></div>
		</div>
		<div style="clear: both;"></div>




		<p style="text-align: center; text-shadow: 0.5px 0.5px 0.5px #dcff16; margin-bottom: 1%;">Still hesitate? Check out our reviews!</p>
		
		<div class="rectangle_empty" name="rewievs">
			
			<div class="rev">
				<div class="img"><img class="imgrev" align="left" src="img/dan.jpg"><p class="imgdes">DG, dead</p></div>
				<div class="textrev"><i>"I succeeded in my life's work thanks to your website. Now I am on the run, haunted by my own creation, dammed forever to be a transient pariah. 10/10, would purchase to fulfill my tragic hero fantasies again"</i></div>
				<div style="clear: both;"></div>
			</div>
			
			<div class="rev">
				<div class="img">
					<img class="imgrev" align="left" src="img/johnny.jpg"><p class="imgdes">JT, -42 yo</p></div>
				<div class="textrev"><i>"Clean service, get  products in 2 days, no trouble. <br>Probably will come again for more."</i></div>
				<div style="clear: both;"></div>
			</div>
			
			<div class="rev">
				<div class="img">
					<img class="imgrev" align="left" src="img/paul.jpg"><p class="imgdes">PS, 12 yo</p></div>
				<div class="textrev"><i>"Fresh and ORGANic. Definitely better quality than the previous one, quick and delicious."</i></div>
				<div style="clear: both;"></div>
			</div>
			
			
			<div class="rev" style="margin: 0 15% 0 15%;">
				<div class="img">
					<img class="imgrev" align="left" src="img/empty.jpg"><p class="imgdes">.., ... yo</p></div>
				<div class="textrev" ><i>"THIS IS A PLACE FOR YOUR REVIEW - BECOME ONE OF US."</i></div>
				<div style="clear: both;"></div>
			</div>
			<div style="clear: both;"></div>
		</div>
		
		
		
		
		
		<div id="footer"><i>&copy; 42 cadets: psprawka &amp;&amp; jtahirov &amp;&amp; dgerard 2018<i></div>
	</div>
</body></html>


