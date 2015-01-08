<?php $this->load->view('admin/components/page_head'); ?>
<body class="login">
    <div class="form-signin">
      <div class="text-center">
        <img src="<?php echo site_url('assets/img/Technace_logo.png');?>" alt="Technace">
      </div>
      <hr>
      <div class="tab-content">
        <div id="login" class="tab-pane active">
          <?php echo form_open(); ?>
            <p class="text-muted text-center">
              Enter your username and password
            </p>
             <?php $emailAR  = array('name' => 'Email' ,
             						 'id' => 'email',
             						 'class'=>'form-control top',
             						 'placeholder'=>'Email'
              );

              $passwordAR  = array('name' => 'Password' ,
              						 'type'=>'password',
             						 'id' => 'password',
             						 'class'=>'form-control bottom',
             						 'placeholder'=>'Password'
              ); 


              ?>
             <?php echo form_input($emailAR); ?>  

             <?php echo form_input($passwordAR); ?>  
            
            <div class="checkbox">
              <label>
                <input type="checkbox">Remember Me
              </label>
            </div>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          <?php echo form_close(); ?>
        </div>
        <div id="forgot" class="tab-pane">
          <form action="index.html">
            <p class="text-muted text-center">Enter your valid e-mail</p>
            <input type="email" placeholder="mail@domain.com" class="form-control">
            <br>
            <button class="btn btn-lg btn-danger btn-block" type="submit">Recover Password</button>
          </form>
        </div>
        <div id="signup" class="tab-pane">
          <form action="index.html">
            <input type="text" placeholder="username" class="form-control top">
            <input type="email" placeholder="mail@domain.com" class="form-control middle">
            <input type="password" placeholder="password" class="form-control middle">
            <input type="password" placeholder="re-password" class="form-control bottom">
            <button class="btn btn-lg btn-success btn-block" type="submit">Register</button>
          </form>
        </div>
      </div>
      <hr>
      <div class="text-center">
        <ul class="list-inline">
          <li> <a class="text-muted" href="#login" data-toggle="tab">Login</a>  </li>
          <li> <a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a>  </li>
          <li> <a class="text-muted" href="#signup" data-toggle="tab">Signup</a>  </li>
        </ul>
      </div>
    </div>
    <?php $this->load->view('admin/components/page_tail'); ?>