<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Agen extends MY_Controller{

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
        $hotel_jedah = $this->agen_model->gethoteljedah();
        $hotel_madinah = $this->agen_model->gethotelmadinah();
        $hotel_mekah = $this->agen_model->gethotelmekah();
        $hotel_mekah1 = $this->agen_model->gethotelmekah1();

        $data_paket = $this->agen_model->get_paket();
        $data = array(
          'content'=>'agen/simulasi',
          'sidebar'=>'agen/sidebar',
          'css'=>'agen/asset/css',
          'js'=>'agen/asset/js',
          'module'=>'agen',
          'hoteljedah'=>$hotel_jedah,
          'hotelmadinah'=>$hotel_madinah,
          'hotelmekah'=>$hotel_mekah,
          'data_paket' => $data_paket,

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
//  ini
        $id_hotel_mekah = $this->input->post('hotelmekah');
        $id_hotel_madinah = $this->input->post('hotelmadinah');
        $id_hotel_jeddah = $this->input->post('hoteljeddah');

        $nama_mekah = $this->agen_model->get_hotel_by_id($id_hotel_mekah);
        $nama_madinah = $this->agen_model->get_hotel_by_id($id_hotel_madinah);
        $nama_jeddah = $this->agen_model->get_hotel_by_id($id_hotel_jeddah);

        // --------------------------MEKAH START---------------------------------------------
        //mengambil data harga hotel untuk kota mekah
        $data_hotel_mekah   = $this->agen_model->get_harga_hotel($this->input->post('hotelmekah'));
        // get data quad triple double reguler
        $quad_mekah_reguler = $data_hotel_mekah->reguler_quad;
        $triple_mekah_reguler = $data_hotel_mekah->requler_triple;
        $double_mekah_reguler = $data_hotel_mekah->reguler_double;
        // proses penghitunagn malam reguler
        $nigh_in_mekah_quad_reg = ($quad_mekah_reguler * $this->input->post('malammekah'))/4;
        $nigh_in_mekah_triple_reg = ($triple_mekah_reguler * $this->input->post('malammekah'))/3;
        $nigh_in_mekah_double_reg = ($double_mekah_reguler * $this->input->post('malammekah'))/2;
        // pembulatan
        $nigh_in_mekah_quad_reguler   = round($nigh_in_mekah_quad_reg);
        $nigh_in_mekah_triple_reguler = round($nigh_in_mekah_triple_reg);
        $nigh_in_mekah_double_reguler = round($nigh_in_mekah_double_reg);

        // get data quad triple double high
        $quad_mekah_high = $data_hotel_mekah->high_quad;
        $triple_mekah_high = $data_hotel_mekah->high_triple;
        $double_mekah_high = $data_hotel_mekah->high_double;

        // proses penghitunagn malam high
        $nigh_in_mekah_quad_hi = ($quad_mekah_high * $this->input->post('malammekah'))/4;
        $nigh_in_mekah_triple_hi = ($triple_mekah_high * $this->input->post('malammekah'))/3;
        $nigh_in_mekah_double_hi = ($double_mekah_high * $this->input->post('malammekah'))/2;

        // pembulatan
        $nigh_in_mekah_quad_high   = round($nigh_in_mekah_quad_hi);
        $nigh_in_mekah_triple_high = round($nigh_in_mekah_triple_hi);
        $nigh_in_mekah_double_high = round($nigh_in_mekah_double_hi);

         //----------------------------- MEKAH END --------------------------------------------------



         // ------------------------------START MADINAH--------------------------------------------------
        //mengambil data harga hotel untuk kota madinah
        $data_hotel_madinah   = $this->agen_model->get_harga_hotel($this->input->post('hotelmadinah'));
        // get data quad triple double reguler
        $quad_madinah_reguler = $data_hotel_madinah->reguler_quad;
        $triple_madinah_reguler = $data_hotel_madinah->requler_triple;
        $double_madinah_reguler = $data_hotel_madinah->reguler_double;
        // proses penghitunagn malam reguler
        $nigh_in_madinah_quad_reg = ($quad_madinah_reguler * $this->input->post('malammadinah'))/4;
        $nigh_in_madinah_triple_reg = ($triple_madinah_reguler * $this->input->post('malammadinah'))/3;
        $nigh_in_madinah_double_reg = ($double_madinah_reguler * $this->input->post('malammadinah'))/2;

       // pembulatan
        $nigh_in_madinah_quad_reguler   = round($nigh_in_madinah_quad_reg);
        $nigh_in_madinah_triple_reguler = round($nigh_in_madinah_triple_reg);
        $nigh_in_madinah_double_reguler = round($nigh_in_madinah_double_reg);

        // get data quad triple double high
        $quad_madinah_high = $data_hotel_madinah->high_quad;
        $triple_madinah_high = $data_hotel_madinah->high_triple;
        $double_madinah_high = $data_hotel_madinah->high_double;
        // proses penghitunagn malam high
        $nigh_in_madinah_quad_hi = ($quad_madinah_high * $this->input->post('malammadinah'))/4;
        $nigh_in_madinah_triple_hi = ($triple_madinah_high * $this->input->post('malammadinah'))/3;
        $nigh_in_madinah_double_hi = ($double_madinah_high * $this->input->post('malammadinah'))/2;
        // pembulatan
        $nigh_in_madinah_quad_high   = round($nigh_in_madinah_quad_hi);
        $nigh_in_madinah_triple_high = round($nigh_in_madinah_triple_hi);
        $nigh_in_madinah_double_high = round($nigh_in_madinah_double_hi);

        // ------------------------------END MADINAH--------------------------------------------------



        // ------------------------------START JEDAH--------------------------------------------------
        //mengambil data harga hotel untuk kota jedah----------------------------------------------------
        $data_hotel_jedah   = $this->agen_model->get_harga_hotel($this->input->post('hoteljeddah'));
        $quad_jedah_reguler = $data_hotel_jedah->reguler_quad;
        $triple_jedah_reguler = $data_hotel_jedah->requler_triple;
        $double_jedah_reguler = $data_hotel_jedah->reguler_double;
        // proses hitung malam jedah reguler
        $nigh_in_jedah_quad_reg = ($quad_jedah_reguler * $this->input->post('malamjeddah'))/4;
        $nigh_in_jedah_triple_reg = ($triple_jedah_reguler * $this->input->post('malamjeddah'))/3;
        $nigh_in_jedah_double_reg = ($double_jedah_reguler * $this->input->post('malamjeddah'))/2;
        // pembulatan
        $nigh_in_jedah_quad_reguler   = round($nigh_in_jedah_quad_reg);
        $nigh_in_jedah_triple_reguler = round($nigh_in_jedah_triple_reg);
        $nigh_in_jedah_double_reguler = round($nigh_in_jedah_double_reg);

        $quad_jedah_high = $data_hotel_jedah->high_quad;
        $triple_jedah_high = $data_hotel_jedah->high_triple;
        $double_jedah_high = $data_hotel_jedah->high_double;
        // proses hitung malam jedah high
        $nigh_in_jedah_quad_hi = ($quad_jedah_high * $this->input->post('malamjeddah'))/4;
        $nigh_in_jedah_triple_hi = ($triple_jedah_high * $this->input->post('malamjeddah'))/3;
        $nigh_in_jedah_double_hi = ($double_jedah_high * $this->input->post('malamjeddah'))/2;
        // pembulatan
        $nigh_in_jedah_quad_high   = round($nigh_in_jedah_quad_hi);
        $nigh_in_jedah_triple_high = round($nigh_in_jedah_triple_hi);
        $nigh_in_jedah_double_high = round($nigh_in_jedah_double_hi);


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



        //menghitung total Quad Triple dan Double REGULAR
        $tqr = $nigh_in_mekah_quad_reguler + $nigh_in_madinah_quad_reguler + $nigh_in_jedah_quad_reguler + $bus + $drver_tip + $hotel_handling_quad + $billboy + $mutawwif + $mutawwifa + round($muassasa) + $visa + $airport_handling_checkin_checkout + $snack_ziarah_mekah_madinah;
        $total_quad_regular   = (round($tqr)/3.73);
        $pqr = ($this->input->post('banyak_jamaah')+1) / $this->input->post('banyak_jamaah');
        $hr = $total_quad_regular * $pqr + 30;


        $total_triple_regular = $nigh_in_mekah_triple_reguler + $nigh_in_madinah_triple_reguler + $nigh_in_jedah_triple_reguler + $bus + $drver_tip + $hotel_handling_triple + $billboy + $mutawwif + $mutawwifa + round($muassasa) + $visa + $airport_handling_checkin_checkout + $snack_ziarah_mekah_madinah;
        $total_triple_regular   = (round($total_triple_regular)/3.73);
        $ptr = ($this->input->post('banyak_jamaah')+1) / $this->input->post('banyak_jamaah');
        $htr = $total_triple_regular * $ptr + 30;

        $total_double_regular = $nigh_in_mekah_double_reguler + $nigh_in_madinah_double_reguler + $nigh_in_jedah_double_reguler + $bus + $drver_tip + $hotel_handling_double + $billboy + $mutawwif + $mutawwifa + round($muassasa) + $visa + $airport_handling_checkin_checkout + $snack_ziarah_mekah_madinah;
        $total_double_regular   = (round($total_double_regular)/3.73);
        $pdr = ($this->input->post('banyak_jamaah')+1) / $this->input->post('banyak_jamaah');
        $hdr = $total_double_regular * $pdr + 30;
        // var_dump($hdr);die;


        // var_dump(round($t));die;
        //menghitung total Quad Triple dan Double HIGH SESSION
        $total_quad_high   = $nigh_in_mekah_quad_high + $nigh_in_madinah_quad_high + $nigh_in_jedah_quad_high + $bus + $drver_tip + $hotel_handling_quad + $billboy + $mutawwif + $mutawwifa + round($muassasa) + $visa + $airport_handling_checkin_checkout + $snack_ziarah_mekah_madinah;
        $total_quad_high   = (round($total_quad_high)/3.73);
        $pqh = ($this->input->post('banyak_jamaah')+1) / $this->input->post('banyak_jamaah');
        $hqh = $total_quad_high * $pqh + 30;
        // var_dump($hqh)die;
        $total_triple_high = $nigh_in_mekah_triple_high + $nigh_in_madinah_triple_high + $nigh_in_jedah_triple_high + $bus + $drver_tip + $hotel_handling_triple + $billboy + $mutawwif + $mutawwifa + round($muassasa) + $visa + $airport_handling_checkin_checkout + $snack_ziarah_mekah_madinah;
        $total_triple_high   = (round($total_triple_high)/3.73);
        $pth = ($this->input->post('banyak_jamaah')+1) / $this->input->post('banyak_jamaah');
        $hth = $total_triple_high * $pth + 30;
        // var_dump($hth);die;

        $total_double_high = $nigh_in_mekah_double_high + $nigh_in_madinah_double_high + $nigh_in_jedah_double_high + $bus + $drver_tip + $hotel_handling_double + $billboy + $mutawwif + $mutawwifa + round($muassasa) + $visa + $airport_handling_checkin_checkout + $snack_ziarah_mekah_madinah;
        $total_double_high   = (round($total_double_high)/3.73);
        $pdh = ($this->input->post('banyak_jamaah')+1) / $this->input->post('banyak_jamaah');
        $hdh = $total_double_high * $pdh + 30;


        $total_quad_round_reguler  = round($hr);
        $total_triple_round_reguler = round($htr);
        $total_double_round_reguler = round($hdr);

        $total_quad_round_high  = round($hqh);
        $total_triple_round_high = round($hth);
        $total_double_round_high = round($hdh);

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
          'quad_reguler' => $total_quad_round_reguler,
          'triple_reguler' => $total_triple_round_reguler,
          'double_reguler' => $total_double_round_reguler,
          'quad_high' => $total_quad_round_high,
          'triple_high' => $total_triple_round_high,
          'double_high' => $total_double_round_high,
          // ini
          'nama_mekah' => $nama_mekah->namahotel,
          'nama_madinah' => $nama_madinah->namahotel,
          'nama_jeddah' => $nama_jeddah->namahotel,
         );
        $this->template->load($data);
      }
      }
