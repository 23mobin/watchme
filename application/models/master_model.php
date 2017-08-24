<?php
class Master_model extends CI_Model {

  public function check_admin_exist($email,$password)
  {
    $this->db->select('*');
    $this->db->from('users_info');
    $this->db->where('u_email',$email);
    $this->db->where('u_password',md5($password));
    $query_result = $this->db->get();
    $result = $query_result->row();
    return $result;

  }
}

?>
