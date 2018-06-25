<?php
include('db_manage.php');

$db_0 = new db_manage();
$db_0->db_init();

if ($_GET['id'] == true) {
	$all_products = $db_0->run_query("SELECT * FROM items ORDER BY id ASC");
	foreach ($all_products as $key => $value){
		if ($all_products[$key]['id'] == $_GET['id']) {
			$product_key = $key;
		}
	}
	$action_item = $all_products[$product_key];
}
if ($_GET['action'] == true){
	if ($_GET['action'] == "add") {
		if ($_SESSION['cart'] != "") {
			array_merge($_SESSION['cart'], $action_item);
		} else {
			$_SESSION['cart'] = $action_item;
		}
	}
} else if ($GET['action'] == "remove" && $_GET['id']){
	if ($_SESSION['cart'] != "") {
		foreach ($_SESSION['cart'] as $key => $value){
			if ($_SESSION['cart'][$key]['id'] == $_GET['id']) {
				$_SESSION['cart'][$key] = "";
			}
		}
	}
}

if ($_SESSION['cart'] != "") {
	foreach ($_SESSION['cart'] as $key){
		?>
		<form method="post" action="cart.php?action=add&id=<?php echo $_SESSION['cart'][$key]['id']; ?>">
				<div><?php echo $_SESSION['cart'][$key]['name']; ?></div>
				<div><?php echo $_SESSION['cart'][$key]['des']; ?></div>
				<div><?php echo $_SESSION['cart'][$key]['id']; ?></div>
				<div><?php echo $_SESSION['cart'][$key]['price'] . "BTC" ; ?></td>
				<input type="submit" name="remove" value="remove">
		</form>
		<?php
	}
}

$product_array = $db_0->run_query("SELECT * FROM items ORDER BY id ASC");
if ($product_array != "") {
	foreach($product_array as $key => $value){
		?>
			<div class="product">
				<form method="post" action="cart.php?action=add&id=<?php echo $product_array[$key]['id']; ?>">
					<div><?php echo $product_array[$key]['name']; ?></div>
					<div><?php echo $product_array[$key]['price']; ?> BTC</div>
					<div><?php echo $product_array[$key]['id']; ?></div>
					<input type="submit" name="add" value="add">
				</form>
			</div>
		<?php
	}
}

?>

<!-- cart pseudocode -->
<!--  cart data structure = $_SESSION['cart']['id']['quantity'] = 0;-->
<!-- fetch all items from the db and put them into an item array
>> if action == true
	>> if action == add
		>> if the quantity is real
			>> if the item is already in the cart at a quantity
			>> if the item is not already in the cart
	>> if action == remove
	>> if action == empty -->
