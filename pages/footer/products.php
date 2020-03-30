 <div class="row">
      <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
             <h1 class="box-title">PRODUCTS </h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th >No</th>
                  <th >Nama</th>
                  <th >Action</th>
                </tr>
                <?php $nomor=1; ?>
                <?php $sql=$koneksi->query ("SELECT * FROM products"); ?>
                <?php while($data=$sql->fetch_assoc()) { ?>
                <tr>
                  <td><?php echo $nomor++; ?></td>
                  <td><?php echo $data['nama_products'];?></td>
                  <td>
                    <a href="#ubah<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-warning" style="margin-bottom: 15px" ><span class="glyphicon glyphicon-edit">Ubah</span> </a>
                    <a href="#del<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-danger" style="margin-top: 5px" ><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                    <?php include('pages/footer/ubah_products.php'); ?>
                  </td>
                </tr>
                  <?php } ?>
              </table>
                <a href="#" data-target="#ModalAdd" data-toggle="modal" class="btn btn-primary" style="margin-top: 10px; margin-bottom: 5px">Tambah Data</a>
                <div class="text-center">
            </div>

            <!-- Modal Popup untuk Add--> 
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">TAMBAH DATA HARGA</h4>
        </div>

        <div class="modal-body">
          <form action="" name="modal_popup" enctype="multipart/form-data" method="POST">
            
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Nama</label>
                  <input type="text" name="nama_products"  class="form-control" placeholder="Nama" required/>
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
  
  $nama_products   =$_POST['nama_products'];
  

    $sql = $koneksi->query("INSERT INTO products (nama_products)VALUES('$nama_products')");

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
