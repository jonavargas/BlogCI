<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/style.css'); ?>>
	<meta charset="utf-8">
	<title>Login</title>
	<?php include('menu.php');?>	
	<?=form_open(base_url().'user/validate/')?>	
</head>
<body>
	
	<div class='login'>
		<?php echo (isset($error)) ? "<div class='error'><b>Incorrect username or password!!!</b></div>" : '';?>
		<p><b><div class='log'>Username:</b><?=form_input('username')?></p></div>
		<p><b><div class='log'>Password: </b><?=form_password('password')?></p></div>
		<div class='but'><?=form_submit('submit', 'Login')?></div>
	</div>
</body>
</html>
