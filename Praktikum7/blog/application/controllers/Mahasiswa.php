<?php
class Mahasiswa extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('mahasiswa_model','mhs1');

        // buat object model 1 dan nilai nya
        $this->mhs1->id=1;
        $this->mhs1->nim='011012';
        $this->mhs1->nama='Ahmad';
        $this->mhs1->gender='L';
        $this->mhs1->ipk=3.85;

        $this->load->model('mahasiswa_model','mhs2');

        // buat object model 2 dan nilai nya
        $this->mhs2->id=2;
        $this->mhs2->nim='012013';
        $this->mhs2->nama='Sunar';
        $this->mhs2->gender='P';
        $this->mhs2->ipk=3.55;

        $this->load->model('mahasiswa_model','mhs3');

        // buat object model 3 dan nilai nya
        $this->mhs3->id=3;
        $this->mhs3->nim='013014';
        $this->mhs3->nama='Heni';
        $this->mhs3->gender='P';
        $this->mhs3->ipk=3.34;

        // simpan object yang kita buat tadi ke dalam array
        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
        // Siapkan data untuk di kirim kedalam view, dimana data nya di ambil dari object yang kita simpan ke dalam array
        $data['list_mhs'] = $list_mhs;
        // render data dan kirim data ke dalam view
        $this->load->view('mahasiswa/index', $data);
    }
   
    }
?>