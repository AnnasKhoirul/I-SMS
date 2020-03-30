<!-- Edit -->
    <div class="modal fade" id="ubah<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">EDIT DATA</h4>
        </div>

        <div class="modal-body">
                <?php
                    $edit=mysqli_query($koneksi,"select * from judul_page where id='4'");
                    $data=mysqli_fetch_array($edit);
                ?>
                <div class="container-fluid">
                    <form action="" name="modal_popup" enctype="multipart/form-data" method="POST">
            
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Judul</label>
                  <input name="id" type="hidden" value="<?php echo $data["id"]; ?>"/>
                  <input type="text" name="judul"  class="form-control" value="<?php echo $data['judul']; ?>" />
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Subs Judul</label>
                  <input type="text" name="subs"  class="form-control" value="<?php echo $data['subs']; ?>"/>
                </div>

                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" name="save" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
                </form>

            </div>
        </div>
    </div>

<?php
if (isset($_POST['save'])) {
  
  $id     =$_POST['id'];
  $judul  =$_POST['judul'];
  $subs   =$_POST['subs'];
 
  

    $sql = $koneksi->query("UPDATE judul_page SET judul='$judul', subs='$subs' WHERE id = '$id'");

    if ($sql) {
      ?>
        <script type="text/javascript">
          alert ("Data Berhasil Diubah");
          window.location.href="?page=harga";
        </script>

      <?php
    }
    }
  

?>