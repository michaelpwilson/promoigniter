<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Home extends CI_Controller {

    function __construct() {
        parent::__construct(); 
     } 
    public function index() {
	$this->load->model('Home_model');
	if ($this->ion_auth->logged_in()) {
        $loggedin = true;
        } else {
        $loggedin = false;
        }
        $data['loggedin'] = $loggedin;
	$data['site'] = $this->Home_model->get_site();
	$data['sections'] = $this->Home_model->get_sections();
	$this->load->view('frontend/home_view', $data);
    }

    public function editSite() {
	$id = $this->input->post('id');
	$attr = $this->input->post('columnname');
	$newval = $this->input->post('value');
	$this->load->model('Home_model');
	$this->Home_model->update_site($id, $attr, $newval);
    }
    public function editNav() {
        $id = $this->input->post('id');
        $newval = $this->input->post('value');
        $this->load->model('Home_model');
        $this->Home_model->update_nav($id, $newval);
    }
     public function editSections() {
        $id = $this->input->post('id');
	$attr = $this->input->post('columnname');
        $newval = $this->input->post('value');
        $this->load->model('Home_model');
	if($attr == "text"){
        $this->Home_model->update_text($id, $newval);
	} else {
	if($attr == "header"){
	$this->Home_model->update_header($id, $newval);
	} elseif($attr == "extras"){
	$this->Home_model->update_extras($id, $newval);
	}
	}
     }
}
