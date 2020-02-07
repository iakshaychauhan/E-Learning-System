<!DOCTYPE html>
<html>
<head>
<title>
Connect with Us
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/style5.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
	<nav>
		<div class="row Clearfix">
			<img src="../E-Learning/img/logo1.png"  class="logo">
			<ul class="ulin-nav animated slideInDown" id="checkclass">
				<li><a href="../E-Learning/index.php">Home</a> </li>
				<li><a href="../E-Learning/subjectwise.php">Subjects</a></li>
				<li><a href="../E-Learning/aboutus.php">About Us</a></li>
				<li><a href="../E-Learning/connectwithus.php">Connect with Us</a></li>
			</ul>
			<a href="#" class="micon" onclick="slideshow()"> <i class="fa fa-bars"></i> </a>
		</div>
	</nav>
<div class="connect">
<h2>Connect With Us</h2>
<p class="contact"><strong>Phone :</strong>+91 987654321</p>
<p class="contact"><strong>Email :</strong>elearn123@gmail.com</p>
<p class="contact"><strong>Address :</strong> Shyamnarayan  Thakur Marg, Thakur Village, Kandivali (East)</p>
	<div class="mapouter">
		<div class="gmap_canvas">
			<iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=thakur%20college%20of%20engineering&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
			</iframe>
		</div>
		<style>
			.mapouter{position:relative;text-align:right;height:300px;width:100%;}
			.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:100%;}
		</style>
	</div>
</div>	
</header>
<footer>
	<div id="footer">Copyright &copy; E-Learn.com</div>
</footer>
<Script  type="text/javascript" >
	function slideshow(){
		var x = document.getElementById("checkclass");
		if(x.style.display === "none"){
			x.style.display = "block";
		}
		else{
			x.style.display = "none";
		}
	}
</Script>
</body>
</html>