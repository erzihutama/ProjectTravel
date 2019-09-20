<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Agen extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Agen_model');
            $this->load->library('form_validation');
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
        }

        public function index()
        {$dataagen=$this->Agen_model->get_all();//panggil ke modell
          $datafield=$this->Agen_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/agen/agen_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/agen/css',
             'js'=>'admin/agen/js',
             'dataagen'=>$dataagen,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'agen',
             'controller'=>'agen'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Agen_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Agen_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Agen_model->nama_agen;
							$row[] = $Agen_model->username;
							$row[] = $Agen_model->password;
							$row[] = $Agen_model->jenis_kelamin;
							$row[] = $Agen_model->email;
							$row[] = $Agen_model->no_telp;

              $row[] ="
              <a href='agen/edit/$Agen_model->id_agen'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Agen_model->id_agen' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Agen_model->count_all(),
                          "recordsFiltered" => $this->Agen_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/agen/agen_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/agen/create_action',
             'module'=>'admin',
             'titlePage'=>'agen',
             'controller'=>'agen'
            );
          $this->template->load($data);
        }

        public function edit($id_agen){
          $dataedit=$this->Agen_model->get_by_id($id_agen);
           $data = array(
             'content'=>'admin/agen/agen_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/agen/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'agen',
             'controller'=>'agen'
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
					'nama_agen' => $this->input->post('nama_agen',TRUE),
					'username' => $this->input->post('username',TRUE),
					'password' => sha1($this->input->post('password',TRUE)),
					'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
					'email' => $this->input->post('email',TRUE),
					'no_telp' => $this->input->post('no_telp',TRUE),

);

            $this->Agen_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/agen'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'nama_agen' => $this->input->post('nama_agen',TRUE),
					'username' => $this->input->post('username',TRUE),
					'password' => sha1($this->input->post('password',TRUE)),
					'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
					'email' => $this->input->post('email',TRUE),
					'no_telp' => $this->input->post('no_telp',TRUE),

);

            $this->Agen_model->update($this->input->post('id_agen', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/agen'));
        }
    }

    public function delete($id_agen)
    {
        $row = $this->Agen_model->get_by_id($id_agen);

        if ($row) {
            $this->Agen_model->delete($id_agen);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/agen'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/agen'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('nama_agen', 'nama_agen', 'trim|required');
$this->form_validation->set_rules('username', 'username', 'trim|required');
$this->form_validation->set_rules('password', 'password', 'trim|required');
$this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'trim|required');
$this->form_validation->set_rules('email', 'email', 'trim|required');
$this->form_validation->set_rules('no_telp', 'no_telp', 'trim|required');


	$this->form_validation->set_rules('id_agen', 'id_agen', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
