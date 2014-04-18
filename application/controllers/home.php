<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Home extends CI_Controller {

    function __construct() {
        parent::__construct(); 
     } 
     public function index() {
	$this->load->model('Home_model');
	$data['site'] = $this->Home_model->get_site();
	$this->load->view('frontend/home_view', $data);
    }

    public function edit() {
	$id = $this->input->post('id');
	$attr = $this->input->post('columnname');
	$newval = $this->input->post('value');
	$this->load->model('Home_model');
	$this->Home_model->update($id, $attr, $newval);
	}
}
