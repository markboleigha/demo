<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$this->load->view("header");
$this->load->view("{$interface}/{$page}");
$this->load->view("footer");

?>
