<?php
error_reporting(0);
include('wp-config.php');
?> 
<!DOCTYPE html>
<html>
<head>
<title>
Feedback Form
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/style1.css" />
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
	<div class="feedback">
		<h2>Hello! We are always ready to serve you!</h2>		
	</div>
	<div class="fbform">
		<form id="fbform" name="fbform" method="post" action="" onsubmit="return myfun()">
			<label>Your Name </label>
			<input name="fullname" type="text" class="fcontrol" placeholder="Enter your Name" required>
			<label>Email Id </label>
			<input name="email" type="text" class="fcontrol" placeholder="Enter your E-mail" required>
			<span id="msg"> </span><br>
			<label>  Message </label>
			<textarea name="message" class="fcontrol" rows="3" placeholder="Enter a Message" required></textarea>
			<input type="submit" name="sub" class="fcontrolsubmit" value="Submit">
		</form>
	</div>
<?php
error_reporting(0);
if(isset($_POST['sub']))
{
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];
$sql = "INSERT INTO contact(fullname,email,message) VALUES('$fullname','$email','$message')" ;
if(mysqli_query($conn,$sql))
echo"<div align='center'>Your Message Sent.</div>";
}
?>
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
	function myfun(){
		var a = document.fbform.email.value;
		if ((a.indexOf('@')<=0)||(a.charAt (a.length-4)!='.')){
			document.getElementById("msg").innerHTML="** Invalid E-mail, Please right correct E-mail";
			return false;
		}
	}
</Script>
</body>
</html>