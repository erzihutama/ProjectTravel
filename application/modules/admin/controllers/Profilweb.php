<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Profilweb extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Profilweb_model');
            $this->load->library('form_validation');
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
        }

        public function index()
        {$dataprofilweb=$this->Profilweb_model->get_all();//panggil ke modell
          $datafield=$this->Profilweb_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/profilweb/profilweb_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/profilweb/css',
             'js'=>'admin/profilweb/js',
             'dataprofilweb'=>$dataprofilweb,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'profilweb',
             'controller'=>'profilweb'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Profilweb_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Profilweb_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Profilweb_model->judul_perusahaan;
							$row[] = $Profilweb_model->deskripsi_perusahaan;
							$row[] = $Profilweb_model->taglineweb1;
							$row[] = $Profilweb_model->taglineweb2;
							$row[] = $Profilweb_model->taglineweb3;
							$row[] = $Profilweb_model->taglineimage1;
							$row[] = $Profilweb_model->taglineimage2;
							$row[] = $Profilweb_model->taglineimage3;
							$row[] = $Profilweb_model->visi;
							$row[] = $Profilweb_model->misi;
							$row[] = $Profilweb_model->website;

              $row[] ="
              <a href='profilweb/edit/$Profilweb_model->id_profil'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Profilweb_model->id_profil' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Profilweb_model->count_all(),
                          "recordsFiltered" => $this->Profilweb_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/profilweb/profilweb_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/profilweb/create_action',
             'module'=>'admin',
             'titlePage'=>'profilweb',
             'controller'=>'profilweb'
            );
          $this->template->load($data);
        }

        public function edit($id_profil){
          $dataedit=$this->Profilweb_model->get_by_id($id_profil);
           $data = array(
             'content'=>'admin/profilweb/profilweb_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/profilweb/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'profilweb',
             'controller'=>'profilweb'
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
					'judul_perusahaan' => $this->input->post('judul_perusahaan',TRUE),
					'deskripsi_perusahaan' => $this->input->post('deskripsi_perusahaan',TRUE),
					'taglineweb1' => $this->input->post('taglineweb1',TRUE),
					'taglineweb2' => $this->input->post('taglineweb2',TRUE),
					'taglineweb3' => $this->input->post('taglineweb3',TRUE),
					'taglineimage1' => $this->input->post('taglineimage1',TRUE),
					'taglineimage2' => $this->input->post('taglineimage2',TRUE),
					'taglineimage3' => $this->input->post('taglineimage3',TRUE),
					'visi' => $this->input->post('visi',TRUE),
					'misi' => $this->input->post('misi',TRUE),
					'website' => $this->input->post('website',TRUE),

);

            $this->Profilweb_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/profilweb'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'judul_perusahaan' => $this->input->post('judul_perusahaan',TRUE),
					'deskripsi_perusahaan' => $this->input->post('deskripsi_perusahaan',TRUE),
					'taglineweb1' => $this->input->post('taglineweb1',TRUE),
					'taglineweb2' => $this->input->post('taglineweb2',TRUE),
					'taglineweb3' => $this->input->post('taglineweb3',TRUE),
					'taglineimage1' => $this->input->post('taglineimage1',TRUE),
					'taglineimage2' => $this->input->post('taglineimage2',TRUE),
					'taglineimage3' => $this->input->post('taglineimage3',TRUE),
					'visi' => $this->input->post('visi',TRUE),
					'misi' => $this->input->post('misi',TRUE),
					'website' => $this->input->post('website',TRUE),

);

            $this->Profilweb_model->update($this->input->post('id_profil', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/profilweb/edit/4'));
        }
    }

    public function delete($id_profil)
    {
        $row = $this->Profilweb_model->get_by_id($id_profil);

        if ($row) {
            $this->Profilweb_model->delete($id_profil);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/profilweb'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/profilweb'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('judul_perusahaan', 'judul_perusahaan', 'trim|required');
$this->form_validation->set_rules('deskripsi_perusahaan', 'deskripsi_perusahaan', 'trim|required');
$this->form_validation->set_rules('taglineweb1', 'taglineweb1', 'trim|required');
$this->form_validation->set_rules('taglineweb2', 'taglineweb2', 'trim|required');
$this->form_validation->set_rules('taglineweb3', 'taglineweb3', 'trim|required');
$this->form_validation->set_rules('taglineimage1', 'taglineimage1', 'trim|required');
$this->form_validation->set_rules('taglineimage2', 'taglineimage2', 'trim|required');
$this->form_validation->set_rules('taglineimage3', 'taglineimage3', 'trim|required');
$this->form_validation->set_rules('visi', 'visi', 'trim|required');
$this->form_validation->set_rules('misi', 'misi', 'trim|required');
$this->form_validation->set_rules('website', 'website', 'trim|required');


	$this->form_validation->set_rules('id_profil', 'id_profil', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
