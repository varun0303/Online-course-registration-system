<?php 

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
.footer {
  padding: 15px 100px;
  background-color: grey;
  color: white;
  position: relative;
  font-family: 'Roboto';
  color: black;
}
.footer1 {
  padding: 15px 100px;
  background-color: black;
  color: white;
  position: relative;
  font-family: 'Roboto';
  color: white;
}
.alig{
	position: absolute;
	top: 15px;
	left: 1150px;
}
.alig1{
	position: absolute;
	top: 15px;
	left: 1000px;
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
iframe{
	margin-left: 200px;
	border:6px solid darkslategrey;
}
hr{
	width: 90%;
	margin-left: 70px;
}
#co{
	color: #0099cc;
	text-decoration: underline;
}
.cont{
	margin: 30px 200px 30px 60px;
}
.cont h2{
	color: #0099cc;
}
.cont p{
	text-align: justify;
	line-height: 30px;
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
<div class="cont">
	<h2>About Professor</h2><br>
	<p>Prof. Narendra Prasad is an assistant professor at IIIT Dharwad, Hubli. He completed his PhD from IIT Bombay in 2017 after which he did two postdocs at IIT Madras and IIT Delhi respectively. His areas of interest include complex networks and social network analysis</p>
</div>
<h2 id="co" align="center">Bitwise Operators</h2><br><br>
<iframe width="900" height="400" src="https://www.youtube-nocookie.com/embed/rzfiE0UuZnQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br><br><hr><br><br>
<h2 id="co" align="center">Boolean in Java</h2><br><br>
<iframe width="900" height="400" src="https://www.youtube-nocookie.com/embed/tpP8EQE8DNU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br><br>
<div class="footer">
  			<p>Privacy Policy | Terms of Use | Honor Code &nbsp</p>
  			<p class="alig">VIVA  Helpline/Support</p>
		</div>
		<div class="footer1" >
  			<p>© 2021 VIVA. All rights reserved.</p>
  			<p class="alig1">Initiative by : Ministry of Education (Govt of India)</p>
		</div>
</body>
</html>