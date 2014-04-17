<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
 
class MY_Controller extends CI_Controller {
    public function __construct() {
       parent::__construct();
 
       if (!$this->ion_auth->is_admin()) {
            redirect('auth/login');
       } else {
            //Store user in $data
  	    $user = $this->ion_auth->user()->row();
    	    $email = $user->email;  
    	    $data['email']= $email;
            //Load $the_user in all views
            $this->load->vars($data);
       }
    }
}
