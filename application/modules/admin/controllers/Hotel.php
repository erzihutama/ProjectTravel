<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Hotel extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Hotel_model');
            $this->load->library('form_validation');
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
        }

        public function index()
        {$datahotel=$this->Hotel_model->get_all();//panggil ke modell
          $datafield=$this->Hotel_model->get_field();//panggil ke modell
          $datatabel=$this->Hotel_model->gettabelkota();
          // var_dump($datatabel);die;
           $data = array(
             'content'=>'admin/hotel/hotel_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/hotel/css',
             'js'=>'admin/hotel/js',
             'datahotel'=>$datahotel,
             'datafield'=>$datafield,
             'datatabel'=>$datatabel,
             'module'=>'admin',
             'titlePage'=>'hotel',
             'controller'=>'hotel'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Hotel_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Hotel_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Hotel_model->namahotel;
							$row[] = $Hotel_model->deskripsi;
							$row[] = $Hotel_model->id_kota;
							$row[] = $Hotel_model->reguler_quad;
							$row[] = $Hotel_model->requler_triple;
							$row[] = $Hotel_model->reguler_double;
							$row[] = $Hotel_model->high_quad;
							$row[] = $Hotel_model->high_triple;
							$row[] = $Hotel_model->high_double;

              $row[] ="
              <a href='hotel/edit/$Hotel_model->id_hotel'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Hotel_model->id_hotel' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Hotel_model->count_all(),
                          "recordsFiltered" => $this->Hotel_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
          $data_kota = $this->Hotel_model->getkota();
           $data = array(
             'content'=>'admin/hotel/hotel_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/hotel/create_action',
             'module'=>'admin',
             'titlePage'=>'hotel',
             'datakota' => $data_kota,
             'controller'=>'hotel'
            );
          $this->template->load($data);
        }

        public function edit($id_hotel){
          $data_kota = $this->Hotel_model->getkota();
          $dataedit=$this->Hotel_model->get_by_id($id_hotel);
           $data = array(
             'content'=>'admin/hotel/hotel_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/hotel/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'datakota' => $data_kota,
             'titlePage'=>'hotel',
             'controller'=>'hotel'
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
					'namahotel' => $this->input->post('namahotel',TRUE),
					'deskripsi' => $this->input->post('deskripsi',TRUE),
					'id_kota' => $this->input->post('id_kota',TRUE),
					'reguler_quad' => $this->input->post('reguler_quad',TRUE),
					'requler_triple' => $this->input->post('requler_triple',TRUE),
					'reguler_double' => $this->input->post('reguler_double',TRUE),
					'high_quad' => $this->input->post('high_quad',TRUE),
					'high_triple' => $this->input->post('high_triple',TRUE),
					'high_double' => $this->input->post('high_double',TRUE),

);

            $this->Hotel_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/hotel'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'namahotel' => $this->input->post('namahotel',TRUE),
					'deskripsi' => $this->input->post('deskripsi',TRUE),
					'id_kota' => $this->input->post('id_kota',TRUE),
					'reguler_quad' => $this->input->post('reguler_quad',TRUE),
					'requler_triple' => $this->input->post('requler_triple',TRUE),
					'reguler_double' => $this->input->post('reguler_double',TRUE),
					'high_quad' => $this->input->post('high_quad',TRUE),
					'high_triple' => $this->input->post('high_triple',TRUE),
					'high_double' => $this->input->post('high_double',TRUE),

);

            $this->Hotel_model->update($this->input->post('id_hotel', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/hotel'));
        }
    }

    public function delete($id_hotel)
    {
        $row = $this->Hotel_model->get_by_id($id_hotel);

        if ($row) {
            $this->Hotel_model->delete($id_hotel);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/hotel'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/hotel'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('namahotel', 'namahotel', 'trim|required');
$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
$this->form_validation->set_rules('id_kota', 'id_kota', 'trim|required');
$this->form_validation->set_rules('reguler_quad', 'reguler_quad', 'trim|required');
$this->form_validation->set_rules('requler_triple', 'requler_triple', 'trim|required');
$this->form_validation->set_rules('reguler_double', 'reguler_double', 'trim|required');
$this->form_validation->set_rules('high_quad', 'high_quad', 'trim|required');
$this->form_validation->set_rules('high_triple', 'high_triple', 'trim|required');
$this->form_validation->set_rules('high_double', 'high_double', 'trim|required');


	$this->form_validation->set_rules('id_hotel', 'id_hotel', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
