<!DOCTYPE html>
<html>
<head>
<title>
HTML
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/style8.css" />
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
		<li><a href="../E-Learning/html.php">Introduction to HTML</a></li>
		<li><a href="../E-Learning/structure.php">Basic HTML Document Structure</a></li>
		<li><a href="../E-Learning/thefile.php">First Program</a></li>
		<li><a href="../E-Learning/quiz.php">Quiz</a></li>
	</ul>
</div>
<div id='BodyRight'>
<h2>Result of Quiz</h2>
<hr>
<div id="page-wrap">		
        <?php
		
			error_reporting(0);
		
            $answer1 = $_POST['question-1'];
            $answer2 = $_POST['question-2'];
            $answer3 = $_POST['question-3'];
            $answer4 = $_POST['question-4'];
            $answer5 = $_POST['question-5'];        
            $totalCorrect = 0;            
            if ($answer1 == "A") { $totalCorrect++;
									echo "<ul><li>HTML Stands for... <br>Ans. Hyper text markup language</li></ul>";}
            if ($answer2 == "D") { $totalCorrect++; 
									echo "<ul><li>What does a markup language use to identify content?<br>Ans. Tags</li></ul>";}
            if ($answer3 == "A") { $totalCorrect++; 
									echo "<ul><li>HTML program is saved using _____ extension.<br>Ans. .html</li></ul>";}
            if ($answer4 == "B") { $totalCorrect++; 
									echo "<ul><li>Localhost IP is...<br>Ans. 127.0.0.0</li></ul>";}
            if ($answer5 == "D") { $totalCorrect++; 
									echo "<ul><li>What is the correct HTML element for inserting a line break?<br>Ans. br</li></ul>";}           
            echo "<div id='results' align='center'>$totalCorrect / 5 correct</div>";
        ?>	
	</div>
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