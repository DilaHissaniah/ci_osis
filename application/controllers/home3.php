<?php
class Home3 extends CI_Controller{
    public function __construct()
         {
        parent::__construct();
        $this->load->model('Tbl_masa_khidmat');
        if (!$this->session->userdata('id_user')){
         redirect('auth/index');
     }
         }
    public function tambah_data()
{ 
        $data['masa_khidmat']=$this->Tbl_masa_khidmat->semuaData();    
        $this->load->view('templates/Auth_header');
        $this->load->view('home3/tambah_data',$data);
   
}
        public function proses_tambah_data()
        {
           $this->Tbl_masa_khidmat->proses_tambah_data();
           $this->session->set_flashdata('pesan','<div class="alert alert-success"role="alert">
           data berhasil di tambah!
           </div>');
           redirect('Auth/Home3');
        }

        public function hapus_data($id_masa_khidmat)
        {
           $this->Tbl_masa_khidmat->hapus_data($id_masa_khidmat);
           $this->session->set_flashdata('pesan','<div class="alert alert-danger"role="alert">
             data berhasil di hapus!
             </div>');
           redirect('Auth/Home3');
        }

        public function edit_data($id_masa_khidmat)
        {
            $data['tbl_masa_khidmat'] =  $this->Tbl_masa_khidmat->edit_data($id_masa_khidmat);
            $this->load->view('templates/Auth_header');
            $this->load->view('home3/edit_data',$data);
        }
        public function proses_edit_data()
        {
             $this->Tbl_masa_khidmat->proses_edit_data();
             $this->session->set_flashdata('pesan','<div class="alert alert-info"role="alert">
             data berhasil di edit!
             </div>');
             redirect('Auth/home3');
        }
        public function editdata($id_masa_khidmat)
        {
             $this->tbl_masa_khidmat->edit_data($id_masa_khidmat);
             redirect('Auth/Home3');
        }

       function lihat_data()
        {
             $this->load->view('templates/Auth_header');
          //    $this->tbl_masa_khidmat->lihat_data($id_masa_khidmat);
             $this->load->view('home4/struktur');
          //    redirect('Auth/Home3');
        }
}
   
?>