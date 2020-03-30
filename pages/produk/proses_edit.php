<?php
	include "koneksi.php";
	$id 	  =$_POST['id'];
	$nama     =$_POST['nama'];
  	$content  =$_POST['content'];
  	$foto     =$_FILES['foto']['name'];
 	$lokasi   =$_FILES['foto']['tmp_name'];
  	$upload   =move_uploaded_file($lokasi, "asset/img/".$foto);
  	if ($upload) { 
	$modal=mysqli_query($koneksi,"UPDATE produk SET foto = '$foto', nama = '$nama',content = '$content' WHERE id = '$id'");
	header('location:?page=produk');
	}
	else{
	$modal=mysqli_query($koneksi,"UPDATE produk SET nama = '$nama',content = '$content' WHERE id = '$id'");
	header('location:?page=produk');
	}
?>