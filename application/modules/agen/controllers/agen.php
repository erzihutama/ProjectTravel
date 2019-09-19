<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class agen extends MY_Controller{

      public function __construct()
      {
        parent::__construct();
        //KostLab : Write Less Do More
        // if($this->session->userdata('status')!='login'){
        //   redirect(base_url('login'));
        // }
        // if($this->session->userdata('role')!=1){
        //   redirect(redirect($_SERVER['HTTP_REFERER']));
        // }
      }

      function index()
      {

        $data = array(
          'content'=>'agen/dashboard',
          'data'=>null,
          'sidebar'=>'agen/sidebar'
         );
        $this->template->load($data);
      }

      function simulasi(){

        $data = array(
          'content'=>'agen/simulasi',
          'sidebar'=>'agen/sidebar',
          'css'=>'agen/asset/css',
          'js'=>'agen/asset/js',
          'module'=>'agen',
          // 'titlePage'=>'agen',
          // 'controller'=>'agen'
         );
        // $data = array(
        //   'content'=>'agen/simulasi',
        //   'data'=>null,
        //   'css'=>'agen/css'
        //   'js'=>'agen/js'
        //  );
        $this->template->load($data);
      }

      function hasil(){



      }
      }
