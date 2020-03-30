    <div class="row">
      <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
             <h1 class="box-title">I SMS</h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No</th>
                  <th style="width: 100px">Deskripsi</th>
                  <th style="width: 40px">Action</th>
                </tr>
                <?php $nomor=1; ?>
                <?php $sql=$koneksi->query ("SELECT * FROM i_sms"); ?>
                <?php while($data=$sql->fetch_assoc()) { ?>
                <tr>
                  <td><?php echo $nomor++; ?></td>
                  <td><?php echo $data['deskripsi'];?></td>
                  <td>
                    <a href="#edit<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-warning" style="margin-bottom: 15px" ><span class="glyphicon glyphicon-edit">Ubah</span> </a>
                    <a href="#del<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-danger" style="margin-top: 5px"  ><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                    <?php include('pages/footer/ubah/ubah_deskripsi.php'); ?>
                  </td>
                </tr>
                  <?php } ?>
              </table>
              <a href="#" data-target="#ModalAdd" data-toggle="modal" class="btn btn-primary" style="margin-top: 10px; margin-bottom: 5px" >Tambah Data</a>
                <div class="text-center">
            </div>
            </div>
   

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
            
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Deskripsi</label>
                  <textarea name="deskripsi"  class="form-control" placeholder="Deskripsi" required/></textarea>
                </div>

                

              <div class="modal-footer" style="padding-top: 50px">
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
  
  $deskripsi   =$_POST['deskripsi'];
  

    $sql = $koneksi->query("INSERT INTO i_sms (deskripsi)VALUES('$deskripsi')");

    if ($sql) {
      ?>
        <script type="text/javascript">
          alert ("Data Berhasil Disimpan");
          window.location.href="?page=footer";
        </script>

      <?php
    }
    }
  

?>
