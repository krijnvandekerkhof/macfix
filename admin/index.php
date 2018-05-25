<?php
include('../core/init.php');
if (isset($_SESSION['admin'])) {
	echo "Welkom admin";
	?>
	<a href="logout.php">Log out!</a>
	<?php
}
else{
?>
<form method="post" action="login.php">
	<input type="text" name="username">
	<input type="password" name="password">
	<input type="submit" name="submtiLogIn">
</form>
<?php
}
?>