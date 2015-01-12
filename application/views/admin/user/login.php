<?php $this->load->view('admin/components/page_head'); ?>
<body class="login">
    <div class="form-signin">
      <div class="text-center">
        <img src="<?php echo base_url('assets/img/Technace_logo.png');?>" alt="Technace">
      </div>
      <hr>
      <div class="tab-content">
        <div id="login" class="tab-pane active">
          <?php echo validation_errors(); ?>
                    
          <?php echo form_open(); ?>
            <p class="text-muted text-center">
              Enter your username and password
            </p>             
             <?php echo form_input($emailAR); ?>  

             <?php echo form_input($passwordAR); ?>  
            
            <div class="checkbox">
              <label>
                <input type="checkbox">Remember Me
              </label>
            </div>
            
            <?php echo form_submit($submitButton); ?>  

          <?php echo form_close(); ?>
        </div>
      </div>


    </div>
    <?php $this->load->view('admin/components/page_tail'); ?>