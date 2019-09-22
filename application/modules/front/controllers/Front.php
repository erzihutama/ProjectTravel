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



    $data['paketidx'] = $this->Dbs->getpaketidx();
    // var_dump($data);die;
    $data['deskperusahaan'] = $this->Dbs->getdeskperusahaan();
    $data['tagline'] = $this->Dbs->gettagline();
    $data['whychoose'] = $this->Dbs->getwhychoose();
    $data['taglineimg'] = $this->Dbs->gettaglineimg();
    $data['alamat'] = $this->Dbs->getalamat();
    $data['title'] = $this->Dbs->getprofil();
    $data['telepon'] = $this->Dbs->gettelepon();
    $data['datachose'] = $this->Dbs->getdatachose();


    // $data['datachose'] = $this->Dbs->getdatachose()
    // $data['imgservice'] = $this->Dbs->get_imgser();

     // var_dump($data);die;
    // $data['name']='Kostlab';

        $this->load->view('front/header',$data);
        $this->load->view('front/index',$data);//melempar data dari view
        $this->load->view('front/footer');
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
      'nama'=>  $nama->nama,
      'user' => 'admin',
      );
      // var_dump($data_session); die;


      $this->session->set_userdata($data_session);

      redirect(base_url("admin"));
      echo "berhasil login";
    }else if($this->Dbs->cek_login("agen",$where)->num_rows()>0){
      $nama = $this->Dbs->getUserIdagen($username);
      $data_session = array(
      'username' => $username,
      'nama'=>  $nama->nama,
      'user' => 'agen',
      );
      $this->session->set_userdata($data_session);

      redirect(base_url("agen"));
      echo "berhasil login";
    }else{
      echo "<script type='text/javascript'>alert('Username atau password Salah!!!'); document.location='http://localhost/ProjectTravel/login' </script>";

      }
  }

  function about()
  {
    $data['datachose'] = $this->Dbs->getdatachose();

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

      function contact()
      {
        $data['datachose'] = $this->Dbs->getdatachose();

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
        $data['perusahaan'] = $this->Dbs->getperusahaan();



        // $data['imgservice'] = $this->Dbs->get_imgser();

         // var_dump($data);die;
        // $data['name']='Kostlab';

            $this->load->view('front/header',$data);
            $this->load->view('front/contact',$data);//melempar data dari view
            $this->load->view('front/footer');
      }
  function tour()
  {
    $data['datachose'] = $this->Dbs->getdatachose();
    $data['paket9'] = $this->Dbs->getpaket9();
    $data['paket10'] = $this->Dbs->getpaket10();
    $data['paket11'] = $this->Dbs->getpaket11();
    $data['paket12'] = $this->Dbs->getpaket12();
    $data['whychoose'] = $this->Dbs->getwhychoose();

    // var_dump($data);die;
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
        $this->load->view('front/tour',$data);//melempar data dari view
        $this->load->view('front/footer');
  }

  function detail9hari()
  {
    $data['datachose'] = $this->Dbs->getdatachose();
    $data['datapaket'] = $this->Dbs->getpaket();
    $data['dataintenerary'] = $this->Dbs->getinrenerary();
    $data['datahotel'] = $this->Dbs->gethotel();

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
        $this->load->view('front/detail9hari',$data);//melempar data dari view
        $this->load->view('front/footer');
  }

    function detail10hari()
    {
      $data['datachose'] = $this->Dbs->getdatachose();
      $data['datapaket'] = $this->Dbs->getpaket();
      $data['dataintenerary'] = $this->Dbs->getinrenerary();
      $data['datahotel'] = $this->Dbs->gethotel();
      $data['paket10'] = $this->Dbs->getpaket10();
      // var_dump($data);die;
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
          $this->load->view('front/detail10hari',$data);//melempar data dari view
          $this->load->view('front/footer');
    }




}
