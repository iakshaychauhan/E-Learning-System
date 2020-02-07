<!DOCTYPE html>
<html>
<head>
<title>
Our Team Member
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>
<header>
	<nav>
		<div class="row Clearfix">
			<img src="../E-Learning/img/ogo1.png"  class="logo">
			<ul class="ulin-nav animated slideInDown" id="checkclass">
				<li><a href="../E-Learning/index.php">Home</a> </li>
				<li><a href="../E-Learning/subjectwise.php">Subjects</a></li>
				<li><a href="../E-Learning/aboutus.php">About Us</a></li>
				<li><a href="../E-Learning/connectwithus.php">Connect with Us</a></li>
			</ul>
			<a href="#" class="micon" onclick="slideshow()"> <i class="fa fa-bars"></i> </a>
		</div>
	</nav>
	<div class="wrapper">
		<div class="section-header">
			<h2>Team Members</h2>
		</div>
		<div class="team-member">
			<img src="../E-Learning/img/akshay.jpg" alt="">
			<h3>Akshay Chauhan</h3>
			<P>User Interface / Website Designer</P>
		</div>
		<div class="team-member">
			<img src="../E-Learning/img/jemin.jpg" alt="">
			<h3>Jemin Nasit</h3>
			<P>User Interface / Website Designer</P>
		</div>
		<div class="team-member">
			<img src="../E-Learning/img/shivam.jpg" alt="">
			<h3>Shivam Pandey</h3>
			<P>User Interface / Website Designer</P>
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