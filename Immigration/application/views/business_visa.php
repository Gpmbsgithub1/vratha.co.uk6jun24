<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include('header.php');?>

    <!-- About Start -->
    <div class="container-fluid">
        <div class="container py-5">
            <div class="row">
               
                <div class="col-lg-12">
                  
                    <h4 class="text-uppercase">Visit the UK on a business trip</h4>
                    <p align="left">This section explains how to visit the UK for an unpaid business activity, such as attending an interview, meeting or conference. It also covers the eligibility and visa requirements for different types of business visitors, such as experts, academics, entertainers, and sportspeople.</p>
                    
                </div>
                <div class="col-lg-12">
                  <br><br>
                    <h4 class="text-uppercase">Work in the UK</h4>
                    <p align="left">This section covers the different types of work visas available in the UK, such as the Skilled Worker visa, the Graduate visa, the Health and Care Worker visa, and more. It also explains how to check if you need a UK visa, how to apply for one, and how to manage your application.</p>
                    
                </div>
                <div class="col-lg-12">
                  <br><br>
                    <h4 class="text-uppercase">Start-up visa</h4>
                    <p align="left">This section explains the eligibility and application process for the Start-up visa, which allows you to come to the UK to set up an innovative business. It also covers the duration, extension, and switching options for this visa, as well as the fees and documents you need to provide</p>
                    
                </div>
                <div class="col-lg-12">
                  <br><br>
                    <h4 class="text-uppercase">UK Business Visa Requirements </h4>
                    <p align="left">This section provides a comprehensive guide on the various immigration routes and UK business visa requirements for foreign nationals. It also provides contact details and testimonials from previous clients who have used the professional legal services and advice offered by DavidsonMorris</p>
                    <!--<a href="" class="btn btn-primary mt-2">Learn More</a>-->
                </div>
                </div>
        </div>
    </div>
  

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
                        <h6 class="text-uppercase">Our Features</h6>
                        <h1 class="mb-4">Why Choose Us</h1>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">01</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Expertise and experience</h5>
                                <p class="m-0" align="left">Who specialize in different areas of immigration law, such as visa applications, citizenship, asylum, deportation, and more. They have the knowledge and skills to handle complex and challenging immigration cases and provide you with the best possible advice and representation.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">02</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Personalized and comprehensive service</h5>
                                <p class="m-0" align="left">Who can provide you with personalized and comprehensive service that meets your specific needs and goals. They can assess your situation, evaluate your options, and guide you through the entire immigration process.</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">03</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Success rate and reputation</h5>
                                <p class="m-0" align="left">Immigration lawyers in the UK have a track record of success and reputation in the immigration field. They have helped thousands of clients achieve their immigration objectives and overcome various immigration challenges. They have also received positive reviews and ratings from their previous clients and peers. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


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