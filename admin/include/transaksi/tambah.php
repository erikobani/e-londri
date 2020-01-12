<div class="container">

	<div class="panel panel-border panel-primary">
		<div class="panel-heading"> 
			<h3 class="panel-title"><i class="fas fa-shopping-cart"></i> Transaksi</h3> 
		</div>  <div class="panel-body"> 
			<form method="post" action="include/transaksi/acition_tambah.php">
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" id="nama" class="form-control">
				</div>
				<div class="form-group">
					<label>Tanggal Transaksi</label>
					<input  type="date" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Tanggal" name="tanggal_transaksi" required="" value="<?= date('Y-m-d'); ?>">
				</div>
				<div class="form-group">
					<label>Tanggal Selesai</label>
					<input  type="date" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Tanggal" name="tanggal_selesai" required="" value="<?= date('Y-m-d'); ?>">
				</div>
				<div class="form-group">
					<label>Jenis transaksi</label><br>
					<select class="form-control" name="master">
						<option>--Pilih--</option>
						<?php $qu = mysqli_query($conn, "SELECT * from master"); ?>
						<?php while ($da = mysqli_fetch_array($qu)): ?>
							<option value="<?= $da['id_master']; ?>"><?= $da['jenis']; ?></option>
						<?php endwhile ?>
			        </select>
				</div>
				<div class="form-group">
					<label>Berat Kg</label>
					<input type="text" name="berat" class="form-control" value="" placeholder="Masukkan Berat Kg">
				</div>
				<div class="form-group">
					<label>Jumlah Bayar</label>
					<input type="text" name="jumlah_bayar" class="form-control" value="" readonly="">
				</div>
				<div class="form-group">
					<label>DP</label>
					<input type="text" name="dp" class="form-control" value="" placeholder="Isi DP jika ada">
				</div>
				<div class="form-group">
					<label>Status Pembayaran</label><br>
					<select class="form-control" name="status_pembayaran">
			        <option>Belum Bayar</option>
			        <option>Lunas</option>
			        </select>
				</div>
				<div class="form-group">
					<label>Status Pengerjaan</label>
					<input type="text" name="status_pengambilan" class="form-control" value="Belum Selesai" readonly="">
				</div>
				<div class="form-group">
					<label>Catatan</label>
					<input type="text" name="catatan" class="form-control" placeholder="isi jika di perlukan">
				</div>
				</div>
				<button name="simpan" class="btn btn-primary waves-effect waves-light">Simpan</button>
			</form>
		</div>

	</div>

</div>



