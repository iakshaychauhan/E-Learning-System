<!DOCTYPE html>
<html>
<head>
<title>
CSS
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/style9.css">
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
		<li><a href="../E-Learning/css.php">Introduction to CSS</a></li>
		<li><a href="../E-Learning/inline.php">Inline CSS</a></li>
		<li><a href="../E-Learning/internal.php">Internal CSS</a></li>
		<li><a href="../E-Learning/external.php">External CSS</a></li>
		<li><a href="../E-Learning/cssquiz.php">Quiz</a></li>
	</ul>

</div>
<div id='BodyRight'>
<h2>Inline, Embedded, External CSS</h2>
<hr>
<h3>External CSS</h3><br>
<p>In this method, all styling rules are contained in a single text file, which is saved with the .css extension.<br>
This CSS file is then referenced i the HTML using the < link > tag. the < link > element goes inside the head section.<br><br>
The HTML<br>
< html ><br>
< head ><br>
	< link rel = " stylesheet " href = " example.css " ><br>
< / head ><br>
< body ><br>
< p >This is an example of external styling.< / p ><br>
< / body ><br>
< / html ><br>
<br>
The CSS<br>
p {<br>
	color : gray ;<br>
}<br>
</p>
<a href="../E-Learning/internal.php"><button class="btn btn-full" id="previous" name="PreviousPage">Previous Page </button></a>
<a href="../E-Learning/download/external.docx" Download="External CSS"><button class="btn btn-full" id="download">Download </button></a>
<a href="../E-Learning/download/cssquiz.php"><button class="btn btn-full" id="next" name="NextPage">Next Page </button></a>

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
