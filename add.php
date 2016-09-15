<?php
include("bd.php");
include("header.php");
?>

<?php

session_start();

$_SESSION['id']  = true;
//if loggin success
if ($_SESSION['login']){
	?>
	
<p> Information </p>
<p> <form name="forma" action="save.php" method="post">
First name: <br><input name="name" type="text"><br>
Last name: <br><input name="lastname" type="text"><br>
Email: <br><input name="email" type="text"><br>
Home <input name="contacttype" type="radio" value="Home"><br>
Work <input name="contacttype" type="radio" value="Work"><br>
Cell <input name="contacttype" type="radio" value="Cell"><br>
Adress1: <br><input name="adress1" type="text"><br>
Adress2: <br><input name="adress2" type="text"><br>
City: <br><input name="city" type="text"><br>
State: <br><input name="state" type="text"><br>
ZIP: <br><input name="zip" type="text"><br>
Country: <br><input name="country" type="text"><br>
ADD DATE SECTION!!!!!!!!!!!!!!!!<sbr><p>
<input name="submit" type="submit" value="Done"> 
</form>


<?php

}else echo 'dont login';//.




?>



