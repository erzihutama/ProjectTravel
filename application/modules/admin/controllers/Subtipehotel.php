<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Subtipehotel extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Subtipehotel_model');
            $this->load->library('form_validation');
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
        }

        public function index()
        {$datasubtipehotel=$this->Subtipehotel_model->get_all();//panggil ke modell
          $datafield=$this->Subtipehotel_model->get_field();//panggil ke modell
          $data_subtipehotel = $this->Subtipehotel_model->get_subtipehotel();

           $data = array(
             'content'=>'admin/subtipehotel/subtipehotel_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/subtipehotel/css',
             'js'=>'admin/subtipehotel/js',
             'datasubtipehotel'=>$datasubtipehotel,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'subtipehotel',
             'controller'=>'subtipehotel',
             'data_subtipehotel' => $data_subtipehotel
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Subtipehotel_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Subtipehotel_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Subtipehotel_model->nama_subtipe;
							$row[] = $Subtipehotel_model->hargatipe;
							$row[] = $Subtipehotel_model->id_tipehotel;

              $row[] ="
              <a href='subtipehotel/edit/$Subtipehotel_model->id_subtipe'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Subtipehotel_model->id_subtipe' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Subtipehotel_model->count_all(),
                          "recordsFiltered" => $this->Subtipehotel_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/subtipehotel/subtipehotel_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/subtipehotel/create_action',
             'module'=>'admin',
             'titlePage'=>'subtipehotel',
             'controller'=>'subtipehotel'
            );
          $this->template->load($data);
        }

        public function edit($id_subtipe){
          $dataedit=$this->Subtipehotel_model->get_by_id($id_subtipe);
           $data = array(
             'content'=>'admin/subtipehotel/subtipehotel_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/subtipehotel/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'subtipehotel',
             'controller'=>'subtipehotel'
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
					'nama_subtipe' => $this->input->post('nama_subtipe',TRUE),
					'hargatipe' => $this->input->post('hargatipe',TRUE),
					'id_tipehotel' => $this->input->post('id_tipehotel',TRUE),

);

            $this->Subtipehotel_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/subtipehotel'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'nama_subtipe' => $this->input->post('nama_subtipe',TRUE),
					'hargatipe' => $this->input->post('hargatipe',TRUE),
					'id_tipehotel' => $this->input->post('id_tipehotel',TRUE),

);

            $this->Subtipehotel_model->update($this->input->post('id_subtipe', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/subtipehotel'));
        }
    }

    public function delete($id_subtipe)
    {
        $row = $this->Subtipehotel_model->get_by_id($id_subtipe);

        if ($row) {
            $this->Subtipehotel_model->delete($id_subtipe);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/subtipehotel'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/subtipehotel'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('nama_subtipe', 'nama_subtipe', 'trim|required');
$this->form_validation->set_rules('hargatipe', 'hargatipe', 'trim|required');
$this->form_validation->set_rules('id_tipehotel', 'id_tipehotel', 'trim|required');


	$this->form_validation->set_rules('id_subtipe', 'id_subtipe', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
