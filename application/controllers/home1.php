<?php
class Home1 extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_anggota');
        if (!$this->session->userdata('id_user')){
          redirect('auth/index');
      }
    }
    public function tambah_data()
    
        {   
        $data['anggota']=$this->Tbl_anggota->semuaData();    
        $this->load->view('templates/Auth_header'); 
        $this->load->view('home1/index1',$data); 
        }

        public function proses_tambah_data()
        {
   //deklarasi variabel
   $nama_anggota = $this->input->post('nama_anggota');
   $alamat = $this->input->post('alamat');
   $kelas = $this->input->post('kelas');
   $tempat_tanggal_lahir = $this->input->post('tempat_tanggal_lahir');
   $no_hp = $this->input->post('no_hp');
   $program_keahlian = $this->input->post('program_keahlian');
   $jabatan = $this->input->post('jabatan');
   $tahun_masa_khidmat = $this->input->post('tahun_masa_khidmat');
   
   //proses upload
   $config['upload_path']          = "./foto/";
$config['allowed_types']        = 'jpeg|jpg|png';
$config['max_size']             = 5000;

   $this->load->library('upload', $config);
if (!$this->upload->do_upload('foto')){
       //jika gagal upload
        $data = array(
       'nama_anggota' => $nama_anggota,
       'alamat' => $alamat,
       'kelas' => $kelas,
       'tempat_tanggal_lahir' => $tempat_tanggal_lahir,
       'no_hp' => $no_hp,
       'program_keahlian' => $program_keahlian,
       'jabatan' => $jabatan,
       'tahun_masa_khidmat' => $tahun_masa_khidmat
       );
       $this->db->insert('tbl_anggota', $data);
       $this->session->set_flashdata('pesan','<div class="alert alert-info"role="alert">
       data berhasil di tambah!
       </div>');
       redirect('Auth/Home1');

}else{
       //proses upload ke folder
 $data = array('upload_data' => $this->upload->data());
       $namafile =  $this->upload->data("file_name");

       //update ke database
       $data = array(
       'nama_anggota' => $nama_anggota,
       'alamat' => $alamat,
       'kelas' => $kelas,
       'tempat_tanggal_lahir' => $tempat_tanggal_lahir,
       'no_hp' => $no_hp,
       'program_keahlian' => $program_keahlian,
       'jabatan' => $jabatan,
       'tahun_masa_khidmat' => $tahun_masa_khidmat,
       'foto' => $namafile
       );
       $this->db->insert('tbl_anggota', $data);
       redirect('Auth/Home1');
   }
}
        public function hapus_data($id_anggota)
        {
           
           $this->Tbl_anggota->hapus_data($id_anggota);
           $this->session->set_flashdata('pesan','<div class="alert alert-danger"role="alert">
             data berhasil di hapus!
             </div>');
           redirect('Auth/home1');
        }

        public function edit_data($id_anggota)
        {
            
            $data['tbl_anggota'] =  $this->Tbl_anggota->edit_data($id_anggota);
            $this->load->view('templates/Auth_header');
            $this->load->view('home1/edit_data',$data);
        }

        public function proses_edit_data()
        {
            $this->load->model('Tbl_anggota');
             $this->Tbl_anggota->proses_edit_data();
             $this->session->set_flashdata('pesan','<div class="alert alert-info"role="alert">
             data berhasil di edit!
             </div>');
             redirect('Auth/home1');
        }
        
        public function editdata($id_anggota)
        {
             $this->load->model('Tbl_anggota');
             $this->Tbl_anggota->edit_data($id_anggota);
             redirect('Auth/Home1');
        }
}
   
?>