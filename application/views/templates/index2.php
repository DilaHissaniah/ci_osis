<!--begin page content-->
<div class="container-fluid">
    <!--page heading-->
    <center><h6 class="h3 mb-4 text-gray-800">Aplikasi osis smk nu tasikmalaya</h6></center>
    <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-info">Halaman Data Tahun</h6>
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
    <td>nama tahun</td>
    <td>aksi</td>
</tr>
</thead>
<tbody>
<?php 
    $no=1;
    foreach($tahun as $thn):?>
<tr>
      <td><?php echo $no++;?></td>
    <td><?php echo $thn['nama_tahun'];?></td>
    <td>
    <a href="<?php echo base_url()?>home2/edit_data/<?php echo $thn['id_tahun'];?>"class="badge badge-info"> <i class="fa fa-edit"></i></a>
    <a href="<?php echo base_url()?>home2/hapus_data/<?php echo $thn['id_tahun'];?>"class="badge badge-danger"><i class="fa fa-trash"></i></a>
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
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FROM TAMBAH DATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container-fluid">
<form method ="post"action="<?php echo base_url('home2/proses_tambah_data');?>">
<div class="form-group row">
<label for="Nama tahun" class="col-sm-2 col-form-label">Nama tahun</label>
<div class="col-sm-5">
  <input type="text" class="form-control" name="nama">
</div>
</div>
<div class="form-group row">
<label for="Nama tahun" class="col-sm-2 col-form-label"></label>
<div class="col-sm-5">
<button type="submit"class="btn btn-info">tambah</button>
<button type="reset"class="btn btn-danger">reset</button>
</form>
</div>
        
<!-- akhir modal -->
