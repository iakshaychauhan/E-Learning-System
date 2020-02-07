<!DOCTYPE html>
<html>
<head>
<title>
CSS
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/style6.css" />
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
<h1>Quiz on CSS</h1>
<hr>
	<form action="cssresult.php" method="post" name="quiz" id="quiz">
            <ol>
                <li>
                    <h3>CSS Stands for...</h3>                    
                    <div>
                        <input type="radio" name="question-1" id="question-1" value="A" />
                        <label for="question-1-answers-A">A) Cascading Style Sheet </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1" id="question-1" value="B" />
                        <label for="question-1-answers-B">B) Cascading Style Script</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1" id="question-1" value="C" />
                        <label for="question-1-answers-C">C) Cascading Sheet Style</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1" id="question-1" value="D" />
                        <label for="question-1-answers-D">D) Cast Style Sheet</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>What are style sheets used for?</h3>
                    
                    <div>
                        <input type="radio" name="question-2" id="question-2" value="A" />
                        <label for="question-2-answers-A">A) to script web pages</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2" id="question-2" value="B" />
                        <label for="question-2-answers-B">B) to define the structure of web documents</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2" id="question-2" value="C" />
                        <label for="question-2-answers-C">C) to store the keywords of web pages</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2" id="question-2" value="D" />
                        <label for="question-2-answers-D">D) to control the look and feel of web documents</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Where should the style tag be declared to organize an internal CSS?</h3>
                    
                    <div>
                        <input type="radio" name="question-3" id="question-3" value="A" />
                        <label for="question-3-answers-A">A) head</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3" id="question-3" value="B" />
                        <label for="question-3-answers-B">B) Body</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3" id="question-3" value="C" />
                        <label for="question-3-answers-C">C) External file</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3" id="question-3" value="D" />
                        <label for="question-3-answers-D">D) None Of Above</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Select the attrbutes that organizes the inline styling:</h3>
                    
                    <div>
                        <input type="radio" name="question-4" id="question-4" value="A" />
                        <label for="question-4-answers-A">A) class</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4" id="question-4" value="B" />
                        <label for="question-4-answers-B">B) style</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4" id="question-4" value="C" />
                        <label for="question-4-answers-C">C) id</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4" id="question-4" value="D" />
                        <label for="question-4-answers-D">D) All Of Above</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Which tag is used for  connecting external css file?</h3>
                    
                    <div>
                        <input type="radio" name="question-5" id="question-5" value="A" />
                        <label for="question-5-answers-A">A) body</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5" id="question-5" value="B" />
                        <label for="question-5-answers-B">B) head</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5" id="question-5" value="C" />
                        <label for="question-5-answers-C">C) Anchor</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5" id="question-5" value="D" />
                        <label for="question-5-answers-D">D) Link</label>
                    </div>
                
                </li>
            
            </ol>
            <p id="message"> </p>
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
