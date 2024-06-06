<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include('header.php');?>

    <!-- About Start -->
    <div class="container-fluid">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-fluid rounded" src="<?php echo base_url();?>img/court.jpg" alt="">
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
                    
                    <h1 class="mb-4">Court of appeal</h1>
                    <p align="left">This is a court that hears appeals from lower courts or tribunals on points of law. It can uphold, reverse, or vary the decision of the lower court or tribunal, or remit the case back to them for reconsideration. There are different courts of appeal for different jurisdictions in the UK, such as the Court of Appeal in England and Wales, the Court of Session in Scotland, and the Court of Appeal in Northern Ireland. Some types of immigration decisions can be appealed to the court of appeal, such as those made by the Special Immigration Appeals Commission or the Upper Tribunal (Immigration and Asylum Chamber). However, the appellant must apply within a certain time limit and can only appeal on a point of law .</p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
      <div class="container-fluid">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-fluid rounded" src="<?php echo base_url();?>img/br.jpg" alt="">
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
                    
                    <h1 class="mb-4">British nationality</h1>
                    <p align="left">This is the legal status of being a citizen of the United Kingdom. There are different ways to acquire or lose British nationality, such as by birth, descent, naturalisation, registration, or deprivation. British nationality gives the holder certain rights and responsibilities, such as the right to live and work in the UK, the right to vote, and the duty to obey the law. Some decisions to refuse or revoke British nationality can be appealed to the Special Immigration Appeals Commission or the court of appeal, depending on the grounds of the decision .</p>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
      <div class="container-fluid">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-fluid rounded" src="<?php echo base_url();?>img/imm.jpg" alt="">
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
                    
                    <h1 class="mb-4">Immigration appeals</h1>
                    <p align="left">These are legal challenges to immigration decisions made by the Home Office or other authorities. There are different types of immigration appeals, such as asylum appeals, human rights appeals, deportation appeals, and entry clearance appeals. There are also different bodies that hear immigration appeals, such as the First-tier Tribunal (Immigration and Asylum Chamber), the Upper Tribunal (Immigration and Asylum Chamber), the Special Immigration Appeals Commission, and the court of appeal. The appellant must follow the relevant immigration appeals procedure and meet the eligibility requirements, such as the grounds of appeal, the time limit, and the evidence .</p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


       <!-- Appointment Start -->
    <div class="container-fluid">
        <div class="container py-5">
            <div class="bg-appointment rounded">
                <br>
                    <h6 style="color:green;text-align:center;"> <?php
                            echo $this->session->flashdata('enquiry_email_sent');
                            
                            
                            
                ?></h6>
                 <h6 style="color:red;text-align:center;"> <?php
                            
                            echo $this->session->flashdata('error');
                            echo validation_errors(); 
                            
                            
                ?></h6>
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-6 py-5">
                        <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                            <h1 class="text-center text-white mb-4">Enquiry Now!</h1>
                            <form method="post" action="<?php echo base_url('Immigration_Controller/send_enquiry_email');?>">
                                <div class="form-group">
                                    <input type="text" name="your_name" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" name="your_email" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="your_mobile_no" class="form-control border-0 p-4" placeholder="Your Mobile No" required="required" />
                                </div>
                                <div class="form-group">
                                    <textarea name="your_message" class="form-control border-0 p-4" rows="6" id="message" placeholder="Message" required="required"></textarea>
                                </div>
                                
                                <div>
                        <div style="text-align: center;">
        
                        <input type="submit" name="btn_submit" class="btn btn-primary py-3 px-5 mt-2" value="Submit">

                        </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->




    <?php include('footer.php');?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url();?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?php echo base_url();?>lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?php echo base_url();?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="<?php echo base_url();?>mail/jqBootstrapValidation.min.js"></script>
    <script src="<?php echo base_url();?>mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url();?>js/main.js"></script>
</body>

</html>