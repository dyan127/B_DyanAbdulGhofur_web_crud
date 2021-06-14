<?php 
$getUser = $this ->session->userdata('session_user');
$getGrup = $this ->session->userdata('session_grup');
?>

<head>
    <title>User</title>
</head>
<div class="card shdow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text primary">DataTables User</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
      <!-- membuat tombol tambah -->
            <a href="<?php echo base_url('Mahasiswa/tambah')?>" class="btn btn-success" role="button"><i
                    class="fas fa-plus"></i> Tambah</a>
            <br>
            <br>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
        <!-- membuat table untuk menampilkan data dari database -->
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama</th>
                        <th>Grup</th>
                        <!-- <th>&nbsp</th> -->
                    </tr>
</thead>
                <tfoot>
                    <tbody>
                        <?php 
              $no = 1;//inisialisasi $no = 1, untuk penomoran otomatis pada table
              foreach ($tm_user as $baris) {//looping foreach $user sebagai $baris
            ?>
                        <tr>
            <!-- menampilkan data dari table -->
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $baris->username; ?></td>
                            <td><?php echo $baris->password; ?></td>
                            <td><?php echo $baris->nama; ?></td>
                            <td><?php echo $baris->grup; ?></td>
                            <td>

                            <?php 
                            if($getGrup==1) {
                                echo '<a href="'.base_url('Mahasiswa/edit/'.$baris->id).'" class="btn btn-warning fa fa-edit" role="button">';
                                 echo " ";
                                 echo '<a href="'.base_url('Mahasiswa/hapus/'.$baris->id).'"  class="btn btn-danger fa fa-times" role="button">';
                            } ?>

                            </td>
                        </tr>
                        <?php 
                    } 
                    ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>