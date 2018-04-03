<?php
require_once './../../config.php';

$book = $_REQUEST['id'];
$sql = "SELECT id,name,cost,author,imagepath FROM books WHERE id = '$book' ";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);

?>
<html>
<head>
  <title>Payment</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="./../css/home.css">
  </head>
<body >
  <center><h1>Payment</h1></center>
    <center>
      <hr>
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
      <hr>

      <form action="./../../process_payment.php" method="post" onsubmit=" return ccValidation()">
      <h3>Enter Credit Card Information</h3>
         <input type="text" placeholder="Name" name="name" id="name" required /><br><br>
         <input type="text" placeholder="Credit Card Number" id="ccnumber" required /><br><br>
         <input type="date" placeholder="Expiry date" name="expirydate" id="expirydate" required /><br><br>
         <input type="date" placeholder="Date of Birth" name="dob" id="dob" required /><br><br>
      <input type="submit" value="Pay" onclick="ccValidation()" /><br>
    </form>
   <a href="home.html">Home</a>
   </center>
   <hr>
   <hr> 

   <script type="text/javascript" src="validation.js"></script>
</body>
</html>
