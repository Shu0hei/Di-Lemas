<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Web extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('form_validation');
  }
  
  public function index() {
    $data['judul'] = "Halaman Depan";
    $this->load->view('v_header',$data);
    $this->load->view('v_index',$data);
    $this->load->view('v_footer',$data);
  }

  public function about() {
    $data['judul'] = "Halaman About";
    $this->load->view('v_header', $data);
    $this->load->view('v_about', $data);
    $this->load->view('v_footer', $data);
  }

  public function form() {
    $this->load->view('v_header',);
    $this->load->view('view-form-inputsiswa');
    $this->load->view('v_footer',);
  }

  public function cetak() {
    $this->load->view('v_header',);
    $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required|min_length[3]', [
      'required' => 'Nama Siswa harus diisi',
      'min_lenght' => 'Kode terlalu pendek'
    ]);

    $this->form_validation->set_rules('nis', 'NIS', 'required|min_length[3]', [
      'required' => 'NIS harus diisi',
      'min_lenght' => 'Nama terlalu pendek'
    ]);

    $this->form_validation->set_rules('kelas', 'Kelas', 'required|min_length[3]', [
      'required' => 'Kelas harus diisi',
      'min_lenght' => 'Kode terlalu pendek'
    ]);

    $this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'required|min_length[3]', [
      'required' => 'Tanggal lahir harus diisi',
      'min_lenght' => 'Nama terlalu pendek'
    ]);

    $this->form_validation->set_rules('tempat_lahir', 'Tempat lahir', 'required|min_length[3]', [
      'required' => 'Tempat lahir harus diisi',
      'min_lenght' => 'Kode terlalu pendek'
    ]);

    $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]', [
      'required' => 'Alamat Harus diisi',
      'min_lenght' => 'Nama terlalu pendek'
    ]);

    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|min_length[3]', [
      'required' => 'Jenis Kelamin harus diisi',
      'min_lenght' => 'Kode terlalu pendek'
    ]);

    $this->form_validation->set_rules('agama', 'Agama', 'required|min_length[3]', [
      'required' => 'Agama harus diisi',
      'min_lenght' => 'Nama terlalu pendek'
    ]);

    if ($this->form_validation->run() != true) {
      $this->load->view('view-form-inputsiswa');
    } 
    else {
      $data = [
        'nama_siswa' => $this->input->post('nama_siswa'),
        'nis' => $this->input->post('nis'),
        'kelas' => $this->input->post('kelas'),
        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
        'tempat_lahir' => $this->input->post('tempat_lahir'),
        'alamat' => $this->input->post('alamat'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'agama' => $this->input->post('agama')];
          
      $this->load->view('view-data-inputsiswa', $data);
    }
    $this->load->view('v_footer',);
  }
}
