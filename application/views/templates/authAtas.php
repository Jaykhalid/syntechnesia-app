<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> <?= $title; ?> </title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url('vendor/'); ?>sbadmin2/css/sis.css" rel="stylesheet">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?= base_url('vendor/'); ?>sbadmin2/assets/image/illustrations/iconic.png">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg fixed-top py-3" id="authNav"> 
            <div class="container">
                <a class="navbar-brand" href="#registration">
                    <img class="mr-2" src="<?php echo base_url('vendor/'); ?>sbadmin2/assets/image/illustrations/iconic.png" width="78px" height="57px" alt="" />
                    SYNTECHNESIA
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">                     
                        <li class="nav-item"><a class="nav-link" href=" <?= base_url('Landingpage'); ?> ">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href=" <?= base_url('auth/login'); ?> ">Sign In</a></li>
                        <li class="nav-item"><a class="nav-link" href=" <?= base_url('masyarakat/registrationMasyarakat'); ?> ">Registrasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact"><i class="fas fa-phone-volume"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>