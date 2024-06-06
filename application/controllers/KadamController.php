<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KadamController extends CI_Controller {

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
	public function origin()
	{
		$this->load->view('origin');
	}
	public function architecture()
	{
		$this->load->view('architecture');
	}
	public function trust()
	{
		$this->load->view('trust');
	}
	public function charitable()
	{
		$this->load->view('charitable');
	}
	public function Legend()
	{
		$this->load->view('Legend');
	}

	public function festivals()
	{
		$this->load->view('festivals');
	}
	public function accomodations()
	{
		$this->load->view('accomodations');
	}
	public function online_donation()
	{
		$this->load->view('online_donation');
	}
	public function pooja_booking()
	{
		$this->load->view('pooja_booking');
	}
	public function gallery()
	{
		$this->load->view('gallery');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function daily_pooja_timing()
	{
		$this->load->view('daily_pooja_timing');
	}
	public function main_offering()
	{
		$this->load->view('main_offering');
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
						        //$subject=$this->input->post('subject');
						        $message=$this->input->post('message');
						      
						        $this->email->from('sonaligavande1994@gmail.com', 'Sonali');
						        $this->email->to($to); 
								$this->email->subject('Contact Enquiry Mail');
						        $this->email->message($message);  
						        if($this->form_validation->run() == true){
			                    if($this->email->send())
						        {
					             $this->session->set_flashdata("email_sent_success","Congragulation Email Send Successfully.");
					              $this->load->view('contact');
					            
					             }else{
					             $this->session->set_flashdata("email_sent_error","You have encountered an error");
					             //echo $this->email->print_debugger();
					            

					             }
					             //$this->load->view('formsuccess');
					            
					        
					           }else{

					             //$this->session->set_flashdata("error","Some problems occured, please try again.");
					            $this->load->view('contact');
					        
					           }
					           
    }
    public function save_pooja(){
    	          $this->load->Model('KadamModel');
    					  $this->form_validation->set_rules('name', 'Name', 'required');
    					  $this->form_validation->set_rules('mobile_no', 'Mobile No', 'required|regex_match[/^[0-9]{10}$/]');
    					  $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
                          $this->form_validation->set_rules('pooja_date','Date','required');
                          //$this->form_validation->set_rules('reg[pooja_date]', 'Date of birth', 'regex_match[(0[1-9]|1[0-9]|2[0-9]|3(0|1))-(0[1-9]|1[0-2])-\d{4}]'); 
                          //$this->form_validation->set_rules('pooja_date','DOB','callback_checkDateFormat'); 
                          /*function checkDateFormat($pooja_date) {
                                            if (preg_match("/[0-31]{2}/[0-12]{2}/[0-9]{4}/", $pooja_date)) {
                                            if(checkdate(substr($pooja_date, 3, 2), substr($pooja_date, 0, 2), substr($pooja_date, 6, 4)))
                                            return true;
                                            else
                                            return false;
                                            } else {
                                            return false;
                                            }
                                            } */

              
					         $pooja_save=$this->KadamModel->insertpoojadetails();	
					         if($this->form_validation->run() == true){	
		               if($pooja_save)
						          {
					             $this->session->set_flashdata("pooja_success","Pooja Booked Successfully.");
					             $this->load->view('pooja_booking');
					            
					             }else{
					             $this->session->set_flashdata("error","You have encountered an error");
					             $this->load->view('pooja_booking');
											}
										}else{
					             $this->load->view('pooja_booking');
											}
					             
    	

}
    
     public function save_payment_data(){
     						 
     						 $this->load->view('online_donation');	
    					    $this->form_validation->set_rules('dname', 'Name', 'required');
    					    $this->form_validation->set_rules('mobile_no', 'Mobile No', 'required|regex_match[/^[0-9]{10}$/]');
                            $this->form_validation->set_rules('Address1', 'Address1 is', 'required');
                            $this->form_validation->set_rules('Address2', 'Address2 is', 'required');
                            $this->form_validation->set_rules('donation_amt', 'Donation Amount', 'required|numeric');
                            $payment_save=$this->KadamModel->insertpaymentdetails();	
					         if($this->form_validation->run() == true){	
		                        if($payment_save)
						          {
					             $this->session->set_flashdata("payment_success","Payment Done Successfully.");
					             $this->load->view('online_donation');
					            
					             }else{
					             $this->session->set_flashdata("error","You have encountered an error");
					             $this->load->view('online_donation');
											}
										}else{
					             $this->load->view('online_donation');
											}
                
				              
    	}

 }

