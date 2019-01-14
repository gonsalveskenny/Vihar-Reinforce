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
		<title>CART</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<meta content='width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0' name='viewport'/>
		<link rel="stylesheet" type="text/css" href="css/cart.css">
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
			      <li class="nav-item active">
			        <a class="nav-link" href="cart.php">Cart</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Checkout</a>
			      </li>
			    </ul>
			  </div>
			</nav>
			<div class="container-fluid">
				<h1>Cart</h1>
				<div class="shopping-cart">

				  <div class="column-labels">
				    <label class="product-image">Image</label>
				    <label class="product-details">Product</label>
				    <label class="product-price">Price</label>
				    <label class="product-quantity">Quantity</label>
				    <label class="product-removal">Remove</label>
				    <label class="product-line-price">Total</label>
				  </div>
					<?php
					$subtotal = 0;
					$sql = "SELECT * FROM cart";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
							// output data of each row
							while($row = mysqli_fetch_assoc($result))
							{
								$subtotal = $subtotal + $row["order_total"];
								?>
								<div class="product">
									<div class="product-image">
										<img src="<?php echo $row["order_image"];?>">
									</div>
									<div class="product-details">
										<div class="product-title"><?php echo $row["order_item"];?></div>
									</div>
									<div class="product-price"><?php echo $row["order_price"];?></div>
									<div class="product-quantity">
										<form action="deleteorder.php" method="post">
                      <input type="hidden" name="order_item" value="<?php echo $row["order_item"];?>">
										  <input class="quantityalign" type="number" name="quantity" value="<?php echo $row["order_quantity"];?>" min="1" readonly>
									</div>
									<div class="product-removal">
              	 <button type="submit" class="remove-product">
              	 	Remove
              	 </button>
										</form>
									</div>
									<div class="product-line-price"><?php echo $row["order_total"];?></div>
								</div>
								<?php
							}
              ?>
              <div class="totals">
                <div class="totals-item">
                  <label>Subtotal</label>
                  <div class="totals-value" id="cart-subtotal"><?php echo $subtotal;?></div>
                </div>
                <div class="totals-item">
                  <label>Tax (5%)</label>
                  <div class="totals-value" id="cart-tax"><?php
                  echo 0.05 * $subtotal;
                  $grand_total = $subtotal + (0.05 * $subtotal); ?></div>
                </div>
                <div class="totals-item">
                  <label>Shipping</label>
                  <div class="totals-value" id="cart-shipping">15.00
                    <?php
                    $grand_total = $subtotal + (0.05 * $subtotal) + 15; ?>
                  </div>
                </div>
                <div class="totals-item totals-item-total">
                  <label>Grand Total</label>
                  <div class="totals-value" id="cart-total"><?php echo $grand_total;?></div>
                </div>
              </div>
            </div>
              <!--entering details of the shipping address starts-->
              <div class="shipping">
                <fieldset>
                <legend style="font-size: 35px; font-style: bold;">Enter Shipping Address</legend>

                <form action="proccesing.php" method="post">
                  First name:<br>
                  <input type="text" name="firstname" value="">
                  <br>
                  Address Line 1:<br>
                  <input type="text" name="addressline1" value="">
                  <br>
                  Address Line 2:<br>
                  <input type="text" name="addressline2" value="">
                  <br>
                  City:<br>
                  <input type="text" name="city" value="">
                  <br>
                  State:<br>
                  <input type="text" name="state" value="">
                  <br>
                  ZIP/Pincode:<br>
                  <input type="number" name="pincode" value="">
                  <br>
                  Country/Region:<br>
                  <input type="text" name="country" value="">
                  <br>
                  Phone:<br>
                  <input type="number" name="phone" value="">
                  <br>
                  Email:<br>
                  <input type="text" name="email" value="">
                  <br><br>
                  <!--<input type="submit">-->
                  <button type="submit" class="checkout">Checkout</button>
                </form>
                </fieldset>
              </div>
              <!--entering details of the shipping address ends-->
              <?php
					}

					else {
							echo "Cart is empty";
					}
					?>
				  <!--<div class="product">
				    <div class="product-image">
				      <img src="images/healthkit_1.jpg">
				    </div>
				    <div class="product-details">
				      <div class="product-title">Health Kit</div>
				      <p class="product-description">Healing</p>
				    </div>
				    <div class="product-price">45.99</div>
				    <div class="product-quantity">
				      <input type="number" value="1" min="1">
				    </div>
				    <div class="product-removal">
				      <button class="remove-product">
				        Remove
				      </button>
				    </div>
				    <div class="product-line-price">45.99</div>
				  </div>
				-->
			</div>
		</section>
	</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/cart.js"></script>
