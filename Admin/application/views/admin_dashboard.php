<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title></title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="<?php echo base_url();?>images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="<?php echo base_url();?>style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="<?php echo base_url();?>css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="<?php echo base_url();?>css/color_2.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="<?php echo base_url();?>css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="<?php echo base_url();?>css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page tables_page">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="<?php echo base_url();?>images/layout_img/user_img.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6><?php echo $user['username'];?></h6>
                          
                        </div>
                      </div>
                  </div>
               </div>
              <?php $this->load->view('sidebar');
              $this->session->flashdata('suc');
              ?>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           &nbsp;&nbsp;
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           &nbsp;&nbsp;
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <div class="logo_section">
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php $msg=$this->session->flashdata('msg');
                          if($msg!=""){ ?>
                          <div class="alert alert-success">
                           <?php echo $msg;?>
                          </div>
                           <?php } ?>

                        </div>
                         <div class="logo_section">
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php $ch_msg=$this->session->flashdata('ch_msg');
                          if($ch_msg!=""){ ?>
                          <div class="alert alert-success">
                           <?php echo $ch_msg;?>
                          </div>
                           <?php } ?>

                        </div>
                         <div class="logo_section">
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <?php $err_msg=$this->session->flashdata('err_msg');
                          if($err_msg!=""){ ?>
                          <div class="alert alert-danger">
                           <?php echo $err_msg;?>
                          </div>
                           <?php } ?>

                        </div>

                         
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <!--<li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>-->
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="<?php echo base_url();?>images/layout_img/user_img.jpg" alt="#" /><span class="name_user"><?php echo $user['username'];?>
                                      </span></a>
                                    <div class="dropdown-menu">

                                      
                                       <a class="dropdown-item" href="<?php echo base_url('AdminController/admin_logout');?>"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont" style="background:#0971b8;">
                  <div class="container-fluid ">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column1">
                        <div class="col-md-3 col-lg-3">
                        </div>
                        <div class="col-md-6 col-lg-6">
                           <div class="full counter_section margin_bottom_30 yellow_bg">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-user"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">User's </p>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                     
                     </div>
                     <br><br> <br><br>
                    <br><br>
                   
                   
                                <!-- The Modal -->
         <div class="modal fade" id="myModal<?php echo $user['id'];?>">
            <div class="modal-dialog">
               <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                     <h4 class="modal-title">Change Password</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                     <div class="login_form modal-body">
                     <form method="post" action="<?php echo base_url('AdminController/change_password/').$user['id'];?>"autocomplete="off">
                            <div class="field">
                              
                              <input type="text" name="old_password" placeholder="Old Password" value=""/>
                               <br><br> 

                           </div>
                           <div class="field">
                              
                              <input type="text" name="new_password" placeholder="New Password" />
                               <br><br> 

                           </div>
                           <div class="field">
                              
                              <input type="password" name="confirm_password" placeholder="Confirm Password" />
                               <br><br> 

                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt" >Change</button>

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
         <!-- end model popup -->
                  </div>
<?php $this->load->view('footer');?>
   </body>
</html>