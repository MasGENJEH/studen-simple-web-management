<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fachri_Home extends CI_Controller {
	function __construct()
    {
        parent:: __construct();
        $this->load->helper(array('url', 'form'));
        $this->load->model('fachri_model_mahasiswa');
    }

	function index()
    {
        $this->load->view('template/Fachri_header');
        $this->load->view('template/Fachri_sidebar');
        $this->load->view('fachri_home');
        $this->load->view('template/Fachri_footer');
    }
	public function Fachri_viewmahasiswa()
	{
		$hasil = $this->fachri_model_mahasiswa->Fachri_getMhs();
        $eata['judul'] = 'View Mahasiswa'; 
        $this->data['hasil'] = $hasil;
        $this->load->view('template/Fachri_header', $eata);
        $this->load->view('template/Fachri_sidebar');
        $this->load->view('Fachri_gridmhs', $this->data);
        $this->load->view('template/Fachri_footer');
		
	}

    function Fachri_createmahasiswa()
    {
        //Validasi form
        $this->form_validation->set_rules('nip','Nip','required|numeric');
        $this->form_validation->set_rules('nama','Nama Lengkap','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('password2','Kofirmasi Password','required|matches[password]');
        $this->form_validation->set_rules('ktp','Nomor KTP','required|numeric');

        if ($this->form_validation->run() == TRUE) {
            $this->fachri_model_mahasiswa->Fachri_create();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Fachri_Home/Fachri_viewmahasiswa');
        } else {
            $eata['judul'] = 'Create Mahasiswa'; 
        $this->load->view('template/Fachri_header', $eata);
        $this->load->view('template/Fachri_sidebar');
        $this->load->view('Fachri_createmahasiswa');
        $this->load->view('template/Fachri_footer');
        }
    }

    function Fachri_hapus($id)
    {
        $this->fachri_model_mahasiswa->Fachri_Delete($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Fachri_Home/Fachri_viewmahasiswa');
    }

    function Fachri_editmahasiswa($id)
    {
        $eata['judul'] = 'Edit Mahasiswa';
        $eata['mahasiswa'] = $this->fachri_model_mahasiswa->Fachri_getMahasiswaById($id);

        //Validasi form
        $this->form_validation->set_rules('nip','Nip','required|numeric');
        $this->form_validation->set_rules('nama','Nama Lengkap','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('ktp','Nomor KTP','required|numeric');

        if ($this->form_validation->run() == TRUE) {
            $this->fachri_model_mahasiswa->Fachri_edit($id);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Fachri_Home/Fachri_viewmahasiswa');
        } else {
             
        $this->load->view('template/Fachri_header', $eata);
        $this->load->view('template/Fachri_sidebar');
        $this->load->view('Fachri_editmahasiswa', $eata);
        $this->load->view('template/Fachri_footer');
        }
    }



}