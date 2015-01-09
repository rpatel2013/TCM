<?php	
		
		class User extends Admin_Controller {

			function __construct(){
				parent::__construct();				
			}

			function login(){
			//	$this->data['subview'] = 'index.php/admin/user/login';

			 $this->data['emailAR']  = array('name' => 'email' ,
             						 'id' => 'Email',
             						 'class'=>'form-control top',
             						 'type' => 'text',
             						 'placeholder'=>'Email'
              );

              $this->data['passwordAR']  = array('name' => 'password' ,
              						 'type'=>'password',
             						 'id' => 'password',
             						 'class'=>'form-control bottom',
             						 'placeholder'=>'Password'
              ); 

              $this->data['submitButton'] = array('name' => 'submit' ,
              						 'type'=>'submit',
              						 'value'=>'Log In',
             						 'id' => 'submit',             						 
             						 'class'=>'btn btn-lg btn-primary btn-block'
			  );
              
              $rules = $this->user_m->rules;
              $this->form_validation->set_rules($rules);

              if($this->form_validation->run() == TRUE){
              	//Login
              }

				$this->load->view('admin/user/login', $this->data);
			}

		}