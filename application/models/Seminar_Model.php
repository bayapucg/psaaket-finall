<?php
/**
 *
 */
class Seminar_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  public $table = 'seminar_registration';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  
  public  function save_register_users($data){
	  $this->db->insert('seminars_reg_user',$data);
	  return $this->db->insert_id();
	}
	
	public function get_seminors_registered_users_list(){
		$this->db->select('*')->from('seminars_reg_user');
		return $this->db->get()->result_array();
		
	}
	public function check_user_exits($mob){
		$this->db->select('*')->from('seminars_reg_user');
		$this->db->where('u_mobile',$mob);
		return $this->db->get()->row_array();
		
	}
}

?>
