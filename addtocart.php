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

//Variables
$id = $_POST["id"];
$order_quantity = $_POST["quantity"];

if($order_quantity == '') {
  echo "<script>
  alert('Error! Enter quantity.');
  window.location.href='product_kar98k.php';
  </script>";
  exit;
}

$sql = "SELECT * FROM product_details where product_id='$id';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
    {
        $order_item = $row["product_name"];
        $order_image = $row["product_image_1"];
        $order_price = $row["product_price"];
        $order_total =  $order_quantity * $order_price;
    }
}
else {
    echo "0 results";
}

$sql = "INSERT INTO cart (order_item, order_image, order_price, order_quantity, order_total)
VALUES ('$order_item', '$order_image', '$order_price', '$order_quantity', '$order_total')";

if (mysqli_query($conn, $sql)) {
  echo "<script>
  alert('Added to cart');
  window.location.href='index.php';
  </script>";
  //header("Location: checkout.html");
  //exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
