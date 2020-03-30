<!-- Main content -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h1 class="box-title">HEADER</h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No</th>
                  <th style="width: 200px">Judul</th>
                  <th style="width: 200px">Background</th>
                  <th style="width: 100px">Nama Button</th>
                  <th style="width: 40px">Action</th>
                </tr>
                <?php $nomor=1; ?>
                <?php $sql=$koneksi->query ("SELECT * FROM header"); ?>
                <?php while($data=$sql->fetch_assoc()) { ?>
                <tr>
                  <td><?php echo $nomor++; ?></td>
                  <td><?php echo $data['judul'];?></td>
                  <td><img width="300" height="" src="asset/img/<?php echo $data['background'];?>"></td>
                  <td><?php echo $data['nama_button'];?></a></td>
                  <td>
                    <a href="#edit<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-warning" style="margin-bottom: 20px" ><span class="glyphicon glyphicon-edit">Ubah</span> </a>
                    <?php include('pages/header/ubah_header.php'); ?>
                  </td>
                </tr>
                  <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
           
            
            </div>
          </div>
          <!-- /.box -->
