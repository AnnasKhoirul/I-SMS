    <div class="row">
      <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
              <h1 class="box-title">NAVBAR</h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No</th>
                  <th style="width: 100px">Nama Logo</th>
                  <th style="width: 100px">Menu1</th>
                  <th style="width: 100px">Menu2</th>
                  <th style="width: 100px">Menu3</th>
                  <th style="width: 100px">Menu4</th>
                  <th style="width: 100px">Menu5</th>
                  <th style="width: 100px">Menu6</th>
                  <th style="width: 40px">Action</th>
                </tr>
                <?php $nomor=1; ?>
                <?php $sql=$koneksi->query ("SELECT * FROM navbar"); ?>
                <?php while($data=$sql->fetch_assoc()) { ?>
                <tr>
                  <td><?php echo $nomor++; ?></td>
                  <td><?php echo $data['nama_logo'];?></td>
                  <td><?php echo $data['menu_nav'];?></a></td>
                  <td><?php echo $data['menu_nav2'];?></a></td>
                  <td><?php echo $data['menu_nav3'];?></a></td>
                  <td><?php echo $data['menu_nav4'];?></a></td>
                  <td><?php echo $data['menu_nav5'];?></a></td>
                  <td><?php echo $data['menu_nav6'];?></a></td>
                  <td>
                    <a href="#edit<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-warning" style="margin-bottom: 20px" ><span class="glyphicon glyphicon-edit">Ubah</span> </a>
                    <?php include('pages/header/ubah_navbar.php'); ?>
                  </td>
                </tr>
                  <?php } ?>
              </table>
            </div>