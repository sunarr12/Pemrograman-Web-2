<?php
class Dosen extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('Dosen_model','dsn1');

        // buat object model 1 dan nilai nya
        $this->dsn1->id=1;
        $this->dsn1->nidn='001';
        $this->dsn1->pendidikan='S2';

        $this->load->model('Dosen_model','dsn2');

        // buat object model 2 dan nilai nya
        $this->dsn2->id=2;
        $this->dsn2->nidn='002';
        $this->dsn2->pendidikan='S3';

        $this->load->model('Dosen_model','dsn3');

        // buat object model 3 dan nilai nya
        $this->dsn3->id=3;
        $this->dsn3->nidn='003';
        $this->dsn3->pendidikan='S3';

        // simpan object yang kita buat tadi ke dalam array
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        // Siapkan data untuk di kirim kedalam view, dimana data nya di ambil dari object yang kita simpan ke dalam array
        $data['list_dsn'] = $list_dsn;
        // render data dan kirim data ke dalam view
        $this->load->view('dosen/index', $data);
    }
   
    }
?>