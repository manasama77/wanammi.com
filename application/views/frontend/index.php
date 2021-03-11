<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Adam PM">
    <meta name="description" content="Compant Profile">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title><?=$company_name;?></title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="<?=base_url('apple_touch_web_icon.png');?>">
    <link rel="shortcut icon" type="image/ico" href="<?=base_url('webicon.png');?>">
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="<?=base_url('vendor/colorlib/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('vendor/colorlib/css/owl.carousel.min.css');?>">
    <!--link rel="stylesheet" href="<?=base_url('vendor/colorlib/css/themify-icons.css');?>"-->
    <!--link rel="stylesheet" href="<?=base_url('vendor/colorlib/css/magnific-popup.css');?>"-->
    <link rel="stylesheet" href="<?=base_url('vendor/colorlib/css/animate.css');?>">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="<?=base_url('vendor/colorlib/css/normalize.css');?>">
    <link rel="stylesheet" href="<?=base_url('vendor/colorlib/css/style.css');?>">
    <link rel="stylesheet" href="<?=base_url('vendor/colorlib/css/responsive.css');?>">

    <!-- FANCYBOX -->
    <link href="<?=base_url('vendor/fancybox/jquery.fancybox.css');?>" rel="stylesheet">
    <script src="<?=base_url('vendor/colorlib/js/modernizr-2.8.3.min.js');?>"></script>

    <!-- FONT AWESOME -->
    <link href="<?=base_url('vendor/fortawesome/font-awesome/css/all.min.css');?>" rel="stylesheet" type="text/css">
    <script src="<?=base_url('vendor/fortawesome/font-awesome/js/all.min.js');?>"></script>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      .home-page { 
        background-position: 50% 50%;
        background-size: cover;
      }

      .center-block {
        display: block;
        float: center;
        margin-left: auto;
        margin-right: auto;
      }

      .element {
        .center-block();
      }
    </style>
</head>

<body data-spy="scroll" data-target="#primary-menu">

    <!--div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div-->
    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand logo">
                    <h3><img src="<?=base_url('assets/img/profile/'.$profile_path);?>" width="50px"> <?=$company_name;?></h3>
                </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home-page">Profile</a></li>
                    <li><a href="#group-page" id="menux">Menu</a></li>
                    <li><a href="#group-page" id="galleryx">Gallery</a></li>
                    <li><a href="#group-page" id="faqx">F.A.Q</a></li>
                    <li><a href="#contact-page">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->



    <!--Header-area-->
    <!--header style="background: #000000 url('<?=base_url('assets/img/profile/'.$profile_path);?>') no-repeat scroll center center / cover !important;" class=" header-area overlay full-height relative v-center" id="home-page"-->
    <header class="header-area overlay full-height  v-center" id="home-page">
        <div class="absolute anlge-bg"></div>
        <div class="container">
            <div class="row v-center">
                <div class="col-xs-12 col-md-5" style="margin-bottom:20px;">
                  <img src="<?=base_url('assets/img/profile/'.$profile_path);?>" width="400px">
                </div>
                <div class="col-xs-12 col-md-7 header-text">
                    <h2><?=$profile_title;?></h2>
                    <p><?=$profile_content;?></p>
                </div>
            </div>
        </div>
    </header>
    <!--Header-area/-->

    <section class="section-padding gray-bg justify-content-sm-center justify-content-md-center" id="group-page">
      <div class="container">
        <div class="row">
          <div class="col-12 justify-content-center text-center">
            <a class="btn btn-primary btn-lg" id="pills-menu-tab" data-toggle="pill" role="tab" href="#pills-menu" aria-controls="pills-menu" aria-selected="false">
              Menu
            </a>
            <a class="btn btn-primary btn-lg" id="pills-gallery-tab" data-toggle="pill" role="tab" href="#pills-gallery" aria-controls="pills-gallery" aria-selected="false">
              Gallery
            </a>

            <a class="btn btn-primary btn-lg" id="pills-faq-tab" data-toggle="pill" href="#pills-faq" role="tab" aria-controls="pills-faq" aria-selected="false">F.A.Q</a>
          </div>
        </div>
        <hr>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane active" id="pills-menu" role="tabpanel" aria-labelledby="pills-menu-tab">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <h2>MENU</h2>
                </div>
            </div>
              <div class="row">
              <?php
              $a = 1;
              foreach ($arr_menu as $key) {
              ?>
                <div class="col-xs-12 col-sm-4 col-md-4 mb-4">
                    <!--div class="single-team"-->
                        <a href="#<?=$key->id_menu;?>" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="<?=$key->id_menu;?>">
                          <img src="<?=base_url('assets/img/menu/'.$key->picture);?>" height="10%"  alt="">
                        </a>
                        <div class="collapse mb-4" id="<?=$key->id_menu;?>" style="padding:0px 5px 0px 5px ;">
                          <div class="card card-body bg-success text-left" style="padding:5px 5px 5px 5px ;">
                            <?=$key->description;?>
                          </div>
                        </div>
                        <br>
                    <!--/div-->
                </div>
                <?php
                if($a%3==0){
                  echo '</div><div class="row">';
                }

                $a++;
                ?>
              <?php } ?>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-gallery" role="tabpanel" aria-labelledby="pills-gallery-tab">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <h2>GALLERY</h2>
                </div>
            </div>
            <div class="row">
              <?php
              $ss = "";
              foreach ($arr_gallery as $key) {
                $ss .= base_url('assets/img/gallery/'.$key->path).",";
              ?>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <a rel="gallery" class="fancybox" href="<?=base_url('assets/img/gallery/'.$key->path);?>" style="z-index: 999999999;">
                                <img src="<?=base_url('assets/img/gallery/'.$key->path);?>" height="10%" alt="" style="z-index: 999999999;">
                            </a>
                        </div>
                    </div>
                </div>
              <?php } ?>
              <input type="hidden" class="ss" value="<?=$ss;?>">
            </div>
          </div>
          <div class="tab-pane fade" id="pills-faq" role="tabpanel" aria-labelledby="pills-faq-tab">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <h2>Frequently Asked Questions <small>(F.A.Q)</small></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class="panel-group" id="accordion">
                      <?php
                      foreach ($arr_faq as $key) {
                      ?>
                        <div class="panel">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#<?=$key->id_faq;?>"><?=$key->question;?></a>
                            </h4>
                            <div id="<?=$key->id_faq;?>" class="panel-collapse collapse">
                                <p><?=$key->answer;?></p>
                            </div>
                        </div>
                      <?php } ?>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <footer class="footer-area relative sky-bg" id="contact-page">
        <div class="absolute footer-bg"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <h2>Contact with us</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <address class="side-icon-boxes">
                            <input type="hidden" class="form-control" id="address" value="<?=$address;?>" readonly>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="<?=base_url('vendor/colorlib/img/location-arrow.png');?>" alt="">
                                </div>
                                <p><strong>Address: </strong> <?=$company_name;?> - <?=$address;?> <br /><?=$postal_code;?></p>
                            </div>
                        </address>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <address>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="<?=base_url('vendor/colorlib/img/phone-arrow.png');?>" alt="">
                                </div>
                                <p><strong>Telephone: </strong>
                                    Phone: <a href="callto:<?=$phone;?>"><?=$phone;?></a> <br>
                                  <?php
                                  if($fax != null || $fax != ""){
                                    echo 'Fax: <a>'.$fax.'</a> <br>';
                                  }
                                  ?>
                                  <?php
                                  if($whatsapp != null || $whatsapp != ""){
                                    echo 'Whatsapp: <a>'.$whatsapp.'</a> <br>';
                                  }
                                  ?>
                                </p>
                            </div>
                        </address>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <address>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="<?=base_url('vendor/colorlib/img/mail-arrow.png');?>" alt="">
                                </div>
                                <p><strong>E-mail: </strong>
                                    <a href="mailto:<?=$email;?>"><?=$email;?></a>
                                </p>
                            </div>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 pull-right">
                        <ul class="social-menu text-right x-left">
                          <?php
                          if($facebook != null || $facebook != ""){
                            echo '<li><a href="'.$facebook.'" target="_blank"><i class="fab fa-facebook"></i></a></li>';
                          }

                          if($twitter != null || $twitter != ""){
                            echo '<li><a href="'.$twitter.'" target="_blank"><i class="fab fa-twitter"></i></a></li>';
                          }

                          if($google_plus != null || $google_plus != ""){
                            echo '<li><a href="'.$google_plus.'" target="_blank"><i class="fab fa-google-plus"></i></a></li>';
                          }
                          ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <p>Modified by <a href="#">APM Web Dev</a> - &copy; Copyright 2019 All right reserved.  This template is made with <i class="fas fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com">Colorlib</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!--Vendor-JS-->
    <script src="<?=base_url('vendor/colorlib/js/jquery-1.12.4.min.js');?>"></script>
    <script src="<?=base_url('vendor/colorlib/js/bootstrap.min.js');?>"></script>
    <!--Plugin-JS-->
    <script src="<?=base_url('vendor/colorlib/js/owl.carousel.min.js');?>"></script>
    <script src="<?=base_url('vendor/colorlib/js/contact-form.js');?>"></script>
    <script src="<?=base_url('vendor/colorlib/js/jquery.parallax-1.1.3.js');?>"></script>
    <script src="<?=base_url('vendor/colorlib/js/scrollUp.min.js');?>"></script>
    <script src="<?=base_url('vendor/colorlib/js/magnific-popup.min.js');?>"></script>
    <script src="<?=base_url('vendor/colorlib/js/wow.min.js');?>"></script>
    <script src="<?=base_url('vendor/fancybox/jquery.fancybox.pack.js');?>"></script>
    <script src="<?=base_url('vendor/fancybox/jquery.mousewheel.pack.js');?>"></script>
    <script src="<?=base_url('vendor/jquery-slideshow/slideshow.min.js');?>"></script>
    <!--Main-active-JS-->
    <script src="<?=base_url('vendor/colorlib/js/main.js');?>"></script>
    <!--script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXMEWMFoWJkDx7hLCjV7rNjRpYwBpybsk"></script-->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
</body>

</html>

<script>
$(document).ready(function(){
  $('body').Lazy({
    scrollDirection: 'vertical',
    effect: 'fadeIn'
  });
  
  var ss = $('.ss').val();
  ss = ss.slice(0, -1);
  ss = ss.split(",");
  console.log(ss);
  var slideshow = new Slideshow({
    backgroundElementId:"home-page",
    tickInterval: 10000,
    transitionTime: 800

  });
  slideshow.setImages(ss);
  slideshow.run();





  $('#menux').on('click', function(e){  
    $('#pills-menu-tab').trigger('click');
  });

  $('#galleryx').on('click', function(e){  
    $('#pills-gallery-tab').trigger('click');
  });

  $('#faqx').on('click', function(e){  
    $('#pills-faq-tab').trigger('click');
  });

  //initMap();
  $('.ti-heart').on('click', function(){
    window.location.replace('<?=site_url('login');?>');
  });
  $(".fancybox").fancybox({
    autoSize : true,
    margin : [100, 0, 0, 0],
    beforeShow: function () {
      $.fancybox.wrap.bind("contextmenu", function (e) {
        return false; 
      });
    }
  });
});
</script>