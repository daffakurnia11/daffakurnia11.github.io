<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Activity_model extends CI_Model
{
  public function add_activity($activity)
  {
    $username = $this->session->userdata('username');

    $this->db->set('last_activity', $activity);
    $this->db->where('username', $username);
    $this->db->update('admin');
  }
}
