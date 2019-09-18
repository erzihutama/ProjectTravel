<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Paket extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Paket_model');
            $this->load->library('form_validation');
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
        }

        public function index()
        {$datapaket=$this->Paket_model->get_all();//panggil ke modell
          $datafield=$this->Paket_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/paket/paket_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/paket/css',
             'js'=>'admin/paket/js',
             'datapaket'=>$datapaket,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'paket',
             'controller'=>'paket'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Paket_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Paket_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Paket_model->nama_paket;
							$row[] = $Paket_model->keterangan;
							
              $row[] ="
              <a href='paket/edit/$Paket_model->id_paket'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Paket_model->id_paket' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Paket_model->count_all(),
                          "recordsFiltered" => $this->Paket_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/paket/paket_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/paket/create_action',
             'module'=>'admin',
             'titlePage'=>'paket',
             'controller'=>'paket'
            );
          $this->template->load($data);
        }

        public function edit($id_paket){
          $dataedit=$this->Paket_model->get_by_id($id_paket);
           $data = array(
             'content'=>'admin/paket/paket_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/paket/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'paket',
             'controller'=>'paket'
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
					'nama_paket' => $this->input->post('nama_paket',TRUE),
					'keterangan' => $this->input->post('keterangan',TRUE),
					
);

            $this->Paket_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/paket'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'nama_paket' => $this->input->post('nama_paket',TRUE),
					'keterangan' => $this->input->post('keterangan',TRUE),
					
);

            $this->Paket_model->update($this->input->post('id_paket', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/paket'));
        }
    }

    public function delete($id_paket)
    {
        $row = $this->Paket_model->get_by_id($id_paket);

        if ($row) {
            $this->Paket_model->delete($id_paket);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/paket'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/paket'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('nama_paket', 'nama_paket', 'trim|required');
$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');


	$this->form_validation->set_rules('id_paket', 'id_paket', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}