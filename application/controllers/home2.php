<?php
class Home2 extends CI_Controller{
         public function __construct()
         {
        parent::__construct();
        $this->load->model('Tbl_tahun');
        if (!$this->session->userdata('id_user')){
                redirect('auth/index');
            }
         }
         public function tambah_data()
{   
        
        $data['tahun']=$this->Tbl_tahun->semuaData();    
        $this->load->view('templates/Auth_header');
        $this->load->view('home2/tambah_data',$data);
   
}
        public function proses_tambah_data()
        {
           $this->Tbl_tahun->proses_tambah_data();
           $this->session->set_flashdata('pesan','<div class="alert alert-success"role="alert">
           data berhasil di tambah!
           </div>');
           redirect('Auth/Home2');
        }
        public function hapus_data($id_tahun)
        {
           $this->Tbl_tahun->hapusdata($id_tahun);
           $this->session->set_flashdata('pesan','<div class="alert alert-danger"role="alert">
           data berhasil di hapus!
           </div>');
           redirect('Auth/Home2');
        }
        public function edit_data($id_tahun)
        {
            
            $data['tbl_tahun'] =  $this->Tbl_tahun->edit_data($id_tahun);
            $this->load->view('templates/Auth_header');
            $this->load->view('home2/edit_data',$data);
        }
        public function proses_edit_data()
        {
             $this->Tbl_tahun->proses_edit_data();
             $this->session->set_flashdata('pesan','<div class="alert alert-info"role="alert">
             data berhasil di edit!
             </div>');
             redirect('Auth/home2');
        }
        public function editdata($id_tahun)
        {
             $this->load->model('Tbl_tahun');
             $this->Tbl_tahun->edit_data($id_tahun);
             redirect('Auth/Home2');
        }
}
   
?>