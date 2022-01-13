<?php
defined('BASEPATH')OR exit('no direct script access allowed');
class Tbl_tahun extends CI_Model{ 
    public function tahun()
    {
        return $this->db->get('tbl_tahun')->result_array();
    }
        public function semuaData()
    {
        return $this->db->get('tbl_tahun')->result_array();
    }
    public function proses_tambah_data()
    {
        $data=[
            
            "nama_tahun"=> $this->input->post('nama'),
        ];
        $this->db->insert("tbl_tahun",$data);
    }

    public function hapusdata($id_tahun)
    {
        $this->db->where('id_tahun',$id_tahun);
        $this->db->delete("tbl_tahun");
    }
    public function edit_data($id_tahun)
    {
        return $this->db->get_where('tbl_tahun',['id_tahun'=> $id_tahun])->row_array();
    }
    public function proses_edit_data()
    {   
        $data= [
            "nama_tahun" => $this->input->post('nama_tahun'),
        ];
        $this->db->where('id_tahun', $this->input->post('id_tahun'));
        $this->db->update('tbl_tahun',$data);
    }
}
?>