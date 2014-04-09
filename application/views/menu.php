<script type="text/javascript" src="<?=base_url()?>js/moment.js"></script>

<?php 
	if ($this->session->userdata('is_logged_in'))
		echo 'Hello, '.$this->session->userdata('name').' ('. anchor(base_url()."users/logout/", "logout") .') | ';
	else
		echo anchor(base_url().'users/signin/','Login').' | ';
	echo anchor(base_url().'home/post/', 'New Post');
	echo ' | ';
	echo anchor(base_url(), 'Home');
?>