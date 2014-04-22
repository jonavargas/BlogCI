<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/style.css'); ?>>
	<meta charset="utf-8">	
	<title>Edit Posts</title>
</head>
<header>
	<?php include('menu.php');?>
</header>
<body>
	<div class='mant'>
		
		<?=form_open(base_url().'mantPost/getPost/')?>

		<form name="tabla" action="http://localhost/BlogCodeIgniter/mantPost/getPost" method="POST">
		<tbody>
			<?php foreach ($post as $data):?>
			<div>
				<div class='0labelPost'><b>Author: </b></div>	
				<div class='0inputAuthor'><b><?=$data->creator?></b></div>
				<div class='0labelPost'><b>Title: </b></div>
				<div class='0inputStatus'><b><?=$data->title?></b></div>
				<div class='0labelPost'><b>Comment: </b></div>
				<div class='0inputComment'><b><?=$data->content?></b></div>	
				<div class='0inputDate'><b><?=$data->date?></b></div>
				<div><input type="radio" name="edit" value= '<?=$data->id?>'/></div>
				<div class='0delete'><?php echo anchor(base_url().'mantPost/delete/'. $data->id,'Delete') ?></div>
				<div class='0acept'><input type="submit" name="button" value="Edit" /></div>
			</div>	
		<?php endforeach;?>
	</div>
	</tbody>
	</table>	
	</form>
</body>
</html>