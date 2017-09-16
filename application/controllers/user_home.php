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
    $data['friends'] = array();
		$data['variable1']= "user dashboard";
    $data['u_name']= $this->session->userdata('u_name');
    $data['u_id']= $this->session->userdata('u_id');
    $user_id = $this->session->userdata('u_id');
    $data['status_update_form']= $this->load->view('user/status_updater',$data,true);
    $data['friend_id_by_user'] = $this->user_model->select_all_friends_by_id($user_id);
    foreach($data['friend_id_by_user'] as $friends_id){
      array_push($data['friends'],$this->user_model->friends_info_by_id($friends_id));
    }

    // var_dump($data['friends']);
    // exit();






    $data['user_navbar']= $this->load->view('user/user_navbar_view',$data,true);

		$data['u_chats_contents']=$this->load->view('user/user_chat_v',$data,true);
    $data['timeline_status']=$this->load->view('user/timeline_status_v',$data,true);
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
