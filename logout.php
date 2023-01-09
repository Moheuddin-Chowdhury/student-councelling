<?php include 'config/config.php';?>

<?php

include 'lib/Session.php';
Session::checkLogin();

?>


<?php

session_unset();
session_destroy();

header("Location: index.php");

?>