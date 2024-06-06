<?php include('header.php');?>




        <!-- Header Start -->
        <div class="container-fluid header  p-0" style="background:#991403;">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4 text-white">Online Donation</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item "><a href="<?php echo base_url('KadamController/index');?>" class="text-white">Home</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page"><a href="<?php echo base_url('KadamController/online_donation');?>" class="text-white">Online Donation</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="<?php echo base_url();?>img/onlineslider.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->


             <div class="container-xxl py-5">
            <div class="container">
                <h1 class="mb-3 text-center text-primary">Online Donation</h1>
                <div class="row g-4">
                      <div class="col-md-3"></div>
                 
                    <div class="col-md-6">

                             <h6 style="color:red;"> <?php
                                        
                                        echo $this->session->flashdata('error');
                                        echo validation_errors(); 
                                        
                                        
                            ?></h6>
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            
                            <form action="" method="post" id="online">
                                <div class="row g-3">
                                     <h5 class="mb-3">Please Enter Donation Amount Below</h5>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" name="donation_amt" class="form-control" id="donation_amt" placeholder="Please Enter Donation Amount Here">
                                            <label for="donation_amt">Please Enter Donation Amount Here</label>
                                        </div>
                                    </div>
                                     <h5 class="mb-3">Personal Details (Enter Your Personal Details Below)</h5>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" name="dname" class="form-control" id="dname" placeholder="Enter Devotee Name">
                                            <label for="dname">Enter Devotee Name</label>
                                            
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
                                            <textarea class="form-control" name="Address1" placeholder="Leave a message here" id="Address1" style="height: 150px"></textarea>
                                            <label for="Address1">Address 1</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                             <textarea class="form-control" name="Address2" placeholder="Leave a message here" id="Address2" style="height: 150px"></textarea>
                                            <label for="Address2">Address 2</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" name="pincode" class="form-control" id="pincode" placeholder="Pin Code">
                                            <label for="pincode">Pin Code</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" name="city" class="form-control" id="city" placeholder="City">
                                            <label for="city">City</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                             <input type="text" name="state" class="form-control" id="state" placeholder="State">
                                            <label for="state">State</label>
                                        </div>
                                    </div>
                                     
                                    <p>By clicking on the 'Make Payment' button, you agree to our Terms & Conditions and Cancellation / Refund policy.</p>
                                    <div class="col-5">
                                <input  type="submit" class="btn btn-primary w-100 py-3" name="btn_submit" value="Make Payment" onclick="MakePayment()">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <h5 class="mb-3">Note:</h5>
                <p style="text-align:left;display: list-item;">All the fields are not Mandatory.</p>
                <p style="text-align:left;display: list-item;">Minimum amount for online donation is Rs.100.</p>
                <p style="text-align:left;display: list-item;">Please provide valid address & contact details, so that we can send the prasadam.</p>
                <p style="text-align:left;display: list-item;">A confirmation mail and sms will be sent to your contact regarding the successful donation. Kindly cross check the same to avoid duplicate transactions.</p>
                <p style="text-align:left;display: list-item;">Please contact us for any queries/assistance regarding online donation.</p>
        </div>
    </div>
    
        
<?php include('footer.php');?>