<?php include('header.php');?>



        <!-- Header Start -->
        <div class="container-fluid header  p-0" style="background:#991403;">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4 text-white">Pooja Booking</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item "><a href="<?php echo base_url('KadamController/index');?>" class="text-white">Home</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page"><a href="<?php echo base_url('KadamController/pooja_booking');?>" class="text-white">Pooja Booking</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="<?php echo base_url();?>img/poojaslider.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->


<div class="container-xxl py-5">
            <div class="container">
                <h1 class="mb-3 text-center text-primary">Pooja Booking</h1>
                <div class="row g-4">
                      <div class="col-md-3"></div>
                 
                    <div class="col-md-6">

                        <center><h6 style="color:red;"><?php echo validation_errors(); ?></h6></center>
                        <center><h6 style="color:green;"><?php  echo $this->session->flashdata('pooja_success'); ?></h6></center>
                        
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            
                            <form action="<?php echo base_url('KadamController/save_pooja');?>" method="post">
                                <div class="row g-3">
                                     
                                    
                                    <h5 class="mb-3">Personal Details (Enter Your Personal Details Below)</h5>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="name" name="name" class="form-control" id="name" placeholder="Enter Devotee Name">
                                            <label for="name">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" name="mobile_no" class="form-control" id="mobile_no" placeholder="Mobile Number">
                                            <label for="mobile_no">Mobile Number</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="Address" placeholder="Address" id="Address" style="height: 150px"></textarea>
                                            <label for="Address">Address</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <select class="form-control border-0 py-3" name="pooja_name">
                                    <option selected>Select</option>
                                    <option value="Poomoodal">Poomoodal</option>
                                    <option value="Muttarukkal">Muttarukkal</option>
                                    <option value="One Day's Pooja">One Day's Pooja</option>
                                    <option value="Niramala">Niramala</option>
                                    </select>
                                    </div>
                                    <label for="pooja_date">Select Date for Pooja</label>
                                    <input type="date" id="pooja_date" class="form-control" name="pooja_date">
                                  <div class="col-4">
                                <input  type="submit" class="btn btn-primary w-100 py-3" name="btn_submit" value="Book">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
<?php include('footer.php');?>