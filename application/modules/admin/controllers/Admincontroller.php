<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Admincontroller extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Admincontroller_model');
            $this->load->library('form_validation');
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
            if(!$this->session->userdata("username")){
              redirect('login');
            }
        }

        public function index()
        {$dataadmincontroller=$this->Admincontroller_model->get_all();//panggil ke modell
          $datafield=$this->Admincontroller_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/admincontroller/admin_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/admincontroller/css',
             'js'=>'admin/admincontroller/js',
             'dataadmincontroller'=>$dataadmincontroller,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'admincontroller',
             'controller'=>'admincontroller'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Admincontroller_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Admincontroller_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Admincontroller_model->nama;
							$row[] = $Admincontroller_model->email;
							$row[] = $Admincontroller_model->username;
							$row[] = $Admincontroller_model->password;

              $row[] ="
              <a href='admincontroller/edit/$Admincontroller_model->id_user'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Admincontroller_model->id_user' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Admincontroller_model->count_all(),
                          "recordsFiltered" => $this->Admincontroller_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/admincontroller/admin_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/admincontroller/create_action',
             'module'=>'admin',
             'titlePage'=>'admincontroller',
             'controller'=>'admincontroller'
            );
          $this->template->load($data);
        }

        public function edit($id_user){
          $dataedit=$this->Admincontroller_model->get_by_id($id_user);
           $data = array(
             'content'=>'admin/admincontroller/admin_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/admincontroller/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'admincontroller',
             'controller'=>'admincontroller'
            );
          $this->template->load($data);
        }
public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
          $password = $this->input->post('password',TRUE);
            $data = array(
					'nama' => $this->input->post('nama',TRUE),
					'email' => $this->input->post('email',TRUE),
					'username' => $this->input->post('username',TRUE),
					'password' => sha1($password),

);

            $this->Admincontroller_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/admincontroller'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'nama' => $this->input->post('nama',TRUE),
					'email' => $this->input->post('email',TRUE),
					'username' => $this->input->post('username',TRUE),
					'password' => $this->input->post('password',TRUE),

);

            $this->Admincontroller_model->update($this->input->post('id_user', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/admincontroller'));
        }
    }

    public function delete($id_user)
    {
        $row = $this->Admincontroller_model->get_by_id($id_user);

        if ($row) {
            $this->Admincontroller_model->delete($id_user);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/admincontroller'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/admincontroller'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('nama', 'nama', 'trim|required');
$this->form_validation->set_rules('email', 'email', 'trim|required');
$this->form_validation->set_rules('username', 'username', 'trim|required');
$this->form_validation->set_rules('password', 'password', 'trim|required');


	$this->form_validation->set_rules('id_user', 'id_user', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
