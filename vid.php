<?php
/**
 * Created by PhpStorm.
 * User: rjohnson
 * Date: 7/14/18
 * Time: 3:46 PM
 */

// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://dev-rjmdb.pantheonsite.io/api/projects',
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
));
// Send the request & save response to $resp
$data = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);

$projectsx = json_decode($data,true);
$projects = json_decode($data);
//print_r($projects);        // Dump all data of the Array

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>RocJohnson.com</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">


  <style>
    /* Required for full background image */

    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 100vh;
      }
    }

    .top-nav-collapse {
      background-color: #563e91 !important;
    }

    .navbar:not(.top-nav-collapse) {
      background: transparent !important;
    }

    @media (max-width: 991px) {
      .navbar:not(.top-nav-collapse) {
        background: #563e91 !important;
      }
    }
    }

    .rgba-gradient {
      background: -moz-linear-gradient(45deg, rgba(213, 15, 61, 0.6), rgba(13, 17, 198, 0.69) 100%);
      background: -webkit-linear-gradient(45deg, rgba(213, 15, 61, 0.6), rgba(13, 17, 198, 0.69) 100%);
      background: linear-gradient(to 45deg, rgba(213, 15, 61, 0.6), rgba(13, 17, 198, 0.69) 100%);
    }
  </style>
</head>

<body>

<!-- Start your project here-->




<!-- Main navigation -->
<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto smooth-scroll">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about" data-offset="90">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features" data-offset="90">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services" data-offset="90">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#opinions" data-offset="30">Opinions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#team" data-offset="90">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact" data-offset="90">Contact</a>
          </li>
        </ul>
        <!-- Social Icon  -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link">
              <i class="fa fa-facebook light-green-text-2"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link">
              <i class="fa fa-twitter light-green-text-2"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link">
              <i class="fa fa-instagram light-green-text-2"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
  <!-- Full Page Intro -->
  <div class="view">
    <video class="video-intro" poster="https://mdbootstrap.com/img/Photos/Others/background.jpg" playsinline autoplay muted loop>
      <!--<source src="vid/544225670-640_adpp_is.mp4" type="video/mp4">-->
      <!--<source src="vid/483291049-640_adpp_is.mp4" type="video/mp4">-->
      <!--<source src="vid/845840292-640_adpp_is.mp4" type="video/mp4">-->
      <!--<source src="vid/598602128-640_adpp_is.mp4" type="video/mp4">-->
      <source src="vid/541903908-640_adpp_is.mp4" type="video/mp4">
      <!--<source src="vid/473290089-640_adpp_is.mp4" type="video/mp4">-->
      <!--<source src="vid/610205932-640_adpp_is.mp4" type="video/mp4">-->
      <!--<source src="vid/472714963-640_adpp_is.mp4" type="video/mp4">-->
    </video>
    <!-- Mask & flexbox options-->
    <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container px-md-3 px-sm-0">
        <!--Grid row-->
        <div class="row wow fadeIn">
          <!--Grid column-->
          <div class="col-md-12 mb-4 white-text text-center wow fadeIn">
            <h3 class="display-3 font-weight-bold white-text mb-0 pt-md-5 pt-5">Creative Agency</h3>
            <hr class="hr-light my-4 w-75">
            <h4 class="subtext-header mt-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit deleniti consequuntur nihil.</h4>
            <a href="#!" class="btn btn-rounded btn-outline-white">
              <i class="fa fa-home"></i> Visit us
            </a>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
</header>





<!-- /Start your project here-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>

</body>

</html>

