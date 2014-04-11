<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>View Posts</title>	
</head>
<body>
	<?php include('menu.php');?>

	<?php if (!empty($posts)) : ?>
		<?php foreach($posts as $post) : ?>
			<h2><?=anchor(base_url().'post/viewPost/'.$post->id,$post->title)?></h2>
			Author: <?=$post->creator?><br />
			Date: <?=convertDateTimetoTimeAgo($post->date)?>
		<?php endforeach; ?>
	<?php else : ?>
		<h1>No Post</h1>
	<?php endif; ?>
</body>
</html>