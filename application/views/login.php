<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>	
</head>
<body>
	<?php include('menu.php');?>
	
	<?=form_open(base_url().'users/validateLogin/')?>
	<?php echo (isset($error)) ? '<p>Incorrect username or password!!!</p>' : '';?>
	<p>Username: <?=form_input('username')?></p>	
	<p>Password: <?=form_password('password')?></p>
	<?=form_submit('submit', 'Login')?>
</body>
</html>