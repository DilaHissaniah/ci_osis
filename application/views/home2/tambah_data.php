<div class="container-fluid">

    <h3>halaman tambah data</h3>
    <hr>
    <form method ="post"action="<?php echo base_url('home2/proses_tambah_data');?>">
  <div class="form-group row">
    <label for="Nama tahun" class="col-sm-2 col-form-label">Nama tahun</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="Nama tahun" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
    <button type="submit"class="btn btn-primary">tambah</button>
    <button type="reset"class="btn btn-danger">reset</button>
</form>
</div>