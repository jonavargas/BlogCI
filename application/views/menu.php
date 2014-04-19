<script type="text/javascript" src="<?=base_url()?>js/moment.js"></script>

<?php 
	if ($this->session->userdata('is_logged_in')){
		echo '<hr />';
		echo ' | ';
		echo anchor(base_url()."user/logout/", "Logout");
		echo ' | ';
		echo anchor(base_url(), 'Home');
		echo ' | ';
		echo anchor(base_url().'post/newPost/', 'New Post');		
		echo ' | ';
		echo anchor(base_url().'mantComments/maintenance', 'Maintenance Comments');
		echo ' | <hr />';
	}	
	elseif (!$this->session->userdata('is_logged_in')){
		echo '<hr />';
		echo ' | ';
		echo anchor(base_url(), 'Home');
		echo ' | <hr />';
	}
?>