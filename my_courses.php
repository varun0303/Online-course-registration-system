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
	<title>My Courses</title>
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
.column{
	font-family: Roboto;
	width: 700px;
  	padding: 10px;
  	border: 2px solid lightblue;
  	border-radius: 10px;
}

.column h4{
	color: #0099cc;
}
.column img{
	height: 150px;
	width: 700px;
}
.btn:hover{
	transform: translateY(-5px);
    
}
.column h3{
	color: black;
}
.iii{
	font-family: Roboto;
	text-align: center;
	color: #0099cc;
}
.mar{
	margin-left: 300px;
}
#ali {
	
	padding: 50px 0px 50px 70px;
}
.btn{
    width: 35%;
    padding: 10px 10px;
    text-align: center;
    border: none;
    background: orangered;
    outline: none;
    border-radius: 30px;
    font-size: 1.2rem;
    color: #FFF;
    transition: .3s; 
}
#left{
	margin-left: 400px;
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
<div class="course">
	<h1>Start your career with us and get suceeded in your goals.</h1>
	<h4>All the studying you are doing will be worth it in the end! Good Luck!!</h4>
</div>
<br><br>
<h2 class="iii">My Courses</h2><br><br>
<div class="mar">
<?php
		$name=$_SESSION['username'];
	$quer="SELECT * from users where username='$name'";
    $resut=mysqli_query($conn,$quer);
    $rows = mysqli_fetch_array($resut, MYSQLI_ASSOC);
    $id=$rows['id'];
    $qr="SELECT * from course where id='$id'";
	$ress = mysqli_query($conn, $qr);
	$ro= mysqli_num_rows($ress); 
    if($ro>0){
    	$arr=array();
	while($row=mysqli_fetch_assoc($ress)){
	$cou=$row['courses'];
	array_push($arr, $cou);
}
foreach ($arr as $i) {
	if(strcasecmp($i,'Python')==0){?>
		<div class="column" id="mo">
			<img src="Images/python.png">
			<h3>Python 3.4.3</h3>
			<br><h4>Prof Narendra Prasad || IIT Bombay</h4>
			<br><a href="python1.php">
			<button id="left" class="btn" >Go to Course</button></a>
		</div><?php
	}
	elseif(strcasecmp($i,'Java')==0){?>
		<div class="column" id='mo'>
			<img src="Images/java.png">
			<h3>Java</h3>
			<br><h4>Prof Narendra Prasad || IIT Bombay</h4>
			<br><a href="java1.php">
			<button id="left" class="btn"  >Go to Course</button></a>
		</div><?php
	}
	elseif(strcasecmp($i,'Sql')==0){?>
		<div class="column">
			<img src="Images/sql.png">
			<h3>Sql</h3>
			<br><h4>Prof Sri Parimanan || IIT Bombay</h4>
			<br><a href="sql1.php">
			<button id="left" class="btn" >Go to Course</button></a>
		</div><?php
	}
	elseif(strcasecmp($i,'C Programming')==0){?>
		<div class="column">
			<img src="Images/c.png">
			<h3>C Programming</h3>
			<br><h4>Prof Siva Peruman || IIT Bombay</h4>
			<br><a href="c1.php">
			<button id="left" class="btn"  >Go to Course</button></a>
		</div><?php
	}
	echo '<br><br><br>';
}
}
else{?>
	<div class="column" id="ali">
			<h2>Woops!! You haven't joined for any coure.</h2>
			<br><h3>Click below to join for a course.</h3>
			<br>
			<a href="all_courses.php">
			<button class="btn" onclick="all_courses.php" >Click Here to Join</button></a>
		</div><?php
		echo '<br><br><br>';
}?>
</script>
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