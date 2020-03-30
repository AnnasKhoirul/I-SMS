<?php

	include "../../koneksi.php";

	$del=$koneksi->query("SELECT * FROM produk WHERE id='$_GET[id]'");
	$data=$del->fetch_assoc();
	$foto= $data['foto'];
	if (file_exists("asset/img/$foto")) {
		unlink("asset/img/$foto");
	}
	//hapus file foto
	$koneksi->query("DELETE FROM produk WHERE id='$_GET[id]' ")
	
?>

<script type="text/javascript">
	window.location.href="<?php echo $url; ?>/dashboard.php?page=produk";
</script>