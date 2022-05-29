 <!--
	Model   
-->   
 
<?php 
	
	class UserModel extends CI_model{

		public function validateUserData($data){

			//print_r($data);

			$result=$this->db->where("password" , $data['password'])->where("username" , $data['username'])->where("email" , $data['email'])->get('userlogin')->row_array();
			
			return $result;
		}

		public function create($data){
			$this->db->insert("userlogin", $data);
		}

		public function update($data){
			$id=$this->session->userdata("users")['id'];
			$this->db->where("id",$id)->update("userlogin", $data);
			//return;
		}

		public function validateAdminData($data){

			//print_r($data);

			$result=$this->db->where("password" , $data['password'])->where("username" , $data['username'])->where("email" , $data['email'])->get('adminLogin')->row_array();
			
			return $result;
		}

	}
?>
