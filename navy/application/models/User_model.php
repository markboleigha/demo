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

}

?>
