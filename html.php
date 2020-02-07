<!DOCTYPE html>
<html>
<head>
<title>
HTML
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/style4.css" />
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
<div class="container"> 
<nav>
<div id='BodyLeft'>
	<ul>
		<li><a href="../E-Learning/download/html.php">Introduction to HTML</a></li>
		<li><a href="../E-Learning/download/structure.php">Basic HTML Document Structure</a></li>
		<li><a href="../E-Learning/download/thefile.php">First Program</a></li>
		<li><a href="../E-Learning/download/quiz.php">Quiz</a></li>
	</ul>
</div>
<div id='BodyRight'>
<h2>Introduction To HTML</h2>
<hr>
<h4>What is HTML?</h4>
<p>HTML (Hypertext Markup Language) is not a programming language; 
it is a markup language used to tell your browser how to structure the web pages you visit. 
It can be as complicated or as simple as the web developer wishes it to be. 
HTML consists of a series of elements, which you use to enclose, wrap, or mark up different parts of the content to make it appear or act a certain way. 
The enclosing tags can make a bit of content into a hyperlink to link to another page on the web, italicize words, and so on.</p> 
<a href="../E-Learning/download/HTML.docx" Download="Introduction to HTML"><button class="btn btn-full" id="download">Download </button></a>
<a href="../E-Learning/structure.php"><button class="btn btn-full" id="next" name="NextPage">Next Page </button></a>
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