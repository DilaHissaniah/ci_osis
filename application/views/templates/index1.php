<!--begin page content-->
<div class="container-fluid">
    <!--page heading-->
    <center><h6 class="h3 mb-4 text-gray-800">Aplikasi osis smk nu tasikmalaya</h6></center>
    <div class="card shadow mb-4">
         <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-info">Halaman Data Anggota</h6>
              <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal">
                tambah data
              </button>
            </div>
            <div class="card-body">
            <?php echo $this->session->flashdata('pesan');?>
                <div class="table-responsive">
                    <table class="table table-bordered text-center"id="dataTable" width="100%" cellspacing="0" >
                      <thead>
                        <tr>
                          <td>no</td>
                          <td>nama anggota</td>
                          <td>alamat</td>
                          <td>kelas</td>
                          <td>tempat tanggal lahir</td>
                          <td>no_hp</td>
                          <td>program keahlian</td>
                          <td>jabatan</td>
                          <td>tahun masa khidmat</td>
                          <td>foto</td>
                          <td>aksi</td>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $no=1;
                        foreach($anggota as $agt):?>
                          <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $agt['nama_anggota'];?></td>
                            <td><?php echo $agt['alamat'];?></td>
                            <td><?php echo $agt['kelas'];?></td>
                            <td><?php echo $agt['tempat_tanggal_lahir'];?></td>
                            <td><?php echo $agt['no_hp'];?></td>
                            <td><?php echo $agt['program_keahlian'];?></td>
                            <td><?php echo $agt['jabatan'];?></td>
                            <td><?php echo $agt['tahun_masa_khidmat'];?></td>
                            <td class="text-center"><img src="<?= base_url('foto/'). $agt['foto'];; ?>" alt="" width="50px" height="50px"></td>
                            <td>
                              <a href="<?php echo base_url()?>home1/edit_data/<?php echo $agt['id_anggota'];?>"class="badge badge-info"><i class="fa fa-edit"></i></a>
                              <a href="<?php echo base_url()?>home1/hapus_data/<?php echo $agt['id_anggota'];?>"class="badge badge-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                </div>
</div>
  <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<!-- modal untuk tambah data -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FROM TAMBAH DATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <form method ="post" action="<?php echo base_url('home1/proses_tambah_data');?>" enctype="multipart/form-data">
                <div class="form-group">
                     <label for="nama_anggota" class="col-sm-2 col-form-label">Nama anggota</label>
                     <div class="col-sm-5">
                          <input type="text"class="form-control"name="nama_anggota">
                     </div>
                   <div class="form-group">
                       <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
                       <div class="col-sm-5">
                            <input type="text"class="form-control" name="alamat">
                   </div>
                <div class="form-group">
                     <label for="kelas" class="col-sm-2 col-form-label">kelas</label>
                     <div class="col-sm-5">
                     <select name="kelas" id="kelas" class="form-control">
                                        <option value="XI RPL 1">XI RPL 1</option>
                                        <option value="XI RPL 2">XI RPL 2</option>
                                        <option value="XI RPL 3">XI RPL 3</option>
                                        <option value="XI TBSM 1">XI TBSM 1</option>
                                        <option value="XI TBSM 2">XI TBSM 2</option>
                                        <option value="XII RPL 1">XII RPL 1</option>
                                        <option value="XII RPL 2">XII RPL 2</option>
                                        <option value="XII TBSM 1">XII TBSM 1</option>
                                        <option value="XII TBSM 2">XII TBSM 2</option>
                                    </select>						                     
                      </div>
                     <div class="form-group">
                       <label for="tempat_tanggal_lahir" class="col-sm-2 col-form-label">tempat_tanggal_lahir</label>
                       <div class="col-sm-5">
                            <input type="text"class="form-control" name="tempat_tanggal_lahir">
                   </div>
                   <div class="form-group">
                       <label for="no_hp" class="col-sm-2 col-form-label">no hp</label>
                       <div class="col-sm-5">
                            <input type="text"class="form-control" name="no_hp">
                   </div>
                   <div class="form-group">
                       <label for="program_keahlian" class="col-sm-2 col-form-label">program_keahlian</label>
                       <div class="col-sm-5">
                       <select name="program_keahlian" id="program_keahlian" class="form-control">
                                        <option value="RPL">RPL</option>
                                        <option value="TBSM">TBSM</option>
                                    </select>	          
                                           </div>
                   <div class="form-group">
                       <label for="jabatan" class="col-sm-2 col-form-label">jabatan</label>
                       <div class="col-sm-5">
                            <input type="text"class="form-control" name="jabatan">
                   </div>
                   <div class="form-group">
                       <label for="tahun_masa_khidmat" class="col-sm-2 col-form-label">tahun_masa_khidmat</label>
                       <div class="col-sm-5">
                       <select name="tahun_masa_khidmat" id="tahun_masa_khidmat" class="form-control">
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                    </select>	          
                   </div>
                   <div class="form-group">
                       <label for="foto" class="col-sm-2 col-form-label">foto</label>
                       <div class="col-sm-5">
                            <input type="file"class="form-control" name="foto" id="foto" accept="image/jpeg, image/jpg, image/png">
                   </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_anggota"class="col-form-label"></label>
                        <div class="col-sm-5">
                            <button type="submit"class="btn btn-info">tambah</button>
                            <button type="reset"class="btn btn-danger">reset</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
        
<!-- akhir modal -->
