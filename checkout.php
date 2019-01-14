<!DOCTYPE html>
<html>
	<head>
		<title>CHECKOUT</title>
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
			  <a class="navbar-brand" href="index.php"><h1>Vihar-Reinforce</h1></a>
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
			          <a class="dropdown-item" href="#">Kar98</a>
			          <a class="dropdown-item" href="#">Health Kit</a>
			          <a class="dropdown-item" href="#">Ammo</a>
								<a class="dropdown-item" href="#">Scope</a>
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
					<strong>Webz Poland</strong>
					</div>
					<div>Madalinskiego 8</div>
					<div>71-101 Szczecin, Poland</div>
					<div>Email: info@webz.com.pl</div>
					<div>Phone: +48 444 666 3333</div>
					</div>
					</div>
					<div class="table-responsive-sm">
					<table class="table table-striped">
					<thead>
					<tr>
					<th class="center">#</th>
					<th>Item</th>
					<th>Description</th>

					<th class="right">Unit Cost</th>
					  <th class="center">Qty</th>
					<th class="right">Total</th>
					</tr>
					</thead>
					<tbody>
					<tr>
					<td class="center">1</td>
					<td class="left strong">Kar98</td>
					<td class="left">Sniper</td>

					<td class="right">$12.99</td>
					<td class="center">2</td>
					<td class="right">$25.98</td>
					</tr>
					<tr>
					<td class="center">2</td>
					<td class="left">Health Kit</td>
					<td class="left">Healing</td>

					<td class="right">$45.99</td>
					<td class="center">1</td>
					<td class="right">$45.99</td>
					</tr>
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
					<td class="right">$71.97</td>
					</tr>
					<tr>
					<td class="left">
					<strong>Tax (5%)</strong>
					</td>
					<td class="right">$3.6</td>
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
					<strong>$90.57</strong>
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
