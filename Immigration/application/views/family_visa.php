<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include('header.php');?>

    <!-- About Start -->
    <div class="container-fluid">
        <div class="container py-5">
            <div class="row">
               
                <div class="col-lg-12">
                  
                    <h4 class="text-uppercase">Spouse/Partner Visa</h4>
                    <p align="left">This explains how to bring your spouse or partner to the UK if you are a UK citizen, a settled person, or a refugee. It also covers the financial and English language requirements, the duration and extension of the visa, and the route to settlement.</p>
                    
                </div>
                <div class="col-lg-12">
                  <br><br>
                    <h4 class="text-uppercase">Fianc Visa</h4>
                    <p align="left">This describes how to bring your fiancé or proposed civil partner to the UK for up to 6 months to get married or enter into a civil partnership. It also covers the financial and English language requirements, and how to switch to a full spouse/partner visa after marriage or civil partnership.</p>
                    
                </div>
                <div class="col-lg-12">
                  <br><br>
                    <h4 class="text-uppercase">Parent Visa</h4>
                    <p align="left">This outlines how to bring your parent to the UK to care for your child who is under 18 or has lived in the UK for 7 years. It also covers the parental responsibility and financial requirements, the duration and extension of the visa, and the route to settlement.</p>
                    
                </div>
                <div class="col-lg-12">
                  <br><br>
                    <h4 class="text-uppercase">Child Visa: </h4>
                    <p align="left">This details how to bring your child to the UK if you are a UK citizen, a settled person, or a refugee. It also covers the dependency and age requirements, the duration and extension of the visa, and the route to settlement.</p>
                   
                </div>
                <div class="col-lg-12">
                  <br><br>
                    <h4 class="text-uppercase">Adult Dependant Relative Visa</h4>
                    <p align="left">This explains how to bring your adult relative to the UK to receive long-term care from you. It also covers the care and financial requirements, and the unlimited duration of the visa.</p>
                    
                </div>
                <div class="col-lg-12">
                  <br><br>
                    <h4 class="text-uppercase">PBS Dependant Visa</h4>
                    <p align="left">This describes how to bring your partner and children to the UK if you have a visa under the Points Based System, such as a work visa, a study visa, or a business visa. It also covers the relationship and financial requirements, the duration and extension of the visa, and the route to settlement.</p>
                    
                </div>
                <div class="col-lg-12">
                  <br><br>
                    <h4 class="text-uppercase">Ancestry Visa</h4>
                    <p align="left">This outlines how to come to the UK if you are a Commonwealth citizen and have at least one grandparent who was born in the UK. It also covers the work and financial requirements, the duration and extension of the visa, and the route to settlement.</p>
                    
                </div>
                <div class="col-lg-12">
                  <br><br>
                    <h4 class="text-uppercase">Family Reunion Visa</h4>
                    <p align="left">This details how to bring your immediate family members to the UK if you have been granted refugee status or humanitarian protection in the UK. It also covers the eligibility and dependency requirements, the duration and extension of the visa, and the route to settlement.</p>
                   
                </div>
                 <div class="col-lg-12">
                  <br><br>
                    <h4 class="text-uppercase">EUSS Family Permit</h4>
                    <p align="left">This explains how to come to the UK if you are a family member of someone from the EU, Switzerland, Norway, Iceland, or Liechtenstein who has pre-settled or settled status in the UK. It also covers the relationship and residence requirements, the duration of the permit, and how to apply for the EU Settlement Scheme.</p>
                    
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