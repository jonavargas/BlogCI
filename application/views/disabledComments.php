<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$post->title?></title>	
</head>
<body>
	<?php include('menu.php');?>
	

	<?php
		if(!empty($comments)){
			echo '<h3>Comments</h3>';
			foreach($comments as $comment)        	///////////// hacer un if aqui y validar que el comentario no este deshabilitado
				if($comment->status == 'disable'){			/// if validar estado comments
					echo '<hr /> <h4> Author: '.$comment->creator.'</h4>'.
					$comment->comment.'<br />'.
					'<br />'.$comment->date .'<hr />';
				}
				else
					echo '<h3>No Comments!</h3>';							
		}
		else
			echo '<h3>No Comments!</h3>';
	?>
	
</body>
</html>