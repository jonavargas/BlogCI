<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/style.css'); ?>>
	<meta charset="utf-8">
	<title>New Post</title>	
</head>
<body>
	<?php include('menu.php');?>

	<?=form_open(base_url().'post/insertPost/')?>
	<p>Title: <?=form_input('title')?></p>
	<p>Content: <?=form_textarea('content')?></p>
	<?=form_submit('submit', 'Create Post')?>
</body>
</html>