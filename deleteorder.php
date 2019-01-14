<?php

//Database Credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vihar-reinforce";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$order_item = $_POST["order_item"];
$order_quantity = $_POST["quantity"];

$sql = "DELETE FROM cart WHERE order_item = '$order_item' AND order_quantity = '$order_quantity';";
$result = mysqli_query($conn, $sql);

if(! $result ) {
   die('Could not delete data: ' . mysql_error());
}
else {
  echo "<script>
  alert('Deleted from cart');
  window.location.href='cart.php';
  </script>";
}
?>
