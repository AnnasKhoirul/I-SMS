<?php
	
	include "../../../koneksi.php";

	$id = $_GET['id'];

	$sql = $koneksi->query("DELETE FROM contact WHERE id='$id'");

		if ($sql){

	?>
	<script type="text/javascript">
	window.location.href="<?php echo $url; ?>/dashboard.php?page=contact";
	</script>

	<?php 

	}

 ?>

