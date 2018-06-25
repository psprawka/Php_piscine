<?php
$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'web_site';

$conn = mysqli_connect(
	$host,
	$username,
	$password,
	$dbname
);

mysqli_query($conn, "INSERT INTO `items`(`name`, `des`, `price`, `img`, `cat`) VALUES ('nose', 'High quality nose. Smells fresh.', 2, '/img/nose.jpg', 'neural')");
mysqli_query($conn, "INSERT INTO `items`(`name`, `des`, `price`, `img`, `cat`) VALUES ('spine', 'Carries those neural signals like nothing else.', 2, '/img/spine.jpg', 'neural')");
mysqli_query($conn, "INSERT INTO `items`(`name`, `des`, `price`, `img`, `cat`) VALUES ('brain', 'Products are organic and therefore of varying power. Please lobotomize before use.', 2, '/img/brain.jpg', 'neural')");
mysqli_query($conn, "INSERT INTO `items`(`name`, `des`, `price`, `img`, `cat`) VALUES ('left kidney', 'Filters blood.', 2, '/img/left_kidney.jpg', 'nephrotic')");
mysqli_query($conn, "INSERT INTO `items`(`name`, `des`, `price`, `img`, `cat`) VALUES ('right kidney', 'Filters blood right.', 2, '/img/right_kidney.jpg', 'nephrotic')");
mysqli_query($conn, "INSERT INTO `items`(`name`, `des`, `price`, `img`, `cat`) VALUES ('blood', 'Type O only for universal usage.', 2, '/img/blood.jpg', 'nephrotic')");
mysqli_query($conn, "INSERT INTO `items`(`name`, `des`, `price`, `img`, `cat`) VALUES ('heart', 'Products are organic and therefore of varying power. We cannot guarantee ventricle structural integrity after transport', 2, '/img/heart.jpg', 'cardiorespiratory')");
mysqli_query($conn, "INSERT INTO `items`(`name`, `des`, `price`, `img`, `cat`) VALUES ('aorta', 'Sizes vary between 1.6 - 3.0cm, plan accordingly', 2, '/img/aorta.jpg', 'cardiorespiratory')");
mysqli_query($conn, "INSERT INTO `items`(`name`, `des`, `price`, `img`, `cat`) VALUES ('lungs', 'All products are non smoking.', 2, '/img/lungs.jpg', 'cardiorespiratory')");
mysqli_query($conn, "INSERT INTO `items`(`name`, `des`, `price`, `img`, `cat`) VALUES ('right leg', 'If you buy legs in bulk, we will make sure to match sizes for you.', 2, '/img/right_leg.jpg', 'limbs')");
mysqli_query($conn, "INSERT INTO `items`(`name`, `des`, `price`, `img`, `cat`) VALUES ('left arm', '', 2, '/img/left_arm.jpg', 'limbs')");
mysqli_query($conn, "INSERT INTO `items`(`name`, `des`, `price`, `img`, `cat`) VALUES ('baby limbs', 'Full set.', 2, '/img/baby_limbs.jpg', 'limbs')");
mysqli_query($conn, "INSERT INTO `items`(`name`, `des`, `price`, `img`, `cat`) VALUES ('thyroid', 'Secretes necessary hormones.', 'endocrine glands')");
mysqli_query($conn, "INSERT INTO `items`(`name`, `des`, `price`, `img`, `cat`) VALUES ('pancreas', 'Secretes necessary hormones.', 2, '/img/pancreas.jpg', 'endocrine glands')");
mysqli_query($conn, "INSERT INTO `items`(`name`, `des`, `price`, `img`, `cat`) VALUES ('adrenal gland', 'A necessity for projects hoping to achieve fighting entities', 2, '/img/andrenal_gland.jpg', 'endocrine glands')");

 ?>
