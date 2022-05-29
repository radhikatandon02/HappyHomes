   <?php        
 
    class Login extends CI_Controller{ 
 
        public function index(){
            if(!empty($this->session->userdata("users"))){
                $this->load->view("userprofile");
            }
            else{
                $this->load->view("dashboard");
            }
        }
        public function adminindex(){
            if(!empty($this->session->userdata("users"))){
                $this->load->view("adminprofile");
            }
            else{
                $this->load->view("dashboard");
            }
        }

        public function profile(){
            if(!empty($this->session->userdata("users"))){
                $this->load->view('userprofile');
            }
            else{
                redirect(base_url()."Login/index");
            }
        }

        public function create(){
            $data["username"] = $this->input->post("uname");
            $data["firstname"] = $this->input->post("fname");
            $data["lastname"] = $this->input->post("lname");
            $data["password"] = $this->input->post("pass");
            $data["email"] = $this->input->post("email");
            $data["contactno"] = $this->input->post("phone");
            $data["gender"] = $this->input->post("gender");
            $data["address"] = $this->input->post("address");
            $data["dob"] = $this->input->post("birthday");
            //print_r($data);
            $this->UserModel->create($data);
            $this->load->view("loginform");
        }

        public function profile2(){
            if(!empty($this->session->userdata("users"))){
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
                    $this->session->set_userdata("users", $result);
                    redirect(base_url()."Login/profile");
                }

                else{
                    $this->session->set_flashdata("loginerror", "Invalid Username, Email or password!");
                    redirect(base_url()."Login/index");
                }
            }
        }


        public function dash(){
             $this->load->view("loginform");
        }

        public function about(){
             $this->load->view("about");
        }

        public function review(){
             $this->load->view("reviews");
        }

        public function displayDetails(){
            $result = $this->UserModel->validateAdminData($data);
        }

        public function bsr()
        {
            $this->load->view("buy");
        }
        public function bsr2()
        {
            $this->load->view("buy2");
        }
        public function bsr3()
        {
            $this->load->view("rent");
        }

        public function register()
        {
           $this->load->view("registration");
        }

        public function support()
        {
            $this->load->view("supporthelp");
        }

        public function tandc()
        {
            $this->load->view("terms");
        }

        public function logout()
        {

            $this->session->sess_destroy();
            redirect(base_url()."Login/index");
        }

        public function update(){
            $data["username"] = $this->input->post("username");
            $data["firstname"] = $this->input->post("firstname");
            $data["lastname"] = $this->input->post("lastname");
            $data["password"] = $this->input->post("password");
            // $data["email"] = $this->input->post("email");
            $data["contactno"] = $this->input->post("contactno");
            // $data["gender"] = $this->input->post("gender");
            $data["address"] = $this->input->post("address");
            // $data["dob"] = $this->input->post("birthday");
            //print_r($data);
            $this->UserModel->update($data);
            redirect(base_url()."Login/afterupdate");
        }

        public function afterupdate(){

            $this->load->view("userprofile");
        }

        public function edit(){
         $this->load->view("edit");
        }
    }

?>
