<div class="container">

	<h2>Data Karyawan</h2> <hr style="margin-top: -10px;">

	<a href="?page=tambah_karyawan" class="btn btn-primary btn-sm">Tambah Data Karyawan</a>

	<div class="table-responsive tbl-master">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<td>NO</td>
					<th>Nama</th>
					<th>Alamat</th>
					<th>No Telepon</th>
					<th>Gaji</th>
					<th>Uang Lembur/Kilo</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
				<?php $i=1; $query = mysqli_query($conn, "SELECT * FROM karyawan"); ?>
				<?php while($row = mysqli_fetch_array($query)) : ?>
				<tr>
					<td><?= $i++ ?></td>
					<td><?= $row['nama'] ?></td>
					<td><?= $row['alamat'] ?></td>
					<td><?= $row['no_tlp'] ?></td>
					<td><?= $row['gaji'] ?></td>
					<td><?= $row['uang_lembur'] ?></td>
					<td>
						<a href="include/karyawan/delete.php?id=<?= $row['id_karyawan'] ?>" class="badge badge-danger">Delete</a>
						<a href="index.php?page=editkaryawan&id=<?= $row['id_karyawan'] ?>" class="badge badge-success">Edit</a>
					</td>
				</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</div>