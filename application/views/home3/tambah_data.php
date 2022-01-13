<div class="container-fluid">

    <h3>halaman tambah data</h3>
    <hr>
    <form method ="post"action="<?php echo base_url('home3/proses_tambah_data');?>">
  <div class="form-group row">
    <label for="Nama anggota" class="col-sm-2 col-form-label">Nama anggota</label>
    <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
    <label for="No hp" class="col-sm-2 col-form-label">No_hp</label>
    <label for="jabatan" class="col-sm-2 col-form-label">jabatan</label>
    <label for="Nama tahun" class="col-sm-2 col-form-label">nama_tahun</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="Nama anggota" class="col-sm-2 col-form-label"></label>
    <label for="alamat" class="col-sm-2 col-form-label"></label>
    <label for="No hp" class="col-sm-2 col-form-label"></label>
    <label for="jabatan" class="col-sm-2 col-form-label"></label>
    <label for="nama_tahun" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
    <button type="submit"class="btn btn-primary">tambah</button>
    <button type="reset"class="btn btn-danger">reset</button>
</form>
</div>