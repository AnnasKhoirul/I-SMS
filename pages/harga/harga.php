 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <style>
  select{
    font-family: fontAwesome
  }
  </style>
<!-- Section: harga -->
    <div class="col-md-4">
    <a href="#" data-target="#ModalAdd" data-toggle="modal" class="btn btn-primary" style="margin-bottom: 20px;margin-left: 48px">Tambah Data</a>

    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <?php $sql=$koneksi->query ("SELECT * FROM judul_page WHERE id='4' "); ?>
            <?php while($data=$sql->fetch_assoc()) { ?>
            <div class="section-heading text-center">
              <h2 class="h-bold"><?php echo $data['judul'];?></h2>
              <p><?php echo $data['subs'];?></p>
              <div class="divider-header"></div>
              <a href="#ubah<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-warning" style="margin-bottom:10px"><span class="glyphicon glyphicon-edit"></span> Ubah</a>
              <?php include('pages/harga/ubah/ubah_judul_harga.php'); ?>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>

    </div>



    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
            <?php $sql=$koneksi->query ("SELECT * FROM harga"); ?>
            <?php while($data=$sql->fetch_assoc()) { ?>
            <div class="col-md-4 col-table" style="padding-bottom: 25px">
                <div class="<?php echo $data['warna_tabel'];?>">
                    <div class="pricingTable-header">
                        <h3 class="title"><?php echo $data['nama'];?></h3>
                    </div>
                    <div class="price-value">
                        <span class="amount"><?php echo $data['harga'];?></span>
                        <span class="amount-sm">/<?php echo $data['satuan'];?></span>
                    </div>
                    <ul class="pricing-content">
                        <li><i class="fa <?php echo $data['icon1'];?>"></i> <?php echo $data['spesifikasi1'];?> </li>
                        <li><i class="fa <?php echo $data['icon2'];?>"></i> <?php echo $data['spesifikasi2'];?> </li>
                        <li><i class="fa <?php echo $data['icon3'];?>"></i> <?php echo $data['spesifikasi3'];?> </li>
                        <li><i class="fa <?php echo $data['icon4'];?>"></i> <?php echo $data['spesifikasi4'];?> </li>
                        <li><i class="fa <?php echo $data['icon5'];?>"></i> <?php echo $data['spesifikasi5'];?> </li>
                        <li><i class="fa <?php echo $data['icon6'];?>"></i> <?php echo $data['spesifikasi6'];?> </li>
                    </ul>
                    <a href="#pesan" class="pricingTable-signup"><?php echo $data['button'];?></a>
                    <a href="#edit<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-warning" style="margin-top: 15px"><span class="glyphicon glyphicon-edit"></span> Ubah</a>
                    <a href="#del<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-danger" style="margin-top: 33px" ><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                    <?php include('pages/harga/edit&delete_harga.php'); ?>
                </div>
            </div>
            <?php } ?>
        </div> 
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
            
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Nama</label>
                  <input type="text" name="nama"  class="form-control" placeholder="Nama" required/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Harga</label>
                  <input type="text" name="harga"  class="form-control" placeholder="Nama" required/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Satuan</label>
                  <select class="form-control" name="satuan">
                    <option value="sms">/sms</option>
                    <option value="bulan">/bulan</option>          
                  </select>
                </div>

                <div class="form-group">
                  <label for="Modal Name">Spesifikasi</label>
                    <div class="form-inline" style="padding-bottom: 40px">
                  <input type="text" name="spesifikasi1"  class="form-control" style="width: 455px" placeholder="Spesifikasi" required/>
                  <label for="Modal Name">Icon</label>
                  <select class="form-control" style="width: 65px" name="icon1">
                    <option value=''></option>
                    <option value='fa-check'>&#xf00c; fa-check</option>
                    <option value='fa-times'>&#xf00d; fa-times</option>          
                  </select>
                </div>

                <div class="form-group">
                  <label for="Modal Name">Spesifikasi</label>
                    <div class="form-inline" style="padding-bottom: 40px">
                  <input type="text" name="spesifikasi2"  class="form-control" style="width: 455px" placeholder="Spesifikasi" required/>
                  <label for="Modal Name">Icon</label>
                  <select class="form-control" style="width: 65px" name="icon2">
                    <option value=''></option>
                    <option value='fa-check'>&#xf00c; fa-check</option>
                    <option value='fa-times'>&#xf00d; fa-times</option>          
                  </select>
                </div>

                <div class="form-group">
                  <label for="Modal Name">Spesifikasi</label>
                    <div class="form-inline" style="padding-bottom: 40px">
                  <input type="text" name="spesifikasi3"  class="form-control" style="width: 455px" placeholder="Spesifikasi" required/>
                  <label for="Modal Name">Icon</label>
                  <select class="form-control" style="width: 65px" name="icon3">
                    <option value=''></option>
                    <option value='fa-check'>&#xf00c; fa-check</option>
                    <option value='fa-times'>&#xf00d; fa-times</option>          
                  </select>
                </div>

                <div class="form-group">
                  <label for="Modal Name">Spesifikasi</label>
                    <div class="form-inline" style="padding-bottom: 40px">
                  <input type="text" name="spesifikasi4"  class="form-control" style="width: 455px" placeholder="Spesifikasi" required/>
                  <label for="Modal Name">Icon</label>
                  <select class="form-control" style="width: 65px" name="icon4">
                    <option value=''></option>
                    <option value='fa-check'>&#xf00c; fa-check</option>
                    <option value='fa-times'>&#xf00d; fa-times</option>          
                  </select>
                </div>

                <div class="form-group">
                  <label for="Modal Name">Spesifikasi</label>
                    <div class="form-inline" style="padding-bottom: 40px">
                  <input type="text" name="spesifikasi5"  class="form-control" style="width: 455px" placeholder="Spesifikasi" required/>
                  <label for="Modal Name">Icon</label>
                  <select class="form-control" style="width: 65px" name="icon5">
                    <option value=''></option>
                    <option value='fa-check'>&#xf00c; fa-check</option>
                    <option value='fa-times'>&#xf00d; fa-times</option>          
                  </select>
                </div>

                <div class="form-group">
                  <label for="Modal Name">Spesifikasi</label>
                    <div class="form-inline" style="padding-bottom: 40px">
                  <input type="text" name="spesifikasi6"  class="form-control" style="width: 455px" placeholder="Spesifikasi" required/>
                  <label for="Modal Name">Icon</label>
                  <select class="form-control" style="width: 65px" name="icon6">
                    <option value=''></option>
                    <option value='fa-check'>&#xf00c; fa-check</option>
                    <option value='fa-times'>&#xf00d; fa-times</option>          
                  </select>
                </div>

                 <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Button</label>
                  <input type="text" name="button"  class="form-control" placeholder="Nama Button" required/>
                </div>


                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Warna Tabel</label>
                  <select class="form-control" name="warna_tabel">
                    <option value="pricingTable">pricingTable</option>
                    <option value="pricingTable green">pricingTable green</option>          
                  </select>
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
  

    $sql = $koneksi->query("INSERT INTO harga (nama, harga, satuan, icon1, spesifikasi1, icon2, spesifikasi2, icon3, spesifikasi3, icon4, spesifikasi4, icon5, spesifikasi5, icon6, spesifikasi6, button, warna_tabel)VALUES('$nama','$harga','$satuan','$icon1','$spesifikasi1','$icon2','$spesifikasi2','$icon3','$spesifikasi3','$icon4','$spesifikasi4','$icon5','$spesifikasi5','$icon6','$spesifikasi6','$button','$warna_tabel')");

    if ($sql) {
      ?>
        <script type="text/javascript">
          alert ("Data Berhasil Disimpan");
          window.location.href="?page=harga";
        </script>

      <?php
    }
    }
  

?>



      