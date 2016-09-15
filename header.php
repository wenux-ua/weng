<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style/style.css" /> 

<?php

$panel_url='<a href="panel.php">Control panel</a>';
$log_out='<a href="logout.php">LogOut</a>';
$forgot_pass='<a href="forgotpass.php">Forgot password?</a>';
$reg_now='<a href="register.php">Register now!</a>';

//main navigation
	$main_nav = array(
		"/" => "&#8962;Home",
		"index.php" => "&#10148;Authorization",
		"registration.php" => "&#10004;Registration"
	);
	?>
<div class="header">
	<?php
		echo '<img src="/img/logo_wise.png" alt="logo" >';?> </div>

<div class="main_nav">
<?php 
	foreach ($main_nav as $key => $value) {
		echo "<a href='$key'>$value</a> " ;
	
	}

?>
</div>
<p>
