<!DOCTYPE html>
<html>
<head>
<title>
HTML
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style9.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
	<nav>
		<div class="row Clearfix">
			<img src="logo1.png"  class="logo">
			<ul class="ulin-nav animated slideInDown" id="checkclass">
				<li><a href="index.php">Home</a> </li>
				<li><a href="subjectwise.php">Subjects</a></li>
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="connectwithus.php">Connect with Us</a></li>
			</ul>
			<a href="#" class="micon" onclick="slideshow()"> <i class="fa fa-bars"></i> </a>
		</div>
	</nav>
<div class="container"> 
<nav>
<div id='BodyLeft'>
	<ul>
		<li><a href="html.php">Introduction to HTML</a></li>
		<li><a href="structure.php">Basic HTML Document Structure</a></li>
		<li><a href="thefile.php">First Program</a></li>
		<li><a href="quiz.php">Quiz</a></li>
	</ul>

</div>
<div id='BodyRight'>
<h2>First Program</h2>
<hr>
<h3>The HTML File</h3><br>
<p>Add the basic HTML structure to the text editor with "This is a line of text" in the Body section.<br>
< html ><br>
< head ><br>
< title > first program< / title ><br>
< / head ><br>
< body ><br>
This is a line of text.<br>
< / body ><br>
< / html >
</p>
<a href="structure.php"><button class="btn btn-full" id="previous" name="PreviousPage">Previous Page </button></a>
<a href="first.docx" Download="First Program"><button class="btn btn-full" id="download">Download </button></a>
<a href="quiz.php"><button class="btn btn-full" id="next" name="NextPage">Next Page </button></a>

</div>
</nav>
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
