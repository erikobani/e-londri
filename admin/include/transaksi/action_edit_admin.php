<?php 

include '../../koneksi.php';
if (isset($_POST['edit'])) {
	$nota = $_POST['nota'];
	$nama = $_POST['nama'];
	$tanggal_transaksi = $_POST['tanggal_transaksi'];
	$tanggal_selesai = $_POST['tanggal_selesai'];
	$master = $_POST['master']; 
	$berat = $_POST['berat'];
	$jumlah_bayar = $_POST['jumlah_bayar'];
	$dp = $_POST['dp'];
	$id_karyawan = $_POST['id_karyawan'];
	$status_pembayaran = $_POST['status_pembayaran'];
	$status_pengambilan = $_POST['status_pengambilan'];
	$catatan = $_POST['catatan'];

	$edit = mysqli_query($conn, "UPDATE transaksi set nama_R = '$nama', tgl_transaksi = '$tanggal_transaksi', tgl_selesai = '$tanggal_selesai', id_master = '$master', berat = '$berat', jumlah_bayar = '$jumlah_bayar', dp = '$dp', id_karyawan = '$id_karyawan', status_pembayaran = '$status_pembayaran', status_pengambilan = '$status_pengambilan', catatan = '$catatan' where no_nota = '$nota'");

	if ($edit) {
		echo "
			<script>
				alert('data berhasil di ubah');
				window.location.href='../../index.php?page=transaksi';
			</script>
		";
	}
}

 ?>