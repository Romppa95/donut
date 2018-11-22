<!doctype html>
<html lang="en">
<head>
	<?php
	include 'head.php';

//logs out the user
if(filter_input(INPUT_GET, 'action') == 'logout'){
	session_destroy();
  header("Location: index.php");
}



// create empty array
	$product_ids = array();

// see if button is pressed
	if(filter_input(INPUT_POST, 'add_to_cart')){
//check if shoppingcart is created
		if(isset($_SESSION['shopping_cart'])){
			$count = count($_SESSION['shopping_cart']);

			$product_ids = array_column($_SESSION['shopping_cart'], 'id');
//if item id not in array input in to session counta new array for the item
			if(!in_array(filter_input(INPUT_POST, 'id'), $product_ids)){
				$_SESSION['shopping_cart'][$count] = array(
					'id' => filter_input(INPUT_POST, 'id'),
					'name' => filter_input(INPUT_POST, 'name'),
					'price' => filter_input(INPUT_POST, 'price'),
					'quantity' => filter_input(INPUT_POST, 'quantity')
				);
			}
			else{
//find correct product id to add to the cart
				for($i = 0; $i < count($product_ids); $i++){
					if($product_ids[$i] == filter_input(INPUT_POST, 'id')){
//add new quantity to old quantity
						$_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
					}
				}
			}

		}
	else{
		$_SESSION['shopping_cart'][0] = array(
			'id' => filter_input(INPUT_POST, 'id'),
			'name' => filter_input(INPUT_POST, 'name'),
			'price' => filter_input(INPUT_POST, 'price'),
			'quantity' => filter_input(INPUT_POST, 'quantity')
		);
	}
//print_r($product_ids);
	}
// if doesnt exist create product with array key 0
	


//deleting items

if(filter_input(INPUT_GET, 'action') == 'delete'){
	foreach($_SESSION['shopping_cart'] as $key => $product){
		if($product['id'] == filter_input(INPUT_GET, 'id')){
			//delete item
			unset($_SESSION['shopping_cart'][$key]);
		}
	}
	//re-sort the cart after deletion
	$_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}

//checkout clears the shopping cart and product ids
if(filter_input(INPUT_GET, 'action') == 'checkout'){
	unset($_SESSION['shopping_cart']);
  unset($product_ids);
  $product_ids = array();
  echo '<script>alert("purchase complete");location="second.php";</script>';
}


	//print_r($_SESSION);
	?>
</head>
<body>
	<div class="nav">
		<a href="home.php">Home</a>
		<a class="active">Products</a>
		<a href="account.php">Account</a>
		
<div class ="logout">
<a href="home.php?action=logout">Logout</a>
</div>


		<div class="search">
	<?php
	include 'loggedin.php'
	?>
			
		</div>
	</div>
	<img src="avatar.png" class="icon">
	<div class="header">
		
	</div>

	<div class="container">

		
		<div class="row">
			<div class="col-sm-3">
				<div class="products">
					<div class="panel panel-primary">
						<div class="panel-heading">Strawberry donut</div>
						<div class="panel-body"><img src="donut.jpg" class="img-responsive"></div>
						<form method="post">
							<input type="hidden" name="name" value="strawberry donut">
							<input type="hidden" name="id" value="1">
							<input type="hidden" name="price" value="2">
							<input type="number" name="quantity" class="quant" value="1" min="1" max="50">
							<input type="submit" name="add_to_cart" style="margin: 5px" class="btn btn-success" value="Add to cart">
						</form>
					</div>
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="products">
					<div class="panel panel-primary">
						<div class="panel-heading">Chocolate glazed donut</div>
						<div class="panel-body"><img src="donut2.jpg" class="img-responsive"></div>
						<form method="post">
							<input type="hidden" name="name" value="chocolate glazed donut">
							<input type="hidden" name="id" value="2">
							<input type="hidden" name="price" value="4">
							<input type="number" name="quantity" class="quant" value="1" min="1" max="50">
							<input type="submit" name="add_to_cart" style="margin: 5px" class="btn btn-success" value="Add to cart">
						</form>
					</div>
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="products">
					<div class="panel panel-primary">
						<div class="panel-heading">Jelly Donut</div>
						<div class="panel-body"><img src="donut3.jpg" class="img-responsive"></div>
						<form method="post">
							<input type="hidden" name="name" value="jelly donut">
							<input type="hidden" name="id" value="3">
							<input type="hidden" name="price" value="1.50">
							<input type="number" name="quantity" class="quant" value="1" min="1" max="50">
							<input type="submit" name="add_to_cart" style="margin: 5px" class="btn btn-success" value="Add to cart">
						</form>

					</div>
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="products">

					<div class="panel panel-primary">
						<div class="panel-heading">Chocolate donut</div>
						<div class="panel-body"><img src="donut4.jpg" class="img-responsive"></div>
						<form method="post">
							<input type="hidden" name="name" value="chocolate donut">
							<input type="hidden" name="id" value="4">
							<input type="hidden" name="price" value="2">
							<input type="number" name="quantity" class="quant" value="1" min="1" max="50">
							<input type="submit" name="add_to_cart" style="margin: 5px" class="btn btn-success" value="Add to cart">
						</form>

					</div>
				</div>
			</div>

		</div>
	</div>
	

	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="products">

					<div class="panel panel-primary">
						<div class="panel-heading">Berliner</div>
						<div class="panel-body"><img src="donut5.jpg" class="img-responsive"></div>
						<form method="post">
							<input type="hidden" name="name" value="berliner">
							<input type="hidden" name="id" value="5">
							<input type="hidden" name="price" value="2.50">
							<input type="number" name="quantity" class="quant" value="1" min="1" max="50">
							<input type="submit" name="add_to_cart" style="margin: 5px" class="btn btn-success" value="Add to cart">
						</form>

					</div>
				</div>
			</div>

			<div class="col-sm-3">
				<div class="products">

					<div class="panel panel-primary">
						<div class="panel-heading">Glazed donut</div>
						<div class="panel-body"><img src="donut6.jpg" class="img-responsive"></div>
						<form method="post">
							<input type="hidden" name="name" value="glazed donut">
							<input type="hidden" name="id" value="6">
							<input type="hidden" name="price" value="2">
							<input type="number" name="quantity" class="quant" value="1" min="1" max="50">
							<input type="submit" name="add_to_cart" style="margin: 5px" class="btn btn-success" value="Add to cart">
						</form>

					</div>
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="products">

					<div class="panel panel-primary">
						<div class="panel-heading">Double Chocolate</div>
						<div class="panel-body"><img src="donut7.jpg" class="img-responsive"></div>
						<form method="post">
							<input type="hidden" name="name" value="double chocolate">
							<input type="hidden" name="id" value="7">
							<input type="hidden" name="price" value="3.50">
							<input type="number" name="quantity" class="quant" value="1" min="1" max="50">
							<input type="submit" name="add_to_cart" style="margin: 5px" class="btn btn-success" value="Add to cart">
						</form>

					</div>
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="products">

					<div class="panel panel-primary">
						<div class="panel-heading">Plain donut</div>
						<div class="panel-body"><img src="donut8.jpg" class="img-responsive"></div>
						<form method="post">
							<input type="hidden" name="name" value="plain donut">
							<input type="hidden" name="id" value="8">
							<input type="hidden" name="price" value="0.50">
							<input type="number" name="quantity" class="quant" value="1" min="1" max="50">
							<input type="submit" name="add_to_cart" style="margin: 5px" class="btn btn-success" value="Add to cart">
						</form>

					</div>
				</div>
			</div>
		</div>

<div style="clear:both"></div>
		<br>
		<div class="table-responsive">
			<table class="table">
				<tr>
					<th width="40%">Product name</th>
					<th width="10%">Quantity</th>
					<th width="20%">Price</th>
					<th width="15%">Total</th>
					<th width="5%">Action</th>
				</tr>
				<?php
				if(!empty($_SESSION['shopping_cart'])):
					$total = 0;
					foreach($_SESSION['shopping_cart'] as $key => $product):
				?>
					<tr>
						<td><?php echo $product['name']; ?></td>
						<td><?php echo $product['quantity']; ?></td>
						<td>$ <?php echo $product['price']; ?></td>
						<td>$ <?php echo number_format($product['quantity'] * $product['price'], 2); ?></td>
						<td>
							<a href="second.php?action=delete&id=<?php echo $product['id']; ?>">
								<div class="btn-danger">&nbsp;Delete</div>
							</a>
						</td>
					</tr>
				<?php
						$total = $total + ($product['quantity'] * $product['price']);
					endforeach;
				?>
				<tr>
					<td>
						<?php
						if(isset($_SESSION['shopping_cart'])):
						if(count($_SESSION['shopping_cart']) > 0):
						?>
						<a href="second.php?action=checkout" class="checkout">Checkout</a>
						<?php endif; endif; ?>
					</td>
					<td colspan="1" align="right">Total</td>
					<td align="right">$ <?php echo number_format($total, 2); ?></td>
					<td></td>
				</tr>
				<?php
				endif
				?>
			</table>
		</div>

	</div>
	



	
	
</body>
<footer>
	<?php
	include 'footer.php';
	?>
</footer>
</html>