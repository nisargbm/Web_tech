 <?php
// Include config file
require_once './../../config.php';

$id='';
if(isset($_REQUEST['id'])){   $id = $_REQUEST['id']; }

// if(!isset($_SESSION['username'])){
// 	header('location: login.html');
// } 
// $sql1 = "SELECT id FROM users WHERE name = '$username' ";
// $result1 = $conn->query($sql1);
// $row1 = mysqli_fetch_assoc($result1);

$sql = "SELECT * FROM  books  WHERE id = (SELECT book_id FROM cart WHERE user_id = '1')";
$result = $conn->query($sql);

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Cart</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  	<link rel="stylesheet" type="text/css" href="./../css/home.css">
 	<link rel="stylesheet" type="text/css" href="./../css/navbar.css">
</head>
<body style="background:#5AB9EA no-repeat center center fixed; background: linear-gradient(to right, #5680E9, #ffd6cf, #5680E9); height: 100%" >
	<?php
		include 'navbar.php';
	?>
	<hr>
<center>
		<h2>Cart</h2>
		<?php
			if ( $result->num_rows > 0){
				$i = 0;
				echo "<table class='table-books' >";
				while($row=mysqli_fetch_array($result)){
					if( $i % 4 === 0){
						echo "<tr>
						";
					}
					echo "<td>
								<div class='bookBlock'>
									<img src='".$row['imagepath']."'><br>
									<center>
										<a href='bookDetails.php?submit=".$row['id']."'>".$row['name']."</a>
									</center>
								</div>
							</td>
							";
					if( $i % 4 === 3){
						echo "</tr>
						";
					}
					$i++;
				}
				if ($i % 4 !== 3) {
					echo "</tr>
					";
				}
				echo "</table>";
			}
			?>
 	<hr><hr>
</center>
</body>
</html>
