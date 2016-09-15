<?php
include_once('bd.php');
include("header.php");
?>


<?php
if (isset($_POST['submit'])){     
	$login = $_POST['login'];
	$email = $_POST['email'];
	
	if (empty($login)){
		echo "Enter login!";
	}
	elseif (empty($email)){
		echo "Enter e-mail!";
	}
   else{
		$resultat = mysql_query("SELECT * FROM users WHERE login = '$login' AND email = '$email'");
		$array = mysql_fetch_array($resultat);
		if (empty($array)){
			echo 'Error! There are no user with this data';
		}
		elseif (mysql_num_rows($resultat) > 0){
			$chars="qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP"; 
			$max=10; 
			$size=StrLen($chars)-1; 
			$password=null; 
			
			while($max--){
			$password.=$chars[rand(0,$size)]; 
			}
			$newmdPassword = md5($password); 
			$title = 'Reset password for user '.$login.' in WiseEngineering site!';
			$headers  = "Content-type: text/plain; charset=windows-1251\r\n";
			$headers .= "Admin of WiseEngineering";
			$letter = 	'Hi! You reset password for account '.$login.' in WiseEngineering \r\nYoure new password: '.$password;

// send password
			if (mail($email, $title, $letter, $headers)) {
			   mysql_query("UPDATE users SET password = '$newmdPassword' WHERE login = '$login'  AND users.email = '$email'");
			   echo 'The new password has been send to you e-mail!<br><a href="index.php">Home</a>';
			}
		}		
	}
}
mysql_close();
?>

<table>
 
      <form method="POST">
      <tr>
      <td>Login:</td>
      <td><input type="text" size="20" name="login" ></td>
      </tr>
      <tr>
      <td>E-mail:</td>
      <td><input type="text" size="20" name="email"></td>
      </tr>
      <tr>
       <td></td>
      <td colspan="2"><input type="submit" value="Reset password" name="submit" ></td>
      </tr>
     <br>
      </form>
</table>
</body>
</html>
 <p><?php include ("footer.php") ?>