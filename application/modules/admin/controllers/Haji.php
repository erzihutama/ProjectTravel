<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Haji extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Haji_model');
            $this->load->library('form_validation');
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
        }

        public function index()
        {$datahaji=$this->Haji_model->get_all();//panggil ke modell
          $datafield=$this->Haji_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/haji/haji_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/haji/css',
             'js'=>'admin/haji/js',
             'datahaji'=>$datahaji,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'haji',
             'controller'=>'haji'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Haji_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Haji_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Haji_model->harga;
							$row[] = $Haji_model->persyaratan;
							$row[] = $Haji_model->jadwal;
							$row[] = $Haji_model->fasilitas;
							$row[] = $Haji_model->id_hotel;
							$row[] = $Haji_model->id_paket;

              $row[] ="
              <a href='haji/edit/$Haji_model->id_haji'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Haji_model->id_haji' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Haji_model->count_all(),
                          "recordsFiltered" => $this->Haji_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
          $data_paket = $this->Haji_model->get_paket();
          $hotel_mekah = $this->Haji_model->gethotelmekah();

           // var_dump($data_paket); die;
           $data = array(
             'content'=>'admin/haji/haji_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/haji/create_action',
             'datapaket'=>$data_paket,
             'hotelmekah'=>$hotel_mekah,

             // var_dump($data_paket); die;
             'module'=>'admin',
             'titlePage'=>'haji',
             'controller'=>'haji'
            );
          $this->template->load($data);
        }

        public function edit($id_haji){
          $dataedit=$this->Haji_model->get_by_id($id_haji);
          $data_paket = $this->Haji_model->get_paket();
          $hotel_mekah = $this->Haji_model->gethotelmekah();

           $data = array(
             'content'=>'admin/haji/haji_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/haji/update_action',
             'dataedit'=>$dataedit,
             'datapaket'=>$data_paket,
             'hotelmekah'=>$hotel_mekah,
             'module'=>'admin',
             'titlePage'=>'haji',
             'controller'=>'haji'
            );
          $this->template->load($data);
        }
public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
					'harga' => $this->input->post('harga',TRUE),
					'persyaratan' => $this->input->post('persyaratan',TRUE),
					'jadwal' => $this->input->post('jadwal',TRUE),
					'fasilitas' => $this->input->post('fasilitas',TRUE),
					'id_hotel' => $this->input->post('id_hotel',TRUE),
					'id_paket' => $this->input->post('id_paket',TRUE),

);

            $this->Haji_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/haji'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'harga' => $this->input->post('harga',TRUE),
					'persyaratan' => $this->input->post('persyaratan',TRUE),
					'jadwal' => $this->input->post('jadwal',TRUE),
					'fasilitas' => $this->input->post('fasilitas',TRUE),
					'id_hotel' => $this->input->post('id_hotel',TRUE),
					'id_paket' => $this->input->post('id_paket',TRUE),

);

            $this->Haji_model->update($this->input->post('id_haji', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/haji'));
        }
    }

    public function delete($id_haji)
    {
        $row = $this->Haji_model->get_by_id($id_haji);

        if ($row) {
            $this->Haji_model->delete($id_haji);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/haji'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/haji'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('harga', 'harga', 'trim|required');
$this->form_validation->set_rules('persyaratan', 'persyaratan', 'trim|required');
$this->form_validation->set_rules('jadwal', 'jadwal', 'trim|required');
$this->form_validation->set_rules('fasilitas', 'fasilitas', 'trim|required');
$this->form_validation->set_rules('id_hotel', 'id_hotel', 'trim|required');
$this->form_validation->set_rules('id_paket', 'id_paket', 'trim|required');


	$this->form_validation->set_rules('id_haji', 'id_haji', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
