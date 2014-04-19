<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

 public function __construct() {
   parent::__construct();
 }

 function update($id, $attr, $newval) {
 $this->load->database();
 $newData = array(
 $attr => $newval
 );
 $this->db->where('settings_id', $id);
 $this->db->update('site', $newData);
 }

 function get_site() {
  $query = $this->db->get('site'); 
  return $query->row_array();
  }

}
