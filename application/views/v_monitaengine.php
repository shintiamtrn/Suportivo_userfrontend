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
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/produk.css"  type="text/css">
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/myslide.css"  type="text/css">
     <script src="<?php echo base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url()?>assets/js/popper.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url()?>assets/js/mdb.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url()?>assets/js/produk.js" type="text/javascript"></script>
  </head>
<body>

<!--top scroll -->
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
<nav class="navbar navbar-expand-sm navbar-white bg-white">
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
                            <div>
                              <h4>Online Monitoring System</h4>
                    <ul>
                              <li><a  href="<?php echo base_url();?>produk/monitaamr">-Monita AMR (Automatic Meter Reading)</a></li>
                              <li><a  href="<?php echo base_url();?>produk/monitaengine">-Monita Engine Protection</a></li>
                              <li><a  href="<?php echo base_url();?>produk/monitamarine">-Monita Marine (Vessel Monitoring System)</a></li>
                              <li><a  href="<?php echo base_url();?>produk/monitapembangkit">-Monita Pembangkit (Power Generator) </a></li>
                              <li><a  href="<?php echo base_url();?>produk/monitapenyulang">-Monita Penyulang (Feeder)</a></li>
                    </ul>
                            </div>
                            <div>
                              <h4>Portable Analyzer</h4>
                               <ul>
                                 <li>
                                   <a  href="<?php echo base_url();?>produk/halizareciprocating">-Haliza Reciprocating Machinery Analyzer</a>
                                   </li>
                                   <li>
                                   <a  href="<?php echo base_url();?>produk/halizareciprocating">-Haliza Rotating Machinery Analyzer</a>
                                   </li>
                                 </ul>
                              </div>
                          </div>
                      </div>
                  </li>
              </ul>
          </nav>
      </form>
   </div>
</nav>


<!--megamenu -->
<script src="<?php echo base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/cbpHorizontalMenu.min.js" type="text/javascript"></script>
<script>
  $(function() {
    cbpHorizontalMenu.init();
  });
</script>
             
<!--tab -->
<main>
  
    <input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1">Tinjauan</label>
  <input id="tab2" type="radio" name="tabs">
    <label for="tab2">Spesifikasi</label>
  <input id="tab3" type="radio" name="tabs">
    <label for="tab3">Support</label>
  <section id="content1">
 <div class="container">
  <div class="row">
   <div class="col">
    <div class="mySlides">
    <?php
          $d = $this->db->query("Select*from produk_media Where id_media=22")->row()->media;
          echo "<img  height=350 width=350 src=\"" . base_url() . "images/$d\" />";
          ?>
  </div>
  <div class="mySlides">
    <?php
          $d = $this->db->query("Select*from produk_media Where id_media=32")->row()->media;
          echo "<img  height=350 width=450 src=\"" . base_url() . "images/$d\" />";
          ?>
  </div>
  <div class="mySlides">
    <?php
          $d = $this->db->query("Select*from produk_media Where id_media=22")->row()->media;
          echo "<img  height=350 width=350 src=\"" . base_url() . "images/$d\" />";
          ?>
  </div>
  <div class="mySlides">
    <?php
          $d = $this->db->query("Select*from produk_media Where id_media=32")->row()->media;
          echo "<img  height=350 width=450 src=\"" . base_url() . "images/$d\" />";
          ?>
  </div>
  <div class="mySlides">
    <?php
          $d = $this->db->query("Select*from produk_media Where id_media=22")->row()->media;
          echo "<img  height=350 width=350 src=\"" . base_url() . "images/$d\" />";
          ?>
  </div> 
  <div class="mySlides">
    <?php
          $d = $this->db->query("Select*from produk_media Where id_media=32")->row()->media;
          echo "<img  height=350 width=450 src=\"" . base_url() . "images/$d\" />";
          ?>
  </div>
    <br>
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>


  <div class="row">
    <div class="column">
      <?php
          $d = $this->db->query("Select*from produk_media Where id_media=22")->row()->media;
          echo "<img class=demo cursor height=100 width=90 onclick=currentSlide(1) src=\"" . base_url() . "images/$d\" />";
          ?>
    </div>
    <div class="column">
      <?php
          $d = $this->db->query("Select*from produk_media Where id_media=32")->row()->media;
          echo "<img class=demo cursor height=100 width=90 onclick=currentSlide(2) src=\"" . base_url() . "images/$d\" />";
          ?>
    </div>
    <div class="column">
      <?php
          $d = $this->db->query("Select*from produk_media Where id_media=22")->row()->media;
          echo "<img class=demo cursor height=100 width=90 onclick=currentSlide(3) src=\"" . base_url() . "images/$d\" />";
          ?>
    </div>
    <div class="column">
      <?php
          $d = $this->db->query("Select*from produk_media Where id_media=32")->row()->media;
          echo "<img class=demo cursor height=100 width=90 onclick=currentSlide(4) src=\"" . base_url() . "images/$d\" />";
          ?>
    </div>
    <div class="column">
      <?php
          $d = $this->db->query("Select*from produk_media Where id_media=22")->row()->media;
          echo "<img class=demo cursor height=100 width=90 onclick=currentSlide(5) src=\"" . base_url() . "images/$d\" />";
          ?>
    </div>    
    <div class="column">
      <?php
          $d = $this->db->query("Select*from produk_media Where id_media=32")->row()->media;
          echo "<img class=demo cursor height=100 width=90 onclick=currentSlide(6) src=\"" . base_url() . "images/$d\" />";
          ?>
    </div>
  </div>
       </div>

<div class="col">
 <div class="col brief">
  <div class="box title">
       <h2 class="namaproduk">Bluboo S8
        <small id="product-model-name">
    Plus
        </small>
       </h2>
       <hr>
       <?php
          $d = $this->db->query("Select*from sub_category Where id_sub_category=1")->row()->deskripsi;
          echo "<p>$d</p>";
          ?>
          <br>
          <?php
             $d = $this->db->query("Select*from produk_media Where id_media=20")->row()->media;
             echo "
             <video height=150 width=150 controls=controls></iframe>
               <source type=video/mp4 src=\"" . base_url() . "images/$d\" />
               </video>";
               ?> 
  </div>
 </div>                                                                                      
</div> 
  </div>
 </div>
 <br>
  </section>

 <section id="content2">
  <div class="container"> 
  <h4>Monita Engine Protection</h4>            
  <table class="table">
    <thead>
      <tr class="supp">
        <th>Spesifikasi</th>
        <th>Keterangan</th>
      </tr>
    </thead>
    <?php 
    if (! empty ($data)){
      foreach ($data->result() as $d) {
        ?>
    <tbody>
      <tr>
        <td>
        <?php echo "$d->nama_spek"?>
        </td>
        <td>
        <?php echo "$d->value_spek";?>
        </td>
      </tr>
    </tbody>
    <?php
  }
}
     ?>
  </table>
</div>
  </section>
  
  <section id="content3">
    <div class="container">
  <h4>FIRMWARE</h4>   
  <table class="table table-striped">
    <thead>
      <tr class="supp">
        <th>Waktu Update</th>
        <th>Versi</th>
        <th>Keterangan</th>
        <th>Download</th>
      </tr>
    </thead>
   <tbody>
      <?php
        $db = $this->db->get_where('produk_software', array ('id_sub_category' =>2));
        foreach ($db->result() as $key) {
          echo "<tr>";
          echo "<td>" . $key->waktu_update . "</td>";
          echo "<td>" . $key->versi . "</td>";
          echo "<td>" . $key->keterangan . "</td>";
          echo "<td><a href=\"" . base_url().'download/lakukan_download2/' . $key->id_software . "\">" . $key->nama_software . "</a></td>";
          echo "</tr>";
        }
      ?>         
    </tbody>
  </table>
  <h4>DOKUMEN</h4>           
  <table class="table table-striped">
    <thead>
      <tr class="supp">
        <th>Waktu Update</th>
        <th>Versi</th>
        <th>Keterangan</th>
        <th>Download</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $db = $this->db->get_where('download', array ('id_sub_category' =>1));
        foreach ($db->result() as $key) {
          echo "<tr>";
          echo "<td>" . $key->waktu_update . "</td>";
          echo "<td>" . $key->versi . "</td>";
          echo "<td>" . $key->keterangan . "</td>";
          echo "<td><a href=\"" . base_url().'download/lakukan_download/' . $key->id . "\">" . $key->nama_dokumen . "</a></td>";
          echo "</tr>";
        }
      ?>         
    </tbody>
  </table>
</div>
</section>
</main>
<!---FOOTER -->
<footer>
<div class="footer" id="footer">
<div class="container">
<div class="row">
  <aside id="text-5">
     <h3>About Us</h3>      

  <div>
     <ul>
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
  <aside>
     <h3>Contact Us</h3>      
     <div class="mami"><p>PT.Daun Biru Engineering<br>
                                                  Admin 1 : +62 21 8774 3652<br>
                                                  Admin 2 : +62 21 8774 3615<br>
                                                  Fax : +62 21 8774 3634<br>
                                                  email : sales[at]daunbiru.com</p>
     </div>                                  
  </aside>
<p class="copy"> Copyright © Daunbiruengineering 2018. All right reserved. </p>   
</div>
</div>
</div>
</footer>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
  </body>
</html>