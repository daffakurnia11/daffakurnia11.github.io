<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Activity_model extends CI_Model
{
  public function all_activity()
  {
    $this->db->order_by('id', 'DESC');
    $this->db->limit(7);
    $query = $this->db->get('activity');
    return $query->result_array();
  }

  public function add_activity($activity)
  {
    date_default_timezone_set("Asia/Jakarta");

    $data = [
      'username'    => $this->session->userdata('username'),
      'activity'    => $activity,
      'time'        => date("d-m-Y H:i:s")
    ];
    $this->db->insert('activity', $data);
  }
}
