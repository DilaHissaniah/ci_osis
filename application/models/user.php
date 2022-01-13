<?php
defined('BASEPATH')OR exit('no direct script access allowed');
class user extends CI_Model{ 
    public function tbl_user()
    {
        return $this->db->get('user')->result_array();
    }
        public function semuaData()
    {
        return $this->db->get('user')->result_array();
    }
    public function proses_tambah_data()
    {
        $data=[
            "username"=> $this->input->post('username'),
            "password"=> $this->input->post('password'),
            "email"=> $this->input->post('email'),
            "level"=> $this->input->post('level'),
        ];
        $this->db->insert("user",$data);
    }

    public function hapus_data($id_user)
    {
        $this->db->where('id_user',$id_user);
        $this->db->delete("user");
    }
    public function edit_data($id_user)
    {
        return $this->db->get_where('user',['id_user'=> $id_user])->row_array();
    }
    public function proses_edit_data()
    {   
        $data= [
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "email" => $this->input->post('email'),
            "level" => $this->input->post('level'),
        ];
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('user',$data);
    }
}
?>