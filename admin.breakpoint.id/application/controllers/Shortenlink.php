<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shortenlink extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    date_default_timezone_set("Asia/Jakarta");
  }

  public function index()
  {
    if (!$this->session->userdata('roles')) {
      redirect('login');
    }
    $this->form_validation->set_rules('name', 'Nama URL', 'required|trim');
    $this->form_validation->set_rules('original', 'URL Asli', 'required|trim|valid_url');
    if ($this->input->get('shorten')) {
      $this->form_validation->set_rules('shorten', 'URL Pendek', 'required|trim|alpha');
    } else {
      $this->form_validation->set_rules('shorten', 'URL Pendek', 'required|trim|alpha|is_unique[shorten_link.shorten]');
    }

    if ($this->form_validation->run() == FALSE) {
      $data = [
        'title'   => 'Shorten Link',
        'links'   => $this->db->get('shorten_link')->result_array()
      ];

      $this->load->view('templates/header', $data);
      $this->load->view('templates/navbar');
      $this->load->view('templates/sidebar', $data);
      $this->load->view('admin/shortenlink', $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'name'        => $this->input->post('name'),
        'original'    => $this->input->post('original'),
        'shorten'     => $this->input->post('shorten'),
        'created_at'  => date("H:i:s d-m-Y"),
      ];
      if ($this->db->get_where('shorten_link', ['shorten' => $data['shorten']])->row_array()) {
        $this->db->update('shorten_link', $data, ['shorten' => $data['shorten']]);
        $this->activity->add_activity('Update Shortenlink ' . $data['shorten']);
      } else {
        $this->db->insert('shorten_link', $data);
        $this->activity->add_activity('Create New Shortenlink ' . $data['shorten']);
      }
      redirect('shortenlink');
    }
  }

  public function delete($shorten)
  {
    $this->activity->add_activity('Delete Shortenlink ' . $shorten);
    $this->db->delete('shorten_link', ['shorten' => $shorten]);
    redirect('shortenlink');
  }
}
