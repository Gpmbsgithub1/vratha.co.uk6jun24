<?php
				class KadamModel extends CI_Model {

			public function insertpoojadetails(){
				  $name=$this->input->post('name');
    	          $mobile_no=$this->input->post('mobile_no');
    	          $email=$this->input->post('email');
    	          $pooja_name=$this->input->post('pooja_name');
    	          $pooja_date=$this->input->post('pooja_date');

				$formarray=array(
					    						'name' => $name,
				  	       					    'mobile_no'  =>$mobile_no,
							    	            'email' => $email,
							    	            'email' => $email,
							    	            'pooja_name' => $pooja_name,
							    	            'pooja_date' => $pooja_date
							    	             	);

				                	return $this->db->insert('tbl_online_pooja_booking',$formarray);

				}
				public function insertpaymentdetails(){
				  if(isset($_POST['pay_id']) && isset($_POST['amount']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile_no']) && isset($_POST['Address1'])&& isset($_POST['Address2']) && isset($_POST['pincode']) && isset($_POST['city']) && isset($_POST['state'])){
					    		$pay_id=$_POST['pay_id'];
					    		$amount=$_POST['amount'];
					    		$name=$_POST['name'];
					    		$email=$_POST['email'];
					    		$mobile_no=$_POST['mobile_no'];
					    		$Address1=$_POST['Address1'];
					    		$Address2=$_POST['Address2'];
					    		$pincode=$_POST['pincode'];
					    		$city=$_POST['city'];
					    		$state=$_POST['state'];
					    		$pay_status='Success';
					    		$formarray=array('pay_id' => $pay_id,
					    						'dname' => $name,
				  	       					    'donation_amt'  =>$amount,
							    	             'email' => $email,
							    	             'mobile_no' => $mobile_no,
							    	              'Address1' => $Address1,
							    	              'Address2' => $Address2,
							    	              'pincode' => $pincode,
							    	               'city' => $city,
							    	               'state' => $state,
							    	                'pay_status' => $pay_status
							    	              
							    	             
			
							    	             	);
					    		  	return $this->db->insert('tbl_online_donation_payment',$formarray);

				}


}
}

?>