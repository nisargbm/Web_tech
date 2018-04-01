<?php
// Include config file
require_once './../../config.php';
$sql = "SELECT * FROM books ";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>Home</title>
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
		
		<!-- <table class="table-books" >
			<tr>
				<td>
					<div class="bookBlock">
						<img src="image1.png" ><br>
						<center><a href="bookDetails.html">Responsive Web Design</a></center>
					</div>
				</td>
				<td>
					<div class="bookBlock">
						<img src="image2.jpg" ><br>
						<center><a href="bookDetails.html">Design Matters</a></center>
					</div>
				</td>
				<td>
					<div class="bookBlock">
						<img src="image1.png" ><br>
						<center><a href="bookDetails.html">Responsive Web Design</a></center>
					</div>
				</td>
				<td>
					<div class="bookBlock">
						<img src="image3.jpg"><br>
						<center><a href="bookDetails.html">SpellBound</a></center>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="bookBlock">
						<img src="image3.jpg"><br>
						<center><a href="bookDetails.html">SpellBound</a></center>
					</div>
				</td>
				<td>
					<div class="bookBlock">
						<img src="image1.png" ><br>
						<center><a href="bookDetails.html">Responsive Web Design</a></center>
					</div>
				</td>
				<td>
					<div class="bookBlock">
						<img src="image3.jpg"><br>
						<center><a href="bookDetails.html">SpellBound</a></center>
					</div>
				</td>
				<td>
					<div class="bookBlock">
						<img src="image2.jpg" ><br>
						<center><a href="bookDetails.html">Design Matters</a></center>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="bookBlock">
						<img src="image1.png" ><br>
						<center><a href="bookDetails.html">Responsive Web Design</a></center>
					</div>
				</td>
				<td>
					<div class="bookBlock">
						<img src="image1.png" ><br>
						<center><a href="bookDetails.html">Responsive Web Design</a></center>
					</div>
				</td>
				<td>
					<div class="bookBlock">
						<img src="image2.jpg" ><br>
						<center><a href="bookDetails.html">Design Matters</a></center>
					</div>
				</td>
				<td>
					<div class="bookBlock">
						<img src="image3.jpg" ><br>
						<center><a href="bookDetails.html">SpellBound</a></center>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="bookBlock">
						<img src="image2.jpg" ><br>
						<center><a href="bookDetails.html">Design Matters</a></center>
					</div>
				</td>
				<td>
					<div class="bookBlock">
						<img src="image3.jpg" ><br>
						<center><a href="bookDetails.html">SpellBound</a></center>
					</div>
				</td>
				<td>
					<div class="bookBlock">
						<img src="image1.png"><br>
						<center><a href="bookDetails.html">Responsive Web Design</a></center>
					</div>
				</td>
				<td>
					<div class="bookBlock">
						<img src="image2.jpg" ><br>
						<center><a href="bookDetails.html">Design Matters</a></center>
					</div>
				</td>
			</tr>
		</table> -->
	</center>
</body>
</html>