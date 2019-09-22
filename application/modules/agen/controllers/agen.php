<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class agen extends MY_Controller{

      public function __construct()
      {
        parent::__construct();
        $this->load->model(array('agen_model'));
        //KostLab : Write Less Do More
        // if($this->session->userdata('status')!='login'){
        //   redirect(base_url('login'));
        // }
        // if($this->session->userdata('role')!=1){
        //   redirect(redirect($_SERVER['HTTP_REFERER']));
        // }
        if(!$this->session->userdata("user") == 'agen'){
          redirect('login');
        }else if($this->session->userdata("user") == 'admin'){
          redirect('admin');
        }
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
        $data_hotel_mekah = $this->agen_model->get_mekah();
        $data_hotel_madinah = $this->agen_model->get_madinah();
        $data_hotel_jeddah = $this->agen_model->get_jeddah();
        $data_paket = $this->agen_model->get_paket();
        $data = array(
          'content'=>'agen/simulasi',
          'sidebar'=>'agen/sidebar',
          'css'=>'agen/asset/css',
          'js'=>'agen/asset/js',
          'module'=>'agen',
          'datamekah' => $data_hotel_mekah,
          'datamadinah' => $data_hotel_madinah,
          'data_paket' => $data_paket,
          'datajeddah' => $data_hotel_jeddah,
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
        //mengambil data harga hotel untuk kota mekah
        $data_quad_mekah   = $this->agen_model->get_harga_mekah("QUAD");
        $data_triple_mekah = $this->agen_model->get_harga_mekah("TRIPLE");
        $data_double_mekah = $this->agen_model->get_harga_mekah("DOUBLE");

        //mengambil data harga hotel untuk kota madinah
        $data_quad_madinah   = $this->agen_model->get_harga_madinah("QUAD");
        $data_triple_madinah = $this->agen_model->get_harga_madinah("TRIPLE");
        $data_double_madinah = $this->agen_model->get_harga_madinah("DOUBLE");

        //mengambil data harga hotel untuk kota jeddah
        $data_quad_jeddah   = $this->agen_model->get_harga_jeddah("QUAD");
        $data_triple_jeddah = $this->agen_model->get_harga_jeddah("TRIPLE");
        $data_double_jeddah = $this->agen_model->get_harga_jeddah("DOUBLE");

        //menghitung Quad Triple dan Double yaitu dengan harga hotel dikali sama banyaknya malam dan dibagi sesuai roomnya
        $nigh_in_mekah_quad   = ($data_quad_mekah->harga_tipe_regular * $this->input->post('malammekah'))/4;
        $nigh_in_mekah_triple = ($data_triple_mekah->harga_tipe_regular * $this->input->post('malammekah'))/3;
        $nigh_in_mekah_double = ($data_double_mekah->harga_tipe_regular * $this->input->post('malammekah'))/2;

        // pembulatan
        $nigh_in_mekah_quad_round   = round($nigh_in_mekah_quad);
        $nigh_in_mekah_triple_round = round($nigh_in_mekah_triple);
        $nigh_in_mekah_double_round = round($nigh_in_mekah_double);

        //menghitung Quad Triple dan Double yaitu dengan harga hotel dikali sama banyaknya malam dan dibagi sesuai roomnya
        $nigh_in_madinah_quad   = ($data_quad_madinah->harga_tipe_regular * $this->input->post('malammadinah'))/4;
        $nigh_in_madinah_triple = ($data_triple_madinah->harga_tipe_regular * $this->input->post('malammadinah'))/3;
        $nigh_in_madinah_double = ($data_double_madinah->harga_tipe_regular * $this->input->post('malammadinah'))/2;
        // pembulatan
        $nigh_in_madinah_quad_round   = round($nigh_in_madinah_quad);
        $nigh_in_madinah_triple_round = round($nigh_in_madinah_triple);
        $nigh_in_madinah_double_round = round($nigh_in_madinah_double);


        //menghitung Quad Triple dan Double yaitu dengan harga hotel dikali sama banyaknya malam dan dibagi sesuai roomnya
        $nigh_in_jeddah_quad   = ($data_quad_jeddah->harga_tipe_regular * $this->input->post('malamjeddah'))/4;
        $nigh_in_jeddah_triple = ($data_triple_jeddah->harga_tipe_regular * $this->input->post('malamjeddah'))/3;
        $nigh_in_jeddah_double = ($data_double_jeddah->harga_tipe_regular * $this->input->post('malamjeddah'))/2;
        // pembulatan
        $nigh_in_jeddah_quad_round   = round($nigh_in_jeddah_quad);
        $nigh_in_jeddah_triple_round = round($nigh_in_jeddah_triple);
        $nigh_in_jeddah_double_round = round($nigh_in_jeddah_double);

        //mengambil data desc umrah atau service budget  umrah
        $data_umrah = $this->agen_model->get_data_umrah();

        //menghitung service budget tiap individu dan jamaah
        $airport_handling_checkin_checkout = $data_umrah->airport_price;
        $snack_ziarah_mekah_madinah        = $data_umrah->logistik;
        $bus                               = $data_umrah->bus / $this->input->post('banyak_jamaah');
        $drver_tip                         = $data_umrah->driver_tip / $this->input->post('banyak_jamaah');
        $hotel_handling_quad               = ($data_umrah->hotel_handling * ($this->input->post('malammekah') + $this->input->post('malammadinah') + $this->input->post('malamjeddah')))/4;
        $hotel_handling_triple             = ($data_umrah->hotel_handling * ($this->input->post('malammekah') + $this->input->post('malammadinah') + $this->input->post('malamjeddah')))/3;
        $hotel_handling_double             = ($data_umrah->hotel_handling * ($this->input->post('malammekah') + $this->input->post('malammadinah') + $this->input->post('malamjeddah')))/2;
        $billboy                           = $data_umrah->billboy / $this->input->post('banyak_jamaah');
        $mutawwif                          = ($data_umrah->mutawwif * ($this->input->post('malammekah') + $this->input->post('malammadinah') + $this->input->post('malamjeddah')))/$this->input->post('banyak_jamaah');
        $mutawwifa                         = ($data_umrah->mutawwifa / $this->input->post('banyak_jamaah'));
        $muassasa                          = $data_umrah->muassasa / $this->input->post('banyak_jamaah');
        $visa                              = $data_umrah->visa;


        //menghitung total Quad Triple dan Double
        $total_quad   = (($nigh_in_mekah_quad_round + $nigh_in_madinah_quad_round + $nigh_in_jeddah_quad_round + $bus + $drver_tip + $hotel_handling_quad + $billboy + $mutawwif + $mutawwifa + $muassasa + $visa + $airport_handling_checkin_checkout + $snack_ziarah_mekah_madinah)/3.73)+20+10;
        $total_triple = (($nigh_in_mekah_triple_round + $nigh_in_madinah_triple_round + $nigh_in_jeddah_triple_round + $bus + $drver_tip + $hotel_handling_triple + $billboy + $mutawwif + $mutawwifa + $muassasa + $visa + $airport_handling_checkin_checkout + $snack_ziarah_mekah_madinah)/3.73)+20+10;
        $total_double = (($nigh_in_mekah_double_round + $nigh_in_madinah_double_round + $nigh_in_jeddah_double_round + $bus + $drver_tip + $hotel_handling_double + $billboy + $mutawwif + $mutawwifa + $muassasa + $visa + $airport_handling_checkin_checkout + $snack_ziarah_mekah_madinah)/3.73)+20+10;

        $total_quad_round  = round($total_quad);
        $total_triple_round = round($total_triple);
        $total_double_round = round($total_double);

        $data = array(
          'content'=>'agen/hasil',
          'sidebar'=>'agen/sidebar',
          'css'=>'agen/asset/css',
          'js'=>'agen/asset/js',
          'module'=>'agen',
          'jumlah_jamaah' => $this->input->post('banyak_jamaah'),
          'hotel_mekah' => $this->input->post('hotelmekah'),
          'hotel_madinah' => $this->input->post('hotelmadinah'),
          'hotel_jeddah' => $this->input->post('hoteljeddah'),
          'paket' => $this->input->post('program_hari'),
          'malammekah'=>$this->input->post('malammekah'),
          'malammadinah'=>$this->input->post('malammadinah'),
          'malamjeddah'=>$this->input->post('malamjeddah'),
          'quad' => $total_quad_round,
          'triple' => $total_triple_round,
          'double' => $total_double_round,
         );
        $this->template->load($data);
      }
      }
