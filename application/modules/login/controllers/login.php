<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Login extends MY_Controller
{
function __construct()
{
parent::__construct();
$this->load->model('Dbs');
$this->load->library('form_validation');
// $this->load->library('form_validation');

}

public function index()
{
  if($this->session->userdata("username")){
    redirect('admin');
  }else{
    $this->load->view('login');

  }
}

public function register(){
$this->load->view('regis');
}

public function logout(){
$this->session->sess_destroy();
redirect(base_url()."login");
}
public function login_act(){
    $username=$this->input->post('username');
    $password=$this->input->post('password');

    $where=array(
    'username' => $username,
    'password' => sha1($password)

    );
    if($this->Dbs->cek_login("admin",$where)->num_rows()>0){// cek ke tabel user
    $nama = $this->Dbs->getUserId($username);
    $data_session = array(
    'username' => $username,
    'nama'=>  $nama->nama
    );
    // var_dump($data_session); die;


    $this->session->set_userdata($data_session);

    redirect(base_url("admin"));
    echo "berhasil login";
  }else if($this->Dbs->cek_login("agen",$where)->num_rows()>0){
    $nama = $this->Dbs->getUserIdagen($username);
    $data_session = array(
    'username' => $username,
    'nama'=>  $nama->nama
    );
    $this->session->set_userdata($data_session);

    redirect(base_url("agen"));
    echo "berhasil login";
  }else{
    echo "<script type='text/javascript'>alert('Username atau password Salah!!!'); document.location='http://localhost/ProjectTravel/login' </script>";

    }
}


public function _rules()
{
$this->form_validation->set_rules('nama', 'nama', 'trim|required');
$this->form_validation->set_rules('email', 'email', 'trim|required');
$this->form_validation->set_rules('username', 'username', 'trim|required');
$this->form_validation->set_rules('password', 'password', 'trim|required');
$this->form_validation->set_rules('id_user', 'id_user', 'trim');
$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

}

}
