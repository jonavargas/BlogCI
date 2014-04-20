<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/style.css'); ?>>
	<meta charset="utf-8">
	<title>Home</title>	
</head>
<body id='back'>
	<?php include('menu.php');?>

	<?php if (!empty($posts)) : ?>
		<?php foreach($posts as $post) : ?>
			<h2><?=anchor(base_url().'post/viewPost/'.$post->id,$post->title)?></h2>
			Content: <?=$post->content?><br />
			Date: <?=$post->date?>
		<?php endforeach; ?>
	<?php else : ?>
		<h1>No Post</h1>
	<?php endif; ?>
</body>
</html>