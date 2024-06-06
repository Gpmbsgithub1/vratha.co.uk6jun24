<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include('header.php');?>

    <!-- Features Start -->
    <div class="container-fluid">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="<?php echo base_url();?>img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="feature-text bg-white rounded p-lg-5">
                       
                        <h1 class="mb-4">Visa refusals</h1>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">01</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Administrative review</h5>
                                <p class="m-0" align="left">This is a process where the Home Office UKVI checks the decision to refuse a visa application for any case working errors. A case working error is where the decision maker applied the wrong law, policy, or procedure, or made a factual mistake. An administrative review can only be requested if the decision letter states that it is eligible for this process. The applicant must apply within a certain time limit and pay a fee of £80. The Home Office UKVI will either maintain, withdraw, or amend the decision after reviewing it. </p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">02</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Judicial review</h5>
                                <p class="m-0" align="left">This is a process where the court examines the lawfulness of the decision to refuse a visa application. A judicial review can only be pursued if there is no other adequate remedy, such as an appeal or an administrative review. The applicant must first send a pre-action protocol letter to the Home Office UKVI, stating the grounds for challenging the decision and giving them a chance to respond. If the Home Office UKVI does not change the decision, the applicant must apply for permission to bring a judicial review claim within 3 months of the decision. The court will either grant or refuse permission, and if granted, will hear the case and decide whether to quash, vary, or uphold the decision.</p>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->
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