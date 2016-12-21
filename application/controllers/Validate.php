<?php
class Validate extends MyController {
	public function index(){
		$this->_data['path'] = "validate/index_view";
		$this->load->view($this->_data['path'], $this->_data);
	}
	public function signup(){
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

        $this->form_validation->set_rules('userName', 'Tên người dùng', 'required');
        $this->form_validation->set_rules('userPass', 'Mật khẩu', 'required');
        $this->form_validation->set_rules('userFullName', 'Họ và tên', 'required');
        $this->form_validation->set_rules('userEmail', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('userPhoneNumber', 'Số điện thoại', 'required');
	    $this->form_validation->set_rules('userSocial', 'Link MXH', 'required|valid_url');


        if ($this->form_validation->run() == FALSE)
        {
                $this->_data['path'] = "validate/index_view";
        		$this->_data['signup_error'] = validation_errors();
        }
        else
        {
        		///create login session
        		$userdata = array(
			        'username'  => $this->input->post("userName"),
			        'logged_in' => TRUE
				);
				$this->session->set_userdata($userdata);

        		$this->_data['path'] = "validate/success";
                if ($this->input->post("userSocial") != "") {
                	$userSocial = $this->input->post("userSocial");
                }else $userSocial = "";

                $user = array(
                	'userName' => $this->input->post("userName"),
                	'userPass' => $this->input->post("userPass"),
                	'userFullName' => $this->input->post("userFullName"),
                	'userPhoneNumber' => $this->input->post("userPhoneNumber"),
                	'userEmail' => $this->input->post("userEmail"),
                	'userSocial' => $userSocial,
                );
                $this->load->model("Muser");
                $this->Muser->saveFlightToDB($user);
        }
        $this->load->view($this->_data['path'], $this->_data);
	}
	public function signin(){
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

        $this->form_validation->set_rules('userName', 'Tên người dùng', 'required');
        $this->form_validation->set_rules('userPass', 'Mật khẩu', 'required');


        if ($this->form_validation->run() == FALSE){
        	$this->_data['signin_error'] = validation_errors();
        	$this->_data['path'] = "validate/index_view";
        }else{
        	$this->load->model("Muser");
        	$checkLogin = $this->Muser->checkLogin($this->input->post("userName"), $this->input->post("userPass"));
        	if ($checkLogin == TRUE) {
        		$this->_data['path'] = "validate/success";
        		$userdata = array(
			        'username'  => $this->input->post("userName"),
			        'logged_in' => TRUE
				);
				$this->session->set_userdata($userdata);
        	}else{
        		$this->_data['path'] = "validate/index_view";
        		$this->_data['signin_error'] = "<p class=\"text-danger\">Tên đăng nhập hoặc mật khẩu không đúng</p>";
        	}
        }
		$this->load->view($this->_data['path'], $this->_data);
	}
	public function signout(){
		$array_items = array('username', 'logged_in');
		$this->session->unset_userdata($array_items);
		redirect(base_url()."landingpage");
	}
}