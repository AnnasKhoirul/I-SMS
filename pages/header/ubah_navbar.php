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
                    $edit=mysqli_query($koneksi,"select * from navbar where id='".$data['id']."'");
                    $data=mysqli_fetch_array($edit);
                ?>
                <div class="container-fluid">
                    <form action="" enctype="multipart/form-data" method="POST">
                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Modal Name">Nama Logo</label>
                        <input name="id" type="hidden" value="<?php echo $data["id"]; ?>"/>
                        <input type="text" name="nama_logo"  class="form-control" value="<?php echo $data['nama_logo']; ?>" />
                    </div>

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Modal Name">Menu 1</label>
                        <input type="text" name="menu_nav"  class="form-control" value="<?php echo $data['menu_nav']; ?>" />
                    </div>

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Modal Name">Menu 2</label>
                        <input type="text" name="menu_nav2"  class="form-control" value="<?php echo $data['menu_nav2']; ?>" />
                    </div>

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Modal Name">Menu 3</label>
                        <input type="text" name="menu_nav3"  class="form-control" value="<?php echo $data['menu_nav3']; ?>" />
                    </div>

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Modal Name">Menu 4</label>
                        <input type="text" name="menu_nav4"  class="form-control" value="<?php echo $data['menu_nav4']; ?>" />
                    </div>

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Modal Name">Menu 5</label>
                        <input type="text" name="menu_nav5"  class="form-control" value="<?php echo $data['menu_nav5']; ?>" />
                    </div>

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Modal Name">Menu 6</label>
                        <input type="text" name="menu_nav6"  class="form-control" value="<?php echo $data['menu_nav6']; ?>" />
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
  
  $id        =$_POST['id'];
  $nama_logo =$_POST['nama_logo'];
  $menu_nav  =$_POST['menu_nav'];
  $menu_nav2 =$_POST['menu_nav2'];
  $menu_nav3 =$_POST['menu_nav3'];
  $menu_nav4 =$_POST['menu_nav4'];
  $menu_nav5 =$_POST['menu_nav5'];
  $menu_nav6 =$_POST['menu_nav6'];
  
    $sql = $koneksi->query("UPDATE navbar SET nama_logo='$nama_logo', menu_nav='$menu_nav', menu_nav2='$menu_nav2', menu_nav3='$menu_nav3', menu_nav4='$menu_nav4', menu_nav5='$menu_nav5', menu_nav6='$menu_nav6' WHERE id = '$id'");

    if ($sql) {
      ?>
        <script type="text/javascript">
          alert ("Data Berhasil Disimpan");
          window.location.href="?page=navbar";
        </script>

      <?php
    }
    }
  

?>