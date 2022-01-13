<div class="container-fluid">

    <h3>halaman edit data</h3>
    <hr>
    <br>
    <form method ="post"action="<?php echo base_url('Home2/proses_edit_data');?>">
    <input type="hidden"name="id_tahun" value="<?php echo $tbl_tahun['id_tahun'];?>">
  <div class="form-group row">
    <label for="nama_tahun" class="col-sm-2 col-form-label">Nama tahun</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="nama_tahun"required="" value="<?php echo $tbl_tahun['nama_tahun']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama_tahun" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
    <button type="submit"class="btn btn-info">simpan</button>
    <button type="reset"class="btn btn-danger">reset</button>
</form>
</div>