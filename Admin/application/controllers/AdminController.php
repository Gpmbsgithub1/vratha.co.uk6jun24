<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

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
		$this->load->view('admin_login');
	}
	public function admin_login_done()
	{
	          
              $this->form_validation->set_rules('username', 'Username', 'trim|required');
              $this->form_validation->set_rules('password', 'Password', 'trim|required'); 
              if($this->form_validation->run()==true)
              {
              	  $username = $this->input->post('username');
              	  $password=$this->input->post('password');
              	  $user=$this->AdminModel->check_admin_login($username,$password);
              	  //print_r($user);
              	  if(!empty($user)){
              	  	$sessArray['id']=$user['id'];
              	  	$sessArray['username']=$user['username'];
              	  	//print_r($sessArray);
              	  	$data['fetch_dt']=$this->AdminModel->displayUserData();
              	  	$this->session->set_userdata('user',$sessArray);
              	  	$user=$this->session->userdata('user');
              	    $data['user']=$user;
              	  	$this->session->set_flashdata('msg','Admin Login Successfully');
              	  	$this->load->view('display_users',$data);
              	  	}else{
              	  	$this->session->set_flashdata('error_msg','Invalid Email or Password');
              	  	$this->load->view('admin_login');
              	  }
              }
            
		      
		      
  }
	
  public function admin_dashboard(){
		
		 $user=$this->session->userdata('user');
         $data['user']=$user;
         $this->load->view('admin_dashboard',$data);
	}
  public function display_users(){
				
				 $data['fetch_dt']=$this->AdminModel->displayUserData();
				  $user=$this->session->userdata('user');
              	  $data['user']=$user;
			     $this->load->view('display_users',$data);
				    }
 	public function downloadPdf(){
           	   $data['edit_lead']=$this->AdminModel->editUserData($this->uri->segment('3'));
               foreach ($data as $rows){

               
               	require_once(APPPATH.'helpers/tcpdf/tcpdf.php');
	// create new PDF document
               	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

	// set document information
               	$pdf->SetCreator(PDF_CREATOR);
               	$pdf->SetTitle('Application Form');


	// set default header data
	//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 014', PDF_HEADER_STRING);

	// set header and footer fonts
               	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
               	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

	// set default monospaced font
               	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

	// set margins
               	$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
               	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
               	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

	// set auto page breaks
               	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

	// set image scale factor
               	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

	// set some language-dependent strings (optional)
               	if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
               		require_once(dirname(__FILE__).'/lang/eng.php');
               		$pdf->setLanguageArray($l);
               	}

	// ---------------------------------------------------------

	// IMPORTANT: disable font subsetting to allow users editing the document
               	$pdf->setFontSubsetting(false);

	// set font
               	$pdf->SetFont('helvetica', '', 10, '', false);

	// add a page
               	$pdf->AddPage();

	/*
	It is possible to create text fields, combo boxes, check boxes and buttons.
	Fields are created at the current position and are given a name.
	This name allows to manipulate them via JavaScript in order to perform some validation for instance.
	*/

	// set default form properties
	$pdf->setFormDefaultProp(array('lineWidth'=>1, 'borderStyle'=>'solid', 'fillColor'=>array(255, 255, 200), 'strokeColor'=>array(255, 128, 128)));


	$pdf->SetFont('helvetica', 'B', 13);
	$pdf->Cell(0, 5, 'APPLICATION INFORMATION', 0, 1, 'C');
	$pdf->Ln(10);

	$pdf->SetFont('helvetica', '', 12);






	$VisaApp = $rows['visa_app'];
	$pdf->Cell(120, 5, '1. Preferred Visa Application Centre:');
	$pdf->TextField('visa_app', 50, 5, array(), array('v'=>$VisaApp));
	$pdf->Ln(6);

	$UnDate = $rows['un_date'];
	$pdf->Cell(120, 5, '2. Unavailable dates to attend an appointment:');
	$pdf->TextField('un_date', 50, 5,array(), array('v'=>$UnDate));
	$pdf->Ln(6);


	$VisaApp = $rows['notice_period'];
	$pdf->Cell(120, 5, '3. Notice period for your current employer:');
	$pdf->TextField('notice_period', 50, 5, array(), array('v'=>$VisaApp));
	$pdf->Ln(6);

	$UnDate = $rows['plan_date'];
	$pdf->Cell(120, 5, '4. Your planned date of travel to the UK:');
	$pdf->TextField('plan_date', 50, 5,array(), array('v'=>$UnDate));
	$pdf->Ln(6);
	$pdf->SetFont('helvetica', 'B', 13);
	$pdf->Cell(0, 5, 'PERSONAL INFORMATION', 0, 1, 'C');
	$pdf->Ln(10);

	$pdf->SetFont('helvetica', '', 12);
	$UnDate = $rows['tel_no'];
	$pdf->Cell(120, 5, '5.Telephone No');
	$pdf->TextField('un_date', 50, 5,array(), array('v'=>$UnDate));
	$pdf->Ln(6);


	$VisaApp = $rows['email_id'];
	$pdf->Cell(120, 5, 'Email-Address:');
	$pdf->TextField('notice_period', 50, 5, array(), array('v'=>$VisaApp));
	$pdf->Ln(6);



	$gname = $rows['given_name'];
	$pdf->Cell(120, 5, '6.What is your Given Name, as shown in your passport:');
	$pdf->TextField('given_name', 50, 5,array(), array('v'=>$gname));
	$pdf->Ln(6);

	$lname = $rows['last_name'];
	$pdf->Cell(120, 5, 'What is your Last Name, as shown in your passport:');
	$pdf->TextField('last_name', 50, 5,array(), array('v'=>$lname));
	$pdf->Ln(6);
	/*$gname = $rows['given_name'];
	$pdf->Cell(110, 5, '6.What is your Given Name, as shown in your passport:');
	$pdf->TextField('given_name', 50, 5,array(), array('v'=>$gname));
	$pdf->Ln(6);*/

	$r1 = $rows['r1'];
	//die();
	// Check if r1 is equal to 'r1_yes'
	if ($r1 == 'r1_yes') {
	  // Set the checked attribute to 'checked'
		$checked = 'checked';
	}elseif($r1 == 'r1_no') {
	  // Set the checked attribute to an empty string
		$checked = 'checked';
	}else{
		$checked = '';
	}
	$pdf->Cell(120, 5, '7.In addition to the names provided,known by another name?:');
	//$pdf->RadioButton('drink', 5, array('readonly' => 'true'), array(), 'Water');
	if ($r1 == 'r1_yes') {
		$pdf->RadioButton('r1', 5, array(), array('v'=>$r1), $r1,$checked);
		$pdf->Cell(120, 5, 'Yes');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}elseif($r1 == 'r1_no') {
		$pdf->RadioButton('r1', 5, array(), array('v'=>$r1), $r1,$checked);
		$pdf->Cell(120, 5, 'No');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}else{
		$pdf->Cell(120, 5, '');
		$pdf->Ln(10);
	}
	/*$r1 = $rows['r1'];
	//die();
	// Check if r1 is equal to 'r1_yes'
	$pdf->Cell(120, 5, '7.In addition to the names provided,known by another name?:');
	$pdf->Ln(6);
	if ($r1 == 'r1_yes') {
	  // Set the checked attribute to 'checked'
	  $checked = 'checked';
	  
	  

	  $html = '<input type="radio" name="r1" value="' . $r1 . '" checked="checked">Yes';
	}elseif ($r1 == 'r1_no') {
	  // Set the checked attribute to an empty string
	  $checked = 'checked';
	  

	  $html = '<input type="radio" name="r1" value="' . $r1 . '" checked="checked">No';
	}else{
		 $checked = '';
		 
	}

	// Create the HTML code for the radio input


	// Write the HTML code to the PDF document
	$pdf->WriteHTML($html);

	$html = '<input type="radio" name="r1" ' . $checked . ' value="' . $r1 . '">No';

	$pdf->WriteHTML($html);*/
	$pdf->Cell(50, 5, 'IF YES');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->Ln(10);
	$giv_name1 = $rows['giv_name1'];
	$pdf->Cell(100, 5, 'Given Name');
	$pdf->TextField('giv_name1', 50, 5,array(), array('v'=>$giv_name1));
	$pdf->Ln(6);

	$las_name1 = $rows['las_name1'];
	$pdf->Cell(100, 5, 'Last Name');
	$pdf->TextField('las_name1', 50, 5,array(), array('v'=>$las_name1));
	$pdf->Ln(6);

	$status = $rows['status'];
	// Listbox
	$pdf->Cell(70, 5, '8. What is your relationship status?');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('status', 60, 5,array(), array('v'=>$status));
	$pdf->Ln(10);

	$address1 = $rows['addr1'];
	// Address
	$pdf->Cell(35, 5, 'Address:');
	$pdf->TextField('address', 60, 18, array('multiline'=>true, 'lineWidth'=>0, 'borderStyle'=>'none'), array('v'=>$address1));
	$pdf->Ln(20);


	$address2 = $rows['addr2'];
	// Address
	$pdf->Cell(35, 5, 'Address:');
	$pdf->TextField('address', 60, 18, array('multiline'=>true, 'lineWidth'=>0, 'borderStyle'=>'none'), array('v'=>$address2));
	$pdf->Ln(20);
	$city = $rows['city'];
	// Listbox
	$pdf->Cell(35, 5, 'Town/City');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('city', 60, 5,array(), array('v'=>$city));
	$pdf->Ln(10);
	$state = $rows['state'];
	$pdf->Cell(35, 5, 'State');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('state', 60, 5,array(), array('v'=>$state));
	$pdf->Ln(10);
	$country = $rows['country'];
	$pdf->Cell(35, 5, 'Country');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('country', 60, 5,array(), array('v'=>$country));
	$pdf->Ln(10);
	$postcode = $rows['postcode'];
	$pdf->Cell(35, 5, 'Postcode');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('postcode', 60, 5,array(), array('v'=>$postcode));
	$pdf->Ln(10);
	$c1 = $rows['c1'];
	//die();
	// Check if r1 is equal to 'r1_yes'
	if ($c1 == 'c1_yes') {
	  // Set the checked attribute to 'checked'
		$checked = 'checked';
	}elseif($c1 == 'c1_no') {
	  // Set the checked attribute to an empty string
		$checked = 'checked';
	}else{
		$checked = '';
	}
	$pdf->Cell(120, 5, '10. Is this address also your correspondence address?');
	//$pdf->RadioButton('drink', 5, array('readonly' => 'true'), array(), 'Water');
	if ($c1 == 'c1_yes') {
		$pdf->RadioButton('c1', 5, array(), array('v'=>$c1), $c1,$checked);
		$pdf->Cell(120, 5, 'Yes');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}elseif($c1 == 'c1_no') {
		$pdf->RadioButton('c1', 5, array(), array('v'=>$c1), $c1,$checked);
		$pdf->Cell(120, 5, 'No');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}else{
		$pdf->Cell(120, 5, '');
		$pdf->Ln(10);
	}
	$pdf->Cell(35, 5, 'IF NO');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->Ln(10);
	$address3 = $rows['addr3'];
	// Address
	$pdf->Cell(35, 5, 'Address:');
	$pdf->TextField('address', 60, 18, array('multiline'=>true, 'lineWidth'=>0, 'borderStyle'=>'none'), array('v'=>$address3));
	$pdf->Ln(20);
	$city1 = $rows['city1'];
	// Listbox
	$pdf->Cell(35, 5, 'Town/City');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('city1', 60, 5,array(), array('v'=>$city1));
	$pdf->Ln(10);
	$state1 = $rows['state1'];
	$pdf->Cell(35, 5, 'State');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('state1', 60, 5,array(), array('v'=>$state1));
	$pdf->Ln(10);
	$country1 = $rows['country1'];
	$pdf->Cell(35, 5, 'Country');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('country1', 60, 5,array(), array('v'=>$country1));
	$pdf->Ln(10);
	$postcode1 = $rows['postcode1'];
	$pdf->Cell(35, 5, 'Postcode');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('postcode1', 60, 5,array(), array('v'=>$postcode1));
	$pdf->Ln(10);

	$long_live = $rows['long_live'];
	$pdf->Cell(120, 5, '11. a)How long have you lived at this address?');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('long_live', 40, 5,array(), array('v'=>$long_live));
	$pdf->Ln(10);
	$pdf->Cell(140, 5, '12.Your previous address,  you lived at the address above less than 2 years:');
	//$pdf->ListBox('status', 60, 15, array($status ),);

	$pdf->Ln(10);
	$addr1 = $rows['addrr1'];
	// Address
	$pdf->Cell(35, 5, 'Address:');
	$pdf->TextField('address', 60, 18, array('multiline'=>true, 'lineWidth'=>0, 'borderStyle'=>'none'), array('v'=>$addr1));
	$pdf->Ln(20);

	$addr2 = $rows['addrr2'];
	// Address
	$pdf->Cell(35, 5, 'Address:');
	$pdf->TextField('address', 60, 18, array('multiline'=>true, 'lineWidth'=>0, 'borderStyle'=>'none'), array('v'=>$addr2));
	$pdf->Ln(20);
	$city2 = $rows['city2'];
	// Listbox
	$pdf->Cell(35, 5, 'Town/City');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('city2', 60, 5,array(), array('v'=>$city2));
	$pdf->Ln(10);
	$state2 = $rows['state2'];
	$pdf->Cell(35, 5, 'State');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('state2', 60, 5,array(), array('v'=>$state2));
	$pdf->Ln(10);
	$country2 = $rows['country2'];
	$pdf->Cell(35, 5, 'Country');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('country2', 60, 5,array(), array('v'=>$country2));
	$pdf->Ln(10);
	$postcode2 = $rows['postcode2'];
	$pdf->Cell(35, 5, 'Postcode');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('postcode2', 60, 5,array(), array('v'=>$postcode2));
	$pdf->Ln(10);
	$live_date = $rows['live_date'];
	$pdf->Cell(90, 5, 'When did you start living at this address?');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('live_date', 60, 5,array(), array('v'=>$live_date));
	$pdf->Ln(10);
	$stop_date = $rows['stop_date'];
	$pdf->Cell(90, 5, 'When did you stop living at this address?');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('stop_date', 60, 5,array(), array('v'=>$stop_date));
	$pdf->Ln(10);

	$pdf->Cell(90, 5, '13. What is the ownership status of your home? ');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->Ln(10);
	$own = $rows['own'];
	$pdf->Cell(90, 5, 'I owned it?');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('own', 60, 5,array(), array('v'=>$own));
	$pdf->Ln(10);
	$rent = $rows['rent'];
	$pdf->Cell(90, 5, 'I Rent It');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('rent', 60, 5,array(), array('v'=>$rent));
	$pdf->Ln(10);
	$other = $rows['other'];
	$pdf->Cell(90, 5, 'Other');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('other', 60, 5,array(), array('v'=>$other));
	$pdf->Ln(10);
	$i1 = $rows['i1'];
	//die();
	// Check if r1 is equal to 'r1_yes'
	if ($i1 == 'i1_yes') {
	  // Set the checked attribute to 'checked'
		$checked = 'checked';
	}elseif($i1 == 'i1_no') {
	  // Set the checked attribute to an empty string
		$checked = 'checked';
	}else{
		$checked = '';
	}
	$pdf->Cell(120, 5, '14.Do you have a valid national identity card? ');
	//$pdf->RadioButton('drink', 5, array('readonly' => 'true'), array(), 'Water');
	if ($i1 == 'i1_yes') {
		$pdf->RadioButton('i1', 5, array(), array('v'=>$i1), $i1,$checked);
		$pdf->Cell(120, 5, 'Yes');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}elseif($i1 == 'i1_no') {
		$pdf->RadioButton('i1', 5, array(), array('v'=>$i1), $i1,$checked);
		$pdf->Cell(120, 5, 'No');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}else{
		$pdf->Cell(120, 5, '');
		$pdf->Ln(10);
	}

	$pdf->Cell(35, 5, 'IF Yes');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->Ln(10);
	$card_no = $rows['card_no'];
	$pdf->Cell(90, 5, 'National identity card number:');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('card_no', 60, 5,array(), array('v'=>$card_no));
	$pdf->Ln(10);
	$authority = $rows['authority'];
	$pdf->Cell(90, 5, 'Issuing authority:');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('authority', 60, 5,array(), array('v'=>$authority));
	$pdf->Ln(10);
	$issue_date = $rows['issue_date'];
	$pdf->Cell(90, 5, 'Issue date (if applicable):');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('issue_date', 60, 5,array(), array('v'=>$issue_date));
	$pdf->Ln(10);
	$expiry_date = $rows['expiry_date'];
	$pdf->Cell(90, 5, 'Expiry date (if applicable):');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('expiry_date', 60, 5,array(), array('v'=>$expiry_date));
	$pdf->Ln(10);
	$n1 = $rows['n1'];
	//die();
	// Check if r1 is equal to 'r1_yes'
	if ($n1 == 'n1_yes') {
	  // Set the checked attribute to 'checked'
		$checked = 'checked';
	}elseif($n1 == 'n1_no') {
	  // Set the checked attribute to an empty string
		$checked = 'checked';
	}else{
		$checked = '';
	}


	$pdf->Cell(130, 5, '15. Do you currently hold, any other nationality or citizenship?');
	//$pdf->RadioButton('drink', 5, array('readonly' => 'true'), array(), 'Water');
	if ($n1 == 'n1_yes') {
		$pdf->RadioButton('n1', 5, array(), array('v'=>$n1), $n1,$checked);
		$pdf->Cell(120, 5, 'Yes');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}elseif($n1 == 'n1_no') {
		$pdf->RadioButton('n1', 5, array(), array('v'=>$n1), $n1,$checked);
		$pdf->Cell(120, 5, 'No');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}else{
		$pdf->Cell(120, 5, '');
		$pdf->Ln(10);
	}
	$pdf->Cell(35, 5, 'IF Yes');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->Ln(10);
	$nationality = $rows['nationality'];
	$pdf->Cell(90, 5, 'Your other nationality:');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('nationality', 60, 5,array(), array('v'=>$nationality));
	$pdf->Ln(10);
	$pdf->SetFont('helvetica', 'B', 13);
	$pdf->Cell(0, 5, 'SPOUSE/PARTNER’S DETAILS', 0, 1, 'C');
	$pdf->Ln(10);

	$pdf->SetFont('helvetica', '', 12);
	$gname = $rows['gname'];
	$pdf->Cell(90, 5, 'Given Name');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('gname', 60, 5,array(), array('v'=>$gname));
	$pdf->Ln(10);
	$lname = $rows['lname'];
	$pdf->Cell(90, 5, 'Last Name');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('lname', 60, 5,array(), array('v'=>$lname));
	$pdf->Ln(10);
	$dob = $rows['dob'];
	$pdf->Cell(90, 5, 'Date of Birth');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('dob', 60, 5,array(), array('v'=>$dob));
	$pdf->Ln(10);
	$nation = $rows['nation'];
	$pdf->Cell(90, 5, 'Nationality');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('nation', 60, 5,array(), array('v'=>$nation));
	$pdf->Ln(10);
	$m1 = $rows['m1'];
	//die();
	// Check if r1 is equal to 'r1_yes'
	if ($m1 == 'm1_yes') {
	  // Set the checked attribute to 'checked'
		$checked = 'checked';
	}elseif($m1 == 'm1_no') {
	  // Set the checked attribute to an empty string
		$checked = 'checked';
	}else{
		$checked = '';
	}

	$pdf->Cell(130, 5, 'Do they currently live with you');
	//$pdf->RadioButton('drink', 5, array('readonly' => 'true'), array(), 'Water');
	if ($m1 == 'm1_yes') {
		$pdf->RadioButton('m1', 5, array(), array('v'=>$m1), $m1,$checked);
		$pdf->Cell(120, 5, 'Yes');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}elseif($m1 == 'm1_no') {
		$pdf->RadioButton('m1', 5, array(), array('v'=>$m1), $m1,$checked);
		$pdf->Cell(120, 5, 'No');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}else{
		$pdf->Cell(120, 5, '');
		$pdf->Ln(10);
	}
	$pdf->Cell(35, 5, 'IF No');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->Ln(10);
	$ad1 = $rows['ad1'];
	// Address
	$pdf->Cell(35, 5, 'Address:');
	$pdf->TextField('address', 60, 18, array('multiline'=>true, 'lineWidth'=>0, 'borderStyle'=>'none'), array('v'=>$ad1));
	$pdf->Ln(20);
	$city12 = $rows['city12'];
	// Listbox
	$pdf->Cell(35, 5, 'Town/City');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('city12', 60, 5,array(), array('v'=>$city12));
	$pdf->Ln(10);
	$state12 = $rows['state12'];
	$pdf->Cell(35, 5, 'State');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('state12', 60, 5,array(), array('v'=>$state12));
	$pdf->Ln(10);
	$country12 = $rows['country12'];
	$pdf->Cell(35, 5, 'Country');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('country12', 60, 5,array(), array('v'=>$country12));
	$pdf->Ln(10);
	$postcode12 = $rows['postcode12'];
	$pdf->Cell(35, 5, 'Postcode');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('postcode12', 60, 5,array(), array('v'=>$postcode12));
	$pdf->Ln(10);
	$pdf->SetFont('helvetica', 'B', 13);
	$pdf->Cell(0, 5, 'PARENTS’ DETAILS', 0, 1, 'C');
	$pdf->Ln(10);
	$pdf->Cell(90, 5, 'Mother');
	$pdf->Ln(10);
	$pdf->SetFont('helvetica', '', 12);
	$mname = $rows['mname'];
	$pdf->Cell(90, 5, 'Given Name');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('mname', 60, 5,array(), array('v'=>$mname));
	$pdf->Ln(10);
	$llname = $rows['llname'];
	$pdf->Cell(90, 5, 'Last Name');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('llname', 60, 5,array(), array('v'=>$llname));
	$pdf->Ln(10);
	$mdob = $rows['mdob'];
	$pdf->Cell(90, 5, 'Date of Birth');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('mdob', 60, 5,array(), array('v'=>$mdob));
	$pdf->Ln(10);
	$countryn = $rows['countryn'];
	$pdf->Cell(90, 5, 'Country of Nationality');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('countryn', 60, 5,array(), array('v'=>$countryn));
	$pdf->Ln(10);
	$pdf->SetFont('helvetica', 'B', 13);
	$pdf->Cell(90, 5, 'Father');
	$pdf->Ln(10);
	$pdf->SetFont('helvetica', '', 12);
	$mname1 = $rows['mname1'];
	$pdf->Cell(90, 5, 'Given Name');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('mname1', 60, 5,array(), array('v'=>$mname1));
	$pdf->Ln(10);
	$lname1 = $rows['lname1'];
	$pdf->Cell(90, 5, 'Last Name');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('lname1', 60, 5,array(), array('v'=>$lname1));
	$pdf->Ln(10);
	$mdob1 = $rows['mdob1'];
	$pdf->Cell(90, 5, 'Date of Birth');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('mdob1', 60, 5,array(), array('v'=>$mdob1));
	$pdf->Ln(10);
	$countryn1 = $rows['countryn1'];
	$pdf->Cell(90, 5, 'Country of Nationality');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('countryn1', 60, 5,array(), array('v'=>$countryn1));
	$pdf->Ln(10);
	$l1 = $rows['l1'];
	//die();
	// Check if r1 is equal to 'r1_yes'
	if ($l1 == 'l1_yes') {
	  // Set the checked attribute to 'checked'
		$checked = 'checked';
	}elseif($l1 == 'l1_no') {
	  // Set the checked attribute to an empty string
		$checked = 'checked';
	}else{
		$checked = '';
	}


	$pdf->Cell(130, 5, 'Have they always had the same nationality:');
	//$pdf->RadioButton('drink', 5, array('readonly' => 'true'), array(), 'Water');
	if ($l1 == 'l1_yes') {
		$pdf->RadioButton('l1', 5, array(), array('v'=>$l1), $l1,$checked);
		$pdf->Cell(120, 5, 'Yes');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}elseif($l1 == 'l1_no') {
		$pdf->RadioButton('l1', 5, array(), array('v'=>$l1), $l1,$checked);
		$pdf->Cell(120, 5, 'No');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}else{
		$pdf->Cell(120, 5, '');
		$pdf->Ln(10);
	}

	$t1 = $rows['t1'];
	//die();
	// Check if r1 is equal to 'r1_yes'
	if ($t1 == 't1_yes') {
	  // Set the checked attribute to 'checked'
		$checked = 'checked';
	}elseif($t1 == 't1_no') {
	  // Set the checked attribute to an empty string
		$checked = 'checked';
	}else{
		$checked = '';
	}
	$pdf->Ln(10);

	$pdf->Cell(130, 5, '20. Do you have any family in the UK?
		');
	//$pdf->RadioButton('drink', 5, array('readonly' => 'true'), array(), 'Water');
	if ($t1 == 't1_yes') {
		$pdf->RadioButton('t1', 5, array(), array('v'=>$t1), $t1,$checked);
		$pdf->Cell(120, 5, 'Yes');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}elseif($t1 == 't1_no') {
		$pdf->RadioButton('t1', 5, array(), array('v'=>$t1), $t1,$checked);
		$pdf->Cell(120, 5, 'No');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}else{
		$pdf->Cell(120, 5, '');
		$pdf->Ln(10);
	}
	$pdf->Ln(10);
	$pdf->Cell(130, 5, '* Immediate family - such as spouse, civil partner, parents or children');
	$pdf->Ln(10);
	$pdf->Cell(130, 5, '* Grandparents or grandchildren
)');
	$pdf->Ln(10);
	$pdf->Cell(130, 5, '* Your spouse or civil partners family
		');
	$pdf->Ln(10);
	$pdf->Cell(130, 5, '* Your childs spouse, civil partner or partner
		');
	$pdf->Ln(10);
	$pdf->Cell(130, 5, '* Your partner, if you have lived with them for 2 out of the last 3 years');
	$pdf->Ln(10);

	$pdf->Cell(35, 5, 'IF No');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->Ln(10);
	$time_uk = $rows['time_uk'];
	$pdf->Cell(130, 5, 'How many times have you been to the UK in the past 10 years?');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('time_uk', 60, 5,array(), array('v'=>$time_uk));
	$pdf->Ln(10);
	$v1 = $rows['v1'];
	//die();
	// Check if r1 is equal to 'r1_yes'
	if ($v1 == 'v1_yes') {
	  // Set the checked attribute to 'checked'
		$checked = 'checked';
	}elseif($v1 == 'v1_no') {
	  // Set the checked attribute to an empty string
		$checked = 'checked';
	}else{
		$checked = '';
	}
	$pdf->Ln(10);



	$pdf->Cell(130, 5, '21. Have you been issued with a UK visa in the past 10 years?
		');
	//$pdf->RadioButton('drink', 5, array('readonly' => 'true'), array(), 'Water');
	if ($v1 == 'v1_yes') {
		$pdf->RadioButton('v1', 5, array(), array('v'=>$v1), $v1,$checked);
		$pdf->Cell(120, 5, 'Yes');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}elseif($v1 == 'v1_no') {
		$pdf->RadioButton('v1', 5, array(), array('v'=>$v1), $v1,$checked);
		$pdf->Cell(120, 5, 'No');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}else{
		$pdf->Cell(120, 5, '');
		$pdf->Ln(10);
	}
	$pdf->Ln(10);

	$pdf->Cell(90, 5, '22. Details of your most recent visit');
	$pdf->Ln(10);
	$dreason = $rows['dreason'];
	$pdf->Cell(90, 5, 'Reason');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('dreason', 60, 5,array(), array('v'=>$dreason));
	$pdf->Ln(10);
	$ddate = $rows['ddate'];
	$pdf->Cell(90, 5, 'Date You arrived in the UK');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('ddate', 60, 5,array(), array('v'=>$ddate));
	$pdf->Ln(10);
	$dlong = $rows['dlong'];
	$pdf->Cell(90, 5, 'How Long were you in th UK');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('dlong', 60, 5,array(), array('v'=>$dlong));
	$pdf->Ln(10);
	$o1 = $rows['o1'];
	//die();
	// Check if r1 is equal to 'r1_yes'
	if ($o1 == 'o1_yes') {
	  // Set the checked attribute to 'checked'
		$checked = 'checked';
	}elseif($o1 == 'o1_no') {
	  // Set the checked attribute to an empty string
		$checked = 'checked';
	}else{
		$checked = '';
	}
	$pdf->Ln(10);
	$pdf->Cell(130, 5, '23.Did you receive medical treatment in the UK?
		');
	//$pdf->RadioButton('drink', 5, array('readonly' => 'true'), array(), 'Water');
	if ($o1 == 'o1_yes') {
		$pdf->RadioButton('o1', 5, array(), array('v'=>$o1), $o1,$checked);
		$pdf->Cell(120, 5, 'Yes');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}elseif($o1 == 'o1_no') {
		$pdf->RadioButton('o1', 5, array(), array('v'=>$o1), $o1,$checked);
		$pdf->Cell(120, 5, 'No');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}else{
		$pdf->Cell(120, 5, '');
		$pdf->Ln(10);
	}
	$pdf->Ln(10);
	$p1 = $rows['p1'];
	//die();
	// Check if r1 is equal to 'r1_yes'
	if ($p1 == 'p1_yes') {
	  // Set the checked attribute to 'checked'
		$checked = 'checked';
	}elseif($p1 == 'p1_no') {
	  // Set the checked attribute to an empty string
		$checked = 'checked';
	}else{
		$checked = '';
	}
	$pdf->Cell(130, 5, '24.Were you told that you had to pay the hospital:
		');
	//$pdf->RadioButton('drink', 5, array('readonly' => 'true'), array(), 'Water');
	if ($p1 == 'p1_yes') {
		$pdf->RadioButton('p1', 5, array(), array('v'=>$p1), $p1,$checked);
		$pdf->Cell(120, 5, 'Yes');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}elseif($p1 == 'p1_no') {
		$pdf->RadioButton('p1', 5, array(), array('v'=>$p1), $p1,$checked);
		$pdf->Cell(120, 5, 'No');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}else{
		$pdf->Cell(120, 5, '');
		$pdf->Ln(10);
	}
	$pdf->Ln(10);

	$q1 = $rows['q1'];
	//die();
	// Check if r1 is equal to 'r1_yes'
	if ($q1 == 'q1_yes') {
	  // Set the checked attribute to 'checked'
		$checked = 'checked';
	}elseif($q1 == 'q1_no') {
	  // Set the checked attribute to an empty string
		$checked = 'checked';
	}else{
		$checked = '';
	}

	$pdf->Cell(130, 5, '25. Have you paid the full amount?
		');
	//$pdf->RadioButton('drink', 5, array('readonly' => 'true'), array(), 'Water');
	if ($q1 == 'q1_yes') {
		$pdf->RadioButton('q1', 5, array(), array('v'=>$q1), $q1,$checked);
		$pdf->Cell(120, 5, 'Yes');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}elseif($q1 == 'q1_no') {
		$pdf->RadioButton('q1', 5, array(), array('v'=>$q1), $q1,$checked);
		$pdf->Cell(120, 5, 'No');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}else{
		$pdf->Cell(120, 5, '');
		$pdf->Ln(10);
	}
	$pdf->Ln(10);
	$pdf->Cell(90, 5, '26. Details of your medical treatment in the UK: ');
	$pdf->Ln(10);
	$travel_tt = $rows['travel_tt'];
	$pdf->Cell(125, 5, 'Where did you go for your previous medical treatment in the UK:');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('travel_tt', 60, 5,array(), array('v'=>$travel_tt));
	$pdf->Ln(10);
	$hospital = $rows['hospital'];
	$pdf->Cell(90, 5, 'Name of hospital, clinic or doctorss
		surger');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('hospital', 60, 5,array(), array('v'=>$hospital));
	$pdf->Ln(10);
	$addressp = $rows['addressp'];
	$pdf->Cell(90, 5, 'Address (including a postcode)');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('addressp', 60, 5,array(), array('v'=>$addressp));
	$pdf->Ln(10);
	$mdate = $rows['mdate'];
	$pdf->Cell(120, 5, 'When did you start receiving this medical
		treatment');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('mdate', 60, 5,array(), array('v'=>$mdate));
	$pdf->Ln(10);
	$msdate = $rows['msdate'];
	$pdf->Cell(120, 5, 'When did you stop receiving this medical
		treatment?');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('msdate', 60, 5,array(), array('v'=>$msdate));
	$pdf->Ln(10);

	$u1 = $rows['u1'];
	//die();
	// Check if r1 is equal to 'r1_yes'
	if ($u1 == 'u1_yes') {
	  // Set the checked attribute to 'checked'
		$checked = 'checked';
	}elseif($u1 == 'u1_no') {
	  // Set the checked attribute to an empty string
		$checked = 'checked';
	}else{
		$checked = '';
	}

	$pdf->Cell(140, 5, '27. Have you applied for leave to remain in the UK in the past 10 years?
		');
	//$pdf->RadioButton('drink', 5, array('readonly' => 'true'), array(), 'Water');
	if ($u1 == 'u1_yes') {
		$pdf->RadioButton('u1', 5, array(), array('v'=>$u1), $u1,$checked);
		$pdf->Cell(120, 5, 'Yes');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}elseif($u1 == 'u1_no') {
		$pdf->RadioButton('u1', 5, array(), array('v'=>$u1), $u1,$checked);
		$pdf->Cell(120, 5, 'No');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}else{
		$pdf->Cell(120, 5, '');
		$pdf->Ln(10);
	}
	$pdf->Ln(10);
	$pdf->Cell(35, 5, 'IF Yes');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->Ln(10);
	$ddpdate = $rows['ddpdate'];
	$pdf->Cell(130, 5, 'Date of application:');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('ddpdate', 60, 5,array(), array('v'=>$ddpdate));
	$pdf->Ln(10);
	$resultapp = $rows['resultapp'];
	$pdf->Cell(130, 5, 'Result of application:');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('resultapp', 60, 5,array(), array('v'=>$resultapp));
	$pdf->Ln(10);

	$w1 = $rows['w1'];
	//die();
	// Check if r1 is equal to 'r1_yes'
	if ($w1 == 'w1_yes') {
	  // Set the checked attribute to 'checked'
		$checked = 'checked';
	}elseif($w1 == 'w1_no') {
	  // Set the checked attribute to an empty string
		$checked = 'checked';
	}else{
		$checked = '';
	}
	$pdf->Cell(130, 5, '28. Do you have a UK National Insurance number?
		');
	//$pdf->RadioButton('drink', 5, array('readonly' => 'true'), array(), 'Water');
	if ($w1 == 'w1_yes') {
		$pdf->RadioButton('w1', 5, array(), array('v'=>$w1), $w1,$checked);
		$pdf->Cell(120, 5, 'Yes');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}elseif($w1 == 'w1_no') {
		$pdf->RadioButton('w1', 5, array(), array('v'=>$w1), $w1,$checked);
		$pdf->Cell(120, 5, 'No');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}else{
		$pdf->Cell(120, 5, '');
		$pdf->Ln(10);
	}
	$pdf->Ln(10);

	$pdf->Cell(35, 5, 'IF Yes');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->Ln(10);
	$nino = $rows['nino'];
	$pdf->Cell(130, 5, 'NINO No');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('nino', 60, 5,array(), array('v'=>$nino));
	$pdf->Ln(10);

	$b1 = $rows['b1'];
	//die();
	// Check if r1 is equal to 'r1_yes'
	if ($b1 == 'b1_yes') {
	  // Set the checked attribute to 'checked'
		$checked = 'checked';
	}elseif($b1 == 'b1_no') {
	  // Set the checked attribute to an empty string
		$checked = 'checked';
	}else{
		$checked = '';
	}
	$pdf->Cell(130, 5, '29.Do you have a UK driving licence?
		');
	//$pdf->RadioButton('drink', 5, array('readonly' => 'true'), array(), 'Water');
	if ($b1 == 'b1_yes') {
		$pdf->RadioButton('b1', 5, array(), array('v'=>$b1), $b1,$checked);
		$pdf->Cell(120, 5, 'Yes');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}elseif($b1 == 'b1_no') {
		$pdf->RadioButton('b1', 5, array(), array('v'=>$b1), $b1,$checked);
		$pdf->Cell(120, 5, 'No');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}else{
		$pdf->Cell(120, 5, '');
		$pdf->Ln(10);
	}
	$pdf->Ln(10);

	$pdf->Cell(35, 5, 'IF Yes');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->Ln(10);
	$licno = $rows['licno'];
	$pdf->Cell(130, 5, 'Licenece No');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('licno', 60, 5,array(), array('v'=>$licno));
	$pdf->Ln(10);

	$d1 = $rows['d1'];
	//die();
	// Check if r1 is equal to 'r1_yes'
	if ($d1 == 'd1_yes') {
	  // Set the checked attribute to 'checked'
		$checked = 'checked';
	}elseif($d1 == 'd1_no') {
	  // Set the checked attribute to an empty string
		$checked = 'checked';
	}else{
		$checked = '';
	}


	$pdf->Cell(130, 5, '30.Have you received any public funds
		(money) in the UK:
		');
	//$pdf->RadioButton('drink', 5, array('readonly' => 'true'), array(), 'Water');
	if ($d1 == 'd1_yes') {
		$pdf->RadioButton('d1', 5, array(), array('v'=>$d1), $d1,$checked);
		$pdf->Cell(120, 5, 'Yes');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}elseif($d1 == 'd1_no') {
		$pdf->RadioButton('d1', 5, array(), array('v'=>$d1), $d1,$checked);
		$pdf->Cell(120, 5, 'No');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}else{
		$pdf->Cell(120, 5, '');
		$pdf->Ln(10);
	}
	$pdf->Ln(10);

	$pdf->SetFont('helvetica', 'B', 13);
	$pdf->Cell(0, 5, 'WORLD TRAVEL HISTORY', 0, 1, 'C');
	$pdf->Ln(10);
	$pdf->SetFont('helvetica', '', 12);
	$f1 = $rows['f1'];
	//die();
	// Check if r1 is equal to 'r1_yes'
	if ($f1 == 'f1_yes') {
	  // Set the checked attribute to 'checked'
		$checked = 'checked';
	}elseif($f1 == 'f1_no') {
	  // Set the checked attribute to an empty string
		$checked = 'checked';
	}else{
		$checked = '';
	}

	$pdf->Cell(140, 5, '31. Have you ever worked for any of the following types of organisation?
		');
	if ($f1 == 'f1_yes') {
		$pdf->RadioButton('f1', 5, array(), array('v'=>$f1), $f1,$checked);
		$pdf->Cell(120, 5, 'Yes');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}elseif($f1 == 'f1_no') {
		$pdf->RadioButton('f1', 5, array(), array('v'=>$f1), $f1,$checked);
		$pdf->Cell(120, 5, 'No');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}else{
		$pdf->Cell(120, 5, '');
		$pdf->Ln(10);
	}
	$pdf->Ln(10);

	$pdf->Cell(130, 5, '* Australia');
	$pdf->Ln(10);
	$pdf->Cell(130, 5, '* Canada)');
	$pdf->Ln(10);
	$pdf->Cell(130, 5, '* New Zealand');
	$pdf->Ln(10);
	$pdf->Cell(130, 5, '* USA');
	$pdf->Ln(10);
	$pdf->Cell(130, 5, '* Switzerland');
	$pdf->Ln(10);
	$pdf->Cell(130, 5, '* European Economic Area (do not include travel to the UK
		');
	$pdf->Ln(10);



	$pdf->Cell(120, 5, '32. Details of your most recent visit');
	$pdf->Ln(10);
	$rcountry = $rows['rcountry'];
	$pdf->Cell(90, 5, 'Country');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('rcountry', 60, 5,array(), array('v'=>$rcountry));
	$pdf->Ln(10);
	$reason = $rows['reason'];
	$pdf->Cell(90, 5, 'Reason');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('reason', 60, 5,array(), array('v'=>$reason));
	$pdf->Ln(10);
	$dov = $rows['dov'];
	$pdf->Cell(90, 5, 'Date Of Visit ');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('dov', 60, 5,array(), array('v'=>$dov));
	$pdf->Ln(10);
	$hhlong = $rows['hhlong'];
	$pdf->Cell(90, 5, 'How Long was your Visit ');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('hhlong', 60, 5,array(), array('v'=>$hhlong));
	$pdf->Ln(10);
	$h1 = $rows['h1'];
	//die();
	// Check if r1 is equal to 'r1_yes'
	if ($h1 == 'h1_yes') {
	  // Set the checked attribute to 'checked'
		$checked = 'checked';
	}elseif($h1 == 'h1_no') {
	  // Set the checked attribute to an empty string
		$checked = 'checked';
	}else{
		$checked = '';
	}

	$pdf->Cell(130, 5, '33. Have you been to any other countries in the past 10 years?
		');
	//$pdf->RadioButton('drink', 5, array('readonly' => 'true'), array(), 'Water');
	if ($h1 == 'h1_yes') {
		$pdf->RadioButton('h1', 5, array(), array('v'=>$h1), $h1,$checked);
		$pdf->Cell(120, 5, 'Yes');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}elseif($h1 == 'h1_no') {
		$pdf->RadioButton('h1', 5, array(), array('v'=>$h1), $h1,$checked);
		$pdf->Cell(120, 5, 'No');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}else{
		$pdf->Cell(120, 5, '');
		$pdf->Ln(10);
	}
	$pdf->Ln(10);




	$pdf->Cell(120, 5, '34. Details of your world travel history');
	$pdf->Ln(10);
	$country34 = $rows['country34'];
	$pdf->Cell(90, 5, 'Country');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('country34', 60, 5,array(), array('v'=>$country34));
	$pdf->Ln(10);
	$reason34 = $rows['reason34'];
	$pdf->Cell(90, 5, 'Reason');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('reason34', 60, 5,array(), array('v'=>$reason34));
	$pdf->Ln(10);
	$entrydate1 = $rows['entrydate1'];
	$pdf->Cell(90, 5, 'Date Of Entry ');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('entrydate1', 60, 5,array(), array('v'=>$entrydate1));
	$pdf->Ln(10);
	$exitdate1 = $rows['exitdate1'];
	$pdf->Cell(90, 5, 'Date Of Exit ');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('exitdate1', 60, 5,array(), array('v'=>$exitdate1));
	$pdf->Ln(10);


	$pdf->SetFont('helvetica', 'B', 13);
	$pdf->Cell(0, 5, 'EMPLOYMENT HISTORY', 0, 1, 'C');
	$pdf->Ln(10);
	$pdf->SetFont('helvetica', '', 12);
	$j1 = $rows['j1'];
	//die();
	// Check if r1 is equal to 'r1_yes'
	if ($j1 == 'j1_yes') {
	  // Set the checked attribute to 'checked'
		$checked = 'checked';
	}elseif($j1 == 'j1_no') {
	  // Set the checked attribute to an empty string
		$checked = 'checked';
	}else{
		$checked = '';
	}

	$pdf->Cell(140, 5, '35. Have you ever worked for any of the following types of organisation?
		');
	//$pdf->RadioButton('drink', 5, array('readonly' => 'true'), array(), 'Water');
	if ($j1 == 'j1_yes') {
		$pdf->RadioButton('j1', 5, array(), array('v'=>$j1), $j1,$checked);
		$pdf->Cell(120, 5, 'Yes');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}elseif($j1 == 'j1_no') {
		$pdf->RadioButton('j1', 5, array(), array('v'=>$j1), $j1,$checked);
		$pdf->Cell(120, 5, 'No');
		$pdf->Ln(6);
		$pdf->Cell(120, 5, '');
	}else{
		$pdf->Cell(120, 5, '');
		$pdf->Ln(10);
	}
	$pdf->Ln(10);

	$pdf->Cell(130, 5, '* Armed Forces (career)');
	$pdf->Ln(10);
	$pdf->Cell(130, 5, '* Armed Forces (compulsory national or military service)
		');
	$pdf->Ln(10);
	$pdf->Cell(130, 5, '*Government (including Public or Civil Administration and non-military compulsory national service)
		');
	$pdf->Ln(10);
	$pdf->Cell(130, 5, '* Intelligence services');
	$pdf->Ln(10);
	$pdf->Cell(130, 5, '* Security organisations (including police and private security services)');
	$pdf->Ln(10);
	$pdf->Cell(130, 5, '* Media organisations
		');
	$pdf->Ln(10);
	$pdf->Cell(130, 5, '*Judiciary (including work as a judge or magistrate)
		');
	$pdf->Ln(10);

	$licno1 = $rows['licno1'];
	$pdf->Cell(130, 5, '36. Which of the above organisations have you worked for? ');
	//$pdf->ListBox('status', 60, 15, array($status ),);
	$pdf->TextField('licno1', 60, 5,array(), array('v'=>$licno1));
	$pdf->Ln(10);





	$pdf->writeHTML($html, true, false, false, false, '');
	ob_end_clean(); 
	$pdf->Output('Application_form.pdf', 'I');

}  }   

		    public function delete_user(){
		    	 
		    	 $this->AdminModel->delete_user_done($this->uri->segment('3'));
		    	 $user=$this->session->userdata('user');
              	 $data['user']=$user;
              	 $data['fetch_dt']=$this->AdminModel->displayUserData();
			     $this->load->view('display_users',$data);
		    }

			public function admin_logout(){
				$this->session->unset_userdata('user');
				$this->load->view('admin_login');
			}
			
}
