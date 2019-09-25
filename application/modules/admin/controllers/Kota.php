<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Kota extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Kota_model');
            $this->load->library('form_validation');
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
        }

        public function index()
        {$datakota=$this->Kota_model->get_all();//panggil ke modell
          $datafield=$this->Kota_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/kota/kota_hotel_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/kota/css',
             'js'=>'admin/kota/js',
             'datakota'=>$datakota,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'kota',
             'controller'=>'kota'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Kota_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Kota_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Kota_model->nama_kota;
							
              $row[] ="
              <a href='kota/edit/$Kota_model->id_kota'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Kota_model->id_kota' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Kota_model->count_all(),
                          "recordsFiltered" => $this->Kota_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/kota/kota_hotel_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/kota/create_action',
             'module'=>'admin',
             'titlePage'=>'kota',
             'controller'=>'kota'
            );
          $this->template->load($data);
        }

        public function edit($id_kota){
          $dataedit=$this->Kota_model->get_by_id($id_kota);
           $data = array(
             'content'=>'admin/kota/kota_hotel_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/kota/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'kota',
             'controller'=>'kota'
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
					'nama_kota' => $this->input->post('nama_kota',TRUE),
					
);

            $this->Kota_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/kota'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'nama_kota' => $this->input->post('nama_kota',TRUE),
					
);

            $this->Kota_model->update($this->input->post('id_kota', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/kota'));
        }
    }

    public function delete($id_kota)
    {
        $row = $this->Kota_model->get_by_id($id_kota);

        if ($row) {
            $this->Kota_model->delete($id_kota);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/kota'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/kota'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('nama_kota', 'nama_kota', 'trim|required');


	$this->form_validation->set_rules('id_kota', 'id_kota', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}