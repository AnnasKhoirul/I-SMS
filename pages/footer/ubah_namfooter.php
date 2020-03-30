<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Ubah Data Navbar</h4>
        </div>

        <div class="modal-body">
                <?php
                    $edit=mysqli_query($koneksi,"select * from nama_footer where id='".$data['id']."'");
                    $data=mysqli_fetch_array($edit);
                ?>
                <div class="container-fluid">
                    <form action="" enctype="multipart/form-data" method="POST">
                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Modal Name">Footer 1</label>
                        <input name="id" type="hidden" value="<?php echo $data["id"]; ?>"/>
                        <input type="text" name="footer1"  class="form-control" value="<?php echo $data['footer1']; ?>" />
                    </div>

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Modal Name">Footer 2</label>
                        <input type="text" name="footer2"  class="form-control" value="<?php echo $data['footer2']; ?>" />
                    </div>

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Modal Name">footer 3</label>
                        <input type="text" name="footer3"  class="form-control" value="<?php echo $data['footer3']; ?>" />
                    </div>

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Modal Name">Footer 4</label>
                        <input type="text" name="footer4"  class="form-control" value="<?php echo $data['footer4']; ?>" />
                    </div>
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" name="ubah" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
                </form>

            </div>
        </div>
    </div>

<?php
if (isset($_POST['ubah'])) {
  
  $id      =$_POST['id'];
  $footer1 =$_POST['footer1'];
  $footer2 =$_POST['footer2'];
  $footer3 =$_POST['footer3'];
  $footer4 =$_POST['footer4'];
  
    $sql = $koneksi->query("UPDATE nama_footer SET footer1='$footer1', footer2='$footer2', footer3='$footer3', footer4='$footer4' WHERE id = '$id'");

    if ($sql) {
      ?>
        <script type="text/javascript">
          alert ("Data Berhasil Disimpan");
          window.location.href="?page=nama_footer";
        </script>

      <?php
    }
    }
  

?>

