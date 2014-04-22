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
	<div class='newPost'>
		<div class='titleNewPost'><b>Title: <?=form_input('title')?></b></div>
		<div class='lblContentNewPost'><b>Content:</b></div>
		<div class='contentNewPost'><?=form_textarea('content')?></div>
		<div class='btnNewPost'><?=form_submit('submit', 'Create Post')?></div>
	</div>
</body>
</html>