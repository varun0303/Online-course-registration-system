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
	<title>About VIVA</title>
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
.abt{
	background-color: orange;
	padding: 60px;
	font-family: Roboto;
	position: relative;
	top: 9px;
	line-height: 30px;
	box-shadow: 4px 4px 5px 3px rgba(0,0,0,0.53);
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
<div class="abt">
	<h2>ABOUT VIVA</h2>
	<p>VIVA is a programme initiated by Government of India and designed to achieve the three cardinal principles of Education Policy viz., access, equity and quality. The objective of this effort is to take the best teaching learning resources to all, including the most disadvantaged. VIVA seeks to bridge the digital divide for students who have remained untouched by the digital revolution and have not been able to join the mainstream of the knowledge economy.</p>
</div>
<div class="con">
	<p>
		VIVA website aims at hosting of all the courses, taught in classrooms from Class 9 till post-graduation to be accessed by anyone, anywhere at any time. All the courses are interactive, prepared by the best teachers in the country and are available, free of cost to any learner. Specially chosen faculty and teachers from across the country have participated in preparing these courses in order to make you strong
		on the concepts of the course.<br><br>

The courses hosted on VIVA are in 3 quadrants which are video lecture, self-assessment tests and quizzes and an online discussion forum for clearing the doubts. Steps have been taken to enrich the learning experience by using audio-video and multi-media and state of the art pedagogy / technology. A user gets certified after completing the courses through self assessments given in the portal.
	</p>
</div>
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