<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
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
			echo "<div class='commentPost'><h3>Comments</h3></div>";
			foreach($comments as $comment)        	
				if($comment->status == 'enable'){			
					echo 
					"<div class='commentPostDiv'>" . 
						"<div class='authorCommentPost'><b>Author: </b></div>" .					
						"<div class= 'commentAuthor'><b>" . $comment->creator . "</b></div>" .
						"<div class='comentCommentPost'><b>Comment: </b></div>" .
						"<div class='commentComment'><b>" . $comment->comment . "</b></div>" .
						"<div class='commentDate'><b>" . $comment->date . "</b></div>" .
					'</div>';
				}
		}
		else
			echo '<h3>No Comments!</h3>';
	?>
</body>
</html>