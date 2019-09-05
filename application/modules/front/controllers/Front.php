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
    $data['tagline'] = $this->Dbs->gettagline();
    $data['whychoose'] = $this->Dbs->getwhychoose();
    $data['taglineimg'] = $this->Dbs->gettaglineimg();
    $data['alamat'] = $this->Dbs->getalamat();
    $data['title'] = $this->Dbs->getprofil();
    $data['telepon'] = $this->Dbs->gettelepon();

     // var_dump($data);die;
    // $data['name']='Kostlab';

    $this->load->view('front/header',$data);
        $this->load->view('front/index',$data);//melempar data dari view
        $this->load->view('front/footer');
  }



}
