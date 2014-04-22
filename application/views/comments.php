<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<meta charset="utf-8">
	<title><?=$post->title?></title>	
</head>
<body>
	<?php include('menu.php');?>

	<div class='divComPost'>
		<div class='titleComPost'><b><h2><?=$post->title?></h2></b></div>
		<div class='contentComPost'><b><?=$post->content?></b></div>
		<div class='authorComPost'><b>Author:</b></div> 
		<div class='creatorComPost'><b><?=$post->creator?></b></div>
		<div class='postedComPost'><b>Posted:</b></div> 
		<div class='dateComPost'><b><?=$post->date?></b></div>
	</div>
		
	<?=form_open(base_url().'comments/comment/')?>

	<div class='divCommentPost'>
		<div class='authorCommPost'><b/>Author: <?=form_input('creator')?><b/></div>
		<div class='yourCommentPost'><b>Your comment: </b></div>
		<?=form_hidden('id_post', $this->uri->segment(3))?>
		<div class='comCommentPost'><b><?=form_textarea('comment')?></b></div>
		<div class='bntCommentPost'><b><?=form_submit('submit','Comment')?></b></div>
	</div>
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
			echo '<div class="noComments"><h3>No Comments!</h3></div>';
	?>
</body>
</html>