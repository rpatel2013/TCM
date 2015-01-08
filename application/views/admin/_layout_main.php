<?php $this->load->view('admin/components/page_head'); ?>
<body>
    
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo site_url('index.php/admin/dashboard') ?>"><?php echo $meta_title ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo site_url('index.php/admin/dashboard') ?>">Dashboard<span class="sr-only">(current)</span></a></li>
        <li><?php echo anchor('index.php/admin/page', 'Pages') ?></li>
        <li><?php echo anchor('index.php/admin/user', 'users') ?></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <div class="container">
      <div class="row">
        <!-- main Clolumn -->
          <div class="col-md-9">
            <section>
              <h2>Page Name!</h2>  
            </section>
            
          </div>
          <!-- Side bar -->
          <div class="col-md-3">
            <?php echo mailto('rpatel@live.ca', '<i class="glyphicon glyphicon-user"></i> rpatel@live.ca'); ?> <br />
            <?php echo anchor('index.php/admin/user/logout', '<i class="glyphicon glyphicon-off"></i> Logout'); ?>
          </div>
      </div>
    </div>

<?php $this->load->view('admin/components/page_tail'); ?>