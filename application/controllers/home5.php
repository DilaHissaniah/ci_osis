<?php
class Home5 extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user');
        if (!$this->session->userdata('id_user')){
            redirect('auth/index');
        }
    }
    public function tambah_data()
    
        {   
        $data['user']=$this->user->semuaData();    
        $this->load->view('templates/Auth_header');
        $this->load->view('home5/index5',$data);
        }

        public function proses_tambah_data()
        {
           $this->user->proses_tambah_data();
           $this->session->set_flashdata('pesan','<div class="alert alert-success"role="alert">
           data berhasil di tambah!
           </div>');
           redirect('Auth/Home5');
        }

        public function hapus_data($id_user)
        {
           
           $this->user->hapus_data($id_user);
           $this->session->set_flashdata('pesan','<div class="alert alert-danger"role="alert">
             data berhasil di hapus!
             </div>');
           redirect('Auth/home5');
        }

        public function edit_data($id_user)
        {
            
            $data['user'] =  $this->user->edit_data($id_user);
            $this->load->view('templates/Auth_header');
            $this->load->view('home5/edit_data',$data);
        }

        public function proses_edit_data()
        {
            $this->load->model('user');
             $this->user->proses_edit_data();
             $this->session->set_flashdata('pesan','<div class="alert alert-info"role="alert">
             data berhasil di edit!
             </div>');
             redirect('Auth/home5');
        }
        
        public function editdata($id_user)
        {
             $this->load->model('user');
             $this->user->edit_data($id_user);
             redirect('Auth/Home5');
        }
}
   
?>