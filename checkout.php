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
		<title>CHECKOUT</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<meta content='width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0' name='viewport'/>
		<link rel="stylesheet" type="text/css" href="css/cart.css">
		<link rel="stylesheet" type="text/css" href="css/checkout.css">
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
			      <li class="nav-item">
			        <a class="nav-link" href="cart.php">Cart</a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Checkout</a>
			      </li>
			    </ul>
			  </div>
			</nav>
			<div class="container-fluid">
				<div class="container">
					<div class="card">
					<div class="card-header">
					<strong>Summary</strong>
					<span class="float-right"></span>
					</div>
					<div class="card-body">
					<div class="row mb-4">
					<div class="col-sm-6">
					<h6 class="mb-3">To:</h6>
					<div>
						<?php
				    $sql = "SELECT * FROM user_details ORDER BY id DESC LIMIT 1";
				    $result = mysqli_query($conn, $sql);

				    if (mysqli_num_rows($result) > 0) {
				        // output data of each row
				        while($row = mysqli_fetch_assoc($result))
				        { ?>
					<strong><?php echo $row["name"];?></strong>
					</div>
					<div><?php echo $row["address_line_1"];?></div>
					<?php
						if($row["address_line_2"] != '') {
							?>
							<div><?php echo $row["address_line_2"];?></div>
							<?php
						}
					 ?>
					<div><?php echo $row["city"];?>, <?php echo $row["state"];?></div>
					<div><?php echo $row["country"];?> <?php echo $row["zip_code"];?></div>
					<div>Email: <?php echo $row["email"];?></div>
					<div>Phone: +91 <?php echo $row["phone"];?></div>
				<?php }
				}

				else {
						echo "0 results";
				}
				?>
					</div>
					</div>
					<div class="table-responsive-sm">
					<table class="table table-striped">
					<thead>
					<tr>
					<th class="center">#</th>
					<th>Item</th>

					<th class="right">Unit Cost</th>
					  <th class="center">Qty</th>
					<th class="righttotal">Total</th>
					</tr>
					</thead>
					<tbody>
						<?php
				    $sql = "SELECT * FROM cart";
				    $result = mysqli_query($conn, $sql);

				    if (mysqli_num_rows($result) > 0) {
				        // output data of each row
								$count = 1;
								$total = 0;
				        while($row = mysqli_fetch_assoc($result))
				        { ?>
					<tr>
					<td class="center"><?php echo $count; $count = $count + 1;?></td>
					<td class="left strong"><?php echo $row["order_item"];?></td>

					<td class="right">$<?php echo $row["order_price"];?></td>
					<td class="center"><?php echo $row["order_quantity"];?></td>
					<td class="righttotal">$<?php echo $row["order_total"]; $total = $total + $row["order_total"];?></td>
					</tr>
				<?php }
				}

				else {
						echo "0 results";
				}
				?>
					<!--
					<tr>
					<td class="center">3</td>
					<td class="left">Hosting</td>
					<td class="left">1 year subcription</td>

					<td class="right">$499,00</td>
					  <td class="center">1</td>
					<td class="right">$499,00</td>
					</tr>
					<tr>
					<td class="center">4</td>
					<td class="left">Platinum Support</td>
					<td class="left">1 year subcription 24/7</td>

					<td class="right">$3.999,00</td>
					  <td class="center">1</td>
					<td class="right">$3.999,00</td>
					</tr>
					-->
					</tbody>
					</table>
					</div>
					<div class="row">
					<div class="col-lg-4 col-sm-5">

					</div>

					<div class="col-lg-4 col-sm-5 ml-auto">
					<table class="table table-clear">
					<tbody>
					<tr>
					<td class="left">
					<strong>Subtotal</strong>
					</td>
					<td class="right">$<?php echo $total; ?></td>
					</tr>
					<tr>
					<td class="left">
					<strong>Tax (5%)</strong>
					</td>
					<td class="right">$<?php $tax = (0.05 * $total); echo $tax; ?></td>
					</tr>
					<tr>
					<td class="left">
					 <strong>Shipping</strong>
					</td>
					<td class="right">$15</td>
					</tr>
					<tr>
					<td class="left">
					<strong>Total</strong>
					</td>
					<td class="right">
					<strong>$<?php echo ($total + $tax + 15); ?></strong>
					</td>
					</tr>
					</tbody>
					</table>
					</div>
					</div>
					</div>
					</div>
					</div>
			</div>
		</section>
	</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/cart.js"></script>
