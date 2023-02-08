<?php
// session_start();
// $phone_no = $_SESSION['id'];
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>FTAPL</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />-->
<meta http-equiv="cache-control" content="no-cache" />
    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

</head>
<div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.php">
                                <!-- <img src="assets/images/royal-white.png" alt="Logo"> -->
                                <p> Fashion Trades</p>
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="index.php" 
                                            aria-label="Toggle navigation">HOME</a>
                                    </li>
                                  
                                    <li class="nav-item">
                                        <a href="grievance_redressal.php" aria-label="Toggle navigation">GRIEVANCE REDRESSAL</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="support.php" 
                                            aria-label="Toggle navigation">CONTACT US</a>
                                    </li>
                                     <!-- <li class="nav-item">
                                        <a href="payment.php" 
                                            aria-label="Toggle navigation">PAYMENT</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">MORE</a>
                                        <ul class="sub-menu collapse" id="submenu-1-4">
                                            <li class="nav-item"><a href="ombudsman_policy.php">OMBUDSMAN POLICY</a>
                                            </li>
                                            <li class="nav-item"><a href="interest_rate_policy.php">INTEREST RATE POLICY</a></li>
                                            <li class="nav-item"><a href="fair_practice_code.php">FAIR PRACTICE CODE</a></li>
                                            <li class="nav-item"><a href="outsource.php">OUTSOURCE POLICY</a></li>

                                        </ul>
                                    </li>
                                      <!-- <li class="nav-item">
                                          <?php if(empty($phone_no)){?>
                                        <a href="login.php" aria-label="Toggle navigation">LOGIN</a>
                                        <?php }else{ ?>
                                     <a href="logout.php" aria-label="Toggle navigation">LOGOUT</a>
                                        <?php } ?>
                                    </li> -->
                                </ul>
                            </div> <!-- navbar collapse -->
                           
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->
