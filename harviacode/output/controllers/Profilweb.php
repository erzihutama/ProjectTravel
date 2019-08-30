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
        'contain_view' => '{namamodule}/profilweb/profilweb_list',
        'sidebar'=>'{namamodule}/sidebar',
        'css'=>'{namamodule}/crudassets/css',
        'script'=>'{namamodule}/crudassets/script',
        'dataprofilweb'=>$dataprofilweb,
        'datafield'=>$datafield,
        'module'=>'{namamodule}',
        'titlePage'=>'profilweb',
        'controller'=>'profilweb'
       );
      $this->template->load($data);
    }


    public function create(){
      $data = array(
        'contain_view' => '{namamodule}/profilweb/profilweb_form',
        'sidebar'=>'{namamodule}/sidebar',//Ini buat menu yang ditampilkan di module admin {DIKIRIM KE TEMPLATE}
        'css'=>'{namamodule}/crudassets/css',//Ini buat kirim css dari page nya  {DIKIRIM KE TEMPLATE}
        'script'=>'{namamodule}/crudassets/script',//ini buat javascript apa aja yang di load di page {DIKIRIM KE TEMPLATE}
        'action'=>'{namamodule}/profilweb/create_action',
        'module'=>'{namamodule}',
        'titlePage'=>'profilweb',
        'controller'=>'profilweb'
       );
      $this->template->load($data);
    }

    public function edit($id){
      $dataedit=$this->Profilweb_model->get_by_id($id);
      $data = array(
        'contain_view' => '{namamodule}/profilweb/profilweb_edit',
        'sidebar'=>'{namamodule}/sidebar',//Ini buat menu yang ditampilkan di module admin {DIKIRIM KE TEMPLATE}
        'css'=>'{namamodule}/crudassets/css',//Ini buat kirim css dari page nya  {DIKIRIM KE TEMPLATE}
        'script'=>'{namamodule}/crudassets/script',//ini buat javascript apa aja yang di load di page {DIKIRIM KE TEMPLATE}
        'action'=>'{namamodule}/profilweb/update_action',
        'dataedit'=>$dataedit,
        'module'=>'{namamodule}',
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
		'id_config' => $this->input->post('id_config',TRUE),
		'id_alamat' => $this->input->post('id_alamat',TRUE),
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
            redirect(site_url('{namamodule}/profilweb'));
        }
    }



    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id_profil', TRUE));
        } else {
            $data = array(
		'id_config' => $this->input->post('id_config',TRUE),
		'id_alamat' => $this->input->post('id_alamat',TRUE),
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
            redirect(site_url('{namamodule}/profilweb'));
        }
    }

    public function delete($id)
    {
        $row = $this->Profilweb_model->get_by_id($id);

        if ($row) {
            $this->Profilweb_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('{namamodule}/profilweb'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('{namamodule}/profilweb'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('id_config', 'id config', 'trim|required');
	$this->form_validation->set_rules('id_alamat', 'id alamat', 'trim|required');
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
	$this->form_validation->set_rules('website', 'website', 'trim|required');

	$this->form_validation->set_rules('id_profil', 'id_profil', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}