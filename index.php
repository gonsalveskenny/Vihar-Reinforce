<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vihar-reinforce";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>HOME</title>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<meta content='width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0' name='viewport'/>
    <link rel="manifest" href="manifest.json">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	</head>
	<body>
		<section class="hero-section">
			<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
				<img class="logo" src="images/logo.png">
			  <a class="navbar-brand" href="index.php"><h1>Vihar-Reinforce</h1></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
			    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
			      </li>
						<li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Products
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <?php
                $sql = "SELECT * FROM product_details where product_id='1';";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result))
                    { ?>
			          <a class="dropdown-item" href="product.php?id=<?php echo $row["product_id"]; ?>">
                  <?php
									        echo $row["product_name"];
									    }
									}

									else {
									    echo "0 results";
									}
									?>
								</a>
                <?php
                $sql = "SELECT * FROM product_details where product_id='2';";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result))
                    { ?>
			          <a class="dropdown-item" href="product.php?id=<?php echo $row["product_id"]; ?>">
                  <?php
									        echo $row["product_name"];
									    }
									}

									else {
									    echo "0 results";
									}
									?>
								</a>
                <?php
                $sql = "SELECT * FROM product_details where product_id='3';";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result))
                    { ?>
			          <a class="dropdown-item" href="product.php?id=<?php echo $row["product_id"]; ?>">
									<?php
									        echo $row["product_name"];
									    }
									}

									else {
									    echo "0 results";
									}
									?>
								</a>
                <?php
                $sql = "SELECT * FROM product_details where product_id='4';";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result))
                    { ?>
								<a class="dropdown-item" href="product.php?id=<?php echo $row["product_id"]; ?>">
                  <?php
									        echo $row["product_name"];
									    }
									}

									else {
									    echo "0 results";
									}
									?>
								</a>
			        </div>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="cart.php">Cart</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Checkout</a>
			      </li>
			    </ul>
			  </div>
			</nav>
			<div class="container-fluid">
				<!--Products Section-->
				<div class="product_section">
					<div class="row">
						<div class="left-column1 col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<!--Kar98-->
							<div class="first-product">
                <?php
                $sql = "SELECT * FROM product_details where product_id='1';";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result))
                    { ?>
								<center>
                  <a class="link" href="product.php?id=<?php echo $row["product_id"]; ?>"><h1> <?php echo $row["product_name"];?></h1></a>
								</center>
								<div class="w3-content w3-display-container">
                  <a href="product.php?id=<?php echo $row["product_id"]; ?>">
								  <img class="mySlides" src="<?php echo $row["product_image_1"]; ?>" style="width:75%;height:300px">
								  <img class="mySlides" src="<?php echo $row["product_image_2"]; ?>" style="width:75%;height:300px">
								  <img class="mySlides" src="<?php echo $row["product_image_3"]; ?>" style="width:75%;height:300px">
                  </a>
								  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
								  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
								</div>
                <?php }
                }

                else {
                    echo "0 results";
                }
                ?>
							</div>
						</div>
						<div class="right-column1 col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<!--Health Kit-->
							<div class="second-product">
                <?php
                $sql = "SELECT * FROM product_details where product_id='2';";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result))
                    { ?>
								<center>
									<a class="link" href="product.php?id=<?php echo $row["product_id"]; ?>"><h1> <?php echo $row["product_name"];?></h1></a>
								</center>
								<div class="w3-content w3-display-container">
                  <a href="product.php?id=<?php echo $row["product_id"]; ?>">
								  <img class="mySlides1" src="<?php echo $row["product_image_1"]; ?>" style="width:75%;height:300px">
								  <img class="mySlides1" src="<?php echo $row["product_image_2"]; ?>" style="width:75%;height:300px">
								  <img class="mySlides1" src="<?php echo $row["product_image_3"]; ?>" style="width:75%;height:300px">
                  </a>
								  <button class="w3-button w3-black w3-display-left" onclick="plusDivs1(-1)">&#10094;</button>
								  <button class="w3-button w3-black w3-display-right" onclick="plusDivs1(1)">&#10095;</button>
							</div>
              <?php }
              }

              else {
                  echo "0 results";
              }
              ?>
          </div>
						</div>
					</div>
					<div class="row">
						<div class="left-column2 col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<!--Ammo-->
							<div class="third-product">
                <?php
                $sql = "SELECT * FROM product_details where product_id='3';";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result))
                    { ?>
								<center>
                  <a class="link" href="product.php?id=<?php echo $row["product_id"]; ?>"><h1> <?php echo $row["product_name"];?></h1></a>
								</center>
								<div class="w3-content w3-display-container">
                  <a href="product.php?id=<?php echo $row["product_id"]; ?>">
								  <img class="mySlides2" src="<?php echo $row["product_image_1"]; ?>" style="width:75%;height:300px">
								  <img class="mySlides2" src="<?php echo $row["product_image_2"]; ?>" style="width:75%;height:300px">
								  <img class="mySlides2" src="<?php echo $row["product_image_3"]; ?>" style="width:75%;height:300px">
                </a>
								  <button class="w3-button w3-black w3-display-left" onclick="plusDivs2(-1)">&#10094;</button>
								  <button class="w3-button w3-black w3-display-right" onclick="plusDivs2(1)">&#10095;</button>
								</div>
              <?php }
              }

              else {
                  echo "0 results";
              }
              ?>
							</div>
						</div>
						<div class="right-column2 col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<!--Scope-->
							<div class="fourth-product">
                <?php
                $sql = "SELECT * FROM product_details where product_id='4';";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result))
                    { ?>
								<center>
                  <a class="link" href="product.php?id=<?php echo $row["product_id"]; ?>"><h1> <?php echo $row["product_name"];?></h1></a>
								</center>
  								<div class="w3-content w3-display-container">
                    <a href="product.php?id=<?php echo $row["product_id"]; ?>">
  								  <img class="mySlides3" src="<?php echo $row["product_image_1"]; ?>" style="width:75%;height:300px">
  								  <img class="mySlides3" src="<?php echo $row["product_image_2"]; ?>" style="width:75%;height:300px">
  								  <img class="mySlides3" src="<?php echo $row["product_image_3"]; ?>" style="width:75%;height:300px">
                  </a>
  								  <button class="w3-button w3-black w3-display-left" onclick="plusDivs3(-1)">&#10094;</button>
  								  <button class="w3-button w3-black w3-display-right" onclick="plusDivs3(1)">&#10095;</button>
  								</div>
                <?php }
                }

                else {
                    echo "0 results";
                }
                ?>
  							</div>
  						</div>
					  </div>
					</div>
          <div class="footer">© Copyright Vihar. All Rights Reserved.</div>
				</div>
		</section>
	</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
var slideIndexi = 1;
showDivs(slideIndexi);

function plusDivs(n) {
	showDivs(slideIndexi += n);
}

function showDivs(n) {
	var i;
	var x = document.getElementsByClassName("mySlides");
	if (n > x.length) {slideIndexi = 1}
	if (n < 1) {slideIndexi = x.length}
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	x[slideIndexi-1].style.display = "block";
}
</script>
<script>
var slideIndexj = 1;
showDivs1(slideIndexj);

function plusDivs1(n) {
	showDivs1(slideIndexj += n);
}

function showDivs1(n) {
	var i;
	var x = document.getElementsByClassName("mySlides1");
	if (n > x.length) {slideIndexj = 1}
	if (n < 1) {slideIndexj = x.length}
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	x[slideIndexj-1].style.display = "block";
}
</script>
<script>
var slideIndexk = 1;
showDivs2(slideIndexk);

function plusDivs2(n) {
	showDivs2(slideIndexk += n);
}

function showDivs2(n) {
	var i;
	var x = document.getElementsByClassName("mySlides2");
	if (n > x.length) {slideIndexk = 1}
	if (n < 1) {slideIndexk = x.length}
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	x[slideIndexk-1].style.display = "block";
}
</script>
<script>
var slideIndexl = 1;
showDivs3(slideIndexl);

function plusDivs3(n) {
	showDivs3(slideIndexl += n);
}

function showDivs3(n) {
	var i;
	var x = document.getElementsByClassName("mySlides3");
	if (n > x.length) {slideIndexl = 1}
	if (n < 1) {slideIndexl = x.length}
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	x[slideIndexl-1].style.display = "block";
}
</script>
