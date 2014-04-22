<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/style.css'); ?>>
	<meta charset="utf-8">
	<title>Home</title>	
</head>
<header>
	<?php include('menu.php');?>
	</div>
			<?php foreach ($data as $info):?>
		<div class='title'><?php echo $info->title ?></div>			
		<div class='biography'>			
				<section >					
					<img class="picture" src="assets/img/jon.jpg"/>
					<div class='info'><b>Biography: </b></div>
					<div class='bioText'><?php echo $info->bio ?></div>
					<div class='info'><b>Phone: </b></div>
					<div class='phoneText'><?php echo $info->phone ?></div>
					<div class='info'><b>Email: </b></div>
					<div class='emailText'><?php echo $info->email ?></div>
				</section>
			
			 <section class="social"> 
				<a href=<?php echo $info->facebook ?> target="_blank"><img class="soc" src="assets/img/facebook.PNG"/></a>
				<a href=<?php echo $info->twitter ?> target="_blank"><img class="soc" src="assets/img/twitter.PNG"/></a>				
				<a href=<?php echo $info->gplus ?> target="_blank"><img class="soc" src="assets/img/gplus.PNG"/></a>
				<a href=<?php echo $info->youtube ?> target="_blank"><img class="soc" src="assets/img/youtube.PNG"/></a>
			</section>
			<?php 
				endforeach;
			?>
		</div>
</header>
<body id='back'>	
		<div class='divMainPost'>
			<?php if (!empty($posts)) : ?>
				<?php foreach($posts as $post) : ?>

					<section class='divPost'>
						<div class='titlePost'><h2><?=anchor(base_url().'post/viewPost/'.$post->id,$post->title)?></h2></div>
						<div class='contentPost'><b><?=$string = $post->content?></b></div>								
						<div class='datePost'><b><?=$post->date?></b></div>
					</section>
				<?php endforeach; ?>
			<?php else : ?>
				<h1>No Post</h1>
			<?php endif; ?>			
</body>
</html>