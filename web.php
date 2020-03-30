<?php
    session_start();

    error_reporting();

     $koneksi = new mysqli ("localhost","root","","i_sms");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>I SMS</title>

  <!-- css -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <link href="asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="asset/css/nivo-lightbox.css" rel="stylesheet" />
  <link href="asset/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="asset/css/animations.css" rel="stylesheet" />
  <link href="asset/css/style.css" rel="stylesheet">
  <link href="asset/color/default.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <!-- -->
  <style>
  select{
    font-family: fontAwesome
  }
  <?php $sql=$koneksi->query ("SELECT * FROM header"); ?>
  <?php while($data=$sql->fetch_assoc()) { ?>
  .hero { background: url(asset/img/<?php echo $data['background'];?>) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; padding: 100px 0 100px 0; height: auto; }
    <?php } ?>
  
  </style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

  <?php $sql=$koneksi->query ("SELECT * FROM header"); ?>
  <?php while($data=$sql->fetch_assoc()) { ?>
  <section class="hero" id="intro">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-right navicon">
          <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center inner">
          <div class="animatedParent">
            <h1 class="animated fadeInDown"><?php echo $data['judul'];?></h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
          <a href="#isms" class="learn-more-btn btn-scroll"><?php echo $data['nama_button'];?></a>
        </div>
      </div>
    </div>
  </section>
  <?php } ?>


  <!-- Navigation -->
  <?php $sql=$koneksi->query ("SELECT * FROM navbar"); ?>
  <?php while($data=$sql->fetch_assoc()) { ?>
  <div id="navigation">
    <nav class="navbar navbar-custom" role="navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="site-logo">
              <a href="#intro" class="brand"><?php echo $data['nama_logo'];?></a>
            </div>
          </div>


          <div class="col-md-10">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="menu">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#intro"><?php echo $data['menu_nav'];?></a></li>
                <li><a href="#isms"><?php echo $data['menu_nav2'];?></a></li>
                <li><a href="#fitur"><?php echo $data['menu_nav3'];?></a></li>
                <li><a href="#produk"><?php echo $data['menu_nav4'];?></a></li>
                <li><a href="#harga"><?php echo $data['menu_nav5'];?></a></li>
                <li><a href="#pesan"><?php echo $data['menu_nav6'];?></a></li>
              </ul>
            </div>
            <!-- /.Navbar-collapse -->

          </div>
        </div>
      </div>
      <!-- /.container -->
    </nav>
  </div>
  <?php } ?>
  <!-- /Navigation -->

  <!-- Section: isms -->
  <?php $sql=$koneksi->query ("SELECT * FROM definisi"); ?>
  <?php while($data=$sql->fetch_assoc()) { ?>
  <section id="isms" class="home-section color-dark bg-white">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="animatedParent">
            <div class="section-heading text-center animated bounceInDown">
              <center>
              <img style="width: 200px; height: 200px" src="asset/img/<?php echo $data['foto'];?>" class="rounded float-left" alt="">
              </center>
              <center>
              <h2 class="h-bold"><?php echo $data['judul'];?></h2>
              </center>
              <div class="divider-header"></div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="container">


      <div class="row">


        <div class="col-lg-8 col-lg-offset-2 animatedParent">
          <div class="text-center">
            <p>
              <?php echo $data['content'];?>
            </p>
            <p>
             <?php echo $data['content2'];?>
            </p>
          </div>
        </div>
      </div>
    </div>

  </section>
   <?php } ?>
  <!-- /Section: isms -->


  <!-- Section: fitur -->
  <section id="fitur" class="home-section color-dark bg-gray">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="animatedParent">
            <?php $sql=$koneksi->query ("SELECT * FROM judul_page WHERE id='2' "); ?>
            <?php while($data=$sql->fetch_assoc()) { ?>
            <div class="section-heading text-center animated bounceInDown">
              <h2 class="h-bold"><?php echo $data['judul'];?></h2>
              <p><?php echo $data['subs'];?></p>
              <div class="divider-header"></div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>

    </div>

    <div class="text-center">
      <div class="container">

        <div class="row animatedParent">
        <?php $sql=$koneksi->query ("SELECT * FROM fitur"); ?>
        <?php while($data=$sql->fetch_assoc()) { ?>
          <div class="col-md-4">
            <div class="">
              <div class="service-box" style="width: 100%; height: 320px">
                <div class="service-icon">
                  <span class="fa <?php echo $data['icon'];?> fa-2x"></span>
                </div>
                <div class="service-desc">
                  <h5><?php echo $data['nama'];?></h5>
                  <div class="divider-header"></div>
                  <p>
                   <?php echo $data['deskripsi'];?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>
      </div>
    </div>
  </section>
  <!-- /Section: fitur -->


  <!-- Section: produk -->
  <section id="produk" class="home-section color-dark text-center bg-white">
    <div class="container marginbot-50">
      <div class="row row-table">
        <div class="col-lg-8 col-lg-offset-2">
          <div>
            <div class="animatedParent">
              <?php $sql=$koneksi->query ("SELECT * FROM judul_page WHERE id='3' "); ?>
              <?php while($data=$sql->fetch_assoc()) { ?>
              <div class="section-heading text-center animated bounceInDown">
                <h2 class="h-bold"><?php echo $data['judul'];?></h2>
                <p><?php echo $data['subs'];?></p>
                <div class="divider-header"></div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="container">

      <div class="row animatedParent">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="row gallery-item">
            <?php $sql=$koneksi->query ("SELECT * FROM produk"); ?>
            <?php while($data=$sql->fetch_assoc()) { ?>
            <div class="col-md-4"> 
              <a href="asset/img/<?php echo $data['foto'];?>" style="width: 370px; height: 247px" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="asset/img/works/1@2x.jpg">
								<img src="asset/img/<?php echo $data['foto'];?>" class="img-responsive" alt="img">
							</a>
                  <h5><?php echo $data['nama'];?></h5>
                  <div class="divider-header"></div>
                  <p style="text-align: center;">
                  <?php echo $data['content'];?>
                  </p>
            </div>
        <?php } ?>
        </div>
      </div>
    </div>

  </section>
  <!-- /Section: produk -->

  <!-- Section: harga -->
  <section id="harga" class="home-section nopadd-bot color-dark bg-gray text-center">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="animatedParent">
            <?php $sql=$koneksi->query ("SELECT * FROM judul_page WHERE id='4' "); ?>
            <?php while($data=$sql->fetch_assoc()) { ?>
            <div class="section-heading text-center animated bounceInDown">
              <h2 class="h-bold"><?php echo $data['judul'];?></h2>
              <p><?php echo $data['subs'];?></p>
              <div class="divider-header"></div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>

    </div>

   <div class="container">
        <div class="row">
            <?php $sql=$koneksi->query ("SELECT * FROM harga"); ?>
            <?php while($data=$sql->fetch_assoc()) { ?>
            <div class="col-md-4 col-sm-6" style="padding-bottom: 25px">
                <div class="<?php echo $data['warna_tabel'];?>">
                    <div class="pricingTable-header">
                        <h3 class="title"><?php echo $data['nama'];?></h3>
                    </div>
                    <div class="price-value">
                        <span class="amount"><?php echo $data['harga'];?></span>
                        <span class="amount-sm">/<?php echo $data['satuan'];?></span>
                    </div>
                    <ul class="pricing-content">
                        <li><i class="fa <?php echo $data['icon1'];?>"></i> <?php echo $data['spesifikasi1'];?></li>
                        <li><i class="fa <?php echo $data['icon2'];?>"></i> <?php echo $data['spesifikasi2'];?></li>
                        <li><i class="fa <?php echo $data['icon3'];?>"></i> <?php echo $data['spesifikasi3'];?></li>
                        <li><i class="fa <?php echo $data['icon4'];?>"></i> <?php echo $data['spesifikasi4'];?></li>
                        <li><i class="fa <?php echo $data['icon5'];?>"></i> <?php echo $data['spesifikasi5'];?></li>
                        <li><i class="fa <?php echo $data['icon6'];?>"></i> <?php echo $data['spesifikasi6'];?></li>
                    </ul>
                    <a href="#pesan" class="pricingTable-signup"><?php echo $data['button'];?></a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
        </div>
      </section>
      <!-- /Section: produk -->

  <!-- Section: pesan -->
  <section id="pesan" class="home-section nopadd-bot color-dark bg-white text-center">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="animatedParent">
            <div class="section-heading text-center">
              <h2 class="h-bold animated bounceInDown">Pesan</h2>
              <div class="divider-header"></div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="container">

      <div class="row marginbot-80">
        <div class="col-md-8 col-md-offset-2">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form id="contact-form" action="proses_pesan.php" method="POST" role="form" class="contactForm">
            <div class="row marginbot-20">
              <div class="col-md-6 xs-marginbot-20">
                <div class="form-group">
                  <input type="text" name="nama" class="form-control" id="name" placeholder="Nama Lengkap" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" name="subjek" class="form-control" id="subject" placeholder="Subjek" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea name="pesan" class="form-control" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Pesan"></textarea>
                  <div class="validation"></div>
                </div>
                <button type="submit" name="kirim" class="btn btn-skin btn-lg btn-block" id="btnContactUs">
                      Kirim Pesanan</button>
              </div>
            </div>
          </form>
        </div>
      </div>


    </div>
  </section>
  <!-- /Section: contact -->


 <!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Footer links -->
      <div class="row text-center text-md-left mt-3 pb-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <?php $sql=$koneksi->query ("SELECT * FROM nama_footer"); ?>
          <?php while($data=$sql->fetch_assoc()) { ?>
          <h6 class="text-uppercase mb-4 font-weight-bold" style="color: white"><?php echo $data['footer1'];?></h6>
          <?php } ?>

          <?php $sql=$koneksi->query ("SELECT * FROM i_sms"); ?>
          <?php while($data=$sql->fetch_assoc()) { ?>
          <p style="color: white"; ><?php echo $data['deskripsi'];?> </p>
          <?php } ?>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <?php $sql=$koneksi->query ("SELECT * FROM nama_footer"); ?>
          <?php while($data=$sql->fetch_assoc()) { ?>
          <h6 class="text-uppercase mb-4 font-weight-bold" style="color: white"><?php echo $data['footer2'];?></h6>
          <?php } ?>

          <?php $sql=$koneksi->query ("SELECT * FROM products"); ?>
          <?php while($data=$sql->fetch_assoc()) { ?>
          <p>
            <a href="#produk"><?php echo $data['nama_products'];?></a>
          </p>
          <?php } ?>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <?php $sql=$koneksi->query ("SELECT * FROM nama_footer"); ?>
          <?php while($data=$sql->fetch_assoc()) { ?>
          <h6 class="text-uppercase mb-4 font-weight-bold" style="color: white"><?php echo $data['footer3'];?></h6>
          <?php } ?>

          <?php $sql=$koneksi->query ("SELECT * FROM useful_links"); ?>
          <?php while($data=$sql->fetch_assoc()) { ?>
          <p>
            <a href="#<?php echo $data['nama_link'];?>"><?php echo $data['nama'];?></a>
          </p>
          <?php } ?>
        </div>

        <!-- Grid column -->
      
        <!-- Grid column -->
        
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <?php $sql=$koneksi->query ("SELECT * FROM nama_footer"); ?>
          <?php while($data=$sql->fetch_assoc()) { ?>
          <h6 class="text-uppercase mb-4 font-weight-bold" style="color: white";><?php echo $data['footer4'];?></h6>
          <?php } ?>

          <?php $sql=$koneksi->query ("SELECT * FROM contact"); ?>
          <?php while($data=$sql->fetch_assoc()) { ?>
          <p style="color: white";>
             <i class="fa <?php echo $data['icon'];?> mr-3"></i> <?php echo $data['keterangan'];?>
          </p>
           <?php } ?>
        </div>
        
        <!-- Grid column -->

      </div>
      <!-- Footer links -->

      <hr>

      <!-- Grid row -->
      <div class="row d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-7 col-lg-8">

          <!--Copyright-->
          <p class="text-center text-md-left" style="color: white">© 2018 Copyright:
            <a href="#">
              <strong>I_SMS</strong>
            </a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-5 col-lg-4 ml-lg-0">

          <!-- Social buttons -->
          <div class="text-center text-md-right">
            <ul class="list-unstyled list-inline">
              <?php $sql=$koneksi->query ("SELECT * FROM icon_sosialmed"); ?>
              <?php while($data=$sql->fetch_assoc()) { ?>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fa <?php echo $data['icon'];?>"></i>
                </a>
              </li>
               <?php } ?>
            </ul>
          </div>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

  </footer>
  <!-- Footer -->

  <!-- Core JavaScript Files -->
  <script src="asset/js/jquery.min.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>
  <script src="asset/js/jquery.sticky.js"></script>
  <script src="asset/js/jquery.easing.min.js"></script>
  <script src="asset/js/jquery.scrollTo.js"></script>
  <script src="asset/js/jquery.appear.js"></script>
  <script src="asset/js/stellar.js"></script>
  <script src="asset/js/nivo-lightbox.min.js"></script>

  <script src="asset/js/custom.js"></script>
  <script src="asset/js/css3-animate-it.js"></script>
  <script src="asset/contactform/contactform.js"></script>

</body>
</html>
