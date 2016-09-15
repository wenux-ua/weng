<?php
    include_once("bd.php");
	
    if (isset($_POST['submit'])){
		if(empty($_POST['login']))  {
			echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Enter login!"> Enter login! </font>';
		} 
		elseif (!preg_match("/^\w{3,}$/", $_POST['login'])) {
			echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="In login field wrong sybols!!"> In login field wrong sybols!!!</font>';
		}
		elseif(empty($_POST['password'])) {
			echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Enter password !"> Enter passwoed !</font>';
		}
		elseif (!preg_match("/\A(\w){6,20}\Z/", $_POST['password'])) {
			echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Password is too short!"> Password is too short! </font>';
		}
		elseif(empty($_POST['password2'])) {
			echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Re-enter password!"> Re-enter password!</font>';
		}
		elseif($_POST['password'] != $_POST['password2']) {
			echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Enter 2correct password"> Enter 2correct password"!</font>';
		}
		elseif(empty($_POST['email'])) {
			echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Enter E-mail!">Enter E-mail! </font>';
		}
		elseif (!preg_match("/^[a-zA-Z0-9_\.\-]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/", $_POST['email'])) {
			echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Wrong email format!"> Wrong email format! </font>';
		}
		 
		else{
			$login = $_POST['login'];
			$password = $_POST['password'];
			$mdPassword = md5($password);
			$password2 = $_POST['password2'];
			$email = $_POST['email'];
			$rdate = date("d-m-Y в H:i");
			$name = $_POST['name'];
			$lastname = $_POST['lastname'];  
			  
			$query = ("SELECT id FROM users WHERE login='$login'");
			$sql = mysql_query($query) or die(mysql_error());
			
	if (mysql_num_rows($sql) > 0) {
				echo '<font color="red"><img border="0" src="img/error.gif" align="middle" alt="Username is already exist!"> Username is already exist!s</font>';
			}
	else {
				$query2 = ("SELECT id FROM users WHERE email='$email'");
				$sql = mysql_query($query2) or die(mysql_error());
	if (mysql_num_rows($sql) > 0){
					echo '<font color="red"><img border="0" src="img/error.gif"  alt="User with this email already exist!"> User with this email already exist!</font>';
				}
else{
					$query = "INSERT INTO users (login, password, email, reg_date, name_user, lastname )
							  VALUES ('$login', '$mdPassword', '$email', '$rdate', '$name', '$lastname')";
					$result = mysql_query($query) or die(mysql_error());;
					echo '<font color="green"><img border="0" src="ok.gif" align="middle" alt="Wellcome, youre successfully registered!"> Wellcome, youre successfully registered!</font><br><a href="index.php">Go to panel</a>';
					
	
	}
}
}
    }
?>