<div class="container-fluid">

    <h3>halaman edit data</h3>
    <hr>
    <br>
    <form method ="post"action="<?php echo base_url('Home1/proses_edit_data');?>">
    <input type="hidden"name="id_anggota" value="<?php echo $tbl_anggota['id_anggota'];?>">
  <div class="form-group">
    <label for="nama_anggota" class="col-sm-2 col-form-label">Nama anggota</label>
    <div class="col-sm-2">
    <input type="text" class="form-control"name="nama_anggota"required=""value="<?php echo $tbl_anggota['nama_anggota'];?>">
</div>
<div class="form-group">
    <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
    <div class="col-sm-2">
    <input type="text" class="form-control"name="alamat"required=""value="<?php echo $tbl_anggota['alamat'];?>">
</div>
<div class="form-group">
    <div class="col-sm-3">
    <label for="kelas" class="col-sm-2 col-form-label">kelas</label>
                     <div class="col-sm-8">
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
    <label for="tempat_tanggal_lahir" class="col-sm-5 col-form-label">tempat tanggal lahir</label>
    <div class="col-sm-8">
    <input type="text" class="form-control"name="tempat_tanggal_lahir"required=""value="<?php echo $tbl_anggota['tempat_tanggal_lahir'];?>">
</div>
<div class="form-group">
    <label for="no_hp" class="col-sm-2 col-form-label">no_hp</label>
    <div class="col-sm-8">
    <input type="text" class="form-control"name="no_hp"required=""value="<?php echo $tbl_anggota['no_hp'];?>">
</div>
<div class="form-group">
    <label for="program_keahlian" class="col-sm-2 col-form-label">program_keahlian</label>
    <div class="col-sm-8">
    <select name="program_keahlian" id="program_keahlian" class="form-control">
                                        <option value=" RPL "> RPL </option>
                                        <option value=" TBSM "> TBSM</option>
</select>
</div>
<div class="form-group">
    <label for="jabatan" class="col-sm-2 col-form-label">jabatan</label>
    <div class="col-sm-8">
    <input type="text" class="form-control"name="jabatan"required=""value="<?php echo $tbl_anggota['jabatan'];?>">
</div>
<div class="form-group">
    <label for="tahun_masa_khidmat" class="col-sm-2 col-form-label">tahun_masa_khidmat</label>
    <div class="col-sm-8">
    <select name="tahun_masa_khidmat" id="tahun_masa_khidmat" class="form-control">
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
</select>
</div>
<div>
<div class="form-group">
    <label for="foto" class="col-sm-5 col-form-label">foto</label>
    <div class="col-sm-8">
    <input type="file" class="form-control"name="foto"required=""value="<?php echo $tbl_anggota['foto'];?>">
</div>
</div>
  </div>
  <div class="form-group">
    <label for="nama_anggota" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-8">
    <button type="submit"class="btn btn-info">simpan</button>
    <button type="reset"class="btn btn-danger">reset</button>
</div>
</div>
 </form>
</div>