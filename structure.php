<!DOCTYPE html>
<html>
<head>
<title>
HTML
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/style7.css">
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
		<li><a href="html.php">Introduction to HTML</a></li>
		<li><a href="structure.php">Basic HTML Document Structure</a></li>
		<li><a href="thefile.php">First Program</a></li>
		<li><a href="quiz.php">Quiz</a></li>
	</ul>
</div>
<div id='BodyRight'>
<h2>Basic HTML Document Structure</h2>
<hr>
<h3>The < html > Tag</h3>
<p>The structure of an HTML document has been compared with that of a sandwich. As a sandwich has two slices of bread, the document has opening and closing HTML tags.<br>
< html ><br>
...<br>
< / html ></p><br>
<h3>The < head > Tag</h3>
<p>Immediately following the opening HTML tag, you'll find the head of the document, which is identified by opening and closing head tags.<br> 
The head of an HTML file contains all of the non-visual elements that help make the page work.<br>
< head ><br>
...<br>
< / head ></p><br> 
<h3>The < body > Tag</h3>
<p>The body tag follows the head tag.<br>
All visual-structural elements are contained within the body tag.<br>
Headings, paragraphs, lists, images and links are just a few of the elements that can be contained within the body tag.<br>
< body ><br>
...<br>
< / body ></p>
<a href="../E-Learning/html.php"><button class="btn btn-full" id="previous" name="PreviousPage">Previous Page </button></a>
<a href="../E-Learning/download/structure.docx" Download="Basic HTML Document Structure"><button class="btn btn-full" id="download">Download </button></a>
<a href="../E-Learning/thefile.php"><button class="btn btn-full" id="next" name="NextPage">Next Page </button></a>
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