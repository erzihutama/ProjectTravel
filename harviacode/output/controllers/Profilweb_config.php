<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profilweb_config extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Profilweb_config_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

      $dataprofilweb_config=$this->Profilweb_config_model->get_all();//panggil ke modell
      $datafield=$this->Profilweb_config_model->get_field();//panggil ke modell

      $data = array(
        'contain_view' => 'admin/profilweb_config/profilweb_config_list',
        'sidebar'=>'admin/sidebar',
        'css'=>'admin/crudassets/css',
        'script'=>'admin/crudassets/script',
        'dataprofilweb_config'=>$dataprofilweb_config,
        'datafield'=>$datafield,
        'module'=>'admin',
        'titlePage'=>'profilweb_config',
        'controller'=>'profilweb_config'
       );
      $this->template->load($data);
    }


    public function create(){
      $data = array(
        'contain_view' => 'admin/profilweb_config/profilweb_config_form',
        'sidebar'=>'admin/sidebar',//Ini buat menu yang ditampilkan di module admin {DIKIRIM KE TEMPLATE}
        'css'=>'admin/crudassets/css',//Ini buat kirim css dari page nya  {DIKIRIM KE TEMPLATE}
        'script'=>'admin/crudassets/script',//ini buat javascript apa aja yang di load di page {DIKIRIM KE TEMPLATE}
        'action'=>'admin/profilweb_config/create_action',
        'module'=>'admin',
        'titlePage'=>'profilweb_config',
        'controller'=>'profilweb_config'
       );
      $this->template->load($data);
    }

    public function edit($id){
      $dataedit=$this->Profilweb_config_model->get_by_id($id);
      $data = array(
        'contain_view' => 'admin/profilweb_config/profilweb_config_edit',
        'sidebar'=>'admin/sidebar',//Ini buat menu yang ditampilkan di module admin {DIKIRIM KE TEMPLATE}
        'css'=>'admin/crudassets/css',//Ini buat kirim css dari page nya  {DIKIRIM KE TEMPLATE}
        'script'=>'admin/crudassets/script',//ini buat javascript apa aja yang di load di page {DIKIRIM KE TEMPLATE}
        'action'=>'admin/profilweb_config/update_action',
        'dataedit'=>$dataedit,
        'module'=>'admin',
        'titlePage'=>'profilweb_config',
        'controller'=>'profilweb_config'
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
		'service_tagline' => $this->input->post('service_tagline',TRUE),
		'service_judul' => $this->input->post('service_judul',TRUE),
		'service_deskripsi' => $this->input->post('service_deskripsi',TRUE),
		'whychoose_tagline' => $this->input->post('whychoose_tagline',TRUE),
		'whychoose_judul' => $this->input->post('whychoose_judul',TRUE),
		'whychoose_deskripsi' => $this->input->post('whychoose_deskripsi',TRUE),
	    );

            $this->Profilweb_config_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/profilweb_config'));
        }
    }



    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id_config', TRUE));
        } else {
            $data = array(
		'service_tagline' => $this->input->post('service_tagline',TRUE),
		'service_judul' => $this->input->post('service_judul',TRUE),
		'service_deskripsi' => $this->input->post('service_deskripsi',TRUE),
		'whychoose_tagline' => $this->input->post('whychoose_tagline',TRUE),
		'whychoose_judul' => $this->input->post('whychoose_judul',TRUE),
		'whychoose_deskripsi' => $this->input->post('whychoose_deskripsi',TRUE),
	    );

            $this->Profilweb_config_model->update($this->input->post('id_config', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/profilweb_config'));
        }
    }

    public function delete($id)
    {
        $row = $this->Profilweb_config_model->get_by_id($id);

        if ($row) {
            $this->Profilweb_config_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/profilweb_config'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/profilweb_config'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('service_tagline', 'service tagline', 'trim|required');
	$this->form_validation->set_rules('service_judul', 'service judul', 'trim|required');
	$this->form_validation->set_rules('service_deskripsi', 'service deskripsi', 'trim|required');
	$this->form_validation->set_rules('whychoose_tagline', 'whychoose tagline', 'trim|required');
	$this->form_validation->set_rules('whychoose_judul', 'whychoose judul', 'trim|required');
	$this->form_validation->set_rules('whychoose_deskripsi', 'whychoose deskripsi', 'trim|required');

	$this->form_validation->set_rules('id_config', 'id_config', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
