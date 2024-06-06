<?php $this->load->view('header');?>
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
                
               <div class="login_section">
                     <?php $error_msg=$this->session->flashdata('error_msg');
                      if($error_msg!=""){ ?>
                     <div class="alert alert-danger">
                     <?php echo $error_msg;?>
                    </div>
                     <?php } ?>
                  <div class="logo_login">
                     <div class="center">
                     
                    <h1 style="color:white;">Login</h1>
                   
                        
                     </div>
                      <div class="center">
                      <?php $fr_msg=$this->session->flashdata('fr_msg');
                      if($fr_msg!=""){ ?>
                     <div class="alert alert-success">
                     <?php echo $fr_msg;?>
                    </div>
                     <?php } ?>
                        
                     </div>
                  </div>
                  <div class="login_form">
                     <form method="post" action="<?php echo base_url('AdminController/admin_login_done')?>" autocomplete="off">
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Email Address</label>
                              <input type="text" name="username" placeholder="Username" />
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="password" placeholder="Password" />
                           </div>
                           <div class="field">
                             
                             
                              <!--<a class="forgot" data-toggle="modal" data-target="#myModal">Forgotten Password?</a>-->
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt" >Log In</button>

                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade" id="myModal">
            <div class="modal-dialog">
               <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                     <h4 class="modal-title">Forgot Password</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                     <div class="login_form modal-body">
                     <form method="post" action="<?php echo base_url('AdminController/recover_password/');?>"autocomplete="off">
                            <div class="field">
                              
                              <input type="text" name="email" placeholder="Enter Email" value=""/>
                               <br><br> 

                           </div>
                           
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt" >Send</button>

                           </div>
                        
                     </form>
                  </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
      <!-- jQuery -->
      <script src="<?php echo base_url();?>js/jquery.min.js"></script>
      <script src="<?php echo base_url();?>js/popper.min.js"></script>
      <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="<?php echo base_url();?>js/animate.js"></script>
      <!-- select country -->
      <script src="<?php echo base_url();?>js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="<?php echo base_url();?>js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="<?php echo base_url();?>js/custom.js"></script>
   </body>
</html>