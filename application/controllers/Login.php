  <?php 

    class Login extends CI_Controller{

        public function index(){
            if(!empty($this->session->userdata("user"))){
                $this->load->view("userprofile");
            }
            else{
                $this->load->view("loginform");
            }
        }
        public function adminindex(){
            if(!empty($this->session->userdata("user"))){
                $this->load->view("adminprofile");
            }
            else{
                $this->load->view("loginform");
            }
        }

        public function profile(){
            if(!empty($this->session->userdata("user"))){
                $this->load->view('userprofile');
            }
            else{
                redirect(base_url()."Login/index");
            }
        }
        public function profile2(){
            if(!empty($this->session->userdata("user"))){
                $this->load->view('adminprofile');
            }
            else{
                redirect(base_url()."Login/adminindex");
            }
        }

        public function userformcheck(){

            $this->form_validation->set_rules("username" , "Username", "trim|required");
            $this->form_validation->set_rules("password" , "Password", "trim|required");
            $this->form_validation->set_rules("email" , "Email", "required|valid_email");

            if($this->form_validation->run() == false){
                $this->session->set_flashdata("error", validation_errors());
                redirect(base_url()."Login/index");
            }

            else{
                //echo "Success";

                $data['username']=$this->input->post("username");
                $data['email']=$this->input->post("email");
                $data['password']=$this->input->post("password");

                $result = $this->UserModel->validateUserData($data);

                if($result){
                    $this->session->set_userdata("user", $result);
                    redirect(base_url()."Login/profile");
                }

                else{
                    $this->session->set_flashdata("loginerror", "Invalid Username, Email or password!");
                    redirect(base_url()."Login/index");
                }
            }
        }

        public function adminformcheck(){

            $this->form_validation->set_rules("username" , "Username", "trim|required");
            $this->form_validation->set_rules("password" , "Password", "trim|required");
            $this->form_validation->set_rules("email" , "Email", "required|valid_email");

            if($this->form_validation->run() == false){
                $this->session->set_flashdata("error", validation_errors());
                redirect(base_url()."Login/adminindex");
            }

            else{
                //echo "Success";

                $data['username']=$this->input->post("username");
                $data['email']=$this->input->post("email");
                $data['password']=$this->input->post("password");

                $result = $this->UserModel->validateAdminData($data);

                if($result){
                    $this->session->set_userdata("user", $result);
                    redirect(base_url()."Login/profile2");
                }

                else{
                    $this->session->set_flashdata("loginerror", "Invalid Username, Email or password!");
                    redirect(base_url()."Login/adminindex");
                }
            }
        }

        public function logout(){

            $this->session->sess_destroy();
            redirect(base_url()."Login/index");


        }
    }

?>