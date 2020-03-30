    <div class="row">
      <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
              <h1 class="box-title">NAMA FOOTER</h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No</th>
                  <th style="width: 100px">Footer1</th>
                  <th style="width: 100px">Footer2</th>
                  <th style="width: 100px">Footer3</th>
                  <th style="width: 100px">Footer4</th>
                  <th style="width: 40px">Action</th>
                </tr>
                <?php $nomor=1; ?>
                <?php $sql=$koneksi->query ("SELECT * FROM nama_footer"); ?>
                <?php while($data=$sql->fetch_assoc()) { ?>
                <tr>
                  <td><?php echo $nomor++; ?></td>
                  <td><?php echo $data['footer1'];?></td>
                  <td><?php echo $data['footer2'];?></a></td>
                  <td><?php echo $data['footer3'];?></a></td>
                  <td><?php echo $data['footer4'];?></a></td>
                  <td>
                    <a href="#edit<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-warning" style="margin-bottom: 20px" ><span class="glyphicon glyphicon-edit">Ubah</span> </a>
                    <?php include('pages/footer/ubah_namfooter.php'); ?>
                  </td>
                </tr>
                  <?php } ?>
              </table>
            </div>