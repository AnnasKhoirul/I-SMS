<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($koneksi,"select * from header where id='".$data['id']."'");
					$data=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
					<form action="" enctype="multipart/form-data" method="POST">
							<div class="form-group"  style="padding-bottom: 20px;">
								<label>Judul</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-book"></i>
										</div>
                    <input name="id" type="hidden" value="<?php echo $data["id"]; ?>"/>
										<input name="judul" type="text" class="form-control" value="<?php echo $data['judul']; ?>"/>
									</div>
							</div>
							<div class="form-group"  style="padding-bottom: 20px;">
									<div class="input-group">
									<?php
										echo "<img src='asset/img/$data[background]' height=90>";
									?>
									</div>
							</div>
							<div class="form-group"  style="padding-bottom: 20px;">
								<label>Foto</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-camera"></i>
										</div>
										<input name="foto" type="file" class="form-control" accept=".jpg , .png"/>
									</div>
							</div>
							<div class="form-group">
                  <label for="Modal Name">Nama Button</label>
                  <input type="text" name="nama_button"  class="form-control" value="<?php echo $data['nama_button']; ?>"/>
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
  $id 	    =$_POST['id'];
  $foto     =$_FILES['foto']['name'];
  $lokasi   =$_FILES['foto']['tmp_name'];
  //jika foto dirubah
  if (!empty($lokasi)){
  	move_uploaded_file($lokasi, "asset/img/$foto");
  	$edit = $koneksi->query("UPDATE header SET background = '$foto',judul = '$_POST[judul]',nama_button = '$_POST[nama_button]'  WHERE id = '$id'");
  	echo '<script type="text/javascript">
          alert ("Data Berhasil Disimpan");
          window.location.href="?page=header";
        </script>';
  }
  else{
  	$edit = $koneksi->query("UPDATE header SET judul = '$_POST[judul]',nama_button = '$_POST[nama_button]' WHERE id = '$id'");
  	 echo '<script type="text/javascript">
           alert ("Data Berhasil Disimpan");
          window.location.href="?page=header";
         </script>';
  	print_r($data);
  }

      ?>
       <!--  <script type="text/javascript">
          alert ("Data Berhasil Disimpan");
          window.location.href="?page=produk";
          print_r($data)
        </script> -->

      <?php
    
    }
  

?>