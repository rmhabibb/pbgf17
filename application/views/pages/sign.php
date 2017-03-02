    <?php
    $logged = $this->session->userdata('user_data');
     
      if (isset($logged)){
         $user_role = $this->session->userdata['user_data']['role'];  
          if ($user_role == 'Admin'){
               redirect('admin'.'/');
          } else if ($user_role == 'Peserta'){
               redirect('peserta'.'/');
             } else if ($user_role == 'Panitia'){
               redirect('panitia'.'/');
             }
      } 
  ?> 
       <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="http://www.unsri.ac.id/" target="_blank"><img src="<?php echo base_url(); ?>assets/img/team/unsri.png" width="50px" style="margin-top: 0px; padding-top: 0px"></a>
                <a class="navbar-brand page-scroll" href=""><img src="<?php echo base_url(); ?>assets/img/team/bem.png" width="50px"></a>
                <a class="navbar-brand page-scroll" href=""><img src="<?php echo base_url(); ?>assets/img/team/ibgf.png" width="50px"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href=""></a>
                    </li> 
                    <li>
                        <a class="page-scroll" href="<?php echo base_url();?>"><b>Home</b></a>
                    </li> 
                    <li>
                        <a class="page-scroll" href="<?php base_url();?>sign"><b>Login/Daftar</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <br><br><br>
    <section>
        <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Login</a></li>
        <li class="tab "><a href="#signup">Daftar</a></li>
      </ul>
      
      <div class="tab-content">
       <div style="margin-bottom: 3%;">
        <?php  
          $msg = $this->session->flashdata('msg');
          if(isset($msg)){
            echo $msg;
          }
        ?>
      </div>
       <div id="login">    
         
          <?php 
          echo form_open('login/user_validate');
          ?>
            <div class="field-wrap">
              <label>
                ID/NIM<span class="req">*</span>
              </label>
            <input  type="text" name="username" required value="">
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <?php 
                echo form_password('password');
            ?> 
          </div> 
          
            <button type="submit" class="button button-block"/>login</button>
          
           <?php 
          echo form_close();
          ?>
        </div>
        <div id="signup">    
          
           <?php 
          echo form_open('Login/create_user');
          ?>
            <div class="field-wrap">
              <label>
                NIM<span class="req">*</span>
              </label>
            <input type="text" name="username" required value="">
          </div>
          
          <div class="field-wrap">
            <label>
              Password (Minimal 8 Karakter)<span class="req">*</span>
            </label>
            <input  type="password" name="password" minlength="8"  required value="">
          </div> 
          
          <div class="field-wrap">
           <label>
              Konfirmasi Password<span class="req">*</span>
            </label>
            <input  type="password" name="repassword"  required value="">
          </div> 
          
          <button type="submit" class="button button-block"/>Submit</button>
          
          <?php 
          echo form_close();
          ?>
        </div>
        
       
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    </section>
  