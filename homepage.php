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
	<title>Viva Homepage</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
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
#slider{
	box-sizing: border-box;
	background: orange;
	border-radius: 4px;
	display: flex;
	box-shadow: 4px 4px 5px 3px rgba(0,0,0,0.53);
}
#slider1{
	box-sizing: border-box;
	background: #0099cc;
	border-radius: 4px;
	display: flex;
	box-shadow: 4px 4px 5px 3px rgba(0,0,0,0.53);
}
#slider2{
	box-sizing: border-box;
	background: lightgreen;
	border-radius: 4px;
	display: flex;
	height: 450px;
	box-shadow: 4px 4px 5px 3px rgba(0,0,0,0.53);
}
#women{
	height: 450px;
	width: 600px;
	position: relative;
	right: 30px;
}
.content{
	color: white;
	font-family: cursive;
	line-height: 80px;
	position: relative;
	top: 100px;
	left: 50px;
}
.content h3{
	font-size: 24px;
}
.content h2{
	font-size: 40px;
}
.content2{
	color: white;
	font-family: cursive;
	line-height: 80px;
	position: relative;
	top: 100px;
	left: 130px;
}
.content2 h3{
	font-size: 24px;
}
.content2 h2{
	font-size: 40px;
}
.content1{
	color: white;
	font-family: cursive;
	line-height: 80px;
	position: relative;
	top: 100px;
	right: 50px;
}
.content1 h3{
	font-size: 24px;
}
.content1 h2{
	font-size: 40px;
}
#teach{
	height: 450px;
	width: 700px;
	position: relative;
	top: -20px;
	right: 20px;S
}
#bus{
	height: 370px;
	width: 600px;
	position: relative;
	top: 30px;
	left: 30px;
}
#down{
	position: relative;
	top: 10px;
	box-shadow: 4px 4px 5px 3px rgba(0,0,0,0.53);
}
.cen{
	width: 350px;
  	padding: 10px;
  	border: 4px solid gray;
  	border-radius: 10px;
 	margin: 0;
 	background-color: #C0C0C0;
 	position: relative;
 	top: 20px;
 	float: left;
}
.cen h2{
	text-align: center;
	color: #0099cc;
	font-family: Roboto;
}
.cen p{
	font-family: Roboto;
	line-height: 50px;
	font-size: 25px;
}
.footer {
  padding: 15px 100px;
  background-color: grey;
  color: white;
  position: relative;
  top: 630px;
  font-family: 'Roboto';
  color: black;
}
.footer1 {
  padding: 15px 100px;
  background-color: black;
  color: white;
  position: relative;
  top: 630px;
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

.column{
	font-family: Roboto;
  	padding: 10px;
  	line-height: 30px;
 	margin: 0;
}
.column h1{
	color: #0099cc;
	line-height: 40px;
}
.column h4{
	color: grey;
}
.column img{
	width: 300px;
	height:200px;
}
.row{
	float:right;
}
.container{
	position: relative;
	right: 17%;
}
#mo{
	position: relative;
	left: 130px;
}
.aa{
	position: relative;
	right: 300px;
}
#line{
	position: relative;
	left: 370px;
	top: 280px;
}
	</style>
	<div class="body">
		<div class="menu">
			
			<div class="leftmenu">
				<h4> VIVA </h4>
			</div>

			<div class="rightmenu">
				<ul>
					<li> <a href="info.php"><h4>ABOUT VIVA</h4></a></li>
					<li> <a href="all_courses.php"><h4>All COURSES</h4></a> </li>
					<li><a href="my_courses.php">MY COURSES</a></li>
					<li><a href="homepage.php"><h4><?php echo "Welcome " .$_SESSION['username']; ?></h4></a></li>
					<li><a href="logout.php"><h4>Logout</a></h4></li>
				</ul>
			</div>
		</div>
		
		<div class="owl-carousel owl-theme" id="down">
		<div id="slider" class="item">
			<div>
				<p><img id="women" src="Images/women.png"></p>
			</div>
			<div class="content">
				<h3>For Students</h3>
				<h2>Build your skills that are needed</h2>
			</div>
		</div>
		<div id="slider1" class="item">
			<div>
				<p><img id="teach" src="Images/teacherr.png"></p>
			</div>
			<div class="content1">
				<h3>For Faculty</h3>
				<h2>Faculty Improvement and Student Monitoring</h2>
			</div>
		</div>
		<div id="slider2" class="item">
			<div>
				<p><img id="bus" src="Images/busines.png"></p>
			</div>
			<div class="content2">
				<h3>For Administrators</h3>
				<h2>Knowledge for Business <br>Perspective</h2>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
		<script type="text/javascript">
		$('.owl-carousel').owlCarousel({
    	loop:true,
    	margin:12,
    	nav:false,
    	autoplay: true,
    	dots: true,
    	autoplayTimeout: 4000,
    	responsive:{
        	0:{
            items:1
        	},
        	600:{
            items:1
        	},
        	1000:{
        		items:1
        	}
    	}
		})
		</script>
		<br>
		<div class="cen">
			<br><br><br>
			<h2>PROCEDURE TO GET<br>CERTIFIED</h2>
			<p>1. Click on All Courses in the menu bar.</p>
			<p>2. Select the course from the set of Courses given.</p>
			<p>3. Register for the Course.</p>
			<p>4. Watch the videos given for the respected Courses.</p>
			<p>5. Attend the Quiz and get graded based on your Scores.</p>
		</div><br><br><br>
		<div class="container">
	<div class="row">
		<div class="column" id="mo">
			<img src="Images/exam.jpg">
		</div><br><br><br><br><br><br>
		<div class="column" id='mo'>
			<h1>Onhand Assignments <br>based on lectures.</h1><br>
			<h4>Test your skills and<br> enlarge your knowledge.</h4>
		</div>
	</div>
	<hr id="line">
	<div class="row">
		<div class="column">
			
			<h1>Best Classes taken by <br>well trained Instructors</h1><br>
			<h4>Improve your knowledge with <br>high standard lectures.</h4>
		</div><br><br><br><br><br><br><br><br>
		<div class="column">
			<img src="Images/exam2.jpg">
		</div>	</div>
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