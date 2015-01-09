<?php

class Admin_controller extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->data['meta_title'] = 'My Awesome Site';
		$this->load->helper('form');
		$this->load->library('form_validation');
		 $this->load->model('user_m');
	}
}