<!DOCTYPE html>
<html lang="en">
<head> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  
  <title>Crast FM - Komunitas Radio Ilkom</title>
  
  <meta name="google-site-verification" content="SEZfhmzJS_l21oAi3ggFjOIJ3G0zd5ApcfEUPjmNI3U" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Crast FM merupakan sebuah radio komunitas milik Ilmu Komunikasi Universitas
Pembangunan Nasional “Veteran” Yogyakarta. Radio ini berdiri pada 14 Mei 2003 di
Babarsari, Sleman, Yogyakarta (Kampus II UPN “Veteran” Yogyakarta). Tagline dari Crast
sendiri adalah Smart People Think Different. Crast FM memiliki pendengar setia yang biasa
dipanggil dengan sebutan Smart Listener">
  <meta name="keywords" content="radio,yogyakarta,UPN,KomunitasRadio,CrastFM,1078CrastFM,IlmuKomunikasiUPN,Komunikasi,Announcer,Smart,People,Think,Different,Veteran,Yogyakarta ">
  
  <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/lambang_crast.png" width="20px">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700"> 
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/icomoon/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mediaelementplayer.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fl-bigmug-line.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/aos.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/header.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/homearticle.css">
  <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery-migrate-3.0.1.min.js"></script>
 
  


</head>
<body>
  <div class="site-wrap fixed-top opacity  ">
    <div class="site-navbar mt-4 bg-navbar ">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-5 col-md-5 col-lg-1 col-sm-4">
          <a class="navbar-brand" href="#">
            <img src="<?php echo base_url();?>assets/images/lambang_crast.png" width="50" height="50" alt="" loading="lazy" alt="CRASTFM" class="logo-brand-display"><strong><p class="text-style-brand pt-2 text-black">CRASTFM</p></strong></img>
          </a>
        </div>
        
        <div class="col-7 col-md-7 col-lg-11 col-sm-8">
          <nav class="site-navigation text-right text-md-right" role="navigation">
            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
              <a href="#" class="site-menu-toggle js-menu-toggle text-white active">
                <span class="icon-menu h3"></span>
              </a>
            </div>
            <ul class="site-menu js-clone-nav d-none d-lg-block">
              <?php if($page=="homePage"){?>
                <li class="home navbar-active" id="home">
                  <?php } else {?>
                    <li class="home" id="home">
                      <?php } ?>
                      <a class="text-black" href="<?php echo base_url('homePage');?>">Home</a>
                    </li>
                    <?php if($page=="schedulePage"){?>
                      <li class="schedule navbar-active">
                        <?php } else {?>
                          <li class="schedule">
                            <?php }?>
                            <a class="text-black" href="<?php echo site_url('Schedule')?>">Schedule</a>
                          </li>
                          <?php if($page=="musicPage"){?>
                <li class="nav-item dropdown navbar-active">
                  <?php } else {?>
                    <li class="nav-item dropdown ">
                      <?php }?>
                      <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Music </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item music-navbar-hover" href="<?php echo site_url('music/tanggaLagu');?>">Chart</a>
                    <a class="dropdown-item music-navbar-hover" href="<?php echo site_url('music/playlistLagu');?>">Playlist</a>
                    <!-- <a class="dropdown-item music-navbar-hover" href="<?php echo site_url('article/getArtikel/4');?>">Info Music</a> -->
                  </div>
                </li>
              <?php if($page=="announcerPage"){?>
                <li class="announcer navbar-active">
                  <?php } else {?>
                <li class="announcer">
                  <?php }?>
                  <a class="text-black" href="<?php echo site_url('announcer')?>">Announcer</a>
                </li>
                <?php if($page=="managementPage"){?>
                <li class="managementPage navbar-active">
                  <?php } else {?>
                    <li class="managementPage ">
                      <?php }?>
                      <a class="text-black" href="<?php echo site_url('management')?>">Management</a>
                </li>
                <?php if($page=="articlePage"){?>
                  <li class="nav-item navbar-active dropdown">
              <?php } else {?>
                <li class="nav-item  dropdown">
                  <?php }?>
                  <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Article </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item music-navbar-hover" href="<?php echo site_url('article/getArtikel/1');?>">Feature</a>
                    <a class="dropdown-item music-navbar-hover" href="<?php echo site_url('article/getArtikel/2');?>">Hype</a>
                    <a class="dropdown-item music-navbar-hover" href="<?php echo site_url('article/getArtikel/3');?>">Review</a>
                    </div>
                  </li>
              <?php if($page=="eventPage"){?>
                <li class="navbar-active">
                  <?php } else {?>
                <li class="">
                  <?php }?>
                  <a class="text-black" href="<?php echo base_url('Event');?>">Event</a>
                </li>
              <?php if($page=="aboutPage"){?>
                <li class="navbar-active">
                  <?php } else {?>
                    <li class="">
                      <?php }?>
                      <a class="text-black" href="<?php echo site_url('AboutUs')?>">About US</a>
                    </li>
                    <?php if (empty($id)){ ?>
                      <li><a class="text-black" href="<?php echo site_url('auth/login');?>">Login</a></li>
              <?php } else { ?>
                <?php if($page=="authPage"){?>
                  <li class="nav-item navbar-active dropdown">
                    <?php }else{?>
                <li class="nav-item dropdown">
                  <?php }?>  
                  <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $username ?> </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">  
                    <?php if ($role == '1') {?>                                   
                      <a class="dropdown-item music-navbar-hover" href="<?php echo site_url('User_management');?>">Manajemen Pengguna</a>
                      <a class="dropdown-item music-navbar-hover" href="<?php echo site_url('Komen_management');?>">Manajemen Komentar</a>
                      <a class="dropdown-item music-navbar-hover" href="<?php echo site_url('management_link');?>">Manajemen Link</a>
                      <a class="dropdown-item music-navbar-hover" href="<?php echo site_url('event/getAll');?>">Manajemen Event</a>
                    <?php } ?>
                    <a class="dropdown-item music-navbar-hover" href="<?php echo site_url('auth/logout');?>">LogOut</a>                                                  
                    </div>
                  </li>
              <?php }; ?>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="site-mobile-menu ">
  <div class="site-mobile-menu-header  ">
    <div class="site-mobile-menu-close mt-3 ">
      <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body  "></div>
  </div> <!-- .site-mobile-menu -->

  