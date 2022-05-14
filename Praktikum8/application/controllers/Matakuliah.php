<?php
class Matakuliah extends CI_Controller{
    // membuat method index
    public function index(){
        // akses model mahasiswa
        $this->load->model('Matakuliah_model');
        $Matakuliah = $this->Matakuliah_model->getAll();
        $data['Matakuliah'] = $Matakuliah;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('Matakuliah/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        // akses model mahasiswa
        $this->load->model('Matakuliah_model');
        $siswa = $this->mahasiswa_model->getById($id);
        $data['Matakuliah'] = $Mk;
        $this->load->view('layouts/header');
        $this->load->view('Matakuliah/detail', $data);
        $this->load->view('layouts/footer');
    }
}
?>