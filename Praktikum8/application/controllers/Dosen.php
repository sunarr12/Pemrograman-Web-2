<?php
class Dosen extends CI_Controller{
    // membuat method index
    public function index(){
        // akses model mahasiswa
        $this->load->model('Dosen_model');
        $Dosen = $this->Dosen_model->getAll();
        $data['Dosen'] = $Dosen;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('Dosen/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        // akses model mahasiswa
        $this->load->model('Dosen_model');
        $Dosen = $this->Dosen_model->getById($id);
        $data['Dosen'] = $Dosen;
        $this->load->view('layouts/header');
        $this->load->view('Dosen/detail', $data);
        $this->load->view('layouts/footer');
    }
}
?>