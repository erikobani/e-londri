<div class="container">

<div class="panel panel-border panel-primary">
	<div class="panel-heading"> 
	<h2>Data Transaksi Penjualan</h2> <hr style="margin-top: -10px;">


	<div class="table-responsive tbl-master">
		<table class="table table-bordered table-hover" id="myTable"> 
			<thead class="">
				<tr>
					<th>No</th>
					<th>No Nota</th>
					<th>Nama Pelanggan</th>
					<th>Tanggal Transaksi</th>
					<th>tanggal Selesai</th>
					<th>Jenis Cucian</th>
					<th>Berat Kg</th>
					<th>Harga /Kg</th>
					<th>Jumlah Bayar</th>
					<th>DP</th>
					<th>Status Pembayaran</th>
					<th>Status Pengerjaan</th>
					<th>Status Karyawan Pengerjaan</th>
					<th>Catatan</th>
					<th>Nota</th>
					<th>aksi</th>
				</tr>
			</thead>

			<tbody>
			<?php $i=1; $query = mysqli_query($conn, "SELECT * FROM transaksi inner join master on transaksi.id_master = master.id_master inner join karyawan on transaksi.id_karyawan = karyawan.id_karyawan"); ?>
				<?php while($row = mysqli_fetch_array($query)) : ?>
				<tr>
					<td><?= $i++ ?></td>
					<td><?= $row['no_nota'] ?></td>
					<td><?= $row['nama_R'] ?></td>
					<td><?= $row['tgl_transaksi'] ?></td>
					<td><?= $row['tgl_selesai'] ?></td>
					<td><?= $row['jenis'] ?></td>
					<td><?= $row['berat'] ?></td>
					<td><?= $row['harga'] ?></td>
					<td><?= $row['jumlah_bayar'] ?></td>
					<td><?= $row['dp'] ?></td>
					<td>
						<?php if ($row['status_pembayaran'] == "Belum Lunas"): ?>
							<a href="include/transaksi/action_lunas.php?id=<?= $row['no_nota'] ?>" class="btn btn-primary waves-effect waves-light"><?= $row['status_pembayaran'] ?> </a>
						<?php else: ?>
							<?php echo $row['status_pembayaran']; ?>
						<?php endif ?>
					</td>
					<td>
						<?php if ($row['status_pengambilan'] == "Belum Selesai"): ?>
							<a href="include/transaksi/action_lunas1.php?id=<?= $row['no_nota'] ?>" class="btn btn-primary waves-effect waves-light"><?= $row['status_pengambilan'] ?> </a>
						<?php else: ?>
							<?php echo $row['status_pengambilan']; ?>
						<?php endif ?>
					</td>
					<td>
						<?php $id = $row['nama']; ?>
						<?php if ($id == 'null'): ?>
							<?php echo '-'; ?>
						<?php else : ?>
							<?php echo $row['nama']; ?>
						<?php endif ?>
					</td>
					<td><?= $row['catatan'] ?></td>
					<td>
						<a href="include/transaksi/nota.php?id=<?= $row['no_nota'] ?>">Lihat Nota</a>
					</td>
					<td>
						<a href="include/transaksi/delete.php?id=<?= $row['no_nota'] ?>" class="badge badge-danger" onclick="return confirm ('yakin ?');">Delete</a>
						<a href="index.php?page=edit_transaksi&id=<?= $row['no_nota'] ?>" class="badge badge-success">Edit</a>
					</td>
				</tr>
				<?php endwhile; ?>
			<tbody>
				<tr>
					
				</tr>
			</tbody>
		</table>
	</div>
</div>
</tbody>
</table>
</div>
</div>