<?php include_once("bd.php"); ?>
<?php include("header.php"); 



?>	
<!DOCTYPE HTML >
<html>
	<head>
		
		<style type="text/css">
		INPUT {
		background: silver; /* back color */
		}
		</style>
	</head>
<body>
<div class="content">
	<div class="login_form">
<?php




if(empty($login) and empty($password)){
print <<<HERE
<p><table>
Authorization:
<br>
<br>
 
      <form action="login.php" method="POST">
      <tr>
      <td>Login:</td>
      <td><input type="text" name="login" ></td>
      </tr>
	  
      <tr>
      <td>Password:</td>
      <td><input type="password" name="password" ></td>
      </tr>
	  
	  <tr>
      <td colspan="2"><input type="submit" value="OK" name="submit" ></td>
      </tr>
      </form>
      </table>
<a href="registration.php">Registration</a><br>
<a href="password.php">Forgot password?</a>
HERE;
}
else{
echo "You log in as <strong>".$login."</strong> | You can <a href='exit.php'>Log out</a><br>";
echo "<h3><a href='add.php'>ADD a new contact</a></h3></br>";
}
?>







</div>
</div>

<p><?php include ("footer.php") ?>

</body>
</html>