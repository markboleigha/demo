<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class User_model extends CI_Model {

  public function __construct(){
    parent::__construct();
  }

  /*
  * User Details
  */
  public function user_details($id){
    $query = $this->db->query("SELECT * FROM `users` WHERE `id` = '$id' LIMIT 1");
    if($query->num_rows() < 1){
      return NULL;
    }else{
      return $query->row();
    }
  }

  /*
  * Officer Particulars
  */
  public function particulars($user){
    $particulars = $this->db->query("SELECT * FROM officer_particulars WHERE user_id = '$user'");
    return $particulars->result();
  }

  public function insert_particulars($data = array(), $user){
    $this->db->query("DELETE FROM officer_particulars WHERE user_id = '$user'");
    $names = array('state_of_origin','lga','marital_status','religion','nok_name','nok_phone','nok_email','no_of_children','nok_address','medical_state','medical_date','doctor_name','doctor_unit','fitness_state','fitness_date','fitness_officer','fitness_unit');
    $particulars = array();
    foreach($data as $key => $value){
      if(in_array($data[$key], $names)){
        $this->db->query("INSERT INTO officer_particulars(user_id,name,value) VALUES('".$user."','".$data[$key]."','".$value."')");
      }
    }

  }

  public function insert_appointmens($data = array(), $user){

  }

  public function insert_awards($data = array(), $user){
    
  }

}

?>
