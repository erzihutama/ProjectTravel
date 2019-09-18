<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Tipehotel extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Tipehotel_model');
            $this->load->library('form_validation');
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
        }

        public function index()
        {$datatipehotel=$this->Tipehotel_model->get_all();//panggil ke modell
          $datafield=$this->Tipehotel_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/tipehotel/tipehotel_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/tipehotel/css',
             'js'=>'admin/tipehotel/js',
             'datatipehotel'=>$datatipehotel,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'tipehotel',
             'controller'=>'tipehotel'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Tipehotel_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Tipehotel_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Tipehotel_model->namatipe;
							$row[] = $Tipehotel_model->id_hotel;

              $row[] ="
              <a href='tipehotel/edit/$Tipehotel_model->id_tipehotel'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Tipehotel_model->id_tipehotel' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Tipehotel_model->count_all(),
                          "recordsFiltered" => $this->Tipehotel_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
          $datahotel = $this->Tipehotel_model->getdatahotel();
           $data = array(
             'content'=>'admin/tipehotel/tipehotel_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/tipehotel/create_action',
             'module'=>'admin',
             'datahotel'=> $datahotel,
             'titlePage'=>'tipehotel',
             'controller'=>'tipehotel'
            );
          $this->template->load($data);
        }

        public function edit($id_tipehotel){
          $datahotel = $this->Tipehotel_model->getdatahotel();
          $dataedit=$this->Tipehotel_model->get_by_id($id_tipehotel);
           $data = array(
             'content'=>'admin/tipehotel/tipehotel_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/tipehotel/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
              'datahotel'=> $datahotel,
             'titlePage'=>'tipehotel',
             'controller'=>'tipehotel'
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
					'namatipe' => $this->input->post('namatipe',TRUE),
					'id_hotel' => $this->input->post('id_hotel',TRUE),

);

            $this->Tipehotel_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/tipehotel'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'namatipe' => $this->input->post('namatipe',TRUE),
					'id_hotel' => $this->input->post('id_hotel',TRUE),

);

            $this->Tipehotel_model->update($this->input->post('id_tipehotel', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/tipehotel'));
        }
    }

    public function delete($id_tipehotel)
    {
        $row = $this->Tipehotel_model->get_by_id($id_tipehotel);

        if ($row) {
            $this->Tipehotel_model->delete($id_tipehotel);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/tipehotel'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/tipehotel'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('namatipe', 'namatipe', 'trim|required');
$this->form_validation->set_rules('id_hotel', 'id_hotel', 'trim|required');


	$this->form_validation->set_rules('id_tipehotel', 'id_tipehotel', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
