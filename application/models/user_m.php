<?php
class User_m extends MY_Model {

	protected $_table_name = 'users';
	protected $_order_by = 'name';	
	public $rules = array(
		 				array(
		 					'field' => 'email' , 
		 					'label' => 'Email', 
		 					'rules' => 'trim|required|valid_email|xss_clean' ),
		 				array(
		 					'field' => 'password' , 
		 					'label' => 'Password', 
		 					'rules' => 'trim|required' )
		);
	


	function __construct(){
		parent::__construct();
	}

}
