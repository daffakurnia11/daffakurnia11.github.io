<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();

    date_default_timezone_set("Asia/Jakarta");
  }

  public function login($username, $password)
  {
    $data = $this->db->get_where('admin', ['username' => $username])->row_array();

    if ($username == $data['username']) {
      if ($password == 'tniopkaerb') {
        $this->db->set('login_at', date("d-m-Y H:i:s"));
        $this->db->where('username', $username);
        $this->db->update('admin');

        $data = [
          'username'  => $data['username'],
          'roles'     => $data['roles']
        ];

        $this->session->set_userdata($data);
        redirect('dashboard');
      } else {
        $this->session->set_flashdata('message', 'Login Failed!');
        redirect('login');
      }
    } else {
      $this->session->set_flashdata('message', 'Login Failed!');
      redirect('login');
    }
  }

  public function logout()
  {
    $last_login = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array()['login_at'];

    $this->db->set('last_login', $last_login);
    $this->db->set('logout_at', date("d-m-Y H:i:s "));
    $this->db->where('username', $this->session->userdata('username'));
    $this->db->update('admin');

    $this->session->unset_userdata('username');
    redirect('login');
  }
}
