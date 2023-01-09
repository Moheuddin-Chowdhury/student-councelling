<?php include 'config/config.php';?>
<?php include 'lib/Database.php';?>
<?php include 'helpers/Format.php';?>


<?php

include 'lib/Session.php';
Session::checkLogin();

?>


<?php
$db = new Database();
$fm = new Format();
?>
 
<!DOCTYPE html>
<html>
<head>	
	<?php include 'scripts/meta.php'; ?>
	<?php include 'scripts/css.php'; ?>
	<?php include 'scripts/js.php'; ?>
</head>

<body>
	<div class="headersection templete clear">
		<a href="index.php">
			<div class="logo">
				<?php
$query      = "SELECT * FROM title_slogan WHERE id ='1'";
$blog_title = $db->select($query);
if ($blog_title) {
    while ($result = $blog_title->fetch_assoc()) {
        ?>
				<img style="border-radius:40% ;" src="admin/<?php echo $result['logo']; ?>" alt="Logo"/>
				<h2><?php echo $result['title']; ?></h2>
				<p><?php echo $result['slogan']; ?></p>

				<?php
    }
}?>
			</div>
		</a>
		<div class="social clear">
			<div class="icon clear">

				<?php
$query        = "SELECT * FROM tbl_social WHERE id ='1'";
$social_media = $db->select($query);
if ($social_media) {
    while ($result = $social_media->fetch_assoc()) {
        ?>

				

				<?php
    }
}?>
			</div>
			<div class="searchbtn clear">
			<form action="search.php" method="get">
				<input type="text" name="search" placeholder="Search keyword..."/>
				<input type="submit" name="submit" value="Search"/>
			</form>
			
			</div>
		</div>
	</div>
<div class="navsection templete">

	<?php 

$path = $_SERVER['SCRIPT_FILENAME'];
$currentpage = basename($path, '.php');
     ?>
	<ul>

	<?php

if(isset($_SESSION['email'])){
	echo "<li><a href='logout.php'>Logout</a></li>";
}else{
	echo "<li><a href='login.php'>login</a></li>
	<li><a href='register.php'>Registration</a></li>";
}



?>




	</ul>
</div>
