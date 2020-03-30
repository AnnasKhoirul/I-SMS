  <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">DEFINISI</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="col-md-4">
    <a href="#" data-target="#ModalAdd" data-toggle="modal" class="btn btn-primary" style="margin-left:200px">Tambah Data</a>
<!-- Section: isms -->
    <?php $sql=$koneksi->query ("SELECT * FROM definisi"); ?>
    <?php while($data=$sql->fetch_assoc()) { ?>
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
              <center>
              <img style="width: 200px; height: 200px" src="asset/img/<?php echo $data['foto'];?>" class="rounded float-left" alt=""> 
              </center>
              <center>
              <h2 class="h-bold"><?php echo $data['judul'];?></h2>
              </center>
              <div class="divider-header"></div>
            </div>
      </div>

    </div>

    <div class="container">

      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 animatedParent">
          <div class="text-center">
            <p>
              <?php echo $data['content'];?>
            </p>
            <p>
             <?php echo $data['content2'];?>
            </p>

            <a href="#edit<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-warning" style="margin-bottom:20px"><span class="glyphicon glyphicon-edit"></span> Ubah</a>
            <a href="#del<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
              <?php include('pages/definisi/edit&delete.php'); ?>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
  <!-- /Section: isms -->
  <!-- Modal Popup untuk Add--> 
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">TAMBAH DATA DEFINISI</h4>
        </div>

        <div class="modal-body">
          <form action="" name="modal_popup" enctype="multipart/form-data" method="POST">
            
                <div class="form-group">
                  <label for="Modal Foto">Foto</label>
                  <div class="input-group" style="padding-bottom: 20px;">
                    <div class="input-group-addon">
                      <i class="fa fa-camera"></i>
                    </div>
                  <input type="file" name="foto"  class="form-control" required/>
                </div>

                 <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Nama</label>
                  <input type="text" name="judul"  class="form-control" placeholder="Nama" required/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Description">Isi Content</label>
                  <textarea name="content"  class="form-control" placeholder="Isi Content" required/></textarea>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Description">Isi Content2</label>
                  <textarea name="content2"  class="form-control" placeholder="Isi Content2"/></textarea>
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
</div>
<!-- /.box-body -->
   

<?php
if (isset($_POST['simpan'])) {
  
  $judul    =$_POST['judul'];
  $content  =$_POST['content'];
  $content2 =$_POST['content2'];
  $foto     =$_FILES['foto']['name'];
  $lokasi   =$_FILES['foto']['tmp_name'];
  $upload   =move_uploaded_file($lokasi, "asset/img/".$foto);
  if ($upload) { 


    $sql = $koneksi->query("INSERT INTO definisi (foto, judul, content, content2)VALUES('$foto','$judul','$content','$content2')");

    if ($sql) {
      ?>
        <script type="text/javascript">
          alert ("Data Berhasil Disimpan");
          window.location.href="?page=definisi";
        </script>

      <?php
    }
    }
  }

?>