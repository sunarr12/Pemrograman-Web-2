<?php 
class Dosen_model extends CI_Model{
    public $nidn;
    public $pendidikan;

    public function getAll(){
        // menampilkan seluruh data yang ada di table mahasiswa menggunakan query builder
        $query = $this->db->get('Dosen');
        return $query->result();
    }
    public function getById($id){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('Dosen', ['id' => $id]);
        return $query->row();
    }
}
?>