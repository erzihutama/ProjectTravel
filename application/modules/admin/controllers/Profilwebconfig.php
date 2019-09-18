<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Profilwebconfig extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Profilwebconfig_model');
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
        {$dataprofilwebconfig=$this->Profilwebconfig_model->get_all();//panggil ke modell
          $datafield=$this->Profilwebconfig_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/profilwebconfig/profilweb_config_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/profilwebconfig/css',
             'js'=>'admin/profilwebconfig/js',
             'dataprofilwebconfig'=>$dataprofilwebconfig,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'profilwebconfig',
             'controller'=>'profilwebconfig'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Profilwebconfig_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Profilwebconfig_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Profilwebconfig_model->id_profil;
							$row[] = $Profilwebconfig_model->service_tagline;
							$row[] = $Profilwebconfig_model->service_judul;
							$row[] = $Profilwebconfig_model->service_deskripsi;
							$row[] = $Profilwebconfig_model->servicegambar;
							$row[] = $Profilwebconfig_model->whychoose_tagline;
							$row[] = $Profilwebconfig_model->whychoose_judul;
							$row[] = $Profilwebconfig_model->whychoose_deskripsi;
							// $row[] = $Profilwebconfig_model->whygambar;

              $row[] ="
              <a href='profilwebconfig/edit/$Profilwebconfig_model->id_config'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Profilwebconfig_model->id_config' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Profilwebconfig_model->count_all(),
                          "recordsFiltered" => $this->Profilwebconfig_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
          $id_profil = $this->Profilwebconfig_model->get_id_profil();
           $data = array(
             'content'=>'admin/profilwebconfig/profilweb_config_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/profilwebconfig/create_action',
             'module'=>'admin',
             'id_profil' => $id_profil,
             'titlePage'=>'profilwebconfig',
             'controller'=>'profilwebconfig'
            );
          $this->template->load($data);
        }

        public function edit($id_config){
          $dataedit=$this->Profilwebconfig_model->get_by_id($id_config);
           $data = array(
             'content'=>'admin/profilwebconfig/profilweb_config_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/profilwebconfig/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'profilwebconfig',
             'controller'=>'profilwebconfig'
            );
          $this->template->load($data);
        }
public function create_action(){
  //   {
  //     $config['upload_path']          = './xfile/imageconfig';
  //     $config['allowed_types']        = 'gif|jpg|png|jpeg';
  //     $config['max_size']             = 30000;
  //     // $config['max_width']            = 1920;
  //     // $config['max_height']           = 897;
  //     $config['overwrite'] = FALSE;
  //     $config['encrypt_name'] = FALSE;
  //
  //     $this->load->library('upload', $config);
  //
  //
  //     if ( ! $this->upload->do_upload('servicegambar'))
  // {
  //     $error = array('error' => $this->upload->display_errors());
  //     $this->load->view('welcome_message', $error);
  // } else{
  //     $upload_data1 = $this->upload->data();
  //     $serimg = $upload_data1['file_name'];
  //
  //     $config2['upload_path']          = './xfile/images';
  //       $config2['allowed_types']        = 'gif|jpg|png|jpeg';
  //       $config2['max_size']             = 30000;
  //       $config2['overwrite'] = FALSE;
  //       $config2['encrypt_name'] = FALSE;
  //
  //       $this->load->library('upload', $config2);
  //       if ( ! $this->upload->do_upload('whygambar'))
  //         {
  //         $error = array('error' => $this->upload->display_errors());
  //         $this->load->view('welcome_message', $error);
  //         } else{
  //         $upload_data1 = $this->upload->data();
  //         $whyimg = $upload_data1['file_name'];
  //
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
					'id_profil' => $this->input->post('id_profil',TRUE),
					'service_tagline' => $this->input->post('service_tagline',TRUE),
					'service_judul' => $this->input->post('service_judul',TRUE),
					'service_deskripsi' => $this->input->post('service_deskripsi',TRUE),
					// 'servicegambar' => $serimg,
					'whychoose_tagline' => $this->input->post('whychoose_tagline',TRUE),
					'whychoose_judul' => $this->input->post('whychoose_judul',TRUE),
					'whychoose_deskripsi' => $this->input->post('whychoose_deskripsi',TRUE),
					// 'whygambar' => $whyimg,

);

            $this->Profilwebconfig_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/profilwebconfig'));
        }

  }



    public function update_action()
    {

  //     $config['upload_path']          = './xfile/imageconfig';
  //     $config['allowed_types']        = 'gif|jpg|png|jpeg';
  //     $config['max_size']             = 30000;
  //     // $config['max_width']            = 1920;
  //     // $config['max_height']           = 897;
  //     $config['overwrite'] = FALSE;
  //     $config['encrypt_name'] = FALSE;
  //
  //     $this->load->library('upload', $config);
  //
  //
  //     if ( ! $this->upload->do_upload('servicegambar'))
  // {
  //     $error = array('error' => $this->upload->display_errors());
  //     $this->load->view('welcome_message', $error);
  // } else{
  //     $upload_data1 = $this->upload->data();
  //     $serimgupdate= $upload_data1['file_name'];
  //
  //     $config2['upload_path']          = './xfile/images';
  //       $config2['allowed_types']        = 'gif|jpg|png|jpeg';
  //       $config2['max_size']             = 30000;
  //       $config2['overwrite'] = FALSE;
  //       $config2['encrypt_name'] = FALSE;
  //
  //       $this->load->library('upload', $config2);
  //       if ( ! $this->upload->do_upload('whygambar'))
  //         {
  //         $error = array('error' => $this->upload->display_errors());
  //         $this->load->view('welcome_message', $error);
  //         } else{
  //         $upload_data1 = $this->upload->data();
  //         $whyimgup = $upload_data1['file_name'];
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'id_profil' => $this->input->post('id_profil',TRUE),
					'service_tagline' => $this->input->post('service_tagline',TRUE),
					'service_judul' => $this->input->post('service_judul',TRUE),
					'service_deskripsi' => $this->input->post('service_deskripsi',TRUE),
					// 'servicegambar' => $serimgupdate,
					'whychoose_tagline' => $this->input->post('whychoose_tagline',TRUE),
					'whychoose_judul' => $this->input->post('whychoose_judul',TRUE),
					'whychoose_deskripsi' => $this->input->post('whychoose_deskripsi',TRUE),
					// 'whygambar' =>$whyimgup,

);

            $this->Profilwebconfig_model->update($this->input->post('id_config', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/profilwebconfig'));
        }
    }
  

    public function delete($id_config)
    {
        $row = $this->Profilwebconfig_model->get_by_id($id_config);

        if ($row) {
            $this->Profilwebconfig_model->delete($id_config ,$path, true);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/profilwebconfig'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/profilwebconfig'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('id_profil', 'id_profil', 'trim|required');
$this->form_validation->set_rules('service_tagline', 'service_tagline', 'trim|required');
$this->form_validation->set_rules('service_judul', 'service_judul', 'trim|required');
$this->form_validation->set_rules('service_deskripsi', 'service_deskripsi', 'trim|required');
// $this->form_validation->set_rules('servicegambar', 'servicegambar', 'trim|required');
$this->form_validation->set_rules('whychoose_tagline', 'whychoose_tagline', 'trim|required');
$this->form_validation->set_rules('whychoose_judul', 'whychoose_judul', 'trim|required');
$this->form_validation->set_rules('whychoose_deskripsi', 'whychoose_deskripsi', 'trim|required');
// $this->form_validation->set_rules('whygambar', 'whygambar', 'trim|required');


	$this->form_validation->set_rules('id_config', 'id_config', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
