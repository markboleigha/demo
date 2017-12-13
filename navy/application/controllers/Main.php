<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Main extends CI_Controller{
  public $user;
  public function __construct(){
    parent::__construct();
    $this->_init();
  }

  public function index(){

    if($this->auth->is_logged_in($this->user)){
      redirect('dashboard', 'refresh');
    }else{
      redirect('login', 'refresh',301);
    }
  }

  /*
  * User Login Page
  */
  public function login(){
    if($_POST && !empty($_POST)){
      $this->form_validation->set_rules('username', 'User ID', 'trim|required');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');

      if($this->form_validation->run() == TRUE){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if($this->auth->login($username, $password) == TRUE){
          redirect('dashboard', 'refresh');
        }else{
          $this->session->set_flashdata('login_err', "<div class='error alert alert-danger'>".$this->auth->error."</div>");
        }
      }else {
        $this->session->set_flashdata('login_err', "<div class='error alert alert-danger'>Please correct errors below</div>");
      }
    }
    $data = array(
      'title' => 'Secure Login',
      'page' => 'login'
    );

    $this->load->view('template', $data);
  }

  /*
  * Success Page
  */
  public function success(){
    if($this->session->flashdata('msg')){
      $data = array(
        'title' => 'Success',
        'page' => 'success'
      );

    }else{
      $data = array(
        'title' => 'Not Found',
        'page' => 'invalid'
      );
    }
    $this->load->view('template', $data);
  }

  /*
  * User Registration Page
  */
  public function register(){
    if($_POST && !empty($_POST)){
      $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
      $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
      $this->form_validation->set_rules('other_name', 'Other Names', 'trim');
      $this->form_validation->set_rules('email', 'Email Address', 'trim|valid_email|is_unique[users.email]|callback_check_email', array('is_unique'  => 'This %s already exists.'));
      $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
      $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[6]|matches[password]');
      $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|min_length[11]|is_unique[users.phone]', array('is_unique'  => 'This %s already exists.'));
      $this->form_validation->set_rules('sex', 'Sex', 'trim|required');
      $this->form_validation->set_rules('service_no', 'Service Number', 'trim|required|is_unique[users.service_no]', array('is_unique'  => 'This %s already exists.'));
      $this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
      $this->form_validation->set_rules('rank', 'Rank', 'trim|required');
      $this->form_validation->set_rules('seniority', 'Seniority on current rank', 'trim|required');
      $this->form_validation->set_rules('enlistment_date', 'Enlistment Date', 'trim|required');
      $this->form_validation->set_rules('commission_date', 'Commision Date', 'trim|required');
      $this->form_validation->set_rules('commission_type', 'Commission Type', 'trim|required');
      $this->form_validation->set_rules('last_promotion', 'Last Promotion', 'trim|required');
      $this->form_validation->set_rules('rod', 'ROD', 'trim|required');
      $this->form_validation->set_rules('command', 'Command', 'trim|required');
      $this->form_validation->set_rules('unit', 'Unit', 'trim|required');
      if($this->form_validation->run() == TRUE){
        $form_data = $this->security->xss_clean($_POST);
        $this->auth->register_user($form_data);
        if($this->auth->error == 'ok'){
          $this->session->set_flashdata('msg', 'registration successfull');
          redirect('success','refresh',301);
          $this->session->keep_flashdata('msg');
        }
      }else{
        $this->session->set_flashdata('reg_err', 'Please correct errors below');

      }

    }

    $data = array(
      'title' => 'Registration',
      'page' => 'register'
    );
    //$this->session->set_flashdata('reg_err', '<div class="alert alert-danger">Loaded</div>');
    $this->load->view('template', $data);
  }

  /*
  * Evaluation Page
  */
  public function evaluation(){
    if($this->auth->is_logged_in($this->user)){
      $data = array(
        'title' => 'Personnel Evaluation',
        'page' => 'evaluation',
        'user' => $this->user_model->user_details($this->user),
        'particulars' => $this->user_model->particulars($this->user)
      );

      $this->load->view('template', $data);

    }else{
      redirect('login', 'refresh');
    }
  }
  /*
  * Check if email is valid
  */
  public function check_email($email){

    return $this->auth->check_email($email);

  }


  /*
  *  User Dashboard
  */
  public function dashboard(){
    if($this->auth->is_logged_in($this->user)){
      $data = array(
        'title' => 'User Dashboard',
        'page' => 'dashboard',
        'user' => $this->user_model->user_details($this->user)
      );

      $this->load->view('template', $data);

    }else{
      redirect('login', 'refresh',301);
    }
  }


  private function _init(){
    $this->user = $this->session->userdata('loggedInUser') ? $this->session->userdata('loggedInUser') : NULL;
  }

  public function logout(){
    $this->session->sess_destroy();
    $this->index();
  }


}

?>
