<?php

if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Website extends CI_Controller {

    function __construct() {
        parent::__construct();
        // Load the website model, we need this for everything on this controller
        $this->load->model('Website_model');
    }

    public function index() {

        // If the user is logged in set the variable to true, Else false.
	if ($this->ion_auth->logged_in()) {
           $loggedin = true;
        } else {
           $loggedin = false;
        }

        // Attach the $logged_in variable to the data object
        $data['loggedin'] = $loggedin;

        // Get the site data e.g settings
	$data['site'] = $this->Website_model->get_site();
        // Get the sections for the webpage
	$data['sections'] = $this->Website_model->get_sections();
        // Get the meta data for the webpage
	$data['meta'] = $this->Website_model->get_meta();

        // Load the helpers for meta & css
	$this->load->helper('meta_helper');
	$this->load->helper('css_helper');

        // Load the head view
	$this->load->view('website/includes/head', $data);
        // Only show the sidebar if the user is logged in
	if ($loggedin) {
	   $this->load->view('website/includes/sidebar', $data);
	}
        // Load the home view & the footer
	$this->load->view('website/home_view', $data);
	$this->load->view('website/includes/foot', $data);

    }

    // Used when the user is editing settings for their web page
    public function editSite() {

	$id = $this->input->post('id');
	$attr = $this->input->post('columnname');
	$newval = $this->input->post('value');
	$this->Website_model->update_site($id, $attr, $newval);

    }

    // Used when setting the secondary background
    public function secondaryBackground() {

        $attr = "secondary-background";
        $newval = $this->input->post('backgroundcolor');
        $this->Website_model->secondary_background($attr, $newval);

    }

    // Used when setting the secondary font color
    public function secondaryFontColor() {

        $attr = "secondary-font-color";
        $newval = $this->input->post('fontcolor');
        $this->Website_model->secondary_fontcolor($attr, $newval);

    }

    // Used when editing the navagation section links
    public function editNav() {

        $id = $this->input->post('id');
        $newval = $this->input->post('value');
        $this->Website_model->update_nav($id, $newval);

    }

    // Used when editing content inside the sections
    public function editSections() {

        $id = $this->input->post('id');
	$attr = $this->input->post('columnname');
        $newval = $this->input->post('value');

        // check if it is a text field 
	if($attr == "text"){
            $this->Website_model->update_text($id, $newval);
	} else {

          // check if it is a header OR an extra field
          if($attr == "header"){
              $this->Website_model->update_header($id, $newval);
          } elseif($attr == "extras"){
              $this->Website_model->update_extras($id, $newval);
          }

        }

    }
}
