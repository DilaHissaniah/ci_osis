<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Tbl_jabatan', 'tj');
        $this->load->model('Tbl_anggota', 'agt');
        $this->load->model('Tbl_masa_khidmat', 'mkh');
    
    }
    
    public function index()
    {
        $this->load->view('Auth/login');
    }

     function proses_login()
    {
        $hasilcek = $this->agt->cekuser();
        
        if($hasilcek){
            $sess_data['id_user'] = $hasilcek[0]->id_user;
            $sess_data['level'] = $hasilcek[0]->level;
            $sess_data['email'] = $hasilcek[0]->email;

            $this->session->set_userdata($sess_data);
             if($sess_data['level'] == 'admin'){
                 redirect(base_url('Auth/beranda'));
             }else{
                 redirect(base_url('Auth/beranda'));
             }
        }else{
            redirect('/');
        }
    //     $email = $this->input->post('email');
    //     $password = $this->input->post('password');

    //     $user = $this->db->get_where('user', ['email' => $email])->row_array();
    //     //jika usernya ada
    //     if ($user) {
    //         //jika usernya aktif
    //         if ($user['is_active'] == 1) {
    //             //cek password
    //             if (password_verify($password, $user['password'])) {
    //                 $data = [
    //                     'email' => $user['email'],
    //                     'id_user' => $user['id_user']
    //                 ];
    //                 $this->session->set_userdata($data);
    //                 if($user['id_user'] == 1){
    //                     redirect('Auth/home');
    //                 } else {
    //                     redirect('auth/home');
    //                 }
    //             } else {

    //                 $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
    //                 redirect('auth');
    //             }
    //         } else {
    //             $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email not been activated!</div>');
    //             redirect('auth');
    //         }
    //     } else {
    //         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
    //         redirect('auth');
    //     }
        
    //    $this->load->view('auth/login');
    }
    public function dashboard()
    {
        $this->load->view('template/header');
        $this->load->view('template/footer');
    }
   public function home(){
       $data['jabatan'] = $this->tj->jabatan();
       
        $this->load->view('templates/auth_header');
        $this->load->view('templates/auth_sidebar');
        $this->load->view('templates/index', $data);
        $this->load->view('templates/auth_topbar');
        $this->load->view('templates/auth_footer');
   }
   public function home1(){
       $this->load->model('Tbl_anggota','agt');

        $data['anggota']=$this->agt->anggota();
        $this->load->view('templates/auth_header');
        $this->load->view('templates/auth_sidebar');
        $this->load->view('templates/index1', $data);
        $this->load->view('templates/auth_topbar');
        $this->load->view('templates/auth_footer');
   }
   public function home2(){
       $this->load->model('tbl_tahun','thn');

       $data['tahun']=$this->thn->tahun();
       $this->load->view('templates/auth_header');
        $this->load->view('templates/auth_sidebar');
        $this->load->view('templates/index2', $data);
        $this->load->view('templates/auth_topbar');
        $this->load->view('templates/auth_footer');
   }
   public function home3(){
       $this->load->model('tbl_masa_khidmat','mkh');

       $data['masa_khidmat']=$this->mkh->masa_khidmat();
       $this->load->view('templates/auth_header');
        $this->load->view('templates/auth_sidebar');
        $this->load->view('templates/index3', $data);
        $this->load->view('templates/auth_topbar');
        $this->load->view('templates/auth_footer');
   }
   public function home5(){
       $this->load->model('user','usr');

       $data['user']=$this->usr->tbl_user();
       $this->load->view('templates/auth_header');
        $this->load->view('templates/auth_sidebar');
        $this->load->view('templates/index5', $data);
        $this->load->view('templates/auth_topbar');
        $this->load->view('templates/auth_footer');
   }
   public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'this email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'OSIS User Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">congratulation! your account hass been created. Please Login </div>');
            redirect('auth');
        }
    }


    public function logout()
    {
        session()->destroy();
        redirect('Auth');

       // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">you have been logged out! </div>');
       // redirect('auth');
    }
    
    public function beranda()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('templates/auth_sidebar');
        $this->load->view('beranda');
        $this->load->view('templates/auth_topbar');
        
    }
    
}

