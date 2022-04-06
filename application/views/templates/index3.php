<!--begin page content-->
<div class="container-fluid">
    <!--page heading-->
    <center><h6 class="h3 mb-4 text-gray-800">Aplikasi osis smk nu tasikmalaya</h6></center>
    <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-info">Halaman Data MasaKhidmat</h6>
    <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal">
    tambah data
</button>

</div>
    <div class="card-body">
    <?php echo $this->session->flashdata('pesan');?>
    <div class="table-responsive">
    <table class="table table-bordered text-center"id="dataTable" width="100%" cellspacing="0">
 <thead class="bg-info">
<tr>
    <td>no</td>
    <td>Pembina osis</td>
    <td>nama ketua</td>
    <td>nama wakil</td>
    <td>masa khidmat</td>
    <td>aksi</td>
</tr>
</thead>
<tbody>
<?php 
    $no=1;
    foreach($masa_khidmat as $mkh):?>
    
<tr>
      <td><?php echo $no++;?></td>
    <td><?php echo $mkh['Pembina_osis'];?></td>
    <td><?php echo $mkh['nama_ketua'];?></td>
    <td><?php echo $mkh['nama_wakil'];?></td>
    <td><?php echo $mkh['masa_khidmat'];?></td>
    <td>
    <a href="<?php echo base_url()?>home3/edit_data/<?php echo $mkh['id_masa_khidmat'];?>"class="badge badge-info"> <i class="fa fa-edit"></i></a>
    <a href="<?php echo base_url()?>home3/hapus_data/<?php echo $mkh['id_masa_khidmat'];?>"class="badge badge-danger"><i class="fa fa-trash"></i></a>
    <a href="<?php echo base_url()?>home3/lihat_data/<?php echo $mkh['id_masa_khidmat'];?>"class="badge badge-success"><i class="fa fa-eye"></i></a>
    </td>
</tr>
<?php endforeach;?>
</tbody>
</table>
    </div>
  </div>
 </div>
</div>
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
           <form method ="post"action="<?php echo base_url('home3/proses_tambah_data');?>">
                <div class="form-group">
                     <label for="Pembina_osis" class="col-sm-2 col-form-label">Pembina osis</label>
                     <div class="col-sm-5">
                          <input type="text"class="form-control"name="Pembina_osis">
                     </div>
                <div class="form-group">
                     <label for="nama_ketua" class="col-sm-2 col-form-label">Nama ketua</label>
                     <div class="col-sm-5">
                          <input type="text"class="form-control"name="nama_ketua">
                     </div>
                   <div class="form-group">
                       <label for="nama_wakil" class="col-sm-2 col-form-label">nama wakil</label>
                       <div class="col-sm-5">
                            <input type="text"class="form-control"name="nama_wakil">
                   </div>
                <div class="form-group">
                     <label for="masa_khidmat" class="col-sm-2 col-form-label">masa_khidmat</label>
                     <div class="col-sm-5">
                          <input type="text"class="form-control"name="masa_khidmat">
                </div>
                    <div class="form-group">
                        <label for="nama_ketua"class="col-form-label"></label>
                        <div class="col-sm-5">
                            <button type="submit"class="btn btn-info">tambah</button>
                            <button type="reset"class="btn btn-danger">reset</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
        
<!-- akhir modal -->
