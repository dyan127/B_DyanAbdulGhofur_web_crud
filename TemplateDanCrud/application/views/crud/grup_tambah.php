<head>
    <title>Tambah Grup</title>
</head>
<div class="card shdow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text primary">Tambah Grup</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <!-- membuat tombol kembali untuk kembali ke index -->
      <a href="<?= base_url('Grup');?>" class="btn btn-secondary" role="button"><i class="fas fa-chevron-left"></i> Kembali</a>
      <br>            
      <br>          
      <div class="container">
      <!-- membuat form didalam container -->
        <form method="post" action="<?php echo base_url('Grup/input');?>" class="user">
        <!-- form grup intuk beberapa type inputs -->
          <div class="form-group">
            <label>ID:</label>
            <input type="text" name="username" class="form-control form-control-user" disabled required>
          </div>
          <div class="form-group">
            <label>Grup:</label>
            <select id="grup" class="form-control" name="grup" require>
              <option value="0">Pilih Grup User</option>
              <option value="Admin">Admin</option>
              <option value="User">User</option>
            </select>
          </div>
          <button type="reset" value="" class="btn btn-warning btn-lg"><i class="fas fa-redo"></i></button>
          <button type="submit" name="submit" class="btn btn-success btn-lg btn-lg"><i class="fas fa-save"></i> Tambah</button>
          <br>
          <br>
        </form>
      </div>
      <!-- Akhir Card Form -->
      <script type="text/javascript" src="<?php echo base_url();?>/ass/js/bootstrap.min.js"></script>
    </div>
  </div>
</div>