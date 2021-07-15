<?php 
include 'config.php';
include 'config.php';
require 'phpmailer/includes/PHPMailer.php';
require 'phpmailer/includes/SMTP.php';
require 'phpmailer/includes/Exception.php'  ;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
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
	<title>Sql</title>
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
.footer {
  padding: 15px 100px;
  background-color: grey;
  color: white;
  position: relative;
  top: 750px;
  font-family: 'Roboto';
  color: black;
}
.footer1 {
  padding: 15px 100px;
  background-color: black;
  color: white;
  position: relative;
  top: 750px;
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
}
.high h2{
	color: #0099cc;
}
.cont{
	position: absolute;
	top: 770px;
	margin: 60px 130px 60px 60px;
	line-height: 30px;
	text-align: justify;
}
.aa{
	position: relative;
	right: 300px;}
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
    top: 1000px;
    left: 5%;
}
.btn:hover{
	transform: translateY(-5px);
    
}
.sub{
	position: absolute;
	 top: 1060px;
    left: 5%;
    color: #0099cc; 
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
	<h2>Sql</h2>
	<h3>By Prof Sri Parimanan | IIT Bombay </h3>
	<h4>Indian Institute of Technology Bombay</h4>
</div><br><br>
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
<div class="frame">
	<iframe width="700" height="400" src="https://www.youtube-nocookie.com/embed/bMw6SmuJRVQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="cont">
	<p>A fun filled whirlwind tour covering everything you need to know to fall in love with the most sought after skill of the 21st century. The course brings programming to your desk with anecdotes, analogies and illustrious examples. Turning abstractions to insights and engineering to art, the course focuses primarily to inspire the learner's mind to think logically and arrive at a solution programmatically. As part of the course, you will be learning how to practice and culture the art of programming with Sql as a language. At the end of the course, we introduce some of the current advances in computing to motivate the enthusiastic learner to pursue further directions.<p>
</div>
<form action="" method="POST" class="login-email">
<button onclick="this. style. display='none'" name="sql" class="btn">Join</button>
</form>
<div class="sub"><h3>
<?php
if (isset($_POST['sql'])) {
	$name=$_SESSION['username'];
	$quer="SELECT * from users where username='$name'";
    $resut=mysqli_query($conn,$quer);
    $rows = mysqli_fetch_array($resut, MYSQLI_ASSOC);
    $id=$rows['id'];
    $emaill=$rows['email'];
	$sql="INSERT INTO course values('$id','Sql')";
	$ress = mysqli_query($conn, $sql);
	if ($ress) {
				$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth="true";
$mail->SMTPSecure="tls";
$mail->Port=587;
$mail->Username="vivaonlinecourse@gmail.com";
$mail->Password="Varun@03";
$mail->Subject="Course Registration Confirmation";
$mail->setFrom("vivaonlinecourse@gmail.com");
$mail->Body ='Dear Learner

You have successfully registered for SQL Course!

Thank you for signing up for our online course "SQL". We wish you an enjoyable and informative learning experience.

Details regarding the course:
Name of the course: SQL 
Course duration : 4 weeks ';
$mail->addAddress("$emaill");
if($mail->Send()){
	echo "Congratulations ".$_SESSION['username']."!! You have successfully joined the course.";
}
else{
	echo "Error";
}
			} else {
				echo "Woops! Already registered for this course.";
			}}
?></h3>
</div>
<div class="footer">
  			<p class="aa">Privacy Policy | Terms of Use | Honor Code &nbsp</p>
  			<p class="alig">VIVA  Helpline/Support</p>
		</div>
		<div class="footer1" >
  			<p class="aa">© 2021 VIVA. All rights reserved.</p>
  			<p class="alig1">Initiative by : Ministry of Education (Govt of India)</p>
		</div>
</body>
</html>