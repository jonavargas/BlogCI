<script type="text/javascript" src="<?=base_url()?>js/moment.js"></script>
<html>	

<head>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/style.css'); ?>>
	<meta charset="utf-8"/>
	<body>
		<header>
			<nav class="menu">
				<ul class="Sectionmenu">
				<?php 
					if ($this->session->userdata('is_logged_in')){
						echo '<li>' . anchor(base_url()."user/logout/", "Logout").'</li>';
						echo '<li>' . anchor(base_url(), 'Home').'</li>';
						echo '<li>' . anchor(base_url().'post/newPost/', 'New Post').'</li>';		
						echo '<li>' . anchor(base_url().'mantComments/maintenance', 'Edit Commets').'</li>';
						echo '<li>' . anchor(base_url().'mantPost/maintenance', 'Edit Posts').'</li>';
					}	
					elseif (!$this->session->userdata('is_logged_in')){
						echo '<li>' . anchor(base_url(), 'Home').'</li>';
					}
				?>  
				</ul>
			</nav>				
		</header>
		
	</header>
	<footer>
	</footer>
</body>
</html> 
</head>



</html>
