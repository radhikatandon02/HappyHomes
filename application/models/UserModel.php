  <!--
	Model 
-->

<?php 
	
	class UserModel extends CI_model{

		public function validateUserData($data){

			//print_r($data);

			$result=$this->db->where("password" , $data['password'])->where("username" , $data['username'])->where("email" , $data['email'])->get('userLogin')->row_array();
			
			return $result;
		}

		public function validateAdminData($data){

			//print_r($data);

			$result=$this->db->where("password" , $data['password'])->where("username" , $data['username'])->where("email" , $data['email'])->get('adminLogin')->row_array();
			
			return $result;
		}
	}
?>