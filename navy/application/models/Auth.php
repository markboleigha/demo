<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Auth extends CI_Model{

  public $error;
  public function __construct(){
    parent::__construct();
  }

  public function is_logged_in($user){

    if(isset($_SESSION['loggedInUser']) && $_SESSION['loggedInUser'] == $user){
      return TRUE;
    }else{
      return FALSE;
    }

  }

  public function register_user($form_data = array()){
    $data = array();
    foreach ($form_data as $key => $value) {
      if($key != 'password2'){
        $data[$key] = $value;
      }
      if($key == 'password'){
        $data[$key] = password_hash($value, PASSWORD_DEFAULT);
      }
    }

    if($this->db->insert('users', $data)){
      $this->error = 'ok';
    }else{
      $this->error = json_encode($this->db->error());
    }
  }
  /*
  * Login User
  */
  public function login($username, $password){
    $query = $this->db->query("SELECT user_id,service_no,password FROM users WHERE service_no = '$username'");
    if($query->num_rows() < 1){
      $this->error = 'Invalid Login Details';
      return false;
    }else{
      $result = $query->row();
      $check_password =  password_verify($password, $result->password);
      if($check_password == TRUE){

        $data = array(
          'loggedInUser' => $result->user_id,
        );
        $this->session->set_userdata($data);
        return true;
      }else{
        $this->error = 'Invalid Login Details';
        return false;
      }
    }
  }

  public function check_email($email){
    //check if email is in valid format
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

        return false;

    }else{

    	//check for valid DNS records
      $domain = explode('@', $email);


      if(checkdnsrr($domain[1], 'A') == false){

          return false;
      }

      $bannedEmails = json_decode(file_get_contents(APPPATH . "third_party/blacklist.json"));

      if (in_array(strtolower($domain[1]), $bannedEmails)){

        return false;

      }else{

        return true;

      }
    }
  }




}

?>
