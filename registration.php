<?php include("header.php"); ?>

<table>
 
      <form action="verification.php" method="POST">
      <tr>
      <td>Login<font color="red">*</font>:</td>
      <td><input type="text" size="20" name="login" ></td>
      </tr>
      <tr>
      <td>Password<font color="red">*</font>:</td>
      <td><input type="password" size="20" maxlength="20" name="password" ></td>
      </tr>
      <tr>
      <td>Re-enter password<font color="red">*</font>:</td>
      <td><input type="password" size="20" maxlength="20" name="password2"></td>
      </tr>
      <tr>
      <td>E-mail<font color="red">*</font>:</td>
      <td><input type="text" size="20" name="email"></td>
      </tr>
       <tr>
      <td>Name:(optional)</td>
      <td><input type="text" size="20" name="name"></td>
      </tr>
      <tr>
      <td>Last name: (optional)</td>
      <td><input type="text" size="20" name="lastname"></td>
      </tr>
      <tr>
       <td></td>
      <td colspan="2"><input type="submit" value="Register..." name="submit" ></td>
      </tr>
     <br>
      </form>
      </table>
<font face="Verdana" size="4">Field with <font color="red">*</font> is requiered!</font> 
<br><a href='index.php'>Home</a>
 </body>
