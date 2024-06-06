<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Immigration_Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function visa_refusals()
	{
		$this->load->view('visa_refusals');
	}
	public function services()
	{
		$this->load->view('services');
	}
	public function family_visa()
	{
		$this->load->view('family_visa');
	}
	public function work_visa()
	{
		$this->load->view('work_visa');
	}
	public function business_visa()
	{
		$this->load->view('business_visa');
	}
	public function application_form()
	{
		$this->load->view('application_form');
	}
	public function save_details()
	{
		                   /*$this->form_validation->set_rules('visa_app', 'Visa App', 'required');
                		   $this->form_validation->set_rules('un_date', 'Select Date', 'required');
                           $this->form_validation->set_rules('notice_period', 'Notice Period', 'numeric|required');
                           //$this->form_validation->set_rules('plan_date', 'Visa App', 'required|regex_match[(0[1-9]|1[0-9]|2[0-9]|3(0|1))-(0[1-9]|1[0-2])-\d{4}]');
                           $this->form_validation->set_rules('tel_no', 'Mobile No', 'required|regex_match[/^[0-9]{10}$/]');
                           $this->form_validation->set_rules('email_id', 'Email', 'trim|valid_email');
                		   $this->form_validation->set_rules('given_name', 'Given Name', 'required');
                           $this->form_validation->set_rules('last_name', 'Last Name', 'required');
                           //$this->form_validation->set_rules('giv_name1', 'Given Name', 'required');
                           //$this->form_validation->set_rules('las_name1', 'Last Name', 'required');
                           $this->form_validation->set_rules('status', 'Status', 'required');
                           $this->form_validation->set_rules('addr1', 'Address', 'required');
                           $this->form_validation->set_rules('addr2', 'Address', 'required');
                           $this->form_validation->set_rules('city', 'City', 'required');
                           $this->form_validation->set_rules('state', 'State', 'required');
                           $this->form_validation->set_rules('country', 'Country', 'required');
                           $this->form_validation->set_rules('postcode', 'Postcode', 'numeric|required');
                           $this->form_validation->set_rules('c1', 'Correspondence Address', 'required');
                           //$this->form_validation->set_rules('addr3', 'Address', 'required');
                           //$this->form_validation->set_rules('city1', 'City', 'required');
                           //$this->form_validation->set_rules('state1', 'State', 'required');
                           //$this->form_validation->set_rules('country1', 'Country', 'required');
                           //$this->form_validation->set_rules('postcode1', 'Postcode', 'numeric|required');
                           $this->form_validation->set_rules('long_live', 'How long Live', 'numeric|required');
                           $this->form_validation->set_rules('addrr1', 'Address', 'required');
                           $this->form_validation->set_rules('addrr2', 'Address', 'required');
                           $this->form_validation->set_rules('city2', 'City', 'required');
                           $this->form_validation->set_rules('state2', 'State', 'required');
                           $this->form_validation->set_rules('country2', 'Country', 'required');
                           $this->form_validation->set_rules('postcode2', 'Postcode', 'numeric|required');
                           $this->form_validation->set_rules('live_date', 'Live Date', 'required');
                           $this->form_validation->set_rules('stop_date', 'Stop Date ', 'required');
                           $this->form_validation->set_rules('own', 'Own', 'required');
                           $this->form_validation->set_rules('rent', 'Rent', 'required');
                           $this->form_validation->set_rules('other', 'Other', 'required');
                           $this->form_validation->set_rules('i1', 'Nationality Card', 'required');
                           //$this->form_validation->set_rules('card_no', 'National Identity Card No ', 'numeric|required');
                           //$this->form_validation->set_rules('authority', 'Authority', 'required');
                           //$this->form_validation->set_rules('issue_date', 'Issue Date', 'required');
                           //$this->form_validation->set_rules('expiry_date', 'Expiry Date', 'required');
                           $this->form_validation->set_rules('n1', 'Other Nationality or Citizenship', 'required');
						               //$this->form_validation->set_rules('nationality', 'Other Nationality', 'required');
						               $this->form_validation->set_rules('gname', 'Given Name', 'required');
                           $this->form_validation->set_rules('lname', 'Last Name', 'required');
                           $this->form_validation->set_rules('dob', 'Date Of Birth', 'required');
                           $this->form_validation->set_rules('nation', 'Nationality', 'required');
                           $this->form_validation->set_rules('m1', 'Currently live with you', 'required');
                          // $this->form_validation->set_rules('ad1', 'Address', 'required');
                           //$this->form_validation->set_rules('city12', 'City', 'required');
                           //$this->form_validation->set_rules('state12', 'State', 'required');
                          // $this->form_validation->set_rules('country12', 'Country', 'required');
                           //$this->form_validation->set_rules('postcode12', 'Postcode', 'numeric|required');
                           $this->form_validation->set_rules('mname', 'Given Name of Mother', 'required');
                           $this->form_validation->set_rules('llname', 'Last Name Of Mother', 'required');
                           $this->form_validation->set_rules('mdob', 'Date of Birth Of Mother ', 'required');
                           $this->form_validation->set_rules('countryn', 'Country of Notionality', 'required');
                            $this->form_validation->set_rules('mname1', 'Given Name of Father', 'required');
                           $this->form_validation->set_rules('lname1', 'Last Name Of Father', 'required');
                           $this->form_validation->set_rules('mdob1', 'Date of Birth Of Father ', 'required');
                           $this->form_validation->set_rules('countryn1', 'Country of Notionality of Father', 'required');
                           $this->form_validation->set_rules('l1', 'Have they always had the same nationality', 'required');
                           $this->form_validation->set_rules('t1', 'Have they always had the same nationality', 'required');
                           $this->form_validation->set_rules('v1', 'Do you have any family in the UK', 'required');
                            //$this->form_validation->set_rules('time_uk', ' How many times have you been to the UK in the past 10 years? ', 'numeric|required');
                           $this->form_validation->set_rules('o1', 'Have you been issued with a UK visa in the past 10 years', 'required');
                           $this->form_validation->set_rules('dreason', 'Reason', 'required');
                           $this->form_validation->set_rules('ddate', 'Date you arrived in the UK', 'required');
                           $this->form_validation->set_rules('dlong', 'How long were you in the UK', 'required');
                            $this->form_validation->set_rules('p1', ' Did you receive medical treatment in the UK ', 'required');
                           $this->form_validation->set_rules('q1', 'Were you told that you had to pay the hospital, clinic or doctors surgery for your medical treatment', 'required');
                           $this->form_validation->set_rules('u1', 'Have you paid the full amount?', 'required');
                           $this->form_validation->set_rules('hospital', 'Name of Hospital', 'required');
                           $this->form_validation->set_rules('addressp', 'Address Including Postcode', 'required');
                            $this->form_validation->set_rules('mdate', 'Start Receiveing Medical Treatment Date', 'required');
                            $this->form_validation->set_rules('msdate', 'Stop Receiveing Medical Treatment Date', 'required');
                           $this->form_validation->set_rules('w1', 'Have you applied for leave to remain in the UK in the past 10 years', 'required');
                           //$this->form_validation->set_rules('ddpdate', 'Date of Application', 'required');
                           //$this->form_validation->set_rules('resultapp', 'Result Of Application', 'required');
                           $this->form_validation->set_rules('b1', 'Do you have a UK National Insurance number', 'required');
                             //$this->form_validation->set_rules('nino', 'NINO Number', 'numeric|required');
                            $this->form_validation->set_rules('d1', 'Do you have a UK National Insurance number?', 'required');
                           //$this->form_validation->set_rules('licno', 'Licenece No', 'numeric|required');
                           $this->form_validation->set_rules('f1', 'Do you have a UK National Insurance number?', 'required');
                           $this->form_validation->set_rules('travel_tt', 'Have you ever worked for any of the following types of organisation?');
                           $this->form_validation->set_rules('rcountry', 'Most recent visit Country', 'required');
                           $this->form_validation->set_rules('reason', 'Most recent visit reason', 'required');
                           $this->form_validation->set_rules('dov', 'Most recent visit Date of Visit', 'required');
                           $this->form_validation->set_rules('hhlong', 'Most recent visit How long was your visit','numeric|required');
                           $this->form_validation->set_rules('h1', 'Have you been to any other countries in the past 10 years?', 'required');
                            $this->form_validation->set_rules('country34', 'Details of your world travel history Country', 'required');
                           $this->form_validation->set_rules('reason34', 'Details of your world travel history reason', 'required');
                           $this->form_validation->set_rules('entrydate1', 'Details of your world travel history Entry Date', 'required');
                           $this->form_validation->set_rules('exitdate1', 'Details of your world travel history Exit Date','required');
                           $this->form_validation->set_rules('j1', 'Have you ever worked for any of the following types of organisation?', 'required');
                           $this->form_validation->set_rules('licno1', 'Have you ever worked for any of the following types of organisation?', 'required');
		                    
		                   if ($this->form_validation->run() == false)
		                     	 {
		                     	 //$this->session->set_flashdata("error","You have encountered an error");
		                     	 
					             
					            
					             }else{*/
					             $save=$this->Immigration_Model->insertuserdetails();
		                         if($save)
						        {
					             $this->session->set_flashdata("success","Details Saved Successfully.");
					             
					            
					             }else{
					             $this->session->set_flashdata("error","You have encountered an error");
					             //echo $this->email->print_debugger();
					            

					             }
					             $this->load->view('application_form');
					             
	}

	public function send_email(){
		                  $this->form_validation->set_rules('mobile_no', 'Mobile No', 'required|regex_match[/^[0-9]{10}$/]');
                          $this->form_validation->set_rules('email', 'Email', 'trim|valid_email');
			              $this->load->library('email');
				                $config['protocol']    = 'smtp';
						        $config['smtp_host']    = 'ssl://smtp.gmail.com';
						        $config['smtp_port']    = '465';
						        $config['smtp_timeout'] = '30';
						        $config['smtp_user']    = 'sonaligavande1994@gmail.com';
						        $config['smtp_pass']    = 'hjmj bypz zhcf vrco';
						        $config['charset']    = 'utf-8';
						        $config['newline']    = "\r\n";
						        $config['mailtype'] = 'html';  
						        $config['validation'] = TRUE;    

						        $this->email->initialize($config);
						        $to=$this->input->post('email');
						        $subject=$this->input->post('subject');
						        $message=$this->input->post('message');
						      
						        $this->email->from('sonaligavande1994@gmail.com', 'Sonali');
						        $this->email->to($to); 
								$this->email->subject($subject);
						        $this->email->message($message);  
						        if($this->form_validation->run() == true){
			                    if($this->email->send())
						        {
					             $this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
					             
					            
					             }else{
					             $this->session->set_flashdata("email_sent","You have encountered an error");
					             //echo $this->email->print_debugger();
					            

					             }
					             //$this->load->view('formsuccess');
					             $this->load->view('contact');
					        
					           }else{

					             //$this->session->set_flashdata("error","Some problems occured, please try again.");
					            $this->load->view('contact');
					        
					           }
					           
    }
    	public function send_enquiry_email(){
		                  $this->form_validation->set_rules('your_mobile_no', 'Mobile No', 'required|regex_match[/^[0-9]{10}$/]');
                          $this->form_validation->set_rules('your_email', 'Email', 'trim|valid_email');
			              $this->load->library('email');
				                $config['protocol']    = 'smtp';
						        $config['smtp_host']    = 'ssl://smtp.gmail.com';
						        $config['smtp_port']    = '465';
						        $config['smtp_timeout'] = '30';
						        $config['smtp_user']    = 'sonaligavande1994@gmail.com';
						        $config['smtp_pass']    = 'hjmj bypz zhcf vrco';
						        $config['charset']    = 'utf-8';
						        $config['newline']    = "\r\n";
						        $config['mailtype'] = 'html';  
						        $config['validation'] = TRUE;    

						        $this->email->initialize($config);
						        $to=$this->input->post('your_email');
						        //$subject=$this->input->post('subject');
						        $message=$this->input->post('your_message');
						        $link="https://goldenjetaviation.com/Immigration/Immigration_Controller/application_form";
						        $msg=$message.'<br>'.'<h3>Fill the Form On This Link</h3>'.$link.'<br><br>'.'OR DOWNLOAD'.'<br><br>'.'https://goldenjetaviation.com/Immigration/Immigration_Controller/downloadPdf';
						        
						        $this->email->from('sonaligavande1994@gmail.com', 'Sonali');
						        $this->email->to($to); 
						        $this->email->reply_to($to);
								$this->email->subject('This Is Enquiry');
								
						        $this->email->message($msg);
						        
						        if($this->form_validation->run() == true){
			                    if($this->email->send())
						        {
					             $this->session->set_flashdata("enquiry_email_sent","Congragulation Email Send Successfully.");
					             
					            
					             }else{
					             $this->session->set_flashdata("enquiry_email_sent","You have encountered an error");
					             //echo $this->email->print_debugger();
					            

					             }
					             //$this->load->view('formsuccess');
					             $this->load->view('home');
					        
					           }else{

					             //$this->session->set_flashdata("error","Some problems occured, please try again.");
					            $this->load->view('home');
					        
					           }
					           
    }
   public function downloadPdf(){
   						require_once(APPPATH.'helpers/tcpdf/tcpdf.php');
   				// create new PDF document
				$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
				$pdf->SetTitle('Dynamic PDF');
				// add a page
               $pdf->AddPage();
               $pdf->SetFont('helvetica', '', 14);
               // create some HTML content
               $html = '

   <table border="1">
   <tr>
    <td align="center" colspan="2">APPLICATION INFORMATION</td>
   
   
  </tr>

  <tr>
    <td>1. Preferred Visa Application Centre in the
country where application will be submitted</td>
    <td></td>
   <td></td>
  </tr>
  <tr>
    <td>2.Unavailable dates to attend an appointment</td>
    
    <td></td>
  </tr>
  <tr>
    <td>3. Notice period for your current employer</td>
    <td></td>
    
  </tr>
  <tr>
    <td>4. Your planned date of travel to the UK</td>
    <td></td>
    
  </tr>
  <tr>
    <td align="center" colspan="2">PERSONAL INFORMATION</td>
    
  </tr>
  <tr>
    <td>5. Telephone number and email address</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                       </td>
    
  </tr>
   <tr>
    <td> 6. What is your name, as shown in your
current passport or travel document?</td>
    <td>Given names:          <br>Last names:</td>
     </tr>
    <tr>
    <td>7. In addition to the names already provided,
are you now or have you ever been known by
another name?
(You must provide all your names. For example, if you
changed your name after marriage or have a different
name that you use for professional purposes)</td>
    <td>Yes (provide details below):<br>
    No:<br>Given names:<br>
    Last names:
    </td>
    
  </tr> <tr>
    <td>8. What is your relationship status?</td>
    <td>Single<br>Married<br>UnMarried<br>Divorced<br>Separated<br>Widowed</td>
    
  </tr>
  <tr>
    <td colspan="2">9. Your address
(Address in your home country where you will submit your Visa Application)</td>
  </tr>
   <tr>
    <td>Address Line 1</td>
    <td></td>
    
  </tr>
    <tr>
    <td>Address Line 2</td>
    <td></td>
    
  </tr>
    <tr>
    <td>Town/City</td>
    <td></td>
    
  </tr>
   <tr>
    <td>Province/State</td>
    <td></td>
    
  </tr>
   <tr>
    <td>Country</td>
    <td></td>
    
  </tr>
   <tr>
    <td>Postcode</td>
    <td></td>
    
  </tr>
  <tr>
    <td>10. Is this address also your correspondence
address?</td>
    <td>Yes:<br>
    No (provide details below):<br>
    Address:<br>
    Town/City:<br>
    Province/State:<br>
    Country:<br>
    Postcode:
</td>
    
  </tr> <tr>
    <td>11. a)How long have you lived at this address?</td>
    <td></td>
    
  </tr> <tr>
    <td colspan="2">12. Your previous address(es), if you have lived at the address above for less than 2 years.
(Copy the following section to provide all addresses you have lived at in the last 2 years)</td>
    
    
  </tr>
    <tr>
    <td>Address Line 1</td>
    <td></td>
    
  </tr>
    <tr>
    <td>Address Line 2</td>
    <td></td>
    
  </tr>
    <tr>
    <td>Town/City</td>
    <td></td>
    
  </tr>
   <tr>
    <td>Province/State</td>
    <td></td>
    
  </tr>
   <tr>
    <td>Country</td>
    <td></td>
    
  </tr>
   <tr>
    <td>Postcode</td>
    <td></td>
    
  </tr>
   <tr>
   <td>When did you start living at this address?</td>
   <td></td>
    
  </tr>
  <tr>
   <td>When did you stop living at this address?</td>
   <td></td>
    
  </tr>
  <tr>
    <td>13. What is the ownership status of your
home?
(If ‘other’: give more details about your living situation,
such as who you live with and who owns the property)</td>
    <td>I Owned It<br>
    I Rent It<br>
    Other</td>
    
  </tr>
  <tr>
   <td>14. Do you have a valid national identity card?
This includes identity cards, issued from non-UK
governments. This does not include driving licences. If
you have an internal passport, provide the details here</td>
 <td>Yes (provide details below):<br>
   No:<br>
   National identity card number:<br>
   Issuing authority:<br>
   Issue date (if applicable): <br>
   Expiry date (if applicable):</td>

  
    
  </tr><tr>
   <td>15. Do you currently hold, or have you ever
held, any other nationality or citizenship?
You must provide all the nationalities that you currently
hold or have ever held</td>
  <td>Yes (provide details below):<br>
   No:<br>
   Your other nationality:</td>
  </tr>
  <tr>
   <td align="center" colspan="2">SPOUSE/PARTNER’S DETAIL</td>
   
    
  </tr><tr>
   <td align="center" colspan="2">Complete this section only if you selected ‘Married or a civil partner’ in question 8.
You should use your spouse or partner’s passport to complete this section</td>
   
    
  </tr><tr>
   <td>16. Given names:<br>
   Last name:<br>
   Date of Birth:<br>
   Nationality:<br></td>
  <td></td>
  </tr><tr>
   <td>Do they currently live with you?</td>
   <td>Yes</td>
    
  </tr><tr>
   <td></td>
   <td>No (provide details below):<br>
    Address:<br>
    Town/City:<br>
    Province/State:<br>
    Country:<br>
    Postcode:
   </td>
  
    
  </tr>
   <tr>
   <td align="center" colspan="2">PARENTS’ DETAILS</td>
   
   </tr>
   <tr>
   
   <td>Mother<br>
   Given names:<br>
   Last name:<br>
   Date of birth:<br>
   Country of nationality:<br>
   Have they always had the
   same nationality?<br>
   Yes:<br>
   No (provide details below):<br>
   Their country of nationality
   when you were born:
   </td>
   <td>Father<br>
   Given names:<br>
   Last name:<br>
   Date of birth:<br>
   Country of nationality:<br>
   Have they always had the
   same nationality?<br>
   Yes:<br>
   No (provide details below):<br>
   Their country of nationality
   when you were born:</td>
    
   </tr>
  <tr>
   <td align="center" colspan="2">FAMILY IN THE UK</td>
   
    
  </tr><tr>
   <td>18. Do you have any family in the UK?<br>
   This includes:
 <ul><li>Immediate family - such as spouse, civil partner,
           parents or children</li>
           <li>Grandparents or grandchildren</li>
           <li>Your spouse or civil partners family</li>
           <li>Your childs spouse, civil partner or partner</li>
           <li>Your partner, if you have lived with them for 2 out of
           the last 3 years</li>
       </ul></td>
   
   <td> Yes:<br>
   IF No:<br>
   How many times have you been to the UK
            in the past 10 years?</td>
  </tr>
   <tr>
   <td>Their relationship to you:<br>
   Given names:<br>
   Last name:<br>
   Country of nationality:<br>
   What permission do they have to be in the
   UK:<br>
   Additional information / Passport number:</td>
   <td></td>
    
  </tr><tr>
   <td colspan="2" align="center">UK TRAVEL HISTORY</td>
   
    
  </tr><tr>
   <td>20. How many times have you been to the UK
in the past 10 years?</td>
   <td></td>
    
  </tr><tr>
   <td>21.Have you been issued with a UK visa in the
past 10 years?<br>
Yes:<br>
No:</td>
   <td></td>
    
  </tr>
<tr>
   <td style="width:33%;">22. Details of your most recent
visit:<br>
Reason:<br>
Date you arrived in the UK:<br>
How long were you in the UK?:</td>
 <td style="width:33%;" >22. Details of your second most recent
visit:<br>
Reason:<br>
Date you arrived in the UK:<br>
How long were you in the UK?:</td>
 <td style="width:34%;">22. Details of your third most recent
visit:<br>
Reason:<br>
Date you arrived in the UK:<br>
How long were you in the UK?:</td>

    
  </tr>
  <tr>
   <td style="width:50%;">23. Did you receive medical treatment in the
UK?
(For example, if you visited a doctor, clinic or hospital, this
counts as having medical treatment)</td>
   <td style="width:50%;">Yes:<br>
   No:</td>
    
  </tr>
   <tr>
   <td>24. Were you told that you had to pay the
hospital, clinic or doctors surgery for your
medical treatment?(This does not include the Immigration Health Surcharge)</td>
   <td>Yes:<br>
   No:</td>
    
    
  </tr>
  <tr>
   <td>25. Have you paid the full amount?</td>
   <td>Yes:<br>
   No:</td>
    
    
  </tr>
   <tr>
   <td colspan="2" style="width:50%;">26. Details of your medical treatment in the UK:
(Copy the following section to provide details of all medical treatments you had in the UK)</td>
   <td style="width:50%;">Yes:<br>
   No:</td>
    
    
  </tr>
   <tr>
   <td style="width:50%;">Where did you go for your previous
medical treatment in the UK?</td>
   <td style="width:50%;">Accident and Emergency (A&E) at a hospital:<br>
   To a doctor, clinic or hospital for non-emergency treatment:</td>
    
    
  </tr>
   <tr>
   <td style="width:50%;">Name of hospital, clinic or doctors
surgery</td>
   <td></td>
    
    
  </tr>
   <tr>
   <td>Address (including a postcode)</td>
   <td>Yes:<br>
   No:</td>
    
    
  </tr>
   <tr>
   <td>When did you start receiving this medical
treatment?</td>
   <td></td>
    
    
  </tr>
   <tr>
   <td>When did you stop receiving this medical
treatment?</td>
   <td>Yes (provide details below)
</td>
    
    
  </tr>
   <tr>
   <td>25. Have you paid the full amount?</td>
   <td>Yes:<br>
   No:</td>
    
    
  </tr>

   <tr>
   <td>27. Have you applied for leave to remain in
the UK in the past 10 years?</td>
   <td>Yes / No:<br>
Date of application: <br>
Result of application: approved / refused</td>
    
    
  </tr>
   <tr>
   <td>28. Do you have a UK National Insurance
number</td>
   <td>Yes(provide details below):
		No:<br>
        NINO number:</td>
    
    
  </tr>
   <tr>
   <td>29. Do you have a UK driving licence?</td>
   <td>Yes (provide details below):
    No:<br>
    Licence number:</td>
    
    
  </tr>
   <tr>
   <td>30. Have you received any public funds
(money) in the UK?
(This includes benefits for people on low incomes,
housing or child benefit)</td>
   <td>Yes:<br>
   No:</td>
    
    
  </tr>
   <tr>
   <td align="center" colspan="2">WORLD TRAVEL HISTORY</td>
   
    
    
  </tr>

   <tr>
   <td>31. How many times have you visited the
following places in the past 5 years?<br>
<ul>
    <li>Australia</li>
    <li>Canada</li>
    <li>New Zealand</li>
    <li>USA</li>
    <li>Switzerland</li>
    <li>European Economic Area (do not include travel to the U</li>
    </ul></td>
   <td><br>Zero:<br>
   Once:<br>
   2 to 5 times:<br>
   6 or more times:</td>
    
    
  </tr>
   <tr>
   <td>32. Details of your most recent visit:<br>Country:<br>
Reason:<br>
Date of visit:<br>
How long was your visit?</td>
<td> Details of your second most recent visit:<br>Country:<br>
Reason:<br>
Date of visit:<br>
How long was your visit?</td>
  
    
    
  </tr>
  <tr>
   <td>33. Have you been to any other countries in
the past 10 years?
Do not include visits to the UK, USA, Canada, Australia,
New Zealand, Switzerland or the European Economic
Area</td>
   <td>Yes:<br>
   No:</td>
    
    
  </tr>
   <tr>
   <td colspan="2">34. Details of your world travel history
  </td>
  <td></td></tr>
 <tr>  <td style="width:33%;">Country:<br>
Reason:<br>
Date of entry:<br>
Date of exit:</td>
  <td style="width:33%;">Country:<br>
Reason:<br>
Date of entry:<br>
Date of exit:</td>
  <td style="width:34%;">Country:<br>
Reason:<br>
Date of entry:<br>
Date of exit:</td>
    
    
  </tr>
  <tr>  <td style="width:33%;">Country:<br>
Reason:<br>
Date of entry:<br>
Date of exit:</td>
  <td style="width:33%;">Country:<br>
Reason:<br>
Date of entry:<br>
Date of exit:</td>
  <td style="width:34%;">Country:<br>
Reason:<br>
Date of entry:<br>
Date of exit:</td>
    
    
  </tr>
   <tr>
   <td align="center" colspan="2">EMPLOYMENT HISTORY</td>
   
    
    
  </tr>
   <tr>
   <td style="width:50%;">35. Have you ever worked for any of the
following types of organisation?<br>
<ul>
    <li>Armed Forces (career</li>
    <li>Armed Forces (compulsory national or military service)</li>
    <li>Government (including Public or Civil Administration and non-military compulsory national service)</li>
    <li>Intelligence services</li>
    <li>Security organisations (including police and private security services)</li>
    <li>Media organisations</li>
    <li>Judiciary (including work as a judge or magistrate)</li>
    </ul></td>
   <td style="width:50%;">Yes:<br>
   No:</td>
    
    
  </tr>
  <tr>
  <td style="width:50%;">36. Which of the above organisations have you
worked for?
(Include information for any paid or unpaid work. Provide
further information, including your job title or the role
you were in, the organisation you worked for and the
dates of employment)</td>
<td></td>
</tr>

 
</table>
   

';
$pdf->writeHTML($html, true, false, false, false, '');
$pdf->Output('Application_form.pdf', 'I');

   }

	}

