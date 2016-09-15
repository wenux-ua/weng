<?php include_once("bd.php"); ?>

	
<?php
if (empty($_SESSION['login']) or empty($_SESSION['password'])) {
	exit ("Only register user can see this page<br><a href='index.php'>Home</a>");
}

unset($_SESSION['password']);
unset($_SESSION['login']); 
unset($_SESSION['id']);// delete all variables of current session

exit("<meta http-equiv='Refresh' content='0; URL=index.php'>");
?>

