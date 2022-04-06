<?php
class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_jabatan');
        if (!$this->session->userdata('id_user')){
          redirect('auth/index');
      }
    }  
    public function tambah_data()
    
        {   
        $this->load->model('Tbl_jabatan');
        $data['jabatan']=$this->Tbl_jabatan->semuaData();    
        $this->load->view('templates/Auth_header');
        $this->load->view('home/tambah_data',$data);
   
}
        public function proses_tambah_data()
        {
           $this->load->model('Tbl_jabatan');
           $this->tbl_jabatan->proses_tambah_data();
           $this->session->set_flashdata('pesan','<div class="alert alert-success"role="alert">
             data berhasil di tambah!
             </div>');
           redirect('Auth/Home');
        }

        public function hapus_data($id_jabatan)
        {
           $this->load->model('Tbl_jabatan');
           $this->tbl_jabatan->hapusdata($id_jabatan);
           $this->session->set_flashdata('pesan','<div class="alert alert-danger"role="alert">
             data berhasil di hapus!
             </div>');
           redirect('Auth/Home');
        }

        public function edit_data($id_jabatan)
        {
            $this->load->model('Tbl_jabatan');
            $data['tbl_jabatan'] =  $this->tbl_jabatan->edit_data($id_jabatan);
            $this->load->view('templates/Auth_header');
            $this->load->view('home/edit_data',$data);
        }
        public function proses_edit_data()
        {
             $this->tbl_jabatan->proses_edit_data();
             $this->session->set_flashdata('pesan','<div class="alert alert-info"role="alert">
             data berhasil di edit!
             </div>');
             redirect('Auth/home');
        }
        public function editdata($id_jabatan)
        {
             $this->load->model('Tbl_jabatan');
             $this->Tbl_jabatan->edit_data($id_jabatan);
             redirect('Auth/Home');
        }
}
   
?>