<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Paketxhotel extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Paketxhotel_model');
            $this->load->library('form_validation');
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
        }

        public function index()
        {$datapaketxhotel=$this->Paketxhotel_model->get_all();//panggil ke modell
          $datafield=$this->Paketxhotel_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/paketxhotel/paketxhotel_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/paketxhotel/css',
             'js'=>'admin/paketxhotel/js',
             'datapaketxhotel'=>$datapaketxhotel,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'paketxhotel',
             'controller'=>'paketxhotel'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Paketxhotel_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Paketxhotel_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Paketxhotel_model->id_hotel;
							$row[] = $Paketxhotel_model->id_paket;
							
              $row[] ="
              <a href='paketxhotel/edit/$Paketxhotel_model->id_paketXhotel'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Paketxhotel_model->id_paketXhotel' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Paketxhotel_model->count_all(),
                          "recordsFiltered" => $this->Paketxhotel_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/paketxhotel/paketxhotel_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/paketxhotel/create_action',
             'module'=>'admin',
             'titlePage'=>'paketxhotel',
             'controller'=>'paketxhotel'
            );
          $this->template->load($data);
        }

        public function edit($id_paketXhotel){
          $dataedit=$this->Paketxhotel_model->get_by_id($id_paketXhotel);
           $data = array(
             'content'=>'admin/paketxhotel/paketxhotel_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/paketxhotel/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'paketxhotel',
             'controller'=>'paketxhotel'
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
					'id_hotel' => $this->input->post('id_hotel',TRUE),
					'id_paket' => $this->input->post('id_paket',TRUE),
					
);

            $this->Paketxhotel_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/paketxhotel'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'id_hotel' => $this->input->post('id_hotel',TRUE),
					'id_paket' => $this->input->post('id_paket',TRUE),
					
);

            $this->Paketxhotel_model->update($this->input->post('id_paketXhotel', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/paketxhotel'));
        }
    }

    public function delete($id_paketXhotel)
    {
        $row = $this->Paketxhotel_model->get_by_id($id_paketXhotel);

        if ($row) {
            $this->Paketxhotel_model->delete($id_paketXhotel);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/paketxhotel'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/paketxhotel'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('id_hotel', 'id_hotel', 'trim|required');
$this->form_validation->set_rules('id_paket', 'id_paket', 'trim|required');


	$this->form_validation->set_rules('id_paketXhotel', 'id_paketXhotel', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}