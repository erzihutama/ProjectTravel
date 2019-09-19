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
    // $data['imgservice'] = $this->Dbs->get_imgser();

     // var_dump($data);die;
    // $data['name']='Kostlab';

        $this->load->view('front/header',$data);
        $this->load->view('front/index',$data);//melempar data dari view
        $this->load->view('front/footer');
  }

  function about()
  {
    $data['getvisimisi'] = $this->Dbs->getvisimisi();
    $data['deskperusahaan'] = $this->Dbs->getdeskperusahaan();
    $data['tagline'] = $this->Dbs->gettagline();
    $data['whychoose'] = $this->Dbs->getwhychoose();
    $data['taglineimg'] = $this->Dbs->gettaglineimg();
    $data['alamat'] = $this->Dbs->getalamat();
    $data['title'] = $this->Dbs->getprofil();
    $data['telepon'] = $this->Dbs->gettelepon();
    $data['config'] = $this->Dbs->getconfig();
    $data['maps'] = $this->Dbs->getmaps();

    // $data['imgservice'] = $this->Dbs->get_imgser();

     // var_dump($data);die;
    // $data['name']='Kostlab';

        $this->load->view('front/header',$data);
        $this->load->view('front/about',$data);//melempar data dari view
        $this->load->view('front/footer');
  }



}
