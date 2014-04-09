<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>New Post</title>	
</head>
<body>
	<?php include('menu.php');?>

	<?=form_open(base_url().'home/insertPost/')?>
	<p>Title: <?=form_input('title')?></p>
	<p>Content: <?=form_textarea('content')?></p>
	<?=form_submit('submit', 'Create Post')?>
</body>
</html>