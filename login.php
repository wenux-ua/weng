<?php
include_once("bd.php");
include("header.php");
?>


<?php
if (isset($_POST['login'])) {
	$login = $_POST['login']; 
	if ($login == '') {
		unset($login);
		exit ("Please, enter username!");
	} 
}
if (isset($_POST['password'])) {
	$password=$_POST['password']; 
	if ($password =='') {
		unset($password);
		exit ("Please, enter password");
	}
}

$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);


$login = trim($login);
$password = trim($password);

$password = md5($password);//decrypt password

$user = mysql_query("SELECT id FROM users WHERE login='$login' AND password='$password'");
$id_user = mysql_fetch_array($user);
if (empty($id_user['id'])){
	exit ("Sorry, login or password is incorrect.");
}
else {

   
    $_SESSION['password']=$password; 
	$_SESSION['login']=$login; 
    $_SESSION['id']=$id_user['id'];
		  
}
echo "<meta http-equiv='Refresh' content='0; URL=index.php'>";
?>
</body>
</html>
