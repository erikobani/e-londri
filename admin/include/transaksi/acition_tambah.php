<?php 
include '../../koneksi.php';
if (isset($_POST['simpan'])) {
	$nama = $_POST['nama'];
	$tanggal_transaksi = $_POST['tanggal_transaksi'];
	$tanggal_selesai = $_POST['tanggal_selesai'];
	$master = $_POST['master']; 
	$berat = $_POST['berat'];
	$jumlah_bayar = $_POST['jumlah_bayar'];
	$dp = $_POST['dp'];
	$id_karyawan = '1';
	$status_pembayaran = $_POST['status_pembayaran'];
	$status_pengambilan = $_POST['status_pengambilan'];
	$catatan = $_POST['catatan'];

	$insert = mysqli_query($conn, "INSERT INTO transaksi values(null,'-', '$nama', '$master', '$id_karyawan', '$tanggal_transaksi', '$tanggal_selesai', '$berat', '$jumlah_bayar', '$dp', '$status_pembayaran', '$status_pengambilan', '$catatan')");
	if ($insert) {
		?>
			<script type="text/javascript">
				alert('Data Berhasil Disimpan');
				window.location.href="../../index.php?page=transaksi";
			</script>
		<?php
	}
}
?>