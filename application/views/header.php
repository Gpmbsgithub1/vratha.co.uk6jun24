<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sree Kadampuzha Bhagavathy Temple</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url();?>img/logo4.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url();?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light px-4">
                <a href="<?php echo base_url('KadamController/index/');?>" class="navbar-brand d-flex align-items-center text-center">
                    
                    <img class="img-fluid" src="<?php echo base_url();?>img/logo4.jpg" alt="Icon" style="width: 140px; height: 90px;">
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="<?php echo base_url('KadamController/index/');?>" class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">The temple</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="<?php echo base_url('KadamController/about/');?>" class="dropdown-item">About</a>
                                <a href="<?php echo base_url('KadamController/origin/');?>" class="dropdown-item">Origin</a>
                                <a href="<?php echo base_url('KadamController/Legend/');?>" class="dropdown-item">Legend Detailed</a>
                                <a href="<?php echo base_url('KadamController/architecture/');?>" class="dropdown-item">Architecture</a>
                                <a href="<?php echo base_url('KadamController/trust/');?>" class="dropdown-item">Trust & Trustees</a>
                                <a href="<?php echo base_url('KadamController/charitable/');?>" class="dropdown-item">Charitable Works</a>
                                
                            </div>
                        </div>
                         <a href="<?php echo base_url('KadamController/festivals/');?>" class="nav-item nav-link">Festivals</a>
                         <a href="<?php echo base_url('KadamController/accomodations/');?>" class="nav-item nav-link">Accomodations</a>
                         <a href="<?php echo base_url('KadamController/online_donation/');?>" class="nav-item nav-link">Online Donation</a>
                         <a href="<?php echo base_url('KadamController/pooja_booking/');?>" class="nav-item nav-link">Pooja Booking</a>
                         <a href="<?php echo base_url('KadamController/gallery/');?>" class="nav-item nav-link">Gallery</a>
                         <a href="<?php echo base_url('KadamController/contact/');?>" class="nav-item nav-link">Contact</a>
                        
                       
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

