<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">	
</head>
<body>
	<?php include('menu.php');?>
	<?=form_open(base_url().'comments/disable/')?>

	<?php
		if(!empty($comments)){
			echo '<h3>Comments</h3>';
			foreach ($comments as $key => $comment)        
				if($comment['status'] == 'disable'){			
					echo '<hr /> <h4> Author: '.$comment['creator'].'</h4>'.
					$comment['comment'].'<br />'.
					$comment['id_post'].'<br />'.
					'<br />'.$comment['date'] .'<hr />';
				}
				else if($comment['status'] == 'enable'){		
					/// podria agregar aqui los comentarios activos y asociarlos a un post
					//y asignarle un color que destaque que estan aprobados	
					//Ordenar los comentarios por id del post y encerrarlos en divs con los titulos de cada post

				}					
		}
		else
			echo '<h3>No Comments!</h3>';				
	
	?>
	
</body>
</html>