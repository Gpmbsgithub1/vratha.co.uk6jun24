<?php include('header.php');?>




        <!-- Header Start -->
        <div class="container-fluid header  p-0" style="background:#991403;">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4 text-white">Gallery</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item "><a href="<?php echo base_url('KadamController/index');?>" class="text-white">Home</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page"><a href="<?php echo base_url('KadamController/Gallery');?>" class="text-white">Gallery</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="<?php echo base_url();?>img/galleryslider.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->


             <div class="container-xxl py-5">
            <div class="container">
                <h1 class="mb-3 text-primary">Gallery</h1>
<!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <img class="img-fluid" src="<?php echo base_url();?>img/Gallery/g1.png" alt="" style="border-radius:10px;">
                             
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <img class="img-fluid" src="<?php echo base_url();?>img/Gallery/g2.png" alt="" style="border-radius:10px;">
                             
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <img class="img-fluid" src="<?php echo base_url();?>img/Gallery/g5.png" alt="" style="border-radius:10px;">
                             
                            </div>
                 </div><br>
                 <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <img class="img-fluid" src="<?php echo base_url();?>img/Gallery/g6.png" alt="" style="border-radius:10px;">
                             
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <img class="img-fluid" src="<?php echo base_url();?>img/Gallery/g7.png" alt="" style="border-radius:10px;">
                             
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <img class="img-fluid" src="<?php echo base_url();?>img/Gallery/g8.png" alt="" style="border-radius:10px;">
                             
                            </div>
                 </div><br>
                    <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <img class="img-fluid" src="<?php echo base_url();?>img/Gallery/g9.png" alt="" style="border-radius:10px;">
                             
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <img class="img-fluid" src="<?php echo base_url();?>img/Gallery/g10.png" alt="" style="border-radius:10px;">
                             
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <img class="img-fluid" src="<?php echo base_url();?>img/Gallery/g9.png" alt="" style="border-radius:10px;">
                             
                            </div>
                 </div><br>
                 
                
            </div>
        </div>
        <!-- Property List End -->
                
                

        </div>
    </div>
        
<?php include('footer.php');?>