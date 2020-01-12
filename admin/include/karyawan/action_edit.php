<?php 

include '../../koneksi.php';
if (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['nohp'];
	$gaji = $_POST['gaji'];
	$uang = $_POST['uang'];

	$edit = mysqli_query($conn, "UPDATE karyawan set nama = '$nama', alamat = '$alamat', no_tlp = '$nohp', gaji = '$gaji', uang_lembur = '$uang' where id_karyawan = '$id'");

	if ($edit) {
		echo "
			<script>
				alert('data berhasil di ubah');
				window.location.href='../../index.php?page=karyawan';
			</script>
		";
	}
	else {
		echo "gagal disimpan";
	}
}

 ?>