<?php include('header.php');?>


        <!-- Header Start -->
        <div class="container-fluid header  p-0 " style="background:#991403;">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4 text-white">Contact</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('KadamController/index');?>" class="text-white">Home</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page"><a href="<?php echo base_url('KadamController/contact');?>" class="text-white">Contact</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="<?php echo base_url();?>img/contactslider.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->


 


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3 text-primary">Contact Us</h1>
                    
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="bg-light rounded p-3">
                                    <div class="d-flex align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-map-marker-alt text-primary"></i>
                                        </div>
                                        <span>Kadampuzha Devaswom, P.O.Kadampuzha, Malappuram Dist. 676553, Kerala, South India.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                                <div class="bg-light rounded p-3">
                                    <div class="d-flex align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-envelope-open text-primary"></i>
                                        </div>
                                        <span>info@example.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                                <div class="bg-light rounded p-3">
                                    <div class="d-flex align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-phone-alt text-primary"></i>
                                        </div>
                                        <span>+44 7452 324241</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.274353506692!2d76.03991687377733!3d10.942636256108537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7b5cc44960a7f%3A0x70b015f0f475638f!2sKadampuzha%20Bhagavathy%20Devaswom%20Guest%20House!5e0!3m2!1sen!2sin!4v1706516971832!5m2!1sen!2sin" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6">
                        <h6 style="color:green;"> <?php
                                        echo $this->session->flashdata('email_sent_success');
                                        
                                        
                                        
                        ?></h6>
                        <h6 style="color:red;"> <?php
                                        echo $this->session->flashdata('email_sent_error');
                                        
                                        
                                        
                        ?></h6>
                             <h6 style="color:red;"> <?php
                                        
                                        echo $this->session->flashdata('error');
                                        echo validation_errors(); 
                                        
                                        
                            ?></h6>
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            
                            <form action="<?php echo base_url('KadamController/send_email/');?>" method="post">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" name="mobile_no" class="form-control" id="mobile_no" placeholder="Mobile Number">
                                            <label for="subject">Mobile Number</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>

                                    <div class="col-5">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


<?php include('footer.php');?>