<?php
defined('BASEPATH')OR exit('no direct script access allowed');
class Tbl_masa_khidmat extends CI_Model{ 
    public function masa_khidmat()
    {
        return $this->db->get('Tbl_masa_khidmat')->result_array();
    }
        public function semuaData()
    {
        return $this->db->get('Tbl_masa_khidmat')->result_array();
    }
    public function proses_tambah_data()
    {
        $data=[
            "Pembina_osis"=> $this->input->post('Pembina_osis'),
            "nama_ketua"=> $this->input->post('nama_ketua'),
            "nama_wakil"=> $this->input->post('nama_wakil'),
            "masa_khidmat"=> $this->input->post('masa_khidmat'),
        ];
        $this->db->insert("Tbl_masa_khidmat",$data);
    }

    public function hapus_data($id_masa_khidmat)
    {
        $this->db->where('id_masa_khidmat',$id_masa_khidmat);
        $this->db->delete("Tbl_masa_khidmat");
    }
    public function edit_data($id_masa_khidmat)
    {
        return $this->db->get_where('tbl_masa_khidmat',['id_masa_khidmat'=> $id_masa_khidmat])->row_array();
    }
    public function proses_edit_data()
    {   
        $data= [
            "Pembina_osis" => $this->input->post('Pembina_osis'),
            "nama_ketua" => $this->input->post('nama_ketua'),
            "nama_wakil" => $this->input->post('nama_wakil'),
            "masa_khidmat" => $this->input->post('masa_khidmat'),
        ];
        $this->db->where('id_masa_khidmat', $this->input->post('id_masa_khidmat'));
        $this->db->update('tbl_masa_khidmat',$data);
    }
    public function lihat_data($id_masa_khidmat)
    {
        return $this->db->get_where('tbl_masa_khidmat',['id_masa_khidmat'=> $id_masa_khidmat])->row_array();
    }

}
?>