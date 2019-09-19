<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Intenary extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Intenary_model');
            $this->load->library('form_validation');
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
        }

        public function index()
        {$dataintenary=$this->Intenary_model->get_all();//panggil ke modell
          $datafield=$this->Intenary_model->get_field();//panggil ke modell
          $all_data = $this->Intenary_model->get_intenary();

           $data = array(
             'content'=>'admin/intenary/intenary_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/intenary/css',
             'js'=>'admin/intenary/js',
             'dataintenary'=>$dataintenary,
             'datafield'=>$all_data,
             'module'=>'admin',
             'titlePage'=>'intenary',
             'controller'=>'intenary'
            );
          $this->template->load($data);
        }


        //DataTable
        public function ajax_list()
      {
          $list = $this->Intenary_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Intenary_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Intenary_model->hari;
							$row[] = $Intenary_model->keterangan;
							$row[] = $Intenary_model->id_paket;

              $row[] ="
              <a href='intenary/edit/$Intenary_model->id_intenary'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Intenary_model->id_intenary' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Intenary_model->count_all(),
                          "recordsFiltered" => $this->Intenary_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/intenary/intenary_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/intenary/create_action',
             'module'=>'admin',
             'titlePage'=>'intenary',
             'controller'=>'intenary'
            );
          $this->template->load($data);
        }

        public function edit($id_intenary){
          $dataedit=$this->Intenary_model->get_by_id($id_intenary);
           $data = array(
             'content'=>'admin/intenary/intenary_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/intenary/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'intenary',
             'controller'=>'intenary'
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
					'hari' => $this->input->post('hari',TRUE),
					'keterangan' => $this->input->post('keterangan',TRUE),
					'id_paket' => $this->input->post('id_paket',TRUE),

);

            $this->Intenary_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/intenary'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'hari' => $this->input->post('hari',TRUE),
					'keterangan' => $this->input->post('keterangan',TRUE),
					'id_paket' => $this->input->post('id_paket',TRUE),

);

            $this->Intenary_model->update($this->input->post('id_intenary', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/intenary'));
        }
    }

    public function delete($id_intenary)
    {
        $row = $this->Intenary_model->get_by_id($id_intenary);

        if ($row) {
            $this->Intenary_model->delete($id_intenary);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/intenary'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/intenary'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('hari', 'hari', 'trim|required');
$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
$this->form_validation->set_rules('id_paket', 'id_paket', 'trim|required');


	$this->form_validation->set_rules('id_intenary', 'id_intenary', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
