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
	<title>Python 3.4.3</title>
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
.con{
	position: relative;
	padding: 60px;
	font-family: Roboto;
	line-height: 30px;
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
.cont{
	position: absolute;
	top: 710px;
	margin: 100px 130px 60px 510px;
	line-height: 30px;
	text-align: justify;
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
.panel a{
	text-decoration: none;
	color: black;
}
.panel a:hover{
	text-decoration: underline;
}
.cor{
	margin-left: 60px;
	line-height: 40px;
	float:left;
	color: #333333;
}
.box{
	border: 2px solid lightgrey;
	padding: 40px;
	width: 1100px;
}
.btn{
    width: 100px;
    padding: 7px 0px;
    text-align: center;
    border: none;
    background: #333333;
    outline: none;
    font-size: 0.9rem;
    color: #FFF;
    transition: .3s;
}
.btn1{
    width: 100px;
    padding: 7px 0px;
    text-align: center;
    border: none;
    background: lightgrey;
    outline: none;
    font-size: 0.9rem;
    color: #333333;
    transition: .3s;
}
.col{
	float: right;
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
	<h2>Python 3.4.3</h2>
	<h3>By Prof Narendra Prasad | IIT Bombay </h3>
	<h4>Indian Institute of Technology Bombay</h4>
</div><br><br><br>
<div class="cor">
	<h1>Begin : Python Viva Assignment</h1><br>
	<div class="box">
	<h2>Instructions</h2><nr>
		<ol>
			<li><h4>This test can be taken only once.</h4></li>
			<li><h4>Click Begin to Start.</h4></li>
			<li><h4>Click Cancel to go back.</h4></li>
			<li><h4>Certificate will be displayed after the completion of the quiz.</h4></li>
		</ol>
		<div class="col"><a href="python1.php">
<a href="python1.php"><button  name="pythonn" class="btn1">Cancel</button></a>
		
<a href="quiz/quiz.php"><button name="pythonne" class="btn">Begin</button></a>
</div><br>
	</div>
	<br><br>
</div>
</body>
</html>