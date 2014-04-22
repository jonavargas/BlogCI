<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/style.css'); ?>>
	<meta charset="utf-8">	
	<title>Maintenance</title>
</head>
<header>
	<?php include('menu.php');?>
</header>
<body>
	<div class='mant'>		
		<?=form_open(base_url().'mantComments/getMessages/')?>

		<form name="tabla" action="http://localhost/BlogCodeIgniter/mantComments/getMessages" method="POST">
		<tbody>
			<div id="pag">
	
		        <?php if($comments){ ?>


					<?php foreach ($comments as $comment):?>
					<?php if($comment->status == 'disable'){ ?>
					<div class='commentDis'>
						<div class='disable'><b>Disable Comments</b></div>					
						<div class='label'><b>Author: </b></div>	
						<div class= 'inputAuthor'><b><?=$comment->creator?></b></div>
						<div class='label'><b>Status: </b></div>
						<div class='inputStatus'><b><?=$comment->status?></b></div>
						<div class='label'><b>Comment: </b></div>
						<div class='inputComment'><b><?=$comment->comment?></b></div>	
						<div class='inputDate'><b><?=$comment->date?></b></div>
						<div class='radio'><input type="radio" name="edit" value="<?=$comment->id?>"/></div>
						<div class='delete'><?php echo anchor(base_url().'mantComments/delete/'.$comment->id,'Delete') ?></div>
						<div class='edit'><input type="submit" name="button" value="Edit" /></div>
					</div>
							
					<?php }elseif($comment->status == 'enable'){ ?>		
					<div class='commentEna'>
						<div class='enable'><b>Enable Comment</b></div>
						<div class='label'><b>Author: </b></div>	
						<div class= 'inputAuthor'><b><?=$comment->creator?></b></div>
						<div class='label'><b>Status: </b></div>
						<div class='inputStatus'><b><?=$comment->status?></b></div>
						<div class='label'><b>Comment: </b></div>
						<div class='inputComment'><b><?=$comment->comment?></b></div>	
						<div class='inputDate'><b><?=$comment->date?></b></div>
						<div class='radio'><input type="radio" name="edit" value="<?=$comment->id?>"/></div>	
						<div class='delete'><?php echo anchor(base_url().'mantComments/delete/'.$comment->id,'Delete') ?></div>
						<div class='edit'><input type="submit" name="button" value="Edit" /></div>
					</div>		
					<?php }?>

				<?php endforeach;?>
				
				</div>

				<?php $pag = $this->pagination->create_links(); ?>
		            <div class='pagi'><?= $pag?> </div>
		        <?php } ?>
		</div>
	</tbody>
	</table>	
	</form>
</body>
</html>