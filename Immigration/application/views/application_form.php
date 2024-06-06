        <?php

        defined('BASEPATH') OR exit('No direct script access allowed');
        include('header.php');
        ?>
<style>
.hide {
  display: none;
}
</style>

        <!-- Contact Start -->
      
        <div class="container-fluid">

            <div class="container py-5" style="border:black; border-width:1px; border-style:solid;">
                   <div style="text-align:left;padding-left: 10px;">
        
                   <a href ="<?php echo base_url('Immigration_Controller/downloadPdf');?>"class="btn btn-primary">Download PDF</a>
                 </div>
               
                
                <div class="text-center pb-2">
                     <h6 style="color:green;"> <?php
                    echo $this->session->flashdata('success');



                ?></h6>
                <h6 style="color:red;"> <?php

                //echo $this->session->flashdata('error');
                echo validation_errors(); 


            ?></h6>
                    <h6 class="text-uppercase">APPLICATION INFORMATION</h6>

                   
        </div>
          
        <div class="row">
            <div class="col-lg-1 mb-5 mb-lg-0"></div>
            <div class="col-lg-10 mb-5 mb-lg-0">
                <div class="contact-form">
                    <div id="success"></div>
                  
                    
                    <form method="post" name="sentMessage" action="<?php echo base_url('Immigration_Controller/save_details');?>" id="Application_form" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col-sm-6 control-group">
                                <label>1. Preferred Visa Application Centre in the
                                country where application will be submitted</label>
                            </div>
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control p-4" name="visa_app" id="visa_app" placeholder="Visa Application Centre" required="required" data-validation-required-message="Please enter Visa Application Centre " />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6 control-group">
                                <label>2.Unavailable dates to attend an appointment</label>
                            </div>
                            <div class="col-sm-6 control-group">
                                <div class="form-group">
                                    <div class="date" id="un_date" data-target-input="nearest">
                                        <input type="text" name="un_date" class="form-control border-1 p-4 datetimepicker-input" placeholder="Select Date" data-target="#un_date" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6 control-group">
                                <label>  3. Notice period for your current employer
                                </label>
                            </div>
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control p-4" name="notice_period" id="notice_period" placeholder="Notice period" required="required" data-validation-required-message="Please enter Notice period " />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6 control-group">
                                <label>4. Your planned date of travel to the UK
                                </label>
                            </div>
                            <div class="col-sm-6 control-group">
                                <div class="form-group">
                                    <div class="date" id="plan_date" data-target-input="nearest">
                                        <input type="text" name="plan_date" class="form-control border-1 p-4 datetimepicker-input" placeholder="Select Date" data-target="#plan_date" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center pb-2">
                           <h6 class="text-uppercase">Personal INFORMATION</h6>
                       </div>
                       <div class="form-row">
                        <div class="col-sm-6 control-group">
                            <label>5.Telephone No/Email-Address</label>
                        </div>
                        <div class="col-sm-3 control-group">
                            <input type="text" class="form-control p-4" name="tel_no" id="tel_no" placeholder="Telephone No" required="required" data-validation-required-message="Telephone No" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="col-sm-3 control-group">
                            <input type="text" class="form-control p-4" name="email_id" id="email_id" placeholder="Email-Address" required="required" data-validation-required-message="Please enter Email-Address " />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 control-group">
                            <label>6. What is your name, as shown in your current passport or travel document?</label>
                        </div>
                        <div class="col-sm-3 control-group">
                            Given names:
                            <input type="text" class="form-control p-4" name="given_name" id="given_name" placeholder="Given names:" required="required" data-validation-required-message="Please enter Given names: " />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="col-sm-3 control-group">
                            Last name:
                            <input type="text" class="form-control p-4" name="last_name" id="last_name" placeholder="Last name:" required="required" data-validation-required-message="Please enter Last name: " />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 control-group">
                            <label>7. In addition to the names already provided,
                                are you now or have you ever been known by
                                another name?
                                (You must provide all your names. For example, if you
                                changed your name after marriage or have a different
                            name that you use for professional purposes)</label>
                        </div>
                        <div class="col-sm-1 control-group">
                            Yes:
                            <input type="radio" class="form-control p-4" width="40px;" name="r1" value="r1_yes" id="r1" placeholder="" required="required" onclick="show2();" />


                        </div>
                        <div class="col-sm-1 control-group">

                           No
                           <input type="radio" class="form-control p-4" name="r1" value="r1_no" id="r1" placeholder="" required="required" onclick="show1();" />

                       </div>
                       <div id="div1" class="col-sm-4 control-group hide">

                           If Yes<br>
                           Given names:
                           <input type="text" class="form-control p-4" name="giv_name1" id="giv_name1" placeholder="Given names:" required="required" data-validation-required-message="Please enter Given names: " />
                           <p class="help-block text-danger"></p>
                           Last name:
                           <input type="text" class="form-control p-4" name="las_name1" id="las_name1" placeholder="Last name:" required="required" data-validation-required-message="Please enter Last name: " />
                           <p class="help-block text-danger"></p>

                       </div>
                   </div>
                   <div class="form-row">
                    <div class="col-sm-6 control-group">
                        <label>8. What is your relationship status?</label>
                    </div>
                    <div class="col-sm-4 control-group">
                    
                    <select name="status" id="status" class="form-control">
                     <option value="Single">Select</option>
                     <option value="Single">Single</option>
                     <option value="Married">Married</option>
                     <option value="Unmarried">Unmarried </option>
                     <option value="Divorced">Divorced</option>
                     <option value="Separated">Separated</option>
                     <option value="Widowed">Widowed </option>
                    </select>
               </div>
                    

           </div><br>
           <div class="form-row">
            <div class="col-sm-6 control-group">
                <label>9.Your address
                (Address in your home country where you will submit your Visa Application.)</label>
            </div>
            <div class="col-sm-3 control-group">
             Address Line 1:
             <input type="text" class="form-control p-4" name="addr1" id="addr1" placeholder="Address Line 1:" required="required" data-validation-required-message="Please enter Address Line 1: " />
             <p class="help-block text-danger"></p>
         </div>
         <div class="col-sm-3 control-group">
             Address Line 2:
             <input type="text" class="form-control p-4" name="addr2" id="addr1" placeholder="Address Line 2:" required="required" data-validation-required-message="Please enter Address Line 2: " />
             <p class="help-block text-danger"></p>
         </div>
     </div>
     <div class="form-row">
        <div class="col-sm-6 control-group">

        </div>
        <div class="col-sm-3 control-group">
            Town/City:
            <input type="text" class="form-control p-4" name="city" id="city" placeholder="Town/City:" required="required" data-validation-required-message="Please enter Town/City: " />
            <p class="help-block text-danger"></p>
        </div>
        <div class="col-sm-3 control-group">
            Province/State:
            <input type="text" class="form-control p-4" name="state" id="state" placeholder="Province/State:" required="required" data-validation-required-message="Please enter Province/State: " />
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-6 control-group">

        </div>

    </div>
    <div class="form-row">
        <div class="col-sm-6 control-group">

        </div>
        <div class="col-sm-3 control-group">
            Country:
            <input type="text" class="form-control p-4" name="country" id="country" placeholder="Country:" required="required" data-validation-required-message="Please enter Country: " />
            <p class="help-block text-danger"></p>
        </div>
        <div class="col-sm-3 control-group">
            Postcode:
            <input type="text" class="form-control p-4" name="postcode" id="postcode" placeholder="Postcode:" required="required" data-validation-required-message="Please enter Province/State: " />
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-6 control-group">
            <label>10. Is this address also your correspondence address?</label>
        </div>
        <div class="col-sm-1 control-group">
            Yes:
            <input type="radio" class="form-control p-4" name="c1" value="c1_yes" id="c1_yes" placeholder="" required="required" onclick="show3();" />

        </div>
        <div class="col-sm-1 control-group">

           No
           <input type="radio" class="form-control p-4" name="c1" value="c1_no" id="c1_no" placeholder="" required="required" onclick="show4();"/>

       </div>
       <div id="div2" class="col-sm-4 control-group hide">

           If No<br>

           <input type="text" class="form-control p-4" name="addr3" id="addr3" placeholder="Address:" required="required" data-validation-required-message="Please enter Address:" />
           <p class="help-block text-danger"></p>

           <input type="text" class="form-control p-4" name="city1" id="city1" placeholder="Town/City:" required="required" data-validation-required-message="Please enter Town/City: " />
           <p class="help-block text-danger"></p>
           <input type="text" class="form-control p-4" name="state1" id="state1" placeholder="Province/State:" required="required" data-validation-required-message="Please enter Province/State: " />
           <p class="help-block text-danger"></p>
           <input type="text" class="form-control p-4" name="country1" id="country1" placeholder="Country:" required="required" data-validation-required-message="Please enter Country: " />
           <p class="help-block text-danger"></p>
           <input type="text" class="form-control p-4" name="postcode1" id="postcode1" placeholder="Postcode:" required="required" data-validation-required-message="Please enter Postcode: " />
           <p class="help-block text-danger"></p>

       </div>
    </div><br>
    <div class="form-row">
        <div class="col-sm-6 control-group">
            <label>11. a)How long have you lived at this address?</label>
        </div>
        <div class="col-sm-6 control-group">
            <input type="text" class="form-control p-4" name="long_live" id="long_live" placeholder="" required="required" data-validation-required-message="Please enter Digits" />
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-6 control-group">
            <label>12. Your previous address(es), if you have lived at the address above for less than 2 years.
            (Copy the following section to provide all addresses you have lived at in the last 2 years)</label>
        </div>
        <div class="col-sm-3 control-group">

            <input type="text" class="form-control p-4" name="addrr1" id="addrr1" placeholder="Address Line 1:" required="required" data-validation-required-message="Please enter Address Line 1: " />
            <p class="help-block text-danger"></p>
        </div>
        <div class="col-sm-3 control-group">

            <input type="text" class="form-control p-4" name="addrr2" id="addrr2" placeholder="Address Line 2:" required="required" data-validation-required-message="Please enter Address Line 2: " />
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-6 control-group">

        </div>
        <div class="col-sm-3 control-group">

            <input type="text" class="form-control p-4" name="city2" id="city2" placeholder="Town/City:" required="required" data-validation-required-message="Please enter Town/City: " />
            <p class="help-block text-danger"></p>
        </div>
        <div class="col-sm-3 control-group">

            <input type="text" class="form-control p-4" name="state2" id="state2" placeholder="Province/State:" required="required" data-validation-required-message="Please enter Province/State: " />
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-6 control-group">

        </div>

    </div>
    <div class="form-row">
        <div class="col-sm-6 control-group">

        </div>
        <div class="col-sm-3 control-group">

            <input type="text" class="form-control p-4" name="country2" id="country2" placeholder="Country:" required="required" data-validation-required-message="Please enter Country: " />
            <p class="help-block text-danger"></p>
        </div>
        <div class="col-sm-3 control-group">

            <input type="text" class="form-control p-4" name="postcode2" id="postcode2" placeholder="Postcode:" required="required" data-validation-required-message="Please enter Province/State: " />
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-6 control-group">
            <label>When did you start living at this address?</label>
        </div>
        <div class="col-sm-6 control-group">
            <div class="form-group">
                <div class="date" id="live_date" data-target-input="nearest">
                    <input type="text" name="live_date" class="form-control border-1 p-4 datetimepicker-input" placeholder="Select Date" data-target="#live_date" data-toggle="datetimepicker"/>
                </div>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-6 control-group">
            <label>When did you stop living at this address?</label>
        </div>
        <div class="col-sm-6 control-group">
            <div class="form-group">
                <div class="date" id="stop_date" data-target-input="nearest">
                    <input type="text" name="stop_date" class="form-control border-1 p-4 datetimepicker-input" placeholder="Select Date" data-target="#stop_date" data-toggle="datetimepicker"/>
                </div>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-6 control-group">
            <label>13. What is the ownership status of your home?
                (If ‘other’: give more details about your living situation,
            such as who you live with and who owns the property)</label>
        </div>
        <div class="col-sm-3 control-group">
           <input type="text" class="form-control p-4" name="own" id="own" placeholder="I Owned It:" required="required" data-validation-required-message="Please enter own: " />
           <p class="help-block text-danger"></p>
       </div>
       <div class="col-sm-3 control-group">
           <input type="text" class="form-control p-4" name="rent" id="rent" placeholder="I Rent It:" required="required" data-validation-required-message="Please enter Country: " />
           <p class="help-block text-danger"></p>
       </div>
    </div>
    <div class="form-row">
        <div class="col-sm-6 control-group">

        </div>
        <div class="col-sm-3 control-group">
           <input type="text" class="form-control p-4" name="other" id="other" placeholder="Other:" required="required" data-validation-required-message="Please enter Other: " />
           <p class="help-block text-danger"></p>
       </div>

    </div>
    <div class="form-row">
        <div class="col-sm-6 control-group">
            <label>14.Do you have a valid national identity card?
                (This includes identity cards, issued from non-UK
                governments. This does not include driving licences. If
            you have an internal passport, provide the details here)</label>
        </div>
        <div class="col-sm-1 control-group">
           Yes:
           <input type="radio" class="form-control p-4" name="i1" value="i1_yes" id="i1_yes" placeholder="" required="required" onclick="show6();" />

       </div>
       <div class="col-sm-1 control-group">

           No
           <input type="radio" class="form-control p-4" name="i1" value="i1_no" id="i1_no" placeholder="" required="required" onclick="show5();"/>

       </div>

    </div>
    <div class="form-row">
        <div class="col-sm-6 control-group">

        </div>
        <div id="div3"class="col-sm-6 control-group hide">

           If Yes(Provide Details Below)<br>

           <input type="text" class="form-control p-4" name="card_no" id="card_no" placeholder="National identity card number:" required="required" data-validation-required-message="National identity card number:" />
           <p class="help-block text-danger"></p>

           <input type="text" class="form-control p-4" name="authority" id="authority" placeholder="Issuing authority:" required="required" data-validation-required-message="Please enter Issuing authority: " />
           <p class="help-block text-danger"></p>

           <div class="form-group">
            <div class="date" id="issue_date" data-target-input="nearest">
                <input type="text" name="issue_date" class="form-control border-1 p-4 datetimepicker-input" placeholder="Issue date (if applicable):" data-target="#issue_date" data-toggle="datetimepicker"/>
            </div>
        </div>
        <div class="form-group">
            <div class="date" id="expiry_date" data-target-input="nearest">
                <input type="text" name="expiry_date" class="form-control border-1 p-4 datetimepicker-input" placeholder="Expiry date (if applicable):" data-target="#expiry_date" data-toggle="datetimepicker"/>
            </div>
        </div>


    </div>


    </div>
    <div class="form-row">
        <div class="col-sm-6 control-group">
            <label>15. Do you currently hold, or have you ever
                held, any other nationality or citizenship?
                (You must provide all the nationalities that you currently
            hold or have ever held)</label>
        </div>
        <div class="col-sm-1 control-group">
           Yes:
           <input type="radio" class="form-control p-4" name="n1" value="n1_yes" id="n1_yes" placeholder="" required="required" onclick="show8();" />

       </div>
       <div class="col-sm-1 control-group">

           No
           <input type="radio" class="form-control p-4" name="n1" value="n1_no" id="n1_no" placeholder="" required="required" onclick="show7();"/>

       </div>

    </div>
    <div class="form-row">
        <div class="col-sm-6 control-group">

        </div>
        <div id="div4" class="col-sm-6 control-group hide">

           If Yes(Provide Details Below)<br>

           <input type="text" class="form-control p-4" name="nationality" id="nationality" placeholder="Your other nationality:" required="required" data-validation-required-message="Your other nationality:" />
           <p class="help-block text-danger"></p>




       </div>


    </div>
    <div class="text-center pb-2">
       <h6 class="text-uppercase">SPOUSE/PARTNER’S DETAILS</h6>
       <p>Complete this section only if you selected ‘Married or a civil partner’ in question 8.
       You should use your spouse or partner’s passport to complete this section.</p>
    </div>
    <div class="form-row">
        <div class="col-sm-3 control-group">

       </div>


        <div class="col-sm-6 control-group">
          <input type="text" class="form-control p-4" name="gname" id="gname" placeholder="Given names" required="required" data-validation-required-message="Your other nationality:" />
          <p class="help-block text-danger"></p>
          <input type="text" class="form-control p-4" name="lname" id="lname" placeholder="Last name" required="required" data-validation-required-message="Your other nationality:" />
          <p class="help-block text-danger"></p>
          <div class="form-group">
            <div class="date" id="dob" data-target-input="nearest">
                <input type="text" name="dob" class="form-control border-1 p-4 datetimepicker-input" placeholder="Date of Birth" data-target="#dob" data-toggle="datetimepicker"/>
            </div>
        </div>
        <input type="text" class="form-control p-4" name="nation" id="nation" placeholder="Nationality" required="required" data-validation-required-message="Your other nationality:" />
        <p class="help-block text-danger"></p>

    </div>
    

    </div>
    <div class="form-row">
         <div class="col-sm-3 control-group">

       </div>

        <div class="col-sm-4 control-group">
          <label>Do they currently live with you</label>

       </div>

      <div class="col-sm-1 control-group">
       Yes:
       <input type="radio" class="form-control p-4" name="m1" value="m1_yes" id="m1_yes" placeholder="" required="required" onclick="show9();" />

    </div>
    <div class="col-sm-1 control-group">

       No
       <input type="radio" class="form-control p-4" name="m1" value="m1_no" id="m1_no" placeholder="" required="required" onclick="show10();"/>

    </div>





    </div>
    <div class="form-row">
        <div class="col-sm-3 control-group">

       </div>


       <div id="div5" class="col-sm-6 control-group hide">
        If No(Provide Details)


        <input type="text" class="form-control p-4" name="ad1" id="ad1" placeholder="Address:" required="required" data-validation-required-message="Please enter Address" />
        <p class="help-block text-danger"></p>
        <input type="text" class="form-control p-4" name="city12" id="city12" placeholder="City:" required="required" data-validation-required-message="Please enter City" />
        <p class="help-block text-danger"></p>
        <input type="text" class="form-control p-4" name="state12" id="state12" placeholder="State:" required="required" data-validation-required-message="Please enter State" />
        <p class="help-block text-danger"></p>
        <input type="text" class="form-control p-4" name="country12" id="country12" placeholder="Country:" required="required" data-validation-required-message="Please enter Country" />
        <p class="help-block text-danger"></p>
        <input type="text" class="form-control p-4" name="postcode12" id="postcode12" placeholder="Post Code:" required="required" data-validation-required-message="Please enter Post Code:" />
        <p class="help-block text-danger"></p>

    </div>
    





    </div>
    <div class="text-center pb-2">
       <h6 class="text-uppercase">PARENTS’ DETAILS</h6>

    </div>
    <div class="form-row">


       <div class="col-sm-4 control-group">
        Mother

    </div>
    <div class="col-sm-2 control-group">

    </div>
    <div class="col-sm-3 control-group">

     Father
    </div>







    </div>
    <div class="form-row">


       <div class="col-sm-4 control-group">
         <input type="text" class="form-control p-4" name="mname" id="mname" placeholder="Given names" required="required" data-validation-required-message="Please enter Given names" />
         <p class="help-block text-danger"></p>
         <input type="text" class="form-control p-4" name="llname" id="llname" placeholder="Last names" required="required" data-validation-required-message="Please enter Last names" />
         <p class="help-block text-danger"></p>
         <div class="form-group">
            <div class="date" id="mdob" data-target-input="nearest">
                <input type="text" name="mdob" class="form-control border-1 p-4 datetimepicker-input" placeholder="Date of Birth" data-target="#mdob" data-toggle="datetimepicker"/>
            </div>
        </div>
        <input type="text" class="form-control p-4" name="countryn" id="countryn" placeholder="Country of nationality" required="required" data-validation-required-message="Please enter Country of nationality" />
        <p class="help-block text-danger"></p>

    </div>
    <div class="col-sm-2 control-group">

    </div>
    <div class="col-sm-4 control-group">

     <input type="text" class="form-control p-4" name="mname1" id="mname1" placeholder="Given names" required="required" data-validation-required-message="Please enter Given names" />
     <p class="help-block text-danger"></p>
     <input type="text" class="form-control p-4" name="lname1" id="lname1" placeholder="Last names" required="required" data-validation-required-message="Please enter Last names" />
     <p class="help-block text-danger"></p>
     <div class="form-group">
        <div class="date" id="mdob1" data-target-input="nearest">
            <input type="text" name="mdob1" class="form-control border-1 p-4 datetimepicker-input" placeholder="Date of Birth" data-target="#mdob1" data-toggle="datetimepicker"/>
        </div>
    </div>
    <input type="text" class="form-control p-4" name="countryn1" id="countryn1" placeholder="Country of nationality" required="required" data-validation-required-message="Please enter Country of nationality" />
    <p class="help-block text-danger"></p>
    </div>







    </div>
    <div class="form-row">
        <div class="col-sm-3 control-group">
            <label>Have they always had the same nationality</label>

        </div>


        <div class="col-sm-1 control-group">
           Yes:
           <input type="radio" class="form-control p-4" name="l1" value="l1_yes" id="l1_yes" placeholder="" required="required" />

       </div>
       <div class="col-sm-1 control-group">

          If No
          <input type="radio" class="form-control p-4" name="l1" value="l1_no" id="l1_no" placeholder="" required="required" onclick="show19();show20();"/>

      </div>




      <div class="col-sm-3 control-group">


      </div>
      <div class="col-sm-1 control-group">
       Yes:
       <input type="radio" class="form-control p-4" name="t1" value="t1_yes" id="t1_yes" placeholder="" required="required" />

    </div>
    <div class="col-sm-1 control-group">

       If No 
       <input type="radio" class="form-control p-4" name="t1" value="t1_no" id="t1_no" placeholder="" required="required" onclick="show19();show23();"/>

    </div>






    </div>
    <div class="form-row">
       <div id="div11" class="col-sm-3 control-group hide">
        <label>Their country of nationality when you were born</label>   

     </div>




    <div id="div12" class="col-sm-3 control-group hide">

       <input type="text" class="form-control p-4" name="mbornnation" id="mbornnation" placeholder="" required="required" data-validation-required-message="Please enter Their country of nationality when you were born" />
       <p class="help-block text-danger"></p>

    </div>




    <div class="col-sm-1 control-group">


    </div>

    <div id="div13" class="col-sm-3 control-group hide">

      <input type="text" class="form-control p-4" name="fbornnation" id="fbornnation" placeholder="" required="required" data-validation-required-message="Please enter Their country of nationality when you were born" />
      <p class="help-block text-danger"></p>

    </div>






    </div>
    <div class="text-center pb-2">
       <h6 class="text-uppercase">FAMILY IN THE UK</h6>
    </div>
    <div class="form-row">
       <div class="col-sm-6 control-group">
        <label>20. Do you have any family in the UK?
           This includes:<ul><li>Immediate family - such as spouse, civil partner,
           parents or children</li>
           <li>Grandparents or grandchildren</li>
           <li>Your spouse or civil partner's family</li>
           <li>Your child's spouse, civil partner or partner</li>
           <li>Your partner, if you have lived with them for 2 out of
           the last 3 years</li>
       </ul>
    </label>   

    </div>

    <div class="col-sm-1 control-group">
    </div>




    <div class="col-sm-1 control-group">
       Yes:
       <input type="radio" class="form-control p-4" name="v1" value="v1_yes" id="v1_yes" placeholder="" required="required"/>

    </div>
    <div class="col-sm-1 control-group">
       If No:
       <input type="radio" class="form-control p-4" name="v1" value="v1_no" id="v1_no" placeholder="" required="required" onclick="show23();show24();" />

    </div>

    </div>
    <div class="form-row">
       <div id="div14" class="col-sm-6 control-group hide">
          <label>How many times have you been to the UK
            in the past 10 years?
            If you are unsure of the exact number, provide an
            estimation. You will be asked to provide details for up to
            3 of your most recent times in the UK.
            If you haven’t been to the UK in the past 10 years, please
        go to question 21 and then question 31</label>

    </div>






    <div id="div15" class="col-sm-6 control-group hide">

      <input type="text" class="form-control p-4" name="time_uk" id="time_uk" placeholder="" required="required" data-validation-required-message="Please enter Their country of nationality when you were born" />
      <p class="help-block text-danger"></p>

    </div>


    </div>
    <div class="form-row">
       <div class="col-sm-6 control-group">
          <label>21. Have you been issued with a UK visa in the
          past 10 years?</label>

      </div>
      <div class="col-sm-2 control-group">
      </div>
      <div class="col-sm-1 control-group">
       Yes:
       <input type="radio" class="form-control p-4" name="o1" value="o1_yes" id="o1_yes" placeholder="" required="required" />

    </div>
    <div class="col-sm-1 control-group">
       No:
       <input type="radio" class="form-control p-4" name="o1" value="o1_no" id="o1_no" placeholder="" required="required" />

    </div>

    </div>
    <div class="form-row">

       <div class="col-sm-3 control-group">
       22. Details of your most recent visit
         <input type="text" class="form-control p-4" name="dreason" id="dreason" placeholder="Reason" required="required" data-validation-required-message="Reason:" />
       <p class="help-block text-danger"></p>
       <div class="form-group">
        <div class="date" id="ddate" data-target-input="nearest">
            <input type="text" name="ddate" class="form-control border-1 p-4 datetimepicker-input" placeholder="Date you arrived in the UK:" data-target="#ddate" data-toggle="datetimepicker"/>
        </div>
    </div>
         <input type="text" class="form-control p-4" name="dlong" id="dlong" placeholder="How long were you in the UK?" required="required" data-validation-required-message="How long were you in the UK?" />
      <p class="help-block text-danger"></p>


      </div>
      <div class="col-sm-3 control-group">
        Details of your second most recent visit
          <input type="text" class="form-control p-4" name="ddreason" id="ddreason" placeholder="Reason" required="required" data-validation-required-message="Reason:" />
       <p class="help-block text-danger"></p>
       <div class="form-group">
        <div class="date" id="dddate" data-target-input="nearest">
            <input type="text" name="dddate" class="form-control border-1 p-4 datetimepicker-input" placeholder="Date you arrived in the UK:" data-target="#dddate" data-toggle="datetimepicker"/>
        </div>
    </div>
         <input type="text" class="form-control p-4" name="ddlong" id="ddlong" placeholder="How long were you in the UK?" required="required" data-validation-required-message="How long were you in the UK?" />
      <p class="help-block text-danger"></p>
      </div>
      <div class="col-sm-3 control-group">
       Details of your third most recent visit
         <input type="text" class="form-control p-4" name="dddreason" id="dddreason" placeholder="Reason" required="required" data-validation-required-message="Reason:" />
       <p class="help-block text-danger"></p>
       <div class="form-group">
        <div class="date" id="ddddate" data-target-input="nearest">
            <input type="text" name="ddddate" class="form-control border-1 p-4 datetimepicker-input" placeholder="Date you arrived in the UK:" data-target="#ddddate" data-toggle="datetimepicker"/>
        </div>
     </div>
         <input type="text" class="form-control p-4" name="dddlong" id="dddlong" placeholder="How long were you in the UK?" required="required" data-validation-required-message="How long were you in the UK?" />
      <p class="help-block text-danger"></p>
       

     </div>
     <div class="col-sm-2 control-group">
    </div>
   

        </div>
    <div class="form-row">
       <div class="col-sm-6 control-group">
          <label>23. Did you receive medical treatment in the
                UK?(For example, if you visited a doctor, clinic or hospital, this
                counts as having medical treatment)</label>

      </div>
      <div class="col-sm-2 control-group">
      </div>
      <div class="col-sm-1 control-group">
       Yes:
       <input type="radio" class="form-control p-4" name="p1" value="p1_yes" id="p1_yes" placeholder="" required="required" />

    </div>
    <div class="col-sm-1 control-group">
       No:
       <input type="radio" class="form-control p-4" name="p1" value="p1_no" id="p1_no" placeholder="" required="required" />

    </div>

    </div>
    <div class="form-row">
       <div class="col-sm-6 control-group">
          <label>24. Were you told that you had to pay the
                    hospital, clinic or doctor's surgery for your
                    medical treatment?
                    (This does not include the Immigration Health Surcharge)</label>

      </div>
      <div class="col-sm-2 control-group">
      </div>
      <div class="col-sm-1 control-group">
       Yes:
       <input type="radio" class="form-control p-4" name="q1" value="q1_yes" id="q1_yes" placeholder="" required="required" />

    </div>
    <div class="col-sm-1 control-group">
       No:
       <input type="radio" class="form-control p-4" name="q1" value="q1_no" id="q1_no" placeholder="" required="required" />

    </div>

    </div>
    <div class="form-row">
       <div class="col-sm-6 control-group">
          <label>25.Have you paid the full amount?</label>

      </div>
      <div class="col-sm-2 control-group">
      </div>
      <div class="col-sm-1 control-group">
       Yes:
       <input type="radio" class="form-control p-4" name="u1" value="u1_yes" id="u1_yes" placeholder="" required="required" />

    </div>
    <div class="col-sm-1 control-group">
       No:
       <input type="radio" class="form-control p-4" name="u1" value="u1_no" id="u1_no" placeholder="" required="required" />

    </div>

    </div>

    <div class="text-center pb-2">
       <h6 class="text-uppercase"></h6>
    </div>
    <div class="form-row">
       <div class="col-sm-12 control-group">
        <label>26. Details of your medical treatment in the UK:
       Copy the following section to provide details of all medical treatments you had in the UK.</label>  

      </div>

    </div>
     <div class="form-row">
       <div class="col-sm-6 control-group">
        Where did you go for your previous medical treatment in the UK  

      </div>
      <div class="col-sm-6 control-group">
       
     <select name="travel_tt" id="travel_tt" class="form-control">
                     <option value="">Select</option>
                     <option value="To a doctor, clinic or hospital for non-emergency treatment">To a doctor, clinic or hospital for non-emergency treatment</option>
                     <option value="Accident and Emergency (A&E) at a hospital">Accident and Emergency (A&E) at a hospital</option>
    </select>

    </div>
    

      
      
    

    </div><br>
    <div class="form-row">
    <div class="col-sm-6 control-group">
    </div>
    <div class="col-sm-6 control-group">
       
       <input type="text" class="form-control p-4" name="hospital" id="hospital" placeholder="Name of hospital, clinic or doctors's surgery" required="required" data-validation-required-message="Name of hospital, clinic or doctors's surgery" />

    </div>
    </div><br>
    <div class="form-row">
    <div class="col-sm-6 control-group">
    </div>
    <div class="col-sm-6 control-group">
       
       <input type="text" class="form-control p-4" name="addressp" id="addressp" placeholder="Address (including a postcode)" required="required" data-validation-required-message="Address (including a postcode)" />

    </div>
    </div><br>
<div class="form-row">
    <div class="col-sm-6 control-group">
    </div>
    <div class="col-sm-6 control-group">
      <div class="form-group">
        <div class="mdate" id="mdate" data-target-input="nearest">
            <input type="text" name="mdate" class="form-control border-1 p-4 datetimepicker-input" placeholder="When did you start receiving this medical treatment?" data-target="#mdate" data-toggle="datetimepicker"/>
        </div>
    </div> 
    <div class="form-group">
        <div class="msdate" id="msdate" data-target-input="nearest">
            <input type="text" name="msdate" class="form-control border-1 p-4 datetimepicker-input" placeholder="When did you stop receiving this medical treatment?" data-target="#msdate" data-toggle="datetimepicker"/>
        </div>
    </div>
      

    </div>
</div>
<div class="form-row">
    <div class="col-sm-6 control-group">
    <label>27. Have you applied for leave to remain in the UK in the past 10 years?</label>
    
    </div>
    <div class="col-sm-1 control-group">
    </div>
    <div class="col-sm-1 control-group">
       If Yes:
       <input type="radio" class="form-control p-4" name="w1" value="w1_yes" id="w1_yes" placeholder="" required="required" onclick="show12();show13();" />

    </div>
    <div class="col-sm-1 control-group">
       No:
       <input type="radio" class="form-control p-4" name="w1" value="w1_no" id="w1_no" placeholder="" required="required" onclick="show11();show14();"/>

    </div>
    
</div>
<div  class="form-row ">
    <div class="col-sm-6 control-group">
    
    
    </div>
    <div id="div6"class="col-sm-3 control-group hide">
    <div class="form-group">
        <div class="dop" id="ddpdateddpdate" data-target-input="nearest">
            <input type="text" name="ddpdate" class="form-control border-1 p-4 datetimepicker-input" placeholder="Date of application:" data-target="#ddpdate" data-toggle="datetimepicker"/>
        </div>
    </div>
    </div>
    <div id="div7" class="col-sm-3 control-group hide">
    <input type="text" class="form-control p-4" name="resultapp" id="resultapp" placeholder="Result of application:" required="required" data-validation-required-message="Result of application:" />
    </div>
   
    
</div>
<div class="form-row">
    <div class="col-sm-6 control-group">
    <label>28. Do you have a UK National Insurance number?</label>
    
    </div>
    <div class="col-sm-1 control-group">
    </div>
    <div class="col-sm-1 control-group">
       If Yes:
       <input type="radio" class="form-control p-4" name="b1" value="b1_yes" id="b1_yes" placeholder="" required="required" onclick="show15();" />

    </div>
    <div class="col-sm-1 control-group">
       No:
       <input type="radio" class="form-control p-4" name="b1" value="b1_no" id="b1_no" placeholder="" required="required" onclick="show16();" />

    </div>
    
</div>
<div class="form-row">
    <div class="col-sm-6 control-group">
    
    
    </div>
    <div class="col-sm-1 control-group">
   
    </div>
    <div id="div8" class="col-sm-4 control-group hide">
    <input type="text" class="form-control p-4" name="nino" id="resultapp" placeholder="NINO number:" required="required" data-validation-required-message="NINO number:" />
    </div>
   
    
</div>
<div class="form-row">
    <div class="col-sm-6 control-group">
    <label>29. Do you have a UK driving licence?</label>
    
    </div>
    <div class="col-sm-1 control-group">
    </div>
    <div class="col-sm-1 control-group">
       If Yes:
       <input type="radio" class="form-control p-4" name="d1" value="d1_yes" id="d1_yes" placeholder="" required="required" onclick="show17();" />

    </div>
    <div class="col-sm-1 control-group">
       No:
       <input type="radio" class="form-control p-4" name="d1" value="d1_no" id="d1_no" placeholder="" required="required" onclick="show18();" />

    </div>
    
</div>
<div class="form-row">
    <div class="col-sm-6 control-group">
    
    
    </div>
    <div class="col-sm-1 control-group">
   
    </div>
    <div id="div9" class="col-sm-4 control-group hide">
    <input type="text" class="form-control p-4" name="licno" id="resultapp" placeholder="Licence number:" required="required" data-validation-required-message="Licence number:" />
    </div>
   
    
</div>
<div class="form-row">
    <div class="col-sm-6 control-group">
    <label>30. Have you received any public funds
(money) in the UK?</label>
    
    </div>
    <div class="col-sm-1 control-group">
    </div>
    <div class="col-sm-1 control-group">
       Yes:
       <input type="radio" class="form-control p-4" name="f1" value="f1_yes" id="f1_yes" placeholder="" required="required" />

    </div>
    <div class="col-sm-1 control-group">
       No:
       <input type="radio" class="form-control p-4" name="f1" value="f1_no" id="f1_no" placeholder="" required="required" />

    </div>
    
</div>
<div class="text-center pb-2">
       <h6 class="text-uppercase">WORLD TRAVEL HISTORY</h6>

</div>
<div class="form-row">
    <div class="col-sm-6 control-group">
    <label>31. Have you ever worked for any of the
    following types of organisation?</label>
    <ul>
    <li>Australia</li>
    <li>Canada</li>
    <li>New Zealand</li>
    <li>USA</li>
    <li>Switzerland</li>
    <li>European Economic Area (do not include travel to the U</li>
    </ul>
    
    </div>
    <div class="col-sm-4 control-group">
                    <select name="travel" id="travel" class="form-control">
                     <option value="">Select</option>
                     <option value="Zero">Zero</option>
                     <option value="Once">Once</option>
                     <option value="2 to 5 times">2 to 5 times </option>
                     <option value="6 or more times">6 or more times</option>
                    </select>
    </div>
    
   
    
</div>
<div class="form-row">
    <div class="col-sm-6 control-group">
    <label>32. Details of your most recent visit</label>
    <input type="text" class="form-control p-4" name="rcountry" id="resultapp" placeholder="Country" required="required" data-validation-required-message="Country:" /><br>
    <input type="text" class="form-control p-4" name="reason" id="resultapp" placeholder="Reason" required="required" data-validation-required-message="Reason:" /><br>
    <div class="form-group">
        <div class="date" id="dov" data-target-input="nearest">
            <input type="text" name="dov" class="form-control border-1 p-4 datetimepicker-input" placeholder="Date of visit:" data-target="#dov" data-toggle="datetimepicker"/>
        </div>
     </div><br>

    <input type="text" class="form-control p-4" name="hhlong" id="hhlong" placeholder="How long was your visit?" required="required" data-validation-required-message="How long was your visit?" />
    
    </div>
    <div class="col-sm-6 control-group">
    <label>Details of your second most recent visit</label>
    <input type="text" class="form-control p-4" name="scountry" id="scountry" placeholder="Country" required="required" data-validation-required-message="Country:" /><br>
    <input type="text" class="form-control p-4" name="sreason" id="resultapp" placeholder="Reason" required="required" data-validation-required-message="Reason:" /><br>
    <div class="form-group">
        <div class="date" id="sdov" data-target-input="nearest">
            <input type="text" name="sdov" class="form-control border-1 p-4 datetimepicker-input" placeholder="Date of visit:" data-target="#sdov" data-toggle="datetimepicker"/>
        </div>
     </div><br>

    <input type="text" class="form-control p-4" name="shlong" id="shlong" placeholder="How long was your visit?" required="required" data-validation-required-message="How long was your visit?" />
    
    </div>
     
    
   
    
</div><br>
<div class="form-row">
    <div class="col-sm-6 control-group">
    <label>33.Have you been to any other countries in the past 10 years?(Do not include visits to the UK, USA, Canada, Australia, New Zealand, Switzerland or the European Economic Area.)</label>
    
    
    </div>
     <div class="col-sm-1 control-group">
    </div>
    <div class="col-sm-1 control-group">
       Yes:
       <input type="radio" class="form-control p-4" name="h1" value="h1_yes" id="h1_yes" placeholder="" required="required" />

    </div>
    <div class="col-sm-1 control-group">
       No:
       <input type="radio" class="form-control p-4" name="h1" value="h1_no" id="h1_no" placeholder="" required="required" />

    </div>
    
   
    
</div>
<div class="form-row">
    <div class="col-sm-12 control-group">
    <label>34. Details of your world travel history(Copy the following section to provide details of all countries visited in the past 10 years.)</label>
    
    
    </div>
   
    
    
   
    
</div>
<div class="form-row">
    <div class="col-sm-4 control-group">
     <input type="text" class="form-control p-4" name="country34" id="country34" placeholder="Country" required="required" data-validation-required-message="Country:" /><br>
    <input type="text" class="form-control p-4" name="reason34" id="reason34" placeholder="Reason" required="required" data-validation-required-message="Reason:" /><br>
    <div class="form-group">
        <div class="date" id="entrydate1" data-target-input="nearest">
            <input type="text" name="entrydate1" class="form-control border-1 p-4 datetimepicker-input" placeholder="Date of Entry:" data-target="#entrydate1" data-toggle="datetimepicker"/>
        </div>
     </div><br>
     <div class="form-group">
        <div class="date" id="exitdate1" data-target-input="nearest">
            <input type="text" name="exitdate1" class="form-control border-1 p-4 datetimepicker-input" placeholder="Date of Exit:" data-target="#exitdate1" data-toggle="datetimepicker"/>
        </div>
     </div><br>

    
    
    
    
    </div>
    <div class="col-sm-4 control-group">
      <input type="text" class="form-control p-4" name="country343" id="country343" placeholder="Country" required="required" data-validation-required-message="Country:" /><br>
    <input type="text" class="form-control p-4" name="reason343" id="reason343" placeholder="Reason" required="required" data-validation-required-message="Reason:" /><br>
    <div class="form-group">
        <div class="date" id="entrydate2" data-target-input="nearest">
            <input type="text" name="entrydate2" class="form-control border-1 p-4 datetimepicker-input" placeholder="Date of Entry:" data-target="#entrydate2" data-toggle="datetimepicker"/>
        </div>
     </div><br>
     <div class="form-group">
        <div class="date" id="exitdate2" data-target-input="nearest">
            <input type="text" name="exitdate2" class="form-control border-1 p-4 datetimepicker-input" placeholder="Date of Exit:" data-target="#exitdate2" data-toggle="datetimepicker"/>
        </div>
     </div><br>
    
    
    
    </div>
    <div class="col-sm-4 control-group">
      <input type="text" class="form-control p-4" name="country3434" id="country3434" placeholder="Country" required="required" data-validation-required-message="Country:" /><br>
    <input type="text" class="form-control p-4" name="reason3434" id="reason3434" placeholder="Reason" required="required" data-validation-required-message="Reason:" /><br>
    <div class="form-group">
        <div class="date" id="entrydate3" data-target-input="nearest">
            <input type="text" name="entrydate3" class="form-control border-1 p-4 datetimepicker-input" placeholder="Date of Entry:" data-target="#entrydate3" data-toggle="datetimepicker"/>
        </div>
     </div><br>
     <div class="form-group">
        <div class="date" id="exitdate3" data-target-input="nearest">
            <input type="text" name="exitdate3" class="form-control border-1 p-4 datetimepicker-input" placeholder="Date of Exit:" data-target="#exitdate3" data-toggle="datetimepicker"/>
        </div>
     </div><br>
    
    
    
    </div>
   
    
    
   
    
</div>







 <div class="text-center pb-2">
       <h6 class="text-uppercase">EMPLOYMENT HISTORY</h6>

</div>
<div class="form-row">
    <div class="col-sm-6 control-group">
    <label>35. Have you ever worked for any of the
    following types of organisation?</label>
    <ul>
    <li>Armed Forces (career</li>
    <li>Armed Forces (compulsory national or military service)</li>
    <li>Government (including Public or Civil Administration and non-military compulsory national service)</li>
    <li>Intelligence services</li>
    <li>Security organisations (including police and private security services)</li>
    <li>Media organisations</li>
    <li>Judiciary (including work as a judge or magistrate)</li>
    </ul>
    
    </div>
     <div class="col-sm-1 control-group">
    </div>
    <div class="col-sm-1 control-group">
       Yes:
       <input type="radio" class="form-control p-4" name="j1" value="j1_yes" id="j1_yes" placeholder="" required="required" />

    </div>
    <div class="col-sm-1 control-group">
       No:
       <input type="radio" class="form-control p-4" name="j1" value="j1_no" id="j1_no" placeholder="" required="required" />

    </div>
    
   
    
</div>
<div class="form-row">
    <div class="col-sm-6 control-group">
    <label>36. Which of the above organisations have you worked for?(Include information for any paid or unpaid work. Provide further information, including your job title or the role you were in, the organisation you worked for and the dates of employment)</label>
    
    
    </div>
     <div class="col-sm-6 control-group">
     <input type="text" class="form-control p-4" name="licno1" id="licno1" placeholder="" required="required" data-validation-required-message="Licence number:" />

    </div>
    
    
   
    
</div>
<div class="form-row">
    <div class="col-sm-4 control-group">
    </div>
    <div class="col-sm-3 control-group">
    <div style="text-align: center;">
        
        <input type="submit" name="btn_submit" class="btn btn-primary" value="Submit">
    </div><br>
    
    </div>
     <div class="col-sm-3 control-group">
     

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
    <script>
   
function show1(){
  document.getElementById('div1').style.display ='none';
}
function show2(){
  document.getElementById('div1').style.display = 'block';
}
function show3(){
  document.getElementById('div2').style.display ='none';
}
function show4(){
  document.getElementById('div2').style.display = 'block';
}
function show5(){
  document.getElementById('div3').style.display ='none';
}
function show6(){
  document.getElementById('div3').style.display = 'block';
}
function show7(){
  document.getElementById('div4').style.display ='none';
}
function show8(){
  document.getElementById('div4').style.display = 'block';
}
function show9(){
  document.getElementById('div5').style.display ='none';
}
function show10(){
  document.getElementById('div5').style.display = 'block';
}
function show11(){
  document.getElementById('div6').style.display ='none';
}
function show12(){
  document.getElementById('div6').style.display = 'block';
}
function show13(){
  document.getElementById('div7').style.display = 'block';
}
function show14(){
  document.getElementById('div7').style.display = 'none';
}
function show15(){
  document.getElementById('div8').style.display ='block';
}
function show16(){
  document.getElementById('div8').style.display = 'none';
}
function show17(){
  document.getElementById('div9').style.display ='block';
}
function show18(){
  document.getElementById('div9').style.display = 'none';
}
function show19(){
  document.getElementById('div11').style.display ='block';
}
function show20(){
  document.getElementById('div12').style.display = 'block';
}
function show21(){
  document.getElementById('div11').style.display ='hide';
}
function show22(){
  document.getElementById('div12').style.display = 'block';
}
function show23(){
  document.getElementById('div14').style.display = 'block';
}
function show24(){
  document.getElementById('div15').style.display = 'block';
}
   </script>     


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