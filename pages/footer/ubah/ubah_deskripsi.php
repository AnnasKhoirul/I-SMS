<!-- Delete -->
    <div class="modal fade" id="del<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <h4 class="modal-title" style="text-align:center;">Are you sure to delete this Data ?</h4>
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="pages/footer/ubah/delete_deskripsi.php?id=<?php echo $data['id'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
                
            </div>
        </div>
    </div>
<!-- /delete -->


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
                    $edit=mysqli_query($koneksi,"select * from i_sms where id='".$data['id']."'");
                    $data=mysqli_fetch_array($edit);
                ?>
                <div class="container-fluid">
                    <form action="" enctype="multipart/form-data" method="POST">
                        <div class="form-group"  style="padding-bottom: 20px;">
                                <label>Deskripsi</label>
                                    <div class="input-group">
                                        <input name="id" type="hidden" value="<?php echo $data["id"]; ?>"/>
                                        <textarea name="deskripsi" rows="10" cols="90" class="form-control" placeholder="Deskripsi"><?php echo $data['deskripsi']; ?></textarea>
                                    </div>
                            </div>

                    
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
                </form>

            </div>
        </div>
    </div>

<?php
if (isset($_POST['edit'])) {
  
  $id        =$_POST['id'];
  $deskripsi =$_POST['deskripsi'];
  
    $sql = $koneksi->query("UPDATE i_sms SET deskripsi='$deskripsi' WHERE id = '$id'");

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

