<?php
include('../core/init.php');
login($_POST['username'], $_POST['password']);
loggedIn($_SESSION['admin']);
?>