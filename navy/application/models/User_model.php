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
    $query = $this->db->query("SELECT * FROM `users` WHERE `user_id` = '$id' LIMIT 1");
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
    $particulars = $this->db->query("SELECT * FROM `officer_particulars` WHERE user_id = '$user'");
    return $particulars->result();
  }

  public function insert_particulars($data, $user){
    $this->db->query("DELETE FROM officer_particulars WHERE user_id = '$user'");
    $names = array('state_of_origin','lga','marital_status','religion','nok_name','nok_phone','nok_email','no_of_children','nok_address','medical_state','medical_date','doctor_name','doctor_unit','fitness_state','fitness_date','fitness_officer','fitness_unit','professional_bodies','foreign_languages','awards');
    $particulars = array();
    foreach($data as $key => $value){
      if(in_array($key, $names)){
        $insert = array(
          'user_id' => $user,
          'name' => $key,
          'value' => $value
        );
        $this->db->insert('officer_particulars', $insert);
        //$this->db->query("INSERT INTO officer_particulars(user_id,name,value) VALUES('".$user."','".$data[$key]."','".$value."')");
      }
    }

  }

  public function insert_appointments($data, $user){
    $this->db->query("DELETE FROM appointment_profile WHERE user_id = '$user'");
    for($i = 0; $i < count($data['rank']); $i++){
        $appointments = array('user_id' => $user,
      'appointment' => $data['appointment'][$i],
      'rank' => $data['rank'][$i],
      'period' => $data['period'][$i]);
      $this->db->insert('appointment_profile', $appointments);
      $appointments = array();
    }
  }

  public function insert_courses($data = array(), $user){
    $this->db->query("DELETE FROM courses_attended WHERE user_id = '$user'");
    for($i = 0; $i < count($data['course']); $i++){
      $courses = array('user_id' => $user, 'course' => $data['course'][$i], 'insitution' => $data['insitution'][$i], 'grade' => $data['grade'][$i], 'year' => $data['year'][$i]);
      $this->db->insert('courses_attended', $courses);
      $courses= array();
    }
  }

}

?>
