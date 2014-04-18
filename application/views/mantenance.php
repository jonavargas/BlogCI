<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">	
</head>
<body>
	<?php include('menu.php');?>

	<?=form_open(base_url().'mantComments/accion/')?>
	<form name="tabla" action="http://localhost/BlogCodeIgniter/mantComments/accion" method="POST">
	<table border="solid">
	<thead>
	<tr>
	<th></th>
	<th>Author</th>
	<th>Status</th>
	<th>Comment</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($comments as $comment):?>

	<tr>
	<td><input type="radio" name="edit" value="<?=$comment->id?>"/></td>
	<td><?=$comment->creator?></td>
	<td><?=$comment->status?></td>
	<td><?=$comment->comment?></td>
	</tr>

	<?php endforeach;?>
	</tbody>
	</table>
	<input type="submit" value="Editar" />
	</form>

</body>
</html>