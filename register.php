<?php include 'config/config.php';?>
<?php include 'lib/Database.php';?>

<?php
    $db = new Database();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword=$_POST['repassword'];
        if(strcmp($password,$repassword)!=0){
          echo "<script>alert('Password Doesn't matched!');</script>";
          echo "<script>window.location = 'register.php';</script>";
        }else{
          
        $query         = "INSERT INTO tbl_user (name, username, password, email, details,role) VALUES ('$name', '$username', '$password', '$email',  '$name','1')";
        $inserted_rows = $db->insert($query);
        if ($inserted_rows) {
            echo "<script>alert('Register Successfully')</script>";
            header('location:index.php');
        } else {
            echo '<span class="">Cound not Register .</span>';
        }
        }
    }
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./login.css">

</head>
<body>
<div class="login-form">
  <form action="" method="POST">
    <h1>Registration Form</h1>
    <div class="content">
    <div class="input-field">
        <input type="text" placeholder="Name" autocomplete="nope" name="name">
      </div>
      <div class="input-field">
        <input type="text" placeholder="Username" autocomplete="nope" name="username">
      </div>
      <div class="input-field">
        <input type="email" placeholder="Email" autocomplete="nope" name="email">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" autocomplete="new-password" name="password">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Re-Enter Password" autocomplete="new-password" name="repassword">
      </div>
    </div>
    
    <div class="action">
    <button type="submit" name="submit" Value="Register" >Register</button>
    </div>
  </form>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
