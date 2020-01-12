<div class="container">
<?php 
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM transaksi where no_nota = '$id'");
$data = mysqli_fetch_array($query);
 ?>

	<div class="panel panel-border panel-primary">
		<div class="panel-heading"> 
			<h3 class="panel-title"><i class="fa fa-user-plus"></i> Input Data Konsumen</h3> 
		<form method="post" action="include/transaksi/action_edit_admin.php">
			<div class="form-group">
					<label>NO.NOTA</label>
					<input type="text" name="nota" id="nota" class="form-control" value="<?php echo $data['no_nota']; ?>">
				</div>
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" id="nama" class="form-control" value="<?php echo $data['nama_R']; ?>">
				</div>
				<div class="form-group">
					<label>Tanggal Transaksi</label>
					<input  type="date" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Tanggal" name="tanggal_transaksi" required="" selected="" value="<?php echo $data['tgl_transaksi']; ?>">
				</div>
				<div class="form-group">
					<label>Tanggal Selesai</label>
					<input  type="date" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Tanggal" name="tanggal_selesai" required="" selected="" value="<?php echo $data['tgl_selesai']; ?>">
				</div>
				<div class="form-group">
					<label>Jenis transaksi</label><br>
					<select class="form-control" name="master">
						<?php $qu = mysqli_query($conn, "SELECT * from master"); ?>
						<?php
						$jenis1 = $data['id_master']; 
						while ($da = mysqli_fetch_array($qu)): ?>
							<?php if ($jenis1 == $da['id_master']): ?>
								<option selected="" value="<?= $da['id_master']; ?>"><?= $da['jenis']; ?></option>
							<?php else: ?>
								<option value="<?= $da['id_master']; ?>"><?= $da['jenis']; ?></option>
							<?php endif ?>
						<?php endwhile ?>
			        </select>
				</div>
				<div class="form-group">
					<label>Berat Kg</label>
					<input type="text" name="berat" class="form-control" placeholder="Masukkan Berat Kg" value="<?php echo $data['berat']; ?>">
				</div>
				<div class="form-group">
					<label>Jumlah Bayar</label>
					<input type="text" name="jumlah_bayar" class="form-control" value="2000" readonly="" value="<?php echo $data['jumlah_bayar']; ?>">
				</div>
				<div class="form-group">
					<label>DP</label>
					<input type="text" name="dp" class="form-control" value="" placeholder="Isi DP jika ada" value="<?php echo $data['dp']; ?>">
				</div>
				<div class="form-group">
					<label>Status Pembayaran</label><br>
					<select class="form-control" name="status_pembayaran">
						<?php if ($data['status_pembayaran'] == "Lunas"): ?>
							<option value="Belum Lunas">Belum Lunas</option>
							<option selected="" value="Lunas">Lunas</option>
						<?php else: ?>
							<option value="Lunas">Lunas</option>
							<option value="Belum Lunas" selected="">Belum Lunas</option>
						<?php endif ?>
			        </select>
				</div>
				<div class="form-group">
					<label>Status Pengerjaan</label>
					<select class="form-control" name="status_pengambilan">
					<?php if ($data['status_pengambilan'] == "Sudah Selesai"):?>
					 <option value="Belum Selesai">Belum Selesai</option>
					 <option selected="" value="Sudah Selesai">Sudah Selesai</option>
					<?php else: ?>
						<option value="Sudah Selesai">Sudah Selesai</option>
						<option value="Belum Selesai" selected="">Belum Selesai</option>
					<?php endif ?>
					</select>
				</div>
				<div class="form-group">
					<label>Status Karyawan</label><br>
					<select class="form-control" name="id_karyawan">
						<?php $qu = mysqli_query($conn, "SELECT * from karyawan"); ?>
						<?php
						while ($da = mysqli_fetch_array($qu)): ?>
								<option value="<?= $da['id_karyawan']; ?>"><?= $da['nama']; ?></option>
						<?php endwhile ?>
			        </select>
				</div>
				<div class="form-group">
					<label>Catatan</label>
					<input type="text" name="catatan" class="form-control" placeholder="isi jika di perlukan" value="<?php echo $data['catatan']; ?>">
				</div>
				</div>
				<button name="edit" class="btn btn-primary waves-effect waves-light">Edit</button>
			</form>
		</div>

	</div>


</div>