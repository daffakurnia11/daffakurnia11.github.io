<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    date_default_timezone_set("Asia/Jakarta");
  }

  public function login()
  {
    if ($this->session->userdata('username')) {
      redirect('dashboard');
    }

    $this->form_validation->set_rules('username', 'Username', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/login');
    } else {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $this->login->login($username, $password);
    }
  }

  public function logout()
  {
    $this->login->logout();
  }

  public function index()
  {
    if (!$this->session->userdata('username')) {
      redirect('login');
    }
    $data = [
      'title'   => 'Dashboard',
      'links'   => $this->db->get('shorten_link')->result_array()
    ];

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/index');
    $this->load->view('admin/templates/footer');
  }

  public function activity()
  {
    if (!$this->session->userdata('username')) {
      redirect('login');
    }
    $data = [
      'title'       => 'Admin Activity',
      'admins'      => $this->db->get('admin')->result_array(),
      'activities'  => $this->activity->all_activity()
    ];

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/activity', $data);
    $this->load->view('admin/templates/footer');
  }

  public function pricelist()
  {
    if (!$this->session->userdata('roles')) {
      redirect('login');
    }
    $data = [
      'title'     => 'Pricelist',
      'packages'  => $this->db->get('package')->result_array()
    ];

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/package/pricelist');
    $this->load->view('admin/templates/footer');
  }

  public function updatepackage($id)
  {

    if (!$this->session->userdata('roles')) {
      redirect('login');
    }

    $this->form_validation->set_rules('package', 'Package', 'required|trim');
    $this->form_validation->set_rules('page', 'page', 'required|trim');
    $this->form_validation->set_rules('maintenance', 'maintenance', 'required|trim');
    $this->form_validation->set_rules('domain', 'domain', 'required|trim');
    $this->form_validation->set_rules('specials', 'specials', 'required|trim');
    $this->form_validation->set_rules('price', 'price', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $data = [
        'title'    => 'Pricelist',
        'package'  => $this->db->get_where('package', ['id' => $id])->row_array()
      ];

      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/navbar');
      $this->load->view('admin/templates/sidebar', $data);
      $this->load->view('admin/package/update', $data);
      $this->load->view('admin/templates/footer');
    } else {
      $data = [
        'package'     => $this->input->post('package'),
        'page'        => $this->input->post('page'),
        'maintenance' => $this->input->post('maintenance'),
        'domain'      => $this->input->post('domain'),
        'hosting'     => (!$this->input->post('hosting') ? 0 : 1),
        'has_ssl'     => (!$this->input->post('has_ssl') ? 0 : 1),
        'specials'    => $this->input->post('specials'),
        'price'       => $this->input->post('price'),
      ];
      if ($this->session->userdata('roles') == 'dev') {
        $this->db->update('package', $data, ['id' => $id]);
        $this->activity->add_activity('Edit Package ' . $data['package']);
      }
      redirect('pricelist');
    }
  }
}
