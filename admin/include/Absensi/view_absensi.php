<div class="container">

	<!-- absensi -->
	<?php $ambilKaryawan = mysqli_query($conn, "SELECT * FROM karyawan"); ?>
	<?php $ambilKaryawan1 = mysqli_query($conn, "SELECT * FROM karyawan"); ?>

	<div class="">
		<div class="card" style="background: white; padding: 10px;">
			<div class="card-body">
				<h2>Absen Karyawan</h2> <hr style="margin-top: -5px;">
				<?php while($row = mysqli_fetch_array($ambilKaryawan)) : ?>

					<a href="include/absensi/input_absensi.php?id=<?= $row['id_karyawan'] ?>" class="btn btn-primary btn-sm"><?= $row['nama'] ?></a>

				<?php endwhile; ?>
			</div>
		</div>
	</div>

	<div class="card" style="background: white; padding: 10px; margin-top: 10px;">
		<div class="card-body">
			<h5>Datail Absensi</h5> <hr style="margin-top: -5px;">

			<?php while($r = mysqli_fetch_array($ambilKaryawan1)) : ?>

				<a href="index.php?page=absensi&id=<?= $r['id_karyawan'] ?>" class="btn btn-primary btn-sm"><?= $r['nama'] ?></a>

			<?php endwhile; ?>

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive tbl-master">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<td>No</td>
										<th>Nama</th>
										<th>Tanggal</th>
									</tr>
								</thead>

								<tbody>
									 <?php if (isset($_GET['id'])) {
									 	$i = 1;
										$id = $_GET['id'];
										 $ambilAbsensiById = mysqli_query($conn, "SELECT * from absensi join karyawan on karyawan.id_karyawan = absensi.id_karyawan where absensi.id_karyawan = '$id' order by absensi.tgl_absensi ASC");

										 while($get = mysqli_fetch_array($ambilAbsensiById)) : ?>
											<tr>
												<td><?php echo $i++; ?></td>
												<td><?php echo $get['nama']; ?></td>
												<td><?php echo $get['tgl_absensi']; ?></td>
											</tr>
									<?php endwhile; } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>