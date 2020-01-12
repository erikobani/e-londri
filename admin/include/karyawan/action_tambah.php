<?php 
include '../../koneksi.php';
if (isset($_POST['simpan'])) {
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['nohp'];
	$gaji = $_POST['gaji'];
	$uang = $_POST['uang'];

	$insert = mysqli_query($conn, "INSERT INTO karyawan values(null, '$nama', '$alamat', '$nohp', '$gaji', '$uang')");
	if ($insert) {
		?>
			<script type="text/javascript">
				alert('Data Berhasil Disimpan');
				window.location.href="../../index.php?page=karyawan";
			</script>
		<?php
	}
}
 ?>