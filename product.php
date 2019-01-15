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
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html>
	<head>
		<?php
    $sql = "SELECT * FROM product_details where product_id='$id';";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result))
        { ?>
		<title><?php echo $row["product_name"];?></title>
		<?php
				}
		}
		else {
						echo "0 results";
		}
		?>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<meta content='width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0' name='viewport'/>
    <link rel="manifest" href="manifest.json">
		<link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/product.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	</head>
	<body>
    <section class="hero-section">
			<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
				<img class="logo" src="images/logo.png">
			  <a class="navbar-brand" href="index.php"><h1>Vihar</h1></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
			    <ul class="navbar-nav">
			      <li class="nav-item">
			        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
			      </li>
						<li class="nav-item active dropdown">
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
				<?php
		    $sql = "SELECT * FROM product_details where product_id='$id';";
		    $result = mysqli_query($conn, $sql);

		    if (mysqli_num_rows($result) > 0) {
		        // output data of each row
		        while($row = mysqli_fetch_assoc($result))
		        { ?>
        <div id="wrap">
  <div id="product_layout_3">
    <div class="product_image">
			<center>
				<div class="main_image">
	        <img src="<?php echo $row["product_image_1"];?>"/>
	      </div>
			</center>
    </div>
    <div class="product_desc">
      <h1><?php echo $row["product_name"];?></h1>
      <span class="sale_price">$<?php echo $row["product_price"];?></span>
      <div class="description">
        <p><?php echo $row["product_description"];?></P>
    </div>
          <div class="buying">
                 <div class="quantity">
                   <label for="quantity">QTY:</label>
                   <form action="addtocart.php" method="post">
										 <input type="hidden" name="id" value="<?php echo $row["product_id"];?>">
                     <input type="text" name="quantity" value="">
                 </div>
                 <div class="cart">
                   <button type="submit" class="add">Add to Cart</button>
                   </form>
                 </div>
          </div>
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
		</section>
	</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
