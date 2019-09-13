<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Alamat_perusahaan extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Alamat_perusahaan_model');
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
        {$dataalamat_perusahaan=$this->Alamat_perusahaan_model->get_all();//panggil ke modell
          $datafield=$this->Alamat_perusahaan_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/alamat_perusahaan/profil_alamat_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/alamat_perusahaan/css',
             'js'=>'admin/alamat_perusahaan/js',
             'dataalamat_perusahaan'=>$dataalamat_perusahaan,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'alamat_perusahaan',
             'controller'=>'alamat_perusahaan'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Alamat_perusahaan_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Alamat_perusahaan_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Alamat_perusahaan_model->id_profil;
							$row[] = $Alamat_perusahaan_model->alamat_perusahaan;
							$row[] = $Alamat_perusahaan_model->telepon_perusahaan;
							$row[] = $Alamat_perusahaan_model->email_perusahaan;
							$row[] = $Alamat_perusahaan_model->maps;

              $row[] ="
              <a href='alamat_perusahaan/edit/$Alamat_perusahaan_model->id_alamat'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Alamat_perusahaan_model->id_alamat' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Alamat_perusahaan_model->count_all(),
                          "recordsFiltered" => $this->Alamat_perusahaan_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
            $id_profil = $this->Alamat_perusahaan_model->get_id_profil();
           $data = array(
             'content'=>'admin/alamat_perusahaan/profil_alamat_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/alamat_perusahaan/create_action',
             'module'=>'admin',
             'id_profil' => $id_profil,
             'titlePage'=>'alamat_perusahaan',
             'controller'=>'alamat_perusahaan'
            );
          $this->template->load($data);
        }

        public function edit($id_alamat){

          $dataedit=$this->Alamat_perusahaan_model->get_by_id($id_alamat);
           $data = array(
             'content'=>'admin/alamat_perusahaan/profil_alamat_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/alamat_perusahaan/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'alamat_perusahaan',
             'controller'=>'alamat_perusahaan'
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
					'id_profil' => $this->input->post('id_profil',TRUE),
					'alamat_perusahaan' => $this->input->post('alamat_perusahaan',TRUE),
					'telepon_perusahaan' => $this->input->post('telepon_perusahaan',TRUE),
					'email_perusahaan' => $this->input->post('email_perusahaan',TRUE),
					'maps' => $this->input->post('maps',TRUE),

);

            $this->Alamat_perusahaan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/alamat_perusahaan'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'id_profil' => $this->input->post('id_profil',TRUE),
					'alamat_perusahaan' => $this->input->post('alamat_perusahaan',TRUE),
					'telepon_perusahaan' => $this->input->post('telepon_perusahaan',TRUE),
					'email_perusahaan' => $this->input->post('email_perusahaan',TRUE),
					'maps' => $this->input->post('maps',TRUE),

);

            $this->Alamat_perusahaan_model->update($this->input->post('id_alamat', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/alamat_perusahaan'));
        }
    }

    public function delete($id_alamat)
    {
        $row = $this->Alamat_perusahaan_model->get_by_id($id_alamat);

        if ($row) {
            $this->Alamat_perusahaan_model->delete($id_alamat);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/alamat_perusahaan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/alamat_perusahaan'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('id_profil', 'id_profil', 'trim|required');
$this->form_validation->set_rules('alamat_perusahaan', 'alamat_perusahaan', 'trim|required');
$this->form_validation->set_rules('telepon_perusahaan', 'telepon_perusahaan', 'trim|required');
$this->form_validation->set_rules('email_perusahaan', 'email_perusahaan', 'trim|required');
$this->form_validation->set_rules('maps', 'maps', 'trim|required');


	$this->form_validation->set_rules('id_alamat', 'id_alamat', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
