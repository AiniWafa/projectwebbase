<?php
	@session_start();
	include "../database/conndb.php";

	if (@$_SESSION['user']) {
		$user = @$_SESSION['user'];

		$sql = mysql_query("SELECT * FROM user WHERE username = '$user'") or die(mysql_error());
		$data = mysql_fetch_array($sql);
		$result = mysql_num_rows($sql);
		$usertype = $data['access'];
		if ($usertype === "user") {
			$userid = $user;
			$sql = mysql_query("SELECT * FROM user WHERE username = '$userid'") or die(mysql_error());
			$data = mysql_fetch_array($sql);
			$result = mysql_num_rows($sql);

			@$_SESSION['user'] = $userid;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Samsung</title>
	<link rel="stylesheet" type="text/css" href="../css/branddeis.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	
	<!--side navigation
	<nav>
	<section>
		<nav>
	<ul id="navitop" class ="navitop">
		<div class="flex-container">
			
		    <li class="dropdown">
		    <i  id="bars" class="fas fa-bars"></i>
		    <div class="dropdown-content">
			<a class="sign-up" href="#">User detail</a>
     		<a class="log-in" href="#">Sign Out</a>
		</div></li>
		<li class="list"><a href="#Mistore">Mi Store</a></li>
  			<li class="list"><a href="userapple.php">Apple</a></li>
  			<li class="list"><a href="usersamsung.php">Samsung</a></li>
  			<li class="list"><a href="usersony.php">Sony</a></li>
  			<li class="list"><a href="userxiomi.php">Xiaomi</a></li>
  			<li class="list"><a href="useroppo.php">Oppo</a></li>
  			<div class="cart">
  			<li class="list"><a href="#about"><i class="fas fa-shopping-cart"></i></a></li>
  		</div>
  		<form  class="search" action="/action_page.php">
  			<li class="Search"><a href="#about"><input type="text" name="search" placeholder="Search.."></a></li>
  		</form>
  				
  	</div>
	</ul>
		</nav>-->
		<?php include 'usernavbar.php'?>
<article>
	<p class="brand">Samsung Product</p>
	<div class="flex-container2">
			<div class="samsungs9"><p>Samsung Galaxy S9</p><a href="cart.php?name=Samsung Galaxy S9">Buy</a><br></div>
			<div class="samsungnote9"><p>Samsung Galaxy Note 9</p><a href="cart.php?name=Samsung Galaxy Note9">Buy</a><br></div>
			<div class="samsungs10"><p>Samsung Galaxy S10+</p><a href="cart.php?name=Samsung Galaxy S10+">Buy</a><br></div>
			<div class="samsungs8"><p>Samsung Galaxy S8</p><a  href="cart.php?name=Samsung Galaxy S8">Buy</a><br></div>
			<div class="samsungnote3"><p>Samsung Galaxy Note 3</p><a href="cart.php?name=Samsung Galaxy Note3">Buy</a><br></div>
	</div>
</article>
<div class="flex-container2">
	<?php
	    require "../database/conndb.php";
	    $sql = "SELECT * FROM item WHERE brand = 'samsung'";
	    $result = mysql_query($sql, $connection);
	?>
	<form method="POST" action="addcart.php">
		<table class="admin_detail">
			<input type="hidden" name="cuser" value="<?php echo @$data['username'];?>">
		    <thead>
		      <tr>
		        <th>No.</th>
		        <th>Product Name</th>
		        <th>Price</th>
		        <th>Brand</th>
		        <th>Details</th>
		        <th>Action</th>
		      </tr>
		    </thead>
		    <tbody>
		      <?php
		        $i = 1;
		        while ($row = mysql_fetch_array($result)) {
		        ?>
		        <tr>
		          <td><?php echo $i; ?></td>
		          <td><?php echo $row['product_name'];?><input type="hidden" name="cproduct_name" value="<?php echo $row['product_name'];?>"></td>
		          <td><?php echo $row['price'];?><input type="hidden" name="cprice" value="<?php echo $row['price'];?>"></td>
		          <td><?php echo $row['brand'];?><input type="hidden" name="cbrand" value="<?php echo $row['brand'];?>"></td>
		          <td><?php echo $row['details'];?><input type="hidden" name="cdetails" value="<?php echo $row['details'];?>"></td>
		          <td><input type="submit" name="button" value="Buy"></td>
		        </tr>
		        <?php
		        $i++;
		        }
		      ?>
		    </tbody>
		</table>
	</form>
</div>
</body>
</html>
<?php
		}
		elseif ($usertype === "admin") {
			?><script type="text/javascript">location.replace("../admin/homepageadmin.php");</script><?php
		}
		else{
			?><script type="text/javascript">location.replace("../index.php");</script><?php
		}
	}
	else{
		?><script type="text/javascript">location.replace("../index.php");</script><?php
	}
?>