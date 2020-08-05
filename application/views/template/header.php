<!DOCTYPE html>
<html lang="en">
<head> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/lambang_crast.png" width="20px">
  <title>Crast FM</title>

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

  <div class="site-wrap fixed-top">
    <div class="site-navbar mt-4 bg-light">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-5 col-md-5 col-lg-1">
            <a class="navbar-brand" href="#">
              <img src="<?php echo base_url();?>assets/images/lambang_crast.png" width="50" height="50" alt="" loading="lazy" alt="PODCRAST" class="logo-brand-display"><strong><p class="text-style-brand pt-2 text-black">&nbsp;PODCRAST</p></strong></img>
            </a>
          </div>
          <div class="col-7 col-md-7 col-lg-11">
            <nav class="site-navigation text-right text-md-right" role="navigation">
              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="home active" id="home">
                  <a class="text-black" href="<?php echo base_url('homePage');?>">Home</a>
                  </li>
                  <li><a class="text-black" href="<?php echo site_url('Schedule')?>">Schedule</a></li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Music </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item music-navbar-hover" href="<?php echo site_url('music/tanggaLagu');?>">Chart</a>
                        <a class="dropdown-item music-navbar-hover" href="<?php echo site_url('music/playlistLagu');?>">Playlist</a>
                        <a class="dropdown-item music-navbar-hover" href="#">Info Music</a>
                      </div>
                  </li>
                  <li><a class="text-black" href="<?php echo site_url('announcer')?>">Announcer</a></li>
                  <li><a class="text-black" href="<?php echo site_url('management')?>">Management</a></li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Article </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item music-navbar-hover" href="<?php echo site_url('article/getArtikel/1');?>">Feature</a>

                        <a class="dropdown-item music-navbar-hover" href="<?php echo site_url('article/getArtikel/2');?>">Hype</a>
                        <a class="dropdown-item music-navbar-hover" href="<?php echo site_url('article/getArtikel/3');?>">Review</a>

                      </div>
                  </li>
                  <li><a class="text-black" href="about.html">Event</a></li>
                  <li><a class="text-black" href="about.html">About US</a></li>
                  <?php if (empty($id)){ ?>
                    <li><a class="text-black" href="<?php echo site_url('auth/login');?>">Login</a></li>
                  <?php } else { ?>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $username ?> </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">  
                        <?php if ($role == '1') {?>                                   
                        <a class="dropdown-item music-navbar-hover" href="<?php echo site_url('User_management');?>">Manajemen Pengguna</a>
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

<div class="site-mobile-menu">
  <div class="site-mobile-menu-header bg-dark ">
    <div class="site-mobile-menu-close mt-3 bg-dark ">
      <span class="icon-close2 js-menu-toggle bg-dark text-white"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body bg-dark "style="color: #ffffff"></div>
  </div> <!-- .site-mobile-menu -->