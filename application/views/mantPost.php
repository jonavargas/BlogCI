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
			<div class='editPost'>
				<div class='authorComPost2'><b>Author: </b></div>	
				<div class='creatorComPost2'><b><?=$data->creator?></b></div>
				<div class='titleComPost2'><b><?=$data->title?></b></div>
				<div class='contentComPost2'><b><?=$data->content?></b></div>	
				<div class='dateComPost2'><b><?=$data->date?></b></div>
				<div class='radio2'><input type="radio" name="edit" value= '<?=$data->id?>'/></div>
				<div class='delete2'><?php echo anchor(base_url().'mantPost/delete/'. $data->id,'Delete') ?></div>
				<div class='acept2'><input type="submit" name="button" value="Edit" /></div>
			</div>	
		<?php endforeach;?>
	</div>
	</tbody>
	</table>	
	</form>
</body>
</html>