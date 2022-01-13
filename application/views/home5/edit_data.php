<div class="container-fluid">

    <h3>halaman edit data</h3>
    <hr>
    <br>
    <form method ="post"action="<?php echo base_url('Home5/proses_edit_data');?>">
    <input type="hidden"name="id_user" value="<?php echo $user['id_user'];?>">
  <div class="form-group">
    <label for="username" class="col-sm-2 col-form-label">username</label>
    <div class="col-sm-2">
    <input type="text" class="form-control"name="username"required=""value="<?php echo $user['username'];?>">
</div>
<div class="form-group">
    <label for="password" class="col-sm-2 col-form-label">password</label>
    <div class="col-sm-2">
    <input type="text" class="form-control"name="password"required=""value="<?php echo $user['password'];?>">
</div>
<div class="form-group">
    <label for="email" class="col-sm-2 col-form-label">email</label>
    <div class="col-sm-3">
    <input type="text" class="form-control"name="email"required=""value="<?php echo $user['email'];?>">
</div>
<div class="form-group">
    <label for="level" class="col-sm-2 col-form-label">level</label>
    <div class="col-sm-3">
    <input type="text" class="form-control"name="level"required=""value="<?php echo $user['level'];?>">
</div>
  </div>
  <div class="form-group">
    <label for="username" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
    <button type="submit"class="btn btn-info">simpan</button>
    <button type="reset"class="btn btn-danger">reset</button>
</div>
</div>
 </form>
</div>