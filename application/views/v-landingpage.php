<!DOCTYPE html>
<html>
<head>
    <title>PT.Daun Biru Engineering</title>
     <link rel="shortcut icon" media="all" href="<?php echo base_url()?>images/favicon.ico">
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/w3.css" type="text/css">
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/component.css" type="text/css">
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/font-awesome.min.css" type="text/css">
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/css.css" type="text/css">
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/mdb.min.css"  type="text/css">
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/landingpagee.css"  type="text/css">
     <script src="<?php echo base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url()?>assets/js/popper.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url()?>assets/js/mdb.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url()?>assets/js/landingpage.js" type="text/javascript"></script>
 </head>
<body>

<!--top scroll-->
   <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-circle-up fa-lg"></i></button>

<!--navbar -->
          <nav class="navbar navbar-expand-sm navbar-white bg-white fixed-top">
            <div class="container">
              <a href="<?php echo base_url();?>">
                <img src="<?php echo base_url(); ?>images/logodaunbiru.jpg" alt="" height="65" width="250"></a>
                  <form class="form-inline my-2 my-lg-0">
                    <nav id="cbp-hrmenu" class="cbp-hrmenu">
                    <ul>
                        <li>  
                              <a  href="#">Produk</a>
                            <div class="cbp-hrsub">
                            <div class="cbp-hrsub-inner"> 
                              <?php
                                $db = $this->db->query('SELECT * FROM `sub_category` InNER JoiN category ON category.id_category = sub_category.category_id_category ');
                                $menu = array();
                                foreach ($db->result() as $key) {
                                  $menu[$key->nama_category][] = array($key->nama_sub_category, $key->link);
                                }
                                foreach ($menu as $key => $value) {
                                  echo "<div>";
                                  echo "<h4>$key</h4>";
                                  echo "<ul>";
                                  foreach ($value as $v2) {
                                    echo "<li><a href=\"" . base_url() . $v2[1] . "\">{$v2[0]}</a></li>";
                                  }
                                  echo "</ul>";
                                  echo "</div>";
                                }
                              ?>
                            
                           
                          </div>
                      </div>
                  </li>
                </nav>
              </ul>
          </nav>
      </form>
   </div>

<!--object navbar -->

<!--megamenu -->
<script src="<?php echo base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/cbpHorizontalMenu.min.js" type="text/javascript"></script>
<script>
  $(function() {
   cbpHorizontalMenu.init();
  }); 
</script>
<!--CAROUSEL -->
<div class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url(); ?>images/5.jpg" width="1100" height="300">
  </div>
  <div class="carousel-item">
      <img src="<?php echo base_url(); ?>images/6.jpg " width="1100" height="300">
  </div>
  <div class="carousel-item">
      <img src="<?php echo base_url(); ?>images/7.jpg" width="1100" height="300">
  </div>

  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!--Jumbotron -->
<header>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="maymu">
                    <h1>Suportivo</h1>
                    <p class="mumiii">Sistem pendukung produk berbasis WEB untuk kebutuhan internal sebuah perusahaan. Sistem ini memuat berbagai informasi dan dokumen produk (deskripsi, spesifikasi, dokumen dan software-software pendukungnya)</p>
                </div>
                </div>
            </div>
       </div>
    </div>
</header>                        

<!-- riview  -->
<div class="container">
        <section>
            <div class="container">
              <div class="row align-items-center">
              <a class="portfolio-box" href="images/haliza-small-1.jpg">
                <div class="col-lg-6 order-lg-2">
                  <div class="p-5">
              <?php
                $d = $this->db->query("Select*from produk_media Where id_media=5")->row()->media;
                echo "<img height=350 width=350 src=\"" . base_url() . "images/$d\" />";
                ?>
                <i class="fa fa-expand" aria-hidden="true"></i>
          </div>
          </div>
          </a>
          
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <a class="mimong" href="<?php echo base_url();?>produk/halizareciprocating">
                <h1 class="display-4">Haliza 10
                  <small id="product-model-name">Reciprocating Analyzer
          </small>
          </h1>
          </a>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
              <hr>
                  </div>
              </div>
          
          </div>
      </div>
</section>

<section>
          <div class="container">
            <div class="row align-items-center">
              
              <div class="col-lg-6 order-2">
                <div class="p-5">
             <?php
                $d = $this->db->query("Select*from produk_media Where id_media=17")->row()->media;
                echo "<img height=350 width=350 src=\"" . base_url() . "images/$d\" />";
                ?>

            </div>
            </div>
            <div class="col-lg-6 order-1">
              <div class="p-5">
                <a  class="mimong" href="<?php echo base_url();?>produk/halizareciprocating">
                  <h1 class="display-4">Haliza 10
                    <small id="product-model-name"> Reciprocating Analyzer

            </small>
            </h1>
            </a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                <hr>
                    </div>
                </div>
            </div>
        </div>
</section>

<section>
            <div class="container">
              <div class="row align-items-center">
              <a class="portfolio-box" href="images/haliza-small-1.jpg">
                <div class="col-lg-6 order-lg-2">
                  <div class="p-5">
              <?php
                $d = $this->db->query("Select*from produk_media Where id_media=5")->row()->media;
                echo "<img height=350 width=350 src=\"" . base_url() . "images/$d\" />";
                ?>
                <p align="center"><i class="fa fa-expand" aria-hidden="true"></i></p>
          </div>
          </div>
          </a>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <a class="mimong" href="<?php echo base_url();?>produk/halizareciprocating">
                <h1 class="display-4">Haliza 10
                  <small id="product-model-name">Reciprocating Analyzer
          </small>
          </h1>
          </a>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
              <hr>
                  </div>
              </div>
          </div>
      </div>
</section>
</div>
  <br>
   <br>
    <br>
     <br>

<!---FOOTER -->
<footer>
<div class="footer" id="footer">
<div class="container">
<div class="row">
  <aside>
     <h3>About Us</h3>      
  <div>
  <ul class="social">
      <li><a href=""><i class=" fa fa-facebook"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
      <li><a href="http://www.daunbiru.com/id/"><i class="fa fa-google-plus"></i></a></li>
      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
      <li><a href="#"><i class="fa fa-youtube"></i></a></li>
   </ul>
  </div>
  </aside>
     <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">  
     </div>
     <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">   
     </div>
     <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
     </div>
  <aside 1id="text-5" class="widget widget_text">
     <h3>Contact Us</h3>      
     <div class="mumiii"><p>PT.Daun Biru Engineering<br>
                                                  Admin 1 : +62 21 8774 3652<br>
                                                  Admin 2 : +62 21 8774 3615<br>
                                                  Fax : +62 21 8774 3634<br>
                                                  email : sales[at]daunbiru.com</p>
                                </div>                                  
                            </aside>
                         <p class="copiii"> Copyright © Daunbiruengineering 2018. All right reserved. </p>   
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>