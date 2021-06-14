<head>
    <title>Edit Grup</title>
</head>
<div class="card shdow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text primary">Edit Grup</h6>
  </div>
  <div class="card-body">
  <?php
    foreach ($grup as $baris) {
  ?>
    <div class="table-responsive">
      <!-- membuat tombol kembali untuk kembali ke index -->
      <a href="<?= base_url('Grup');?>" class="btn btn-secondary" role="button"><i class="fas fa-chevron-left"></i> Kembali</a>
      <br>            
      <br>          
      <div class="container">
      <!-- membuat form didalam container -->
        <form method="post" action="<?= base_url('Grup/update');?>" class="user">
        <!-- form grup intuk beberapa type inputs -->
          <div class="form-group">
            <label>ID:</label>
            <input type="text" name="id" class="form-control form-control-user" value="<?= $baris->id_grup;?>" disabled>
          </div>
          <div class="form-group">
            <label>Grup:</label>
            <select id="grup" class="form-control" name="grup" require>
              <option value="1" <?php
                if (($baris->grup) == 1) {
                  echo "selected";
                }?>>Admin
              </option>
              <option value="2" <?php
                if (($baris->grup) == 2) {
                  echo "selected";
                }?>>User
            </option>
            </select>
          </div>
          <button type="reset" value="" class="btn btn-warning btn-lg"><i class="fas fa-redo"></i></button>
          <button type="submit" name="submit" class="btn btn-success btn-lg btn-lg"><i class="fas fa-save"></i> Update</button>
          <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Update">
          <br>
          <br>
        </form>
        <?php
          }
        ?>
      </div>
      <!-- Akhir Card Form -->
      <script type="text/javascript" src="<?php echo base_url();?>/public/js/bootstrap.min.js"></script>
    </div>
  </div>
</div>