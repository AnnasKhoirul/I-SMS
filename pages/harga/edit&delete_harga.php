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
                    <a href="pages/harga/delete_harga.php?id=<?php echo $data['id'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
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
            <h4 class="modal-title" id="myModalLabel">EDIT DATA</h4>
        </div>

        <div class="modal-body">
				<?php
					$edit=mysqli_query($koneksi,"select * from harga where id='".$data['id']."'");
					$data=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
					<form action="" enctype="multipart/form-data" method="POST">
							<div class="form-group"  style="padding-bottom: 20px;">
								<label>Nama</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-book"></i>
										</div>
                    <input name="id" type="hidden" value="<?php echo $data["id"]; ?>"/>
										<input name="nama" type="text" class="form-control" value="<?php echo $data['nama']; ?>"/>
									</div>
							</div>

							<div class="form-group"  style="padding-bottom: 20px;">
								<label>Harga</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-dollar"></i>
										</div>
										<input name="harga" type="text" class="form-control" value="<?php echo $data['harga']; ?> " />
									</div>
							</div>

              <div class="form-group" style="padding-bottom: 20px;">
                  <label>Satuan</label>
                  <select class="form-control" name="satuan">
                    <option value="<?php echo $data['satuan']; ?>">/<?php echo $data['satuan']; ?></option>
                    <option value=""></option>
                    <option value="sms">/sms</option>
                    <option value="bulan">/bulan</option>          
                  </select>
                </div>

                <div class="form-group">
                <label>Spesifikasi</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa <?php echo $data['icon1'];?>"></i>
                    </div>
                    <input name="spesifikasi1" type="text" class="form-control" value="<?php echo $data['spesifikasi1']; ?> " />
                  </div>
              </div>

              <div class="form-group" style="padding-bottom: 20px;">
                  <label>Ubah Icon</label>
                  <select class="form-control" name="icon1">
                    <option value='<?php echo $data['icon1'];?>'><?php echo $data['icon1'];?></option>
                    <option value='fa-check'>&#xf00c; fa-check</option>
                    <option value='fa-times'>&#xf00d; fa-times</option>        
                  </select>
                </div>

                <div class="form-group">
                <label>Spesifikasi</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa <?php echo $data['icon2'];?>"></i>
                    </div>
                    <input name="spesifikasi2" type="text" class="form-control" value="<?php echo $data['spesifikasi2']; ?> " />
                  </div>
              </div>

              <div class="form-group" style="padding-bottom: 20px;">
                  <label>Ubah Icon</label>
                  <select class="form-control" name="icon2">
                    <option value='<?php echo $data['icon2'];?>'><?php echo $data['icon2'];?></option>
                    <option value='fa-check'>&#xf00c; fa-check</option>
                    <option value='fa-times'>&#xf00d; fa-times</option>        
                  </select>
                </div>

                <div class="form-group">
                <label>Spesifikasi</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa <?php echo $data['icon3'];?>"></i>
                    </div>
                    <input name="spesifikasi3" type="text" class="form-control" value="<?php echo $data['spesifikasi3']; ?> " />
                  </div>
              </div>

              <div class="form-group" style="padding-bottom: 20px;">
                  <label>Ubah Icon</label>
                  <select class="form-control" name="icon3">
                    <option value='<?php echo $data['icon3'];?>'><?php echo $data['icon3'];?></option>
                    <option value='fa-check'>&#xf00c; fa-check</option>
                    <option value='fa-times'>&#xf00d; fa-times</option>        
                  </select>
                </div>

                <div class="form-group">
                <label>Spesifikasi</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa <?php echo $data['icon4'];?>"></i>
                    </div>
                    <input name="spesifikasi4" type="text" class="form-control" value="<?php echo $data['spesifikasi4']; ?> " />
                  </div>
              </div>

              <div class="form-group" style="padding-bottom: 20px;">
                  <label>Ubah Icon</label>
                  <select class="form-control" name="icon4">
                    <option value='<?php echo $data['icon4'];?>'><?php echo $data['icon4'];?></option>
                    <option value='fa-check'>&#xf00c; fa-check</option>
                    <option value='fa-times'>&#xf00d; fa-times</option>        
                  </select>
                </div>

                <div class="form-group">
                <label>Spesifikasi</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa <?php echo $data['icon5'];?>"></i>
                    </div>
                    <input name="spesifikasi5" type="text" class="form-control" value="<?php echo $data['spesifikasi5']; ?> " />
                  </div>
              </div>

              <div class="form-group" style="padding-bottom: 20px;">
                  <label>Ubah Icon</label>
                  <select class="form-control" name="icon5">
                    <option value='<?php echo $data['icon5'];?>'><?php echo $data['icon5'];?></option>
                    <option value='fa-check'>&#xf00c; fa-check</option>
                    <option value='fa-times'>&#xf00d; fa-times</option>        
                  </select>
                </div>

                <div class="form-group">
                <label>Spesifikasi</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa <?php echo $data['icon6'];?>"></i>
                    </div>
                    <input name="spesifikasi6" type="text" class="form-control" value="<?php echo $data['spesifikasi6']; ?> " />
                  </div>
              </div>

              <div class="form-group" style="padding-bottom: 20px;">
                  <label>Ubah Icon</label>
                  <select class="form-control" name="icon6">
                    <option value='<?php echo $data['icon6'];?>'><?php echo $data['icon6'];?></option>
                    <option value='fa-check'>&#xf00c; fa-check</option>
                    <option value='fa-times'>&#xf00d; fa-times</option>        
                  </select>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Nama Button</label>
                  <input type="text" name="button"  class="form-control" value="<?php echo $data['button']; ?>" />
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Warna Tabel</label>
                  <select class="form-control" name="warna_tabel">
                    <option value='<?php echo $data['warna_tabel'];?>'><?php echo $data['warna_tabel'];?>                      
                    </option>
                    <option value="pricingTable">pricingTable</option>
                    <option value="pricingTable green">pricingTable green</option>        
                  </select>
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
  
  $id           =$_POST['id'];
  $nama         =$_POST['nama'];
  $harga        =$_POST['harga'];
  $satuan       =$_POST['satuan'];
  $icon1        =$_POST['icon1'];
  $spesifikasi1 =$_POST['spesifikasi1'];
  $icon2        =$_POST['icon2'];
  $spesifikasi2 =$_POST['spesifikasi2'];
  $icon3        =$_POST['icon3'];
  $spesifikasi3 =$_POST['spesifikasi3'];
  $icon4        =$_POST['icon4'];
  $spesifikasi4 =$_POST['spesifikasi4'];
  $icon5        =$_POST['icon5'];
  $spesifikasi5 =$_POST['spesifikasi5'];
  $icon6        =$_POST['icon6'];
  $spesifikasi6 =$_POST['spesifikasi6'];
  $button       =$_POST['button'];
  $warna_tabel  =$_POST['warna_tabel'];
  

    $sql = $koneksi->query("UPDATE harga SET nama='$nama', harga='$harga', satuan='$satuan', icon1='$icon1', spesifikasi1='$spesifikasi1', icon2='$icon2', spesifikasi2='$spesifikasi2', icon3='$icon3', spesifikasi3='$spesifikasi3', icon4='$icon4', spesifikasi4='$spesifikasi4', icon5='$icon5', spesifikasi5='$spesifikasi5', icon6='$icon6', spesifikasi6='$spesifikasi6', button='$button', warna_tabel='$warna_tabel' WHERE id = '$id'");

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