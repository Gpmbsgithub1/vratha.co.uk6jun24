<?php include('header.php');?>




        <!-- Header Start -->
        <div class="container-fluid header  p-0" style="background:#991403;">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4 text-white">About</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item "><a href="<?php echo base_url('kadamController/index');?>" class="text-white">Home</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page"><a href="<?php echo base_url('kadamController/about');?>" class="text-white">About</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="<?php echo base_url();?>img/templeslider1.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->


       <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="<?php echo base_url();?>img/about1.png" style="border-radius:20px;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4 text-primary">About Temple</h1>
                        <p class="mb-4">The origin of Kadampuzha Temple is associated with the Mahabharatha, the ancient Indian myth, considered to be the greatest story ever told. However the temple as such was founded by Shree Shankaracharya and the month he consecrated Kadampuzha Temple, the day of Karthika in the month of Virshchikam (November – December) is the considered the most auspicious day and is celebrated as the festival day.</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

                <!-- Call to Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                     
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-1 wow fadeIn"></div>
                            <div class="col-lg-3 wow fadeIn" data-wow-delay="0.5s" style="background:orange;border-radius:10px;"><br>
                                <h3 class="mb-3">Pooja Times</h3>
                                <center><a href="" class="btn btn-primary py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>Click Here</a></center><br><br>
                               
                            </div>
                             <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s" style="border-radius:20px;">
                                <center><img class="img-fluid" src="<?php echo base_url();?>img/om.png" style="width:60px;height:60px;" alt=""><br><br></center>
                                <p style="font-size:18px;"><i class="fa fa-check text-primary me-3"></i>Dhyanam</p>
                                <p style="font-size:18px;"><i class="fa fa-check text-primary me-3"></i> Shyamam barhikalapa Sekharayutham</p>
                                <p style="font-size:18px;"><i class="fa fa-check text-primary me-3"></i>Aabadha parnamsukam</p>
                                <p style="font-size:18px;"><i class="fa fa-check text-primary me-3"></i>Gunja haralasai payodhara bharam</p>
                                <p style="font-size:18px;"><i class="fa fa-check text-primary me-3"></i>Ashtahipan bibhrathim</p>
                                <p style="font-size:18px;"><i class="fa fa-check text-primary me-3"></i>Thatankangatha mekhala gunaranan</p>
                                <p style="font-size:18px;"><i class="fa fa-check text-primary me-3"></i>Manjeeritham prapitham</p>
                                 <p style="font-size:18px;"><i class="fa fa-check text-primary me-3"></i>Kairathim Varadabhayodyudikaram</p>
                                <p style="font-size:18px;"><i class="fa fa-check text-primary me-3"></i>Deveem thrinethram bhaje</p>
                            </div>
                           
                             <div class="col-lg-3 wow fadeIn" data-wow-delay="0.5s" style="background:orange;border-radius:10px;"><br>
                                <h3 class="mb-3">Main Offerings</h3>
                                <center><a href="" class="btn btn-primary py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>Click Here</a></center><br><br>
                               
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->
        
<?php include('footer.php');?>