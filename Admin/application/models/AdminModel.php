<?php
				class AdminModel extends CI_Model {


					public function check_admin_login($username,$password){

						  //$sha_password = md5($password);
      
					
					      $this->db->where('username', $username);
					      
					     $this->db->where('password', $password);

					      return $query = $this->db->get('tbl_admin')->row_array(); 
					     

					 }
				   public function editUserData($id)
					{
						$this->db->select('*');
						$this->db->where('id',$id);
						$row=$this->db->get('tbl_user_details');
						return $row->row_array();
					}
				  
				   public function displayUserData()
					{
						$this->db->select('*');
						return $result=$this->db->get('tbl_user_details');
						//print_r($result);
					}
			       public function delete_user_done($id){
						$this->db->where('id',$id);
						$this->db->delete('tbl_user_details');
					}
			


				}
			?>