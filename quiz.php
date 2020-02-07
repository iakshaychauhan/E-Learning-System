<!DOCTYPE html>
<html>
<head>
<title>
HTML
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style6.css" />
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
<h1>Quiz on HTML</h1>	
<hr>
	<form action="result.php" method="post" name="quiz" id="quiz">
            <ol>
                <li>
                    <h3>HTML Stands for...</h3>
                    
                    <div>
                        <input type="radio" name="question-1" id="question-1" value="A" />
                        <label for="question-1-answers-A">A) Hypertext Markup Language </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1" id="question-1" value="B" />
                        <label for="question-1-answers-B">B) Web App</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1" id="question-1" value="C" />
                        <label for="question-1-answers-C">C) CMS</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1" id="question-1" value="D" />
                        <label for="question-1-answers-D">D) Other</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>What does a markup language use to identify content?</h3>
                    
                    <div>
                        <input type="radio" name="question-2" id="question-2" value="A" />
                        <label for="question-2-answers-A">A) Functions</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2" id="question-2" value="B" />
                        <label for="question-2-answers-B">B) Commands</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2" id="question-2" value="C" />
                        <label for="question-2-answers-C">C) Scripts</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2" id="question-2" value="D" />
                        <label for="question-2-answers-D">D) Tags</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>HTML program is saved using _____ extension.</h3>
                    
                    <div>
                        <input type="radio" name="question-3" id="question-3" value="A" />
                        <label for="question-3-answers-A">A) .html</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3" id="question-3" value="B" />
                        <label for="question-3-answers-B">B) .htl</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3" id="question-3" value="C" />
                        <label for="question-3-answers-C">C) .hltm</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3" id="question-3" value="D" />
                        <label for="question-3-answers-D">D) .hml</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Localhost IP is..</h3>
                    
                    <div>
                        <input type="radio" name="question-4" id="question-4" value="A" />
                        <label for="question-4-answers-A">A) 192.168.0.1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4" id="question-4" value="B" />
                        <label for="question-4-answers-B">B) 127.0.0.0</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4" id="question-4" value="C" />
                        <label for="question-4-answers-C">C) 1080:80</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4" id="question-4" value="D" />
                        <label for="question-4-answers-D">D) Any Other</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>What is the correct HTML element for inserting a line break?</h3>
                    
                    <div>
                        <input type="radio" name="question-5" id="question-5" value="A" />
                        <label for="question-5-answers-A">A) lr</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5" id="question-5" value="B" />
                        <label for="question-5-answers-B">B) lb</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5" id="question-5" value="C" />
                        <label for="question-5-answers-C">C) break</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5" id="question-5" value="D" />
                        <label for="question-5-answers-D">D) br</label>
                    </div>
                
                </li>
            
            </ol>
            <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-full" />
		
		</form>
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
