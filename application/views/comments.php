<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$post->title?></title>	
</head>
<body>
	<?php include('menu.php');?>

	<h2><?=$post->title?></h2>
	<p><?=$post->content?></p>
	Author: <?=$post->creator?><br />
	Posted: <?=$post->date?><br />
		
	<?=form_open(base_url().'comments/comment/')?>
	<br />Author: <?=form_input('creator')?><br />
	<br />
	Your comment: 
	
	<?=form_hidden('id_post', $this->uri->segment(3))?>
	<?=form_textarea('comment')?>
	<?=form_submit('submit','Add Comment')?>
	<?=form_close()?>

	<?php
		if(!empty($comments)){
			echo '<h3>Comments</h3>';
			foreach($comments as $comment)        	
				if($comment->status == 'enable'){			
					echo '<hr /> <h4> Author: '.$comment->creator.'</h4>'.
					$comment->comment.'<br />'.
					'<br />'.$comment->date . '<hr />';
				}
		}
		else
			echo '<h3>No Comments!</h3>';
	?>
</body>
</html>