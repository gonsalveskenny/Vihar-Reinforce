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
$firstname = $_POST["firstname"];
$addressline1 = $_POST["addressline1"];
$addressline2 = $_POST["addressline2"];
$city = $_POST["city"];
$state = $_POST["state"];
$pincode = $_POST["pincode"];
$country = $_POST["country"];
$email = $_POST["email"];
$phone = $_POST["phone"];

if($firstname == '' || $addressline1=='' || $city==''|| $state=='' || $pincode=='' || $country=='' || $email=='' || $phone=='') {
  echo "<script>
  alert('Error! Enter all shipping details.');
  window.location.href='cart.php';
  </script>";
  exit;
}

$sql = "INSERT INTO user_details (name, address_line_1, address_line_2, city, state, zip_code, country, email, phone)
VALUES ('$firstname', '$addressline1', '$addressline2', '$city', '$state', '$pincode', '$country', '$email', '$phone')";

if (mysqli_query($conn, $sql)) {
  echo "<script>
  alert('Record Added Successfully');
  window.location.href='checkout.php';
  </script>";
  //header("Location: checkout.html");
  //exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
