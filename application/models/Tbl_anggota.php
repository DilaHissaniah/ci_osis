<?php
defined('BASEPATH')OR exit('no direct script access allowed');
class Tbl_anggota extends CI_Model{ 
    public function anggota()
    {
        return $this->db->get('tbl_anggota')->result_array();
    }
        public function semuaData()
    {
        return $this->db->get('tbl_anggota')->result_array();
    }
    public function proses_tambah_data()
    {
        $data=[
            "nama_anggota"=> $this->input->post('nama_anggota'),
            "alamat"=> $this->input->post('alamat'),
            "kelas"=> $this->input->post('kelas'),
            "tempat_tanggal_lahir"=> $this->input->post('tempat_tanggal_lahir'),
            "no_hp"=> $this->input->post('no_hp'),
            "program_keahlian"=> $this->input->post('program_keahlian'),
            "jabatan"=> $this->input->post('jabatan'),
            "tahun_masa_khidmat"=> $this->input->post('tahun_masa_khidmat'),
            "foto"=> $this->input->post('foto'),
        ];
        $this->db->insert("tbl_anggota",$data);
    }

    public function hapus_data($id_anggota)
    {
        $this->db->where('id_anggota',$id_anggota);
        $this->db->delete("tbl_anggota");
    }
    public function edit_data($id_anggota)
    {
        return $this->db->get_where('tbl_anggota',['id_anggota'=> $id_anggota])->row_array();
    }
    public function proses_edit_data()
    {   
        $data= [
            "nama_anggota" => $this->input->post('nama_anggota'),
            "alamat" => $this->input->post('alamat'),
            "kelas" => $this->input->post('kelas'),
            "tempat_tanggal_lahir"=> $this->input->post('tempat_tanggal_lahir'),
            "no_hp"=> $this->input->post('no_hp'),
            "program_keahlian"=> $this->input->post('program_keahlian'),
            "jabatan"=> $this->input->post('jabatan'),
            "tahun_masa_khidmat"=> $this->input->post('tahun_masa_khidmat'),
            "foto"=> $this->input->post('foto'),
        ];
        $this->db->where('id_anggota', $this->input->post('id_anggota'));
        $this->db->update('tbl_anggota',$data);
    }
    function cekuser()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        return $this->db->get_where('user', array('email' => $email, 'password' => $password))->result();
    }
}
?>