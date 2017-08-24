<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class User_home extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $u_id = $this->session->userdata('u_id');
    if ($u_id == NULL) {
      redirect(base_url(),'refresh');
    }
  }

	public function index()
	{
    $data = array();
		$data['variable1']= "user dashboard";
    $data['u_name']= $this->session->userdata('u_name');
    $data['user_navbar']= $this->load->view('user/user_navbar_view',$data,true);;
		$data['u_home_content']=$this->load->view('user/user_home_content',$data,true);

		$this->load->view('user/user_home_v',$data);

  }

  public function logout()
	{
    $this->session->unset_userdata('u_id');
    $this->session->unset_userdata('u_name');
		redirect(base_url(),'refresh');
  }
}
