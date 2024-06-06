
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                   <div class="col-lg-1 col-md-2"></div>
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p class="mb-2 text-white"><i class="fa fa-map-marker-alt me-3"></i>The Executive Officer, Kadampuzha Devaswom, P.O.Kadampuzha, Malappuram Dist. 676553, Kerala, South India.</p>
                        <p class="mb-2 text-white"><i class="fa fa-phone-alt me-3"></i>+44 7452 324241</p>
                        <p class="mb-2 text-white"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                         <a href="<?php echo base_url('KadamController/festivals/');?>" class="btn btn-link text-white">Festivals</a>
                         <a href="<?php echo base_url('KadamController/accomodations/');?>" class="btn btn-link text-white">Accomodations</a>
                         <a href="<?php echo base_url('KadamController/online_donation/');?>" class="btn btn-link text-white">Online Donation</a>
                         <a href="<?php echo base_url('KadamController/pooja_booking/');?>" class="btn btn-link text-white">Pooja Booking</a>
                         <a href="<?php echo base_url('KadamController/gallery/');?>" class="btn btn-link text-white">Gallery</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Photo Gallery</h5>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="<?php echo base_url();?>img/Gallery/g1.png" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="<?php echo base_url();?>img/Gallery/g2.png" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="<?php echo base_url();?>img/Gallery/g5.png" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="<?php echo base_url();?>img/Gallery/g6.png" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="<?php echo base_url();?>img/Gallery/g7.png" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="<?php echo base_url();?>img/Gallery/g8.png" alt="">
                            </div>
                             <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="<?php echo base_url();?>img/Gallery/g9.png" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="<?php echo base_url();?>img/Gallery/g10.png" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="<?php echo base_url();?>img/Gallery/g9.png" alt="">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start text-white mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="https://gpmbs.com/">GPMBS</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Powered By <a class="border-bottom" href="https://gpmbs.com/">GPMBS</a>
                        </div>
                        <div class="col-md-6 text-center text-white text-md-end">
                            <div class="footer-menu">
                                <a href="<?php echo base_url('KadamController/index/');?>">Home</a>
                                <a href="<?php echo base_url('KadamController/gallery/');?>">Gallery</a>
                                <a href="<?php echo base_url('KadamController/contact/');?>">Contact</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
              <a href="//api.whatsapp.com/send?phone=+44 7452 324241&text=Hi" class="wppBtn"></a>

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
        <script>

        function MakePayment(){
            var dname=$("#dname").val();
            var donation_amt=$("#donation_amt").val();
            var email=$("#email").val();
            var mobile_no=$("#mobile_no").val();
            var Address1=$("#Address1").val();
            var Address2=$("#Address2").val();
            var pincode=$("#pincode").val();
            var city=$("#city").val();
            var state=$("#state").val();
            var options={
                "key":"rzp_live_sUb7gQNZxRWlsA",
                "secret":"ZQd0ucWEyTXMrWh5Pfks4mh4",
                "amount":donation_amt * 100,
                "currency":"INR",
                "name":dname,
                "email":email,
                "mobile_no":mobile_no,
                "description":"Test Transaction",
                "image":"https://w7.pngwing.com/pngs/953/232/png-transparent-payment-gateway-computer-icons-e-commerce-payment-system-payment-blue-text-service-thumbnail.png",
                "handler":function(response){
                    console.log(response);
                    
                    jQuery.ajax({
                        type:"POST",
                        url:"<?php echo base_url('KadamController/save_payment_data/');?>",
                        data:"pay_id="+response.razorpay_payment_id+"&amount="+donation_amt+"&name="+dname+"&email="+email+"&mobile_no="+mobile_no+"&Address1="+Address1+"&Address2="+Address2+"&pincode="+pincode+"&city="+city+"&state="+state,
                        success:function(result){
                            //window.location.href="success.php";
                        }
                    })
                }


            };
            var rzpl = new Razorpay(options);
            rzpl.open();
        }

        
    </script>
    <script>
        $(document).ready(function(){
        
        var TodayDate=new Date();
        var Month = TodayDate.getMonth() + 1;
        var Day = TodayDate.getDate();
        var Year = TodayDate.getFullYear();
        if(Month < 10){
            Month = '0' + Month.toString();
        }
        if(Day<10){
            Day = '0' + Day.toString();
        }
        var maxDate = Year + '-' + Month + '-' + Day;
        $("#pooja_date").attr('min',maxDate);
      
        
        });
    </script>
    
    <script>
		$(document).ready(function() {

  $('#online').submit(function(e) {
    e.preventDefault();
    var dname = $('#dname').val();
    var mobile_no = $('#mobile_no').val();
    var Address1 = $('#Address1').val();
    var Address2 = $('#Address2').val();
    var donation_amt = $('#donation_amt').val();

    $(".error").remove();

    if (dname.length < 1) {
      $('#dname').after('<span class="error" style="color:red;">This field is required</span>');
    }
   if (Address1.length < 1) {
      $('#Address1').after('<span class="error" style="color:red;">This field is required</span>');
    }
    if (Address2.length < 1) {
      $('#Address2').after('<span class="error" style="color:red;">This field is required</span>');
    }
    if (donation_amt.length < 1) {
      $('#donation_amt').after('<span class="error" style="color:red;">This field is required</span>');
    }
    var filter = /[1-9]{1}[0-9]{9}/;
    if (filter.test(mobile_no)) {
        return true;
    }
    else {
        $('#mobile_no').after('<span class="error" style="color:red;">This field is required</span>');
        return false;
    }
     
   
  });

});
	</script>

    </div>

    <!-- JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url();?>lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url();?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url();?>js/main.js"></script>
    
</body>

</html>