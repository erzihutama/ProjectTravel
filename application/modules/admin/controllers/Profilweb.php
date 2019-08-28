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
    }

    public function index()
    {

      $dataprofilweb=$this->Profilweb_model->get_all();//panggil ke modell
      $datafield=$this->Profilweb_model->get_field();//panggil ke modell

      $data = array(
        'contain_view' => 'admin/profilweb/profilweb_list',
        'sidebar'=>'admin/sidebar',
        'css'=>'admin/crudassets/css',
        'script'=>'admin/crudassets/script',
        'dataprofilweb'=>$dataprofilweb,
        'datafield'=>$datafield,
        'module'=>'admin',
        'titlePage'=>'profilweb',
        'controller'=>'profilweb'
       );
      $this->template->load($data);
    }


    public function create(){
      $data = array(
        'contain_view' => 'admin/profilweb/profilweb_form',
        'sidebar'=>'admin/sidebar',//Ini buat menu yang ditampilkan di module admin {DIKIRIM KE TEMPLATE}
        'css'=>'admin/crudassets/css',//Ini buat kirim css dari page nya  {DIKIRIM KE TEMPLATE}
        'script'=>'admin/crudassets/script',//ini buat javascript apa aja yang di load di page {DIKIRIM KE TEMPLATE}
        'action'=>'admin/profilweb/create_action',
        'module'=>'admin',
        'titlePage'=>'profilweb',
        'controller'=>'profilweb'
       );
      $this->template->load($data);
    }

    public function edit($id){
      $dataedit=$this->Profilweb_model->get_by_id($id);
      $data = array(
        'contain_view' => 'admin/profilweb/profilweb_edit',
        'sidebar'=>'admin/sidebar',//Ini buat menu yang ditampilkan di module admin {DIKIRIM KE TEMPLATE}
        'css'=>'admin/crudassets/css',//Ini buat kirim css dari page nya  {DIKIRIM KE TEMPLATE}
        'script'=>'admin/crudassets/script',//ini buat javascript apa aja yang di load di page {DIKIRIM KE TEMPLATE}
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
		'email' => $this->input->post('email',TRUE),
		'alamat1' => $this->input->post('alamat1',TRUE),
		'alamat2' => $this->input->post('alamat2',TRUE),
		'alamat3' => $this->input->post('alamat3',TRUE),
		'telepon1' => $this->input->post('telepon1',TRUE),
		'telepon2' => $this->input->post('telepon2',TRUE),
		'telepon3' => $this->input->post('telepon3',TRUE),
		'website' => $this->input->post('website',TRUE),
		'google_maps' => $this->input->post('google_maps',TRUE),
		'service_tagline' => $this->input->post('service_tagline',TRUE),
		'service_judul1' => $this->input->post('service_judul1',TRUE),
		'service_deskripsi1' => $this->input->post('service_deskripsi1',TRUE),
		'service_judul2' => $this->input->post('service_judul2',TRUE),
		'service_deskripsi2' => $this->input->post('service_deskripsi2',TRUE),
		'service_judul3' => $this->input->post('service_judul3',TRUE),
		'sevice_deskripsi3' => $this->input->post('sevice_deskripsi3',TRUE),
		'service_judul4' => $this->input->post('service_judul4',TRUE),
		'service_deskripsi4' => $this->input->post('service_deskripsi4',TRUE),
		'chosee_tagline' => $this->input->post('chosee_tagline',TRUE),
		'chosee_judul1' => $this->input->post('chosee_judul1',TRUE),
		'chosee_deskripsi1' => $this->input->post('chosee_deskripsi1',TRUE),
		'chosee_judul2' => $this->input->post('chosee_judul2',TRUE),
		'chosee_deskripsi2' => $this->input->post('chosee_deskripsi2',TRUE),
		'chosee_judul3' => $this->input->post('chosee_judul3',TRUE),
		'chosee_deskripsi3' => $this->input->post('chosee_deskripsi3',TRUE),
		'chosee_judul4' => $this->input->post('chosee_judul4',TRUE),
		'chosee_deskripsi4' => $this->input->post('chosee_deskripsi4',TRUE),
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
            $this->edit($this->input->post('id_profil', TRUE));
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
		'email' => $this->input->post('email',TRUE),
		'alamat1' => $this->input->post('alamat1',TRUE),
		'alamat2' => $this->input->post('alamat2',TRUE),
		'alamat3' => $this->input->post('alamat3',TRUE),
		'telepon1' => $this->input->post('telepon1',TRUE),
		'telepon2' => $this->input->post('telepon2',TRUE),
		'telepon3' => $this->input->post('telepon3',TRUE),
		'website' => $this->input->post('website',TRUE),
		'google_maps' => $this->input->post('google_maps',TRUE),
		'service_tagline' => $this->input->post('service_tagline',TRUE),
		'service_judul1' => $this->input->post('service_judul1',TRUE),
		'service_deskripsi1' => $this->input->post('service_deskripsi1',TRUE),
		'service_judul2' => $this->input->post('service_judul2',TRUE),
		'service_deskripsi2' => $this->input->post('service_deskripsi2',TRUE),
		'service_judul3' => $this->input->post('service_judul3',TRUE),
		'sevice_deskripsi3' => $this->input->post('sevice_deskripsi3',TRUE),
		'service_judul4' => $this->input->post('service_judul4',TRUE),
		'service_deskripsi4' => $this->input->post('service_deskripsi4',TRUE),
		'chosee_tagline' => $this->input->post('chosee_tagline',TRUE),
		'chosee_judul1' => $this->input->post('chosee_judul1',TRUE),
		'chosee_deskripsi1' => $this->input->post('chosee_deskripsi1',TRUE),
		'chosee_judul2' => $this->input->post('chosee_judul2',TRUE),
		'chosee_deskripsi2' => $this->input->post('chosee_deskripsi2',TRUE),
		'chosee_judul3' => $this->input->post('chosee_judul3',TRUE),
		'chosee_deskripsi3' => $this->input->post('chosee_deskripsi3',TRUE),
		'chosee_judul4' => $this->input->post('chosee_judul4',TRUE),
		'chosee_deskripsi4' => $this->input->post('chosee_deskripsi4',TRUE),
	    );

            $this->Profilweb_model->update($this->input->post('id_profil', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/profilweb'));
        }
    }

    public function delete($id)
    {
        $row = $this->Profilweb_model->get_by_id($id);

        if ($row) {
            $this->Profilweb_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/profilweb'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/profilweb'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('judul_perusahaan', 'judul perusahaan', 'trim|required');
	$this->form_validation->set_rules('deskripsi_perusahaan', 'deskripsi perusahaan', 'trim|required');
	$this->form_validation->set_rules('taglineweb1', 'taglineweb1', 'trim|required');
	$this->form_validation->set_rules('taglineweb2', 'taglineweb2', 'trim|required');
	$this->form_validation->set_rules('taglineweb3', 'taglineweb3', 'trim|required');
	$this->form_validation->set_rules('taglineimage1', 'taglineimage1', 'trim|required');
	$this->form_validation->set_rules('taglineimage2', 'taglineimage2', 'trim|required');
	$this->form_validation->set_rules('taglineimage3', 'taglineimage3', 'trim|required');
	$this->form_validation->set_rules('visi', 'visi', 'trim|required');
	$this->form_validation->set_rules('misi', 'misi', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('alamat1', 'alamat1', 'trim|required');
	$this->form_validation->set_rules('alamat2', 'alamat2', 'trim|required');
	$this->form_validation->set_rules('alamat3', 'alamat3', 'trim|required');
	$this->form_validation->set_rules('telepon1', 'telepon1', 'trim|required');
	$this->form_validation->set_rules('telepon2', 'telepon2', 'trim|required');
	$this->form_validation->set_rules('telepon3', 'telepon3', 'trim|required');
	$this->form_validation->set_rules('website', 'website', 'trim|required');
	$this->form_validation->set_rules('google_maps', 'google maps', 'trim|required');
	$this->form_validation->set_rules('service_tagline', 'service tagline', 'trim|required');
	$this->form_validation->set_rules('service_judul1', 'service judul1', 'trim|required');
	$this->form_validation->set_rules('service_deskripsi1', 'service deskripsi1', 'trim|required');
	$this->form_validation->set_rules('service_judul2', 'service judul2', 'trim|required');
	$this->form_validation->set_rules('service_deskripsi2', 'service deskripsi2', 'trim|required');
	$this->form_validation->set_rules('service_judul3', 'service judul3', 'trim|required');
	$this->form_validation->set_rules('sevice_deskripsi3', 'sevice deskripsi3', 'trim|required');
	$this->form_validation->set_rules('service_judul4', 'service judul4', 'trim|required');
	$this->form_validation->set_rules('service_deskripsi4', 'service deskripsi4', 'trim|required');
	$this->form_validation->set_rules('chosee_tagline', 'chosee tagline', 'trim|required');
	$this->form_validation->set_rules('chosee_judul1', 'chosee judul1', 'trim|required');
	$this->form_validation->set_rules('chosee_deskripsi1', 'chosee deskripsi1', 'trim|required');
	$this->form_validation->set_rules('chosee_judul2', 'chosee judul2', 'trim|required');
	$this->form_validation->set_rules('chosee_deskripsi2', 'chosee deskripsi2', 'trim|required');
	$this->form_validation->set_rules('chosee_judul3', 'chosee judul3', 'trim|required');
	$this->form_validation->set_rules('chosee_deskripsi3', 'chosee deskripsi3', 'trim|required');
	$this->form_validation->set_rules('chosee_judul4', 'chosee judul4', 'trim|required');
	$this->form_validation->set_rules('chosee_deskripsi4', 'chosee deskripsi4', 'trim|required');

	$this->form_validation->set_rules('id_profil', 'id_profil', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
