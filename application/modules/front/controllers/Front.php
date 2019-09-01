<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Dbs');

  }

  function index()
  {

    $data['deskperusahaan'] = $this->Dbs->getdeskperusahaan();
    $data['imagetagline'] = $this->Dbs->getimagetagline();
    // $data['name']='Kostlab';

    $this->load->view('front/header');
        $this->load->view('front/index',$data);//melempar data dari view
        $this->load->view('front/footer');
  }



}
