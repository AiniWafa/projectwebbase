<!DOCTYPE html>
<html>
<head>
	<title>Mi Store Update Details</title>
	<script type="userdetails.js"></script>
	<link rel="stylesheet"type="text/css"href="adminstyle.css"/>
	<script type="text/javascript" src="userdetails.js"></script>
</head>
<body>
	<header><!--top navigation-->
		<title>User Details</title>
		<link rel="stylesheet" type="text/css" href="indexdeis.css">
	</header>
	<nav>
	<!--side navigation-->
	<section>
		<nav>
	<ul id="navitop" class ="navitop">
		<div class="flex-container">
			
		    <li class="dropdown">
		     <a class="dropbtn">More</a>
		    <div class="dropdown-content">
		    <a href="userdetails.php">User Details</a>
			<a href="index.php">Sign Out</a>

		</div></li> 
		<li class="list"><a href="#Mistore">Mi Store</a></li>
  			<li class="list"><a href="userapple.php">Apple</a></li>
  			<li class="list"><a href="usersamsung.php">Samsung</a></li>
  			<li class="list"><a href="usersony.php">Sony</a></li>
  			<li class="list"><a href="userxiomi.php">Xiaomi</a></li>
  			<li class="list"><a href="useroppo.php">Oppo</a></li>
  			<li class="list"><a href="usercart.php">Cart</a></li>
  		<form action="/action_page.php">
  			<li class="Search"><a href="#about"><input type="text" name="search" placeholder="Search.."></a></li>
  		</form>
  				
  	</div>
	</ul>
		</nav>
	</section>
<article>	
<div class="form">

  
	<h1> Update Details</h1>
	<p>Please fill in this form</p><br>
		<form name="Userdetail" onreset="myAlertFunction()" onsubmit="return(validate)">		
		<label for="fname"><b>First name</b></label>
		<input type="text"placeholder="First Name"name="fname"/>
		<br>
		<label for="lname"><b>Last name</b></label>
		<input type="text"placeholder="Last Name"name="lname"/>
		<br>
		<label for="username"><b>Username</b></label>
		<input type="text"placehlder="username"name="uname"/>
		<br>
		<label for="Nophone"><b>No.Phone</b></label>
		<input type="text"placehlder="Nophone"name="nophone"/>
		<br>
		<label for="email"><b>Email</b></label>
		<input type="text"placeholder="email id"name="email"required />
		<br>
		<label for="psw"><b>Password</b></label>
		<input type="password"placeholder="password"name="psw" required />
		<br>
		<label for="conpsw"><b>Confirm Password</b></label>
		<input type="password"placeholder="Confirm password"name="conpsw"required/>
		<br>
		<label for="Gender"><b>Gender:</b></label>
		<input class="gender" type="radio"name="genders" value="Male"required> Male
		<input class="gender"type="radio"name="genders"value="Female"required> Female<br>
		<br>
		<label for="address"><b>Address</b></label>
		<input type="text"placeholder="address"name="address" cols="40"rows="2"/>
		<br>
		<label for="postcode"><b>Post Code</b></label>
		<input type="text"placeholder="Post Code"name="postcode"/>
		<br>
		<label for="state"><b>State: </b></label>
		<select name="state">
		<option value="1">(Please select a State)</option>
		<option value="KUL">Kuala Lumpur</option>
		<option value="LBN">Labuan</option>
		<option value="PJY">Putrajaya</option>
		<option value="JHR">Johor</option>
		<option value="KDH">Kedah</option>
		<option value="KTN">Kelantan</option>
		<option value="MLK">Melaka</option>
		<option value="NSN">N.Sembilan</option>
		<option value="PHG">Pahang</option>
		<option value="PRK">Perak</option>
		<option value="PLS">Perlis</option>
		<option value="PNG">P.Pinang</option>
		<option value="SBH">Sabah</option>
		<option value="SWK">Sarawak</option>
		<option value="SGR">Selangor</option>
		<option value="TRG">Terengganu</option>
		</select>
		<br>
		<label for="country"><b>Country</b></label>
		<input type="text"placeholder="Country"name="country" />
		<br>
		<br><br>

<div class="btnupdate">
				
				<button type="reset" name="resetbtn" class="button"value="reset the form">Clear</button>

				<button type="submit"name="submit"class="button"value="submited"><a href="userdetails.php">Update</button></a><br><br>

				<button class="btnuserpage"><a href="userdetails.php">Cancel</a></button>
			
		</div>
	</button>
</div>
</article>
<footer>Mistore, 2019</footer>
</body>
</html>
