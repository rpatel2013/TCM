<?php	
		
		class User extends Admin_Controller {

			function __construct(){
				parent::__construct();				
			}

			function login(){
                $dashboard = 'admin/dashboard';
                $this->user_m->loggedin() == FALSE ||redirect($dashboard);

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
                  if($this->user_m->login() == TRUE){
                      redirect($dashboard);
                  }
                  else{
                      $this->session->set_flashdata('error', 'That email/password combination does not exists');
                      redirect('admin/user/login','refresh');
                  }
              }

				$this->load->view('admin/user/login', $this->data);
			}

           public function logout(){
               $this->user_m->logout();
               redirect('admin/user/login');
           }

		}