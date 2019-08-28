<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
      // $data['data'] = $this->Dbs->data(); // ngambil data dari database sesuai fungsi
      // var_dump($data); die;
      $this->load->view('front/header');
      $this->load->view('front/index');//melempar data dari view
      $this->load->view('front/footer');
  }



}
