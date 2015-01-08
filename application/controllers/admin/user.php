<?php	
		
		class User extends Admin_Controller {

			function __construct(){
				parent::__construct();				
			}

			function login(){
			//	$this->data['subview'] = 'index.php/admin/user/login';
				$this->load->view('admin/user/login');
			}

		}