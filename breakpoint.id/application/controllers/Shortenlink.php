<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shortenlink extends CI_Controller
{
  public function redirect($original)
  {
    $data['shorten_link'] = $this->db->get_where('shorten_link', ['original' => $original])->row_array();

    if ($data['shorten_link']) {
      header("refres:3;url=" . $data['shorten_link']['original']);
    } else {
      redirect(base_url());
    }
  }
}
