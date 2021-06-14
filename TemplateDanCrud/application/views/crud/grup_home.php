<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>
<head>
	<title>Grup</title>
</head>
<div class="card shdow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text primary">DataTables Grup</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
      <!-- membuat tombol tambah -->
			<a href="<?php echo base_url('Grup/tambah')?>" class="btn btn-success" role="button"><i
					class="fas fa-plus"></i> Tambah</a>
			<br>
			<br>
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
        <!-- membuat table untuk menampilkan data dari database -->
					<tr>
						<th>ID</th>
						<th>Grup</th>
						<th class="col col-lg-1">&nbsp</th>
					</tr>
				</thead>
				<tfoot>
					<tbody>
						<?php 
              $no = 1;//inisialisasi $no = 1, untuk penomoran otomatis pada table
              foreach ($tm_grup as $baris) {//looping foreach $user sebagai $baris
            ?>
						<tr>
            <!-- menampilkan data dari table -->
							<!-- <td><?php echo $no++; ?></td> -->
							<td><?php echo $baris->id_grup; ?></td>
							<td><?php echo $baris->grup; ?></td>
							<td>
							<?php 
							if($getGrup==1){ 
                echo '<center>
									<a href="'.base_url('Grup/edit/'.$baris->id_grup).'" class="btn btn-warning" role="button"><i class="fa fa-edit" aria-hidden="true"></i></a>
									<a href="'.base_url('Grup/hapus/'.$baris->id_grup).'" class="btn btn-danger" role="button"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </center>';
							 }?>
              </td>
						</tr>
						<?php } ?>
					</tbody>
			</table>
		</div>
	</div>
</div>