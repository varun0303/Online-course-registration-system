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
	<title>All Courses</title>
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
.course{
	background-color: orange;
	color: brown;
	line-height: 60px;
	font-family: Roboto;
	padding: 60px;
	position: relative;
	top: 9px;
	box-shadow: 4px 4px 5px 3px rgba(0,0,0,0.53);
}
.course h4{
	color: white;
}
.high{
	margin-left: 60px;
	font-family: Roboto;
	line-height: 40px;
	float:left;
}
.high h2{
	color: #0099cc;
}
.column{
	font-family: Roboto;
	width: 300px;
  	padding: 10px;
  	border: 2px solid lightblue;
  	border-radius: 10px;
 	margin: 0;
}

.column h4{
	color: #0099cc;
}
.column img{
	height: 100px;
	width: 300px;
}
.column:hover{
	transform: scale(1.05);
}
.row{
	float:right;
}
.container{
	position: relative;
	right: 13%;
}
#mo{
	position: relative;
	left: 35px;
}
a{
	text-decoration: none;
}
.column h3{
	color: black;
}
.column p{
	color: black;
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
					<li><a href="all_courses.php">ALL COURSES</a></li>
					<li><a href="my_courses.php">MY COURSES</a></li>
					<li><a href="homepage.php"><?php echo "Welcome " .$_SESSION['username']; ?></a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
</div>
<div class="course">
	<h1>Start your career with us and get suceeded in your goals.</h1>
	<h4>All the studying you are doing will be worth it in the end! Good Luck!!</h4>
</div>
<br><br>
<div class="high">
	<h2>Course Highlights</h2>
	<ol>
		<li>All the courses in VIVA are 4 Week courses.</li>
		<li>All the Lecturers are from NIT and IIT.</li>
		<li>You will receive a mail once you registered<br> for a course.</li>
		<li>You will be given access to our four weeks<br> lectures.</li>
		<li>Also you can test your skills through the<br> assignments on each topic given.</li>
		<li>Hope VIVA acts as a platform in enriching<br> you career and goals.</li>
	</ol>
</div>
<div class="container">
	<div class="row">
		<a href="python.php">
		<div class="column" id="mo">
			<img src="Images/python.png">
			<h3>Python 3.4.3</h3>
			<br><h4>Prof Narendra Prasad</h4>
			<br><p>Indian Institure of Technology Bombay</p>
			<br><p>4 Weeks Course</p>
		</div></a><br><br>
		<a href="java.php">
		<div class="column" id='mo'>
			<img src="Images/java.png">
			<h3>Java</h3>
			<br><h4>Prof Narendra Prasad</h4>
			<br><p>Indian Institure of Technology Bombay</p>
			<br><p>4 Weeks Course</p>
		</div></a>
	</div>
	<div class="row">
		<a href="sql.php">
		<div class="column">
			<img src="Images/sql.png">
			<h3>Sql</h3>
			<br><h4>Prof Sri Parimanan</h4>
			<br><p>Indian Institure of Technology Bombay</p>
			<br><p>4 Weeks Course</p>
		</div></a><br><br>
		<a href="c.php">
		<div class="column">
			<img src="Images/c.png">
			<h3>C Programming</h3>
			<br><h4>Prof Siva Peruman</h4>
			<br><p>Indian Institure of Technology Bombay</p>
			<br><p>4 Weeks Course</p>
		</div></a>	</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>

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