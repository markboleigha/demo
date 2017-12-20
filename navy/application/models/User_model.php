<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class User_model extends CI_Model {
  public $asid;
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


  public function insert_appointments($data, $user){
    $this->db->query("DELETE FROM appointment_profile WHERE user_id = '$user'");
    for($i = 0; $i < count($data['rank']); $i++){
        $appointments = array('user_id' => $user,
        'assessment_id' => $this->asid,
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
      $courses = array('user_id' => $user,
      'assessment_id' => $this->asid,
      'course' => $data['course'][$i],
      'insitution' => $data['insitution'][$i],
      'grade' => $data['grade'][$i],
      'year' => $data['year'][$i]);
      $this->db->insert('courses_attended', $courses);
      $courses= array();
    }
  }


  public function submit_evaluation($post, $user){
    $this->asid = rand(0000,9999) . time();
    $this->create_assessment($post, $user);
    $this->insert_particulars($post, $user);
    $this->insert_appointments($post, $user);
    $this->insert_courses($post, $user);
  }

  public function create_assessment($post, $user){
    $info = array(
      'assessment_id' => $this->asid,
      'user_id' => $user,
      'report_period' => $post['period_from'] . '/'.$post['period_to'],
      'occasion' => $post['occasion'],
      'date_created' => time()
    );

    $this->db->insert('assessments', $info);
  }

  public function insert_particulars($data, $user){
    //$this->db->query("DELETE FROM officer_particulars WHERE user_id = '$user'");
    $names = array('state_of_origin','lga','marital_status','religion','nok_name','nok_phone','nok_email','no_of_children','nok_address','medical_state','doctor_name','doctor_unit','fitness_state','fitness_officer','fitness_unit','professional_bodies','foreign_languages','awards','preferences');
    $dates = array('medical_date','fitness_date');
    $particulars = array();
    foreach($data as $key => $value){
      if(in_array($key, $names)){
        $particulars[$key] = $value;
      }

      if(in_array($key, $dates)){
        $particulars[$key] = strtotime($value);
      }
    }

    $particulars['user_id'] = $user;
    $particulars['date_created'] = strtotime("NOW");
    $particulars['assessment_id'] = $this->asid;
    $this->db->insert('officer_particulars', $particulars);

  }

  public function pending_assessment($user){
    $query = $this->db->query("SELECT * FROM `assessments` WHERE `user_id` = '$user' LIMIT 1");
    if($query->num_rows() < 1){
      return false;
    }else{
      return true;
    }
  }

  public function all_assessments($user, $limit = 100, $start = null){
    $this->db->select("*");
    $this->db->where("user_id", $user);
    $this->db->order_by("date_created", "DESC");
    $this->db->limit($limit, $start);

    $query = $this->db->get("assessments");
    //$query = $this->db->query("SELECT * FROM `assessments` WHERE `user_id` = '".$user."' ORDER BY `id` DESC LIMIT ".$limit.", ".$start);

    if($query->num_rows() < 1){
      $result = NULL;


    }else{
      $result = $query->result();
    }

    return $result;

  }

  /*
  * Last Submitted Particulars
  */
  public function particulars($user){
    $query = $this->db->query("SELECT * FROM officer_particulars WHERE user_id = '$user' ORDER BY id DESC LIMIT 1");
    if($query->num_rows() < 1){
      return null;
    }else{
      $result = $query->row();
      return $result;
    }

  }

}

?>
