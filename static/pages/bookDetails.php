<?php
// Include config file
require_once './../../config.php';

$book = $_REQUEST['submit'];
$sql = "SELECT id,name,cost,author,imagepath FROM books WHERE id = '$book' ";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
?>
<html>
<head>
<title>Book Details</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 	<link rel="stylesheet" type="text/css" href="./../css/home.css">
 	<link rel="stylesheet" type="text/css" href="./../css/navbar.css">
</head>

<body >
		<?php
		include 'navbar.php';
	?>
	<hr>
	<center>
		<br>
		<br>
		<?php 
			echo "<img src=".$row['imagepath']." width='250' height='250' ><br><br>
				Book ID : ".$row['id']."<br><br>
				Name : ".$row['name']."<br><br>
				Cost : ".$row['cost']."<br><br>
				Author : ".$row['author']."<br><br>
				<button><a href='cart.php?id=".$row['id']."'>Add to Cart</a></button>
				<button><a href='payment.php?id=".$row['id']."'>Buy</a></button>";
		 ?>
		<!-- <img src="image1.png" width="250" height="250"><br><br>
		Book ID : 12345<br><br>
		Name : SpellBound<br><br>
		Cost : 0<br><br>
		Author : abcde<br><br>
		<button><a href="cart.html">Add To Cart</a></button>
		<button><a href="payment.html">Buy</a></button> -->
	</center>
</body>

</html>
