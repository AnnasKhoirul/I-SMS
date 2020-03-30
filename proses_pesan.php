<?php
include 'koneksi.php';
?>

<?php
if(isset($_POST["kirim"])) {
    $admin = 'khoirulans53@gmail.com'; //ganti email dg email admin (email penerima pesan)

	  $nama   =htmlentities($_POST['nama']);
  	$email  =htmlentities($_POST['email']);
  	$subjek	=htmlentities($_POST['subjek']);
  	$pesan	=htmlentities($_POST['pesan']);

    $pengirim = 'Dari: '.$nama.' <'.$email.'>';
  
  if(mail($admin, $subjek, $pesan, $pengirim)){
    echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="web.php">Kembali</a>';
  }else{
    echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="web.php">Kembali</a>';
  }
}else{
  header("Location: web.php");
}
?>