<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$login    = $_POST['login']; 
$cek      = mysqli_query($koneksi, "select * from login_multi where username='$username' and password='$password'");
$result   = mysqli_num_rows($cek);
$data = mysqli_fetch_array($cek);
 
if($result>0){
    if ($data['level'] == 'admin') {
        session_start();
        $_SESSION['username'] = $data['username'];
        // $data['level'] level digunakan untuk memanggil value level dari username yang telah login dan disimpan dalam $_SESSION['level']
        $_SESSION['level']    = $data['level'];
        echo "<script>alert('Selamat Datang, Admin.');document.location.href='dashboard.php'</script>";
 
    }elseif($data['level'] == 'user'){
        session_start();
        $_SESSION['username'] = $data['username'];
        // $data['level'] level digunakan untuk memanggil value level dari username yang telah login dan disimpan dalam $_SESSION['level']
        $_SESSION['level']    = $data['level'];
        echo "<script>alert('Selamat Datang, Admin.');document.location.href='dashboard.php'</script>";
    }
}else{
    ?>
                <script type="text/javascript">
                    alert("Username/Password yang Anda Masukkan Salah");
                    window.location.href="index.php";
                </script>
            <?php
    }

?>