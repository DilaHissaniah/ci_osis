<div class="container-fluid">

    <h3>halaman edit data</h3>
    <hr>
    <br>
    <form method ="post"action="<?php echo base_url('Home3/proses_edit_data');?>">
    <input type="hidden"name="id_masa_khidmat" value="<?php echo $tbl_masa_khidmat['id_masa_khidmat'];?>">
  <div class="form-group">
    <label for="Pembina_osis" class="col-sm-2 col-form-label">Pembina osis</label>
    <div class="col-sm-2">
    <input type="text" class="form-control"name="Pembina_osis"required=""value="<?php echo $tbl_masa_khidmat['Pembina_osis'];?>">
</div>
  <div class="form-group">
    <label for="nama_ketua" class="col-sm-2 col-form-label">Nama ketua</label>
    <div class="col-sm-2">
    <input type="text" class="form-control"name="nama_ketua"required=""value="<?php echo $tbl_masa_khidmat['nama_ketua'];?>">
</div>
<div class="form-group">
    <label for="nama_wakil" class="col-sm-2 col-form-label">nama wakil</label>
    <div class="col-sm-2">
    <input type="text" class="form-control"name="nama_wakil"required=""value="<?php echo $tbl_masa_khidmat['nama_wakil'];?>">
</div>
<div class="form-group">
    <label for="masa_khidmat" class="col-sm-2 col-form-label">masa khidmat</label>
    <div class="col-sm-2">
    <input type="text" class="form-control"name="masa_khidmat"required=""value="<?php echo $tbl_masa_khidmat['masa_khidmat'];?>">
</div>
  </div>
  <div class="form-group">
    <label for="nama_ketua" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
    <button type="submit"class="btn btn-info">simpan</button>
    <button type="reset"class="btn btn-danger">reset</button>
</div>
</div>
 </form>
</div>