    <div class="col-md-4">
    <a href="#" data-target="#ModalAdd" data-toggle="modal" class="btn btn-primary" style="margin-bottom: 20px;margin-left: 48px">Tambah Data</a>

    <div class="container marginbot-50">
       <div class="row row-table">
        <div class="col-lg-8 col-lg-offset-2">
            <?php $sql=$koneksi->query ("SELECT * FROM judul_page WHERE id='3' "); ?>
            <?php while($data=$sql->fetch_assoc()) { ?>
              <div class="section-heading text-center">
                <h2 class="h-bold"><?php echo $data['judul'];?></h2>
                <p><?php echo $data['subs'];?></p>
                <div class="divider-header"></div>
                <a href="#ubah<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-warning" style="margin-bottom:5px"><span class="glyphicon glyphicon-edit"></span> Ubah</a>
              <?php include('pages/produk/ubah/ubah_judul_produk.php'); ?>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="text-center">
    <div class="container">
        <div class="col-sm-12 col-md-12 col-lg-12">
           <?php $sql=$koneksi->query ("SELECT * FROM produk"); ?>
            <?php while($data=$sql->fetch_assoc()) { ?>
            <div class="col-md-4 col-table">             
              <a style="width: 370px; height: 247px" href="asset/img/<?php echo $data['foto'];?>">
                <img src="asset/img/<?php echo $data['foto'];?>" class="img-responsive" alt="img">
              </a>
                  <h5><?php echo $data['nama'];?></h5>
                  <div class="divider-header"></div>
                  <p style="text-align: center;">
                     <?php echo $data['content'];?>
                  </p>
          
                  <a href="#edit<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-warning" style="margin-bottom:20px"><span class="glyphicon glyphicon-edit"></span> Ubah</a>
                  <a href="#del<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
              <?php include('pages/produk/button.php'); ?>
            </div>
            <?php } ?>
        </div>
      </div>
    </div>
  
  <!-- /Section: produk -->

  <!-- Modal Popup untuk Add--> 
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">TAMBAH DATA</h4>
        </div>

        <div class="modal-body">
          <form action="" name="modal_popup" enctype="multipart/form-data" method="POST">
            
                <div class="form-group" >
                  <label for="Modal Foto">Foto</label>
                  <div class="input-group" style="padding-bottom: 20px;">
                    <div class="input-group-addon">
                      <i class="fa fa-camera"></i>
                    </div>
                  <input type="file" name="foto"  class="form-control" required/>
                </div>

                 <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Nama</label>
                  <input type="text" name="nama"  class="form-control" placeholder="Nama" required/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Description">Isi Content</label>
                  <textarea name="content"  class="form-control" placeholder="Isi Content" required/></textarea>
                </div>

              <div class="modal-footer">
                  <button class="btn btn-success" type="submit" name="simpan">
                      Confirm
                  </button>

                  <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                    Cancel
                  </button>
              </div>
              </form>
            </div>
           
        </div>
    </div>
</div>

<?php
if (isset($_POST['simpan'])) {
  
  $nama     =$_POST['nama'];
  $content  =$_POST['content'];
  $foto     =$_FILES['foto']['name'];
  $lokasi   =$_FILES['foto']['tmp_name'];
  $upload   =move_uploaded_file($lokasi, "asset/img/".$foto);
  if ($upload) { 


    $sql = $koneksi->query("INSERT INTO produk (foto, nama, content)VALUES('$foto','$nama','$content')");

    if ($sql) {
      ?>
        <script type="text/javascript">
          alert ("Data Berhasil Disimpan");
          window.location.href="?page=produk";
        </script>

      <?php
    }
    }
  }

?>

