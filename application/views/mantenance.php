<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/style.css'); ?>>
	<meta charset="utf-8">	
</head>
<body class='mant'>
	<?php include('menu.php');?>

	<?=form_open(base_url().'mantComments/getMessages/')?>
	<form name="tabla" action="http://localhost/BlogCodeIgniter/mantComments/getMessages" method="POST">
	<tbody>
	<?php foreach ($comments as $comment):?>
	<?php if($comment->status == 'disable'){ ?>
		<div><b>Disable Comments</b><br><br>	
		<br><div><b>Author: </b>	
		<div><?=$comment->creator?></div>
		<br><div><b>Status: </b>
		<div><?=$comment->status?></div><br>
		<br><div><b>Comment: </b>
		<div><?=$comment->comment?></div><br>	
		<b><th>Date: </th></b>
		<?=$comment->date?></div><br>
		<br><div><b>Edit</b><input type="radio" name="edit" value="<?=$comment->id?>"/>	
		<div><?php echo anchor(base_url().'mantComments/delete/'.$comment->id,'Delete') ?></div>
		<input type="submit" name="button" value="Accept" /></div><br><hr/><hr/>
		</div>
	<?php }elseif($comment->status == 'enable'){ ?>
		<div><b>Enable Comment</b><br><br>	
		<br><div><b>Author: </b>	
		<div><?=$comment->creator?></div>
		<br><div><b>Status: </b>
		<div><?=$comment->status?></div><br>
		<br><div><b>Comment: </b>
		<div><?=$comment->comment?></div><br>	
		<b><th>Date: </th></b>
		<?=$comment->date?></div><br>
		<br><div><b>Edit</b><input type="radio" name="edit" value="<?=$comment->id?>"/>	
		<div><?php echo anchor(base_url().'mantComments/delete/'.$comment->id,'Delete') ?></div>
		<input type="submit" name="button" value="Accept" /></div><br><hr/><hr/>
		</div>
	<?php }?>
	<?php endforeach;?>
	</tbody>
	</table>	
	</form>
</body>
</html>