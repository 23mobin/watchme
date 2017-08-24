<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$u_id = $this->session->userdata('u_id');
		if ($u_id != NULL) {
			redirect('user_home');
		}
	}

	public function index(){
		$data = array();
		$data['variable1']= "welcome controller";
		$data['user_loging_form']=$this->load->view('user/login',$data,true);
		$this->load->view('master',$data);
	}

	public function login_check(){
		$rules = array(
			"u_email" => array(
				'field'=> 'u_email',
				'label'=> 'email',
				'rules'=> 'trim|required|valid_email'
			),
			"u_password" => array(
				'field'=> 'u_password',
				'label'=> 'password',
				'rules'=> 'required|max_length[150]|min_length[5]'
			),
		);
		//set rules
		$this->form_validation->set_rules($rules);
		// if validation failed
		if($this->form_validation->run()!= true){
			//get error message from violating form rules
			$sdata = array();
			$sdata['error']= form_error('u_email').form_error('u_password');
			$this->session->set_userdata($sdata);
			redirect('welcome');
		}
		else{
			// if validation successed
			$email = $this->input->post('u_email');
			$password = $this->input->post('u_password');
			// echo 'qqqqqq'.$email."   asdasdasdasdasdasdasd  ".$password;
			// exit();
			$result = $this->master_model->check_admin_exist($email,$password);
			if ($result) {
				$sdata = array();
				$sdata['u_id']= $result->u_id;
				// $sdata['u_id']= 1;
				$sdata['u_name']= $result->u_name;
				$this->session->set_userdata($sdata);
				redirect('user_home');
			}else{
				redirect('welcome');
			}
		}
	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
