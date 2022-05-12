<?php
class Matakuliah extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('Matakuliah_model','Mk1');

        // buat object model 1 dan nilai nya
        $this->Mk1->id=1;
        $this->Mk1->nama='B. Inggris';
        $this->Mk1->sks='2';
        $this->Mk1->kode='Bing1';

        $this->load->model('Matakuliah_model','Mk2');

        // buat object model 2 dan nilai nya
        $this->Mk2->id=2;
        $this->Mk2->nama='Basis Data';
        $this->Mk2->sks='3';
        $this->Mk2->kode='BD1';

        $this->load->model('Matakuliah_model','Mk3');

        // buat object model 3 dan nilai nya
        $this->Mk3->id=3;
        $this->Mk3->nama='Pemrograman Web';
        $this->Mk3->sks='3';
        $this->Mk3->kode='PW2';

        // simpan object yang kita buat tadi ke dalam array
        $list_Mk = [$this->Mk1, $this->Mk2, $this->Mk3];
        // Siapkan data untuk di kirim kedalam view, dimana data nya di ambil dari object yang kita simpan ke dalam array
        $data['list_Mk'] = $list_Mk;
        // render data dan kirim data ke dalam view
        $this->load->view('Matakuliah/index', $data);
    }
   
    }
?>