<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Website extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Website_model');
     } 
    public function index() {
	if ($this->ion_auth->logged_in()) {
        $loggedin = true;
        } else {
        $loggedin = false;
        }
        $data['loggedin'] = $loggedin;
	$data['site'] = $this->Website_model->get_site();
	$data['sections'] = $this->Website_model->get_sections();
	$data['meta'] = $this->Website_model->get_meta();
	$this->load->helper('meta_helper');
	$this->load->helper('css_helper');
	$this->load->view('website/includes/head', $data);
	if($loggedin) {
	$this->load->view('website/includes/sidebar', $data);
	}
	$this->load->view('website/home_view', $data);
	$this->load->view('website/includes/foot', $data);
    }

    public function editSite() {
	$id = $this->input->post('id');
	$attr = $this->input->post('columnname');
	$newval = $this->input->post('value');
	$this->Website_model->update_site($id, $attr, $newval);
    }
    public function secondaryBackground() {
        $attr = "secondary-background";
        $newval = $this->input->post('backgroundcolor');
        $this->Website_model->secondary_background($attr, $newval);
    }
    public function secondaryFontColor() {
        $attr = "secondary-font-color";
        $newval = $this->input->post('fontcolor');
        $this->Website_model->secondary_fontcolor($attr, $newval);
    }
    public function editNav() {
        $id = $this->input->post('id');
        $newval = $this->input->post('value');
        $this->Website_model->update_nav($id, $newval);
    }
     public function editSections() {
        $id = $this->input->post('id');
	$attr = $this->input->post('columnname');
        $newval = $this->input->post('value');
	if($attr == "text"){
        $this->Website_model->update_text($id, $newval);
	} else {
	if($attr == "header"){
	$this->Website_model->update_header($id, $newval);
	} elseif($attr == "extras"){
	$this->Website_model->update_extras($id, $newval);
	}
     }
    }
}
