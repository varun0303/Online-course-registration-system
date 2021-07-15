<?php 
include 'config.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<title>Java</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>
	<style>
		*{
	margin:0px;
	padding:0px;
}
body{
	font-family: Roboto;
}
.menu{
	width: 100%;
	height: 100px;
	background-color: rgb(0,0,0,0.7);
	box-shadow: 4px 4px 5px 3px rgba(0,0,0,0.53);
}

.leftmenu{
	width: 20%;
	line-height: 100px;
	float: left;
/*	background-color: yellow;*/
}

.leftmenu h4{
	padding-left: 70px;
	font-weight: bold;
	color: white;
	font-size: 22px;
	font-family: 'Montserrat', sans-serif;
}


.rightmenu{
	width:70%;
	height: 100px;
	float: right;
	position: relative;
	right: 2%;
}

.rightmenu ul {
	margin-left: 200px;
}

.rightmenu li {
	font-family: Roboto, sans-serif;
	display: inline-block;
	list-style: none;
	font-size: 15px;
	color:white;
	font-weight: bolder;
	line-height: 100px;
	margin-left: 40px;
	text-transform: uppercase;

}

#fisrtlist{
	color: orange;
}

.rightmenu ul li a:hover{
	color: orange;
}

.rightmenu ul li a{
	text-decoration: none;
	color: white;
}

.rightmenu ul li:hover{
	color: orange;
}
.abt{
	background-color: orange;
	padding: 60px;
	font-family: Roboto;
	position: relative;
	top: 9px;
	line-height: 30px;
}
.abt p{
	color: white;
}
.abt h2{
	color: brown;
}
.spc{
	background-color: orange;
	position: relative;
	top: 9px;
	box-shadow: 4px 4px 5px 3px rgba(0,0,0,0.53);
	padding: 60px;
	color: brown;
	line-height: 35px;
}
.spc h3,.spc h4{
	color: white;
}
.frame{
	float: right;
	position: absolute;
	right: 10%;
}
.high{
	margin-left: 60px;
	font-family: Roboto;
	line-height: 40px;
	float:left;
	border: 2px solid lightblue;
  	border-radius: 10px;
  	background-color: lavender;
  	width: 350px;
}
.btn{
    width: 140px;
    padding: 10px 10px;
    text-align: center;
    border: none;
    background: orangered;
    outline: none;
    border-radius: 30px;
    font-size: 1.2rem;
    color: #FFF;
    transition: .3s;
    position: absolute;
    bottom: -57%;
    left: 5%;
}
.btn:hover{
	transform: translateY(-5px);
    
}
.sub{
	position: absolute;
	 bottom: -62%;
    left: 5%;
    color: #0099cc; 
}
.high h2{
	color: #0099cc;
	margin-left: 20px;
}

.aa{
	position: relative;
	right: 400px;}
button.accordion{
  cursor:pointer;
  border:none;
  outline:none;
  width:100%;
  text-align:left;
  background-color:transparent;
  color:black;
  padding :8px 0px 8px 20px;
  margin:4px 0px;
  border-radius:4px;
  transition:0.3s;
}

button.accordion:hover{
  background-color:rgba(255,255,255,0.3);
}

button.accordion.active{
  background-color:#fff;
  color:#000;
  border-radius:4px 4px 0 0;
  margin:4px 0 0;
 }

div.panel{
  background-color:rgba(255,255,255,0.8);
  color:#000;
  border-radius:0 0 4px 4px;
  overflow:hidden;
  opacity:0;
  max-height:0;
  transition:0.3s;
  padding:0 8px;
}
.panel li{
	margin-left: 30px;
}

div.panel.show{
  opacity:1;
  max-height:500px;
  padding:8px;
  margin:2px 0 4px;
}
.cont{
	position: absolute;
	top: 710px;
	margin: 100px 130px 60px 510px;
	line-height: 30px;
	text-align: justify;
}
.panel a{
	text-decoration: none;
	color: black;
}
.panel a:hover{
	text-decoration: underline;
}
	</style>
	<div>
		<div class="menu">
			
			<div class="leftmenu">
				<h4> VIVA </h4>
			</div>

			<div class="rightmenu">
				<ul>
					<li> <a href="info.php">ABOUT VIVA</a></li>
					<li> <a href="all_courses.php"><h4>All COURSES</h4></a> </li>
					<li><a href="my_courses.php">MY COURSES</a></li>
					<li><a href="homepage.php"><?php echo "Welcome " .$_SESSION['username']; ?></a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
</div>
<div class="spc">
	<h2>Java</h2>
	<h3>By Prof Narendra Prasad | IIT Bombay </h3>
	<h4>Indian Institute of Technology Bombay</h4>
</div><br><br><br>
<div class="high">
	<h2>Course Outline</h2>
<button class="accordion">
  <h3>Lesson 1</h3>
</button>
<div class="panel">
 <li><a href="java/1java.php"> Variable in Java</a></li>
<hr>
<li><a href="java/2java.php">Printf and Post Pre Increments</a></li><hr>
<li><a href="java/3java.php">Bitwise Operators and Boolean</a></li>
</div><hr>
<button class="accordion">
  <h3>Lesson 2</h3>
</button>
<div class="panel">
 <li><a href="java/4java.php">Conditional and Switch Case</a></li>
<hr>
<li><a href="java/5java.php">Loops and Break Statements</a></li><hr>
<li><a href="java/6java.php">Printing patterns in Java</a></li>
</div><hr>
<button class="accordion">
  <h3>Lesson 3</h3>
</button>
<div class="panel">
 <li><a href="java/7java.php">Arrays in Java</a></li>
<hr>
<li><a href="java/8java.php">Objects and Constructors</a></li><hr>
<li><a href="java/9java.php">Access modifiers and static</a></li>
</div><hr>

<button class="accordion">
  <h3>Lesson 4</h3>
</button>
<div class="panel">
 <li><a href="java/10java.php">Inheritance in Java</a></li>
<hr>
<li><a href="java/11java.php">Abstraction and Interface</a></li><hr>
<li><a href="java/12java.php">Exception Handling</a></li>
</div><hr>
<button class="accordion">
  <h3>Assignment</h3>
</button>
<div class="panel">
 <li><a href="jquiz.php">Quiz</a></li>
</div>
</div>
<script>
		var accordions = document.querySelectorAll("button.accordion");

for (var i = 0; i < accordions.length; i++) {
  accordions[i].onclick = function() {
    this.classList.toggle("active");
    this.nextElementSibling.classList.toggle("show");
  };
}

	</script>
</div>
<div class="frame">
	<iframe width="700" height="400" src="https://www.youtube-nocookie.com/embed/WOUpjal8ee4" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
</div>
<div class="cont">
	<p>A fun filled whirlwind tour covering everything you need to know to fall in love with the most sought after skill of the 21st century. The course brings programming to your desk with anecdotes, analogies and illustrious examples. Turning abstractions to insights and engineering to art, the course focuses primarily to inspire the learner's mind to think logically and arrive at a solution programmatically. As part of the course, you will be learning how to practice and culture the art of programming with Java as a language. At the end of the course, we introduce some of the current advances in computing to motivate the enthusiastic learner to pursue further directions.<p><br>
</div>
</body>
</html>