<?php

class Fachri_Model_mahasiswa extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Fachri_getMhs()
    {
        // $results = array();
        

        $sql = "select NIP, NamaLengkap, JenisKelamin, Alamat, Password, NomorKtp, id from mstbiodata;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function Fachri_getMahasiswaById($id)
    {
        return $this->db->get_where('mstbiodata', ['id' => $id])->row_array();
    }
    

    public function Fachri_create()
    {

       $data = [
            "nip" => $this->input->post('nip', true),
            "namalengkap" => $this->input->post('nama', true),
            "jeniskelamin" => $this->input->post('jeniskelamin', true),
            "alamat" => $this->input->post('alamat', true),
            "password" => $this->input->post('password', true),
            "nomorktp" => $this->input->post('ktp', true),
       ];

       $this->db->insert('mstbiodata', $data);
    }

    public function Fachri_Delete($id)
    {
        
        $this->db->delete('mstbiodata', ['id' => $id]);
    }
    
    public function Fachri_edit($id)
    {

       $data = [
            "nip" => $this->input->post('nip', true),
            "namalengkap" => $this->input->post('nama', true),
            "jeniskelamin" => $this->input->post('jeniskelamin', true),
            "alamat" => $this->input->post('alamat', true),
            "password" => $this->input->post('password', true),
            "nomorktp" => $this->input->post('ktp', true),
       ];
       $this->db->where('id', $id);
       $this->db->update('mstbiodata', $data);
    }

}


; ?>