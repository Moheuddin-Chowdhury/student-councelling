<?php include 'inc/header.php' ?>

<?php


if(!isset($_SESSION['email'])){


	echo "<script>alert('Please Login to continue on contact us page!');</script>";
	echo "<script>window.location.href = 'http://localhost/sc/index.php';</script>";


}

?>



	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
				<h2>Contact us</h2>
				<?php 
if (isset($error)) {
    echo "<span style='color:red'>$error</span>";
}
if (isset($msg)) {
    echo "<span style='color:green'>$msg</span>";
}
                 ?>
			<form action="" method="POST">
				<table>
				<tr>
					<td>Your First Name:</td>
					<td>
					<input type="text" name="firstname" placeholder="Enter first name" name="fname" required="1"/>
					</td>
				</tr>
				<tr>
					<td>Your Last Name:</td>
					<td>
					<input type="text" name="lastname" placeholder="Enter Last name" name="lname" required="1"/>
					</td>
				</tr>
				
				<tr>
					<td>Your Email Address:</td>
					<td>
					<input type="email" name="email" placeholder="Enter Email Address" name ="email" required="1"/>
					</td>
				</tr>
				<tr>
					<td>Your Message:</td>
					<td>
					<textarea name="message" name="body"></textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
					<input type="submit" name="submit" value="Send"/>
					</td>
				</tr>
		</table>
	<form>				
 </div>
</div>

		<?php include 'inc/sidebar.php'; ?>
    <?php include 'inc/footer.php'; ?>
