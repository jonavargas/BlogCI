<script type="text/javascript" src="<?=base_url()?>js/moment.js"></script>

<?php 
	if ($this->session->userdata('is_logged_in')){
		echo ' | ';
		echo anchor(base_url()."user/logout/", "Logout");
		echo ' | ';
		echo anchor(base_url(), 'Home');
		echo ' | ';
		echo anchor(base_url().'post/newPost/', 'New Post');		
		echo ' | ';
		echo anchor(base_url().'comments/disable/', 'Disable Comments');
		}	
	elseif (!$this->session->userdata('is_logged_in')){
		echo ' | ';
		echo anchor(base_url(), 'Home');
		echo ' | ';
	}
?>