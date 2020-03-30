<?php
	
	include "../../koneksi.php";

	$id = $_GET['id'];

	$sql = $koneksi->query("DELETE FROM harga WHERE id='$id'");

		if ($sql){

	?>
	<script type="text/javascript">
	window.location.href="<?php echo $url; ?>/dashboard.php?page=harga";
	</script>

	<?php 

	}

 ?>

