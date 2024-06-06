<?php $this->load->view('header');?>
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
                        <div class="user_img"><img class="img-responsive" src="<?php echo base_url();?>images/logo/admin_logo.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6><?php echo $user['username'];?></h6>
                           
                        </div>
                     </div>
                  </div>
               </div>
              <?php $this->load->view('sidebar');?>
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
                            
                          
                           
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="right_topbar">
                           <div class="icon_info">
                              <!--<ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>-->
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="<?php echo base_url();?>images/layout_img/user_img.jpg" alt="#" /><span class="name_user"><?php echo $user['username'];?></span></a>
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
               <div class="midde_cont">
                  <div class="container-fluid">
                     <br><br><br><br>
                     <!-- row -->
                     <div class="row">
                        <!-- table section -->
                       
                       

                        <!-- table section -->
                        <div class="col-md-12">
                            <br>
                           <div class=" white_shd full margin_bottom_30">
                               <br>
                             <div class="col-md-4">
                            </div>
                          <?php $msg=$this->session->flashdata('msg');
                          if($msg!=""){ ?>
                          <div class="alert alert-success col-md-4">
                           <?php echo $msg;?>
                          </div>
                           <?php } ?>   
                           
                            <?php $del_msg=$this->session->flashdata('del_msg');
                          if($del_msg!=""){ ?>
                          <div class="alert alert-danger col-md-4">
                           <?php echo $del_msg;?>
                          </div>
                           <?php } ?>          
                         
                              <div class=" white_shd full graph_head">
                         
                                 <div class="heading1 margin_0">
                                    <h2>Display Users</h2>
                                 </div>
                              </div>
                                   <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table table-hover" border="1">
                                       <thead>
                                          <tr>
                                             <th style="color:white;">Sr No.</th>
                                             <th style="color:white;">Given Name</th>
                                             <th style="color:white;">Last Name</th>
                                             <th style="color:white;">Mobile No</th>
                                             <th style="color:white;">Email-Id</th>
                                             <th style="color:white;">PDF Download</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php $i=1;if(!empty($fetch_dt)) { foreach ($fetch_dt->result() as $row){ ?>
                                 <tr>
                                    <td style="color:white;"><?php echo $i++;?></td>
                                    <td style="color:white;"><?php echo $row->given_name;?></td>
                                     <td style="color:white;"><?php echo $row->last_name;?></td>
                                      <td style="color:white;"><?php echo $row->tel_no;?></td>
                                    <td style="color:white;"><?php echo $row->email_id;?></td>
                                    
                                    <td><a class="btn btn-default" href="<?php echo base_url('AdminController/downloadPdf/').$row->id;?>"><i class="fa fa-download"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a class="btn btn-default" href="<?php echo base_url('AdminController/delete_user/').$row->id;?>"><i class="fa fa-trash"></i></a></td>
                                    
                                  
                  
                                  </tr>
                                  <?php } }?>
                                                </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                      
                       
                     </div>
                      <!-- The Modal -->
         <div class="modal fade" id="myModal">
            <div class="modal-dialog">
               <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                     <h4 class="modal-title">Add Lead</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                     <div class="login_form modal-body">
                     <form method="post" action="<?php echo base_url('AdminController/add_lead_done')?>" autocomplete="off">
                            <div class="field">
                              
                              <input type="text" name="username" placeholder="UserName" />
                               <br><br> 

                           </div>
                           <div class="field">
                              
                              <input type="text" name="first_name" placeholder="First Name" />
                               <br><br> 

                           </div>
                           <div class="field">
                              
                              <input type="text" name="last_name" placeholder="Last Name" />
                               <br><br> 

                           </div>
                           <div class="field">
                              
                              <input type="text" name="email" placeholder="Email" />
                              <br><br>
                           </div>
                           <div class="field">
                              
                              <input type="text" name="mobile_no" placeholder="Mobile No" />
                              <br><br>
                           </div>
                           <div class="field">
                             
                              <input type="password" name="password" placeholder="Password" />
                              <br><br> 
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt" >Add</button>

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
                       <!-- The Modal -->
         <?php $i=1;if(!empty($fetch_dt)) { foreach ($fetch_dt->result() as $row){ ?> 
         <div class="modal fade" id="editModal<?php echo $row->id;?>">
            <div class="modal-dialog">
               <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                     <h4 class="modal-title">Edit Lead</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                     <div class="login_form modal-body">
                     <form method="post" action="<?php echo base_url('AdminController/update_lead_done/').$row->id;?>" autocomplete="off">
                            <div class="field">
                              
                              <input type="text" name="username" placeholder="Name" value="<?php echo $row->tel_no;?>" />
                               <br><br> 

                           </div>
                           <div class="field">
                              
                              <input type="text" name="first_name" placeholder="First Name" value="<?php echo $row->email_id;?>" />
                               <br><br> 

                           </div>
                           
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt" >Update</button>

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
          <?php } }?>
                                 <!-- The Modal -->
         <div class="modal fade" id="changeModal<?php echo $user['id'];?>">
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
                     <form method="post" action="<?php echo base_url('AdminController/change_password/').$user['id'];?>" autocomplete="off">
                            <div class="field">
                              <input type="password" name="old_password" placeholder="Old Password" />
                               <br><br> 

                           </div>
                           <div class="field">
                              
                              <input type="password" name="new_password" placeholder="New Password" />
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
   </body>
</html>