<?php
include "config.php";
if(isset($_SESSION['username'])){
	header('index.php');
}?>
<?php
$name=$_SESSION['username'];
$id="SELECT id from users where username='$name'";
echo $id;
?>