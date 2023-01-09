<?php include 'config/config.php';?>
<?php include 'lib/Database.php';?>

<?php

include 'lib/Session.php';
Session::checkLogin();

?>


<?php

// if(isset($_SESSION['email'])){
// 	header("Location: index.php");
// }


?>


<?php
    $db = new Database();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM tbl_user WHERE email='$email' and password='$password'";
        $logincheck = $db->select($sql);
        if($logincheck){
            $result = $logincheck->fetch_assoc();
            $row = mysqli_num_rows($logincheck);
            if($row > 0){

                $_SESSION['email'] = $email;
                echo "<script>alert('logged in Succesfully');</script>";
                header('location:index.php');
            }
        }else{
            echo "<script>alert('Data not Found please Register');</script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-form">
  <form action="" method="POST">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="email" placeholder="Email" autocomplete="nope" name="email">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" autocomplete="new-password" name="password">
      </div>
      <a href="forgot.php" class="link">Forgot Your Password?</a>
    </div>
    <div class="action">
      <button  type="Submit"><a href="index.php" style="text-decoration: none;">Log in</a></button>
    </div>
  </form>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
