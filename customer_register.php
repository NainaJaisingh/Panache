<!DOCTYPE>
<?php 
session_start();
include("functions/functions.php");
include("includes/db.php"); 
?>
<html>
	<head>
		<title>My Online Shop</title>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="syles.css" />
<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style>
	#form {float:right; padding-right:8px; line-height:50px;}
.panache{
font-size:150%;
display:inline;
font-family: 'Bangers', cursive;
padding-left:20px;

}

.main_wrapper{
width:100%;
height:auto;
margin:auto;
background:white;
}

.header_wrapper{
width:1000px;
height:100px;
margin:auto;

}
#sidebar_title {
background:white;
color:black;
font-size:22px;
font-family:arial; 
padding:10px;
text-align:center;

}

#logo {float:left;}

#banner {float:right;}

.menubar {
width:100%;
color:red;
padding-top:30px;
background:#ffd633;
}

#menu {
padding:0;
margin:0;
line-height:40px;
float:left;
}

#menu li {
list-style:none;
display:inline;
}

#menu a {
text-decoration:none;
color:white;
padding:8px;
margin:5px;
font-size:18px;
font-family:COMIC SANS MS;
}

#menu a:hover {color:orange; font-weight:bolder; text-decoration:underline;}

#form {float:right; padding-right:8px; line-height:50px;}

.content_wrapper {
width:100%;
margin:auto;
background:white;

}

#form {float:right; padding-right:8px; line-height:50px;}


#content_area {
width:80%;
float:right;
background:white;
}

#side{
	width:18%;
	position: fixed;
	margin-top:52px;

	background:#ffd633;
}
#products_box {
 
text-align:center;
margin-left:-40px;
margin-bottom:10px;
 
}

	#single_product {float:left; margin-left:20px; padding:20px;border:2px solid #ffd633;border:2px solid black;width:300px;margin-bottom:20px;}
	
	#single_product img {height:45vh;}
	
	#shopping_cart {width:150%; height:50px; background:black; margin-top:-20px;color:white;margin-left:-300px; margin-bottom:20px;}

//hello


	</style>
	</head>
	
<body>
	
	<!--Main Container starts here-->
	<div class="main_wrapper">
	
		<div class="menubar" style="height:18%;">
			
		
			<a href="#"><div class="logo"><img class="avatar" src="images/avatar.svg"></div></a>
<nav class="primary-nav">
  <ul class="primary-navigation">
    <li class="work-nav active"><a href="#">Home</a></li>
    <li class="play-nav"><a href="#">About Us</a></li>
    <li class="about-nav"><a href="#">Contact Us</a></li>
   
    <li class="shop-nav"><a href="#">Gift Items</a></li>
	<li class="shop-nav"><a href="#">Login</a></li>
	<li class="shop-nav"><a href="#">Register</a></li>
	<div id="form" style="height:40px;width:200px; float:left; margin-top:-55px;margin-left:10px">
  <form method="get" action ="results.php" enctype="multipart/form-data" >
	<input type="text" style="height:35px; width:195px; font-size:70%;" name="user_query" placeholder="Search a product"/>
	<p style="position:absolute;"><input type="submit" style="height:35px; width:70px; font-size:80%; color:gray; float:left; margin-top:-35px;margin-left:195px;" name="search" value="Search" /></p>
	
  </div>
	<li class="shop-nav" ><div class="panache" style="color:#c600eb; padding-left:2px;margin-left:70px;">P</div><div class="panache" style="color:#25ff00; ">A</div><div class="panache" style="color:#ce1127;">N</div><div class="panache" style="color:#14dbff; ">A</div><div class="panache" style="color:#ff148f; ">C</div><div class="panache" style="color:#39ff14; ">H</div><div class="panache" style="color:#ff164d; ">E</div></li>
	
	
  </ul>
</nav>
			
		</div>
		<div id="side">
			
				<div id="sidebar_title" style="margin-top:0px;padding-top:0px;padding-bottom:30px;padding-left:30px; ">
				<div class="accordion" id="accordionExample" >
  <div class="card" style="color:#FF00CC;border:white;background:white; width:200px;padding:0px;margin-left:-35px;">
    <div class="card-header" style="color:#FF00CC;border:white;background:white;" id="headingOne">
      <h5 class="mb-0">
        <button style="font-family: 'Bangers', cursive;	font-weight:bold; font-size:160%; color:#FF00CC;border:white;background:white; margin-left:10px; margin-top:40px;" type="button" data-toggle="collapse" data-target="#collapseOne"  aria-controls="collapseOne">
         Categories
        </button>
      </h5>
    </div>

    <div id="collapseOne" style="color:#FF00CC;border:white;background:white; " class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <ul style="border-bottom:black;background:white;font-family:Comic Sans Ms;font-size:110%;border:2px dottd pink;margin-top:-20px;">
		<li style="color:#00ccff;">Customised Tees</li>
		<li style="color:#cc66ff;">Mobile Covers</li>
		<li style="color:#00ccff;">Pillows</li>
		<li style="color:#cc66ff;">Show Pieces</li>
		<li style="color:#00ccff;">Clocks</li>
		</ul>
      </div>
    </div>
  </div>

</div>
 </div>
		<div id="sidebar_title" style="margin-top:-50px;padding-left:30px;">
				
  
 <div class="accordion" id="accordionExample" >
  <div class="card" style="color:#FF00CC;border:white;background:white; width:200px;padding:0px;margin-left:-35px;">
    <div class="card-header" style="color:#FF00CC;border:white;background:white;" id="headingOne">
     
        <button style="font-family: 'Bangers', cursive;	font-weight:bold; font-size:160%; color:#FF00CC;border:white;background:white;" type="button" data-toggle="collapse" data-target="#collapseOne"  aria-controls="collapseOne">
        Advanced Filters
        </button>
      
    </div>

    <div id="collapseOne" style="color:#FF00CC;border:white;background:white; " class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <ul style="border-bottom:black;background:white;font-family:Comic Sans Ms;font-size:110%;border:2px dottd pink;margin-top:-20px;">
		<li ><a href="#" style="text-decoration: none; color:#00ccff;">Sort By:</a></li>
		<li ><a href="#" style="text-decoration: none; color:#cc66ff;">Popularity</a></li>
		<li ><a href="#" style="text-decoration: none; color:#00ccff;">Relevance</a></li>
		<li><li ><a href="#" style="text-decoration: none; color:#cc66ff;">Price</a></li>
		<li ><a href="#" style="text-decoration: none; color:#00ccff;">Newest Arrivals</a></li>
		<li><li ><a href="#" style="text-decoration: none; color:#cc66ff;">Max Discount</a></li>
	
		</ul>
      </div>
    </div>
  </div>

</div>
				</div>	
</div>				
					
		</div>
		<!--Navigation Bar ends-->
	
		<!--Content wrapper starts-->
		<div class="content_wrapper" style="margin-top:20px;">
		
			
		
			<div id="content_area">
			<?php cart()?>
			<div id="shopping_cart">
			<span style="color:#ffd633;float:right; margin-right:860px;font-size:200%;line-height:40px;">Welcome Guest!</span>
			<p style="margin-left:20px;left:750px;position:absolute;color:white;float:right;line-height:40px;font-size:100%;">Shopping Cart-> Total Items: <?php total_items(); ?>  Total Price: <?php total_price(); ?> </p>
			
			<a href="cart.php" style="color:#ffd633;left:1180px;position:absolute;float:right;line-height:40px;font-size:100%;padding-right:29px;">Go To Cart</a>
			</div>
			
		

				
				</div>
				
			<form action="customer_register.php" method="post" enctype="multipart/form-data"  >
					
					<table align="center" width="30%" style="margin-left:450px;">
						
						<tr align="center">
							<td colspan="6"><h2>Create an Account</h2></td>
						</tr>
						
						<tr>
							<td align="right">Name:</td>
							<td><input type="text" name="c_name" required/></td>
						</tr>
						
						<tr>
							<td align="right">Email:</td>
							<td><input type="text" name="c_email" required/></td>
						</tr>
						
						<tr>
							<td align="right">Password:</td>
							<td><input type="password" name="c_pass" required/></td>
						</tr>
						
						<tr>
							<td align="right">Customer Image:</td>
							<td><input type="file" name="c_image" required/></td>
						</tr>
						
						
						
						<tr>
							<td align="right">Country:</td>
							<td>
							<select name="c_country">
								<option>Select a Country</option>
								<option>Afghanistan</option>
								<option>India</option>
								<option>Japan</option>
								<option>Pakistan</option>
								<option>Israel</option>
								<option>Nepal</option>
								<option>United Arab Emirates</option>
								<option>United States</option>
								<option>United Kingdom</option>
							</select>
							
							</td>
						</tr>
						
						<tr>
							<td align="right">City:</td>
							<td><input type="text" name="c_city" required/></td>
						</tr>
						
						<tr>
							<td align="right">Contact:</td>
							<td><input type="text" name="c_contact" required/></td>
						</tr>
						
						<tr>
							<td align="right">Address</td>
							<td><input type="text" name="c_address" required/></td>
						</tr>
						
						
					<tr align="center">
						<td colspan="4"><input type="submit" style="position:absolute;left: 560px;width:22%;" name="register" value="Create Account" /></td>
					</tr>
					
					
					
					</table>
				
				</form>
			
			</div>
		</div>
		<!--Content wrapper ends-->
		
		
		
		
	
	
	
	
	
	
	</div> 
<!--Main Container ends here-->


</body>
</html>

<?php 
	if(isset($_POST['register'])){
	
		
		$ip = getIp();
		
		$c_name = $_POST['c_name'];
		$c_email = $_POST['c_email'];
		$c_pass = $_POST['c_pass'];
		$c_image = $_FILES['c_image']['name'];
		$c_image_tmp = $_FILES['c_image']['tmp_name'];
		$c_country = $_POST['c_country'];
		$c_city = $_POST['c_city'];
		$c_contact = $_POST['c_contact'];
		$c_address = $_POST['c_address'];
	
		
		move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
		
		 $insert_c = "insert into customers (customer_ip,customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image) values ('$ip','$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image')";
	
		$run_c = mysqli_query($con, $insert_c); 
		
		$sel_cart = "select * from cart where ip_add='$ip'";
		
		$run_cart = mysqli_query($con, $sel_cart); 
		
		$check_cart = mysqli_num_rows($run_cart); 
		
		if($check_cart==0){
		
		$_SESSION['customer_email']=$c_email; 
		
		echo "<script>alert('Account has been created successfully, Thanks!')</script>";
		echo "<script>window.open('customer/my_account.php','_self')</script>";
		
		}
		else {
		
		$_SESSION['customer_email']=$c_email; 
		
		echo "<script>alert('Account has been created successfully, Thanks!')</script>";
		
		echo "<script>window.open('checkout.php','_self')</script>";
		
		
		}
	}





?>
