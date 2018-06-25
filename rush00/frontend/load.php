<?php
	
	function load($category)
	{
		if ($category == "-> endocrine glands")
			return "SELECT * FROM items WHERE cat=\"endocrine glands\"";
		else if ($category == "-> limbs")
			return "SELECT * FROM items WHERE cat=\"limbs\"";
		else if ($category == "-> cardiorespiratory")
			return "SELECT * FROM items WHERE cat=\"cardiorespiratory\"";
		else if ($category == "-> nephrotic")
			return "SELECT * FROM items WHERE cat=\"nephrotic\"";
		else if ($category == "-> neural")
			return "SELECT * FROM items WHERE cat=\"neural\"";
	}
	
	function get_data($category)
	{
		$connection = mysqli_connect('localhost', 'root', 'root', 'main');
		$result = mysqli_query($connection, load($category));
		
		while ($row = mysqli_fetch_assoc($result))
			$array[]=$row;
		return ($array);
	}
?>

