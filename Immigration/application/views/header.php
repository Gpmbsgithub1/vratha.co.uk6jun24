<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AO Associates & Solicitors</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url();?>img/logo1.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url();?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary bg-white d-none d-lg-block">
                <a href="<?php echo base_url('Immigration_Controller/index');?>" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                   <h1 class="m-0 display-4 text-primary text-uppercase"><img class="m-0 display-4 text-primary text-uppercase" src="<?php echo base_url();?>img/logo1.png"></h1>
                    <!-- <img class="m-0 display-4 desktop" src="<?php echo base_url();?>img/logo1.png">
                    <img class="m-0 display-4 mobile" src="<?php echo base_url();?>img/logo1.png">-->
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row bg-white border-bottom d-none d-lg-flex">
                    <div class="col-lg-7 text-left">
                        <div class="h-100 d-inline-flex align-items-center py-2 px-3">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <small>info@example.com</small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small>+012 345 6789</small>
                        </div>
                         <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <a href="//api.whatsapp.com/send?phone=91774 386 4551&text=Hi this is Immigration Lawyer how can I help You"><i class="fab fa-whatsapp text-primary mr-2"></i> <small>+774 386 4551</small></a>
                           
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="d-inline-flex align-items-center p-2">
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <!--<a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="//api.whatsapp.com/send?phone=919765435676&text=Hi this is Immigration Lawyer how can I help You">
                                <i class="fab fa-whatsapp"></i>
                            </a>-->
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="<?php echo base_url('Immigration_Controller/index');?>" class="navbar-brand d-block d-lg-none">
                       
                        <h1 class="m-0 display-4 text-primary text-uppercase"><img class="m-0 display-4 text-primary text-uppercase" src="<?php echo base_url();?>img/logo1.png"></h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="<?php echo base_url('Immigration_Controller/index');?>" class="nav-item nav-link active">Home</a>
                            <a href="<?php echo base_url('Immigration_Controller/about');?>" class="nav-item nav-link">About</a>
                            <div class="nav-item dropdown">
                                <a href="<?php echo base_url('Immigration_Controller/family_visa');?>" class="nav-link">Family Visa</a>
                                <!--
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Family Visa</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                    <a href="#" class="dropdown-item">Menu Item 1</a>
                                    <a href="#" class="dropdown-item">Menu Item 2</a>
                                    <a href="#" class="dropdown-item">Menu Item 3</a>
                                </div>-->
                            </div>
                            <div class="nav-item dropdown">
                                <a href="<?php echo base_url('Immigration_Controller/work_visa');?>" class="nav-link">Work Visa</a>
                                <!--<div class="dropdown-menu rounded-0 m-0">
                                    <a href="#" class="dropdown-item">Menu Item 1</a>
                                    <a href="#" class="dropdown-item">Menu Item 2</a>
                                    <a href="#" class="dropdown-item">Menu Item 3</a>
                                </div>-->
                            </div>
                            <div class="nav-item dropdown">
                                <a href="<?php echo base_url('Immigration_Controller/business_visa');?>" class="nav-link">Business Visa</a>
                                <!--<div class="dropdown-menu rounded-0 m-0">
                                    <a href="#" class="dropdown-item">Menu Item 1</a>
                                    <a href="#" class="dropdown-item">Menu Item 2</a>
                                    <a href="#" class="dropdown-item">Menu Item 3</a>
                                </div>-->
                            </div>
                            <a href="<?php echo base_url('Immigration_Controller/visa_refusals');?>" class="nav-item nav-link">Visa Refusals</a>
                            <a href="<?php echo base_url('Immigration_Controller/services');?>" class="nav-item nav-link">Services</a>
                             <a href="<?php echo base_url('Immigration_Controller/application_form');?>" class="nav-item nav-link">Application</a>
                            <a href="<?php echo base_url('Immigration_Controller/contact');?>" class="nav-item nav-link">Contact</a>
                        </div>
                        <!--<a href="" class="btn btn-primary mr-3 d-none d-lg-block">Get A Quote</a>-->
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <!--<img class="position-absolute w-100 h-100" src="<?php echo base_url();?>img/slider.jpg" style="object-fit: cover;">-->
                    <video class="position-absolute w-100 h-100" src="<?php echo base_url();?>img/meeting_vedio.mp4" style="object-fit: cover;" autoplay muted>
                    </video>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Our Expert Immigration lawyer’s</h4>
                            <h5 class="display-2 text-capitalize text-white mb-4">fighting Is for your justice</h5>
                            <!--<a class="btn btn-primary py-3 px-5 mt-2" href="#">ENQUIRY NOW</a>-->
                        </div>
                    </div>
                </div>
                <!--<div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="<?php echo base_url();?>img/slider2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Results You Deserve</h4>
                            <h3 class="display-2 text-capitalize text-white mb-4">We prepared to oppose for you</h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="#">Call Us Now</a>
                        </div>
                    </div>
                </div>-->
            </div>
            <!--<a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-prev-icon"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-next-icon"></span>
                </div>
            </a>-->
        </div>
    </div>
    <!-- Carousel End -->

<!--Whatsapp Button-->

    <a href="//api.whatsapp.com/send?phone=91774 386 4551&text=Hi this is Immigration Lawyer how can I help You" class="wppBtn pulse"></a>

    <script>
        
                $(document).scroll(function() {
                            var i = $(this).scrollTop();
                                         if (i > 100) {
                                         $('.wppBtn').fadeIn();
                                         } else {
                                        $('.wppBtn').fadeOut();
                                  }
                });
    </script>
