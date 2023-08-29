<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
      <!--  <meta name="description" content="Spruha - PHP Admin Panel Dashboard Template">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="php dashboard, php template, admin dashboard bootstrap, bootstrap admin theme, admin, php admin panel, bootstrap admin template, admin dashboard template, admin template bootstrap, php admin dashboard, dashboard template, dashboard template bootstrap, bootstrap admin, admin panel template, dashboard">        
         TITLE -->
        <title> ProtocolX Network - HomePage </title>
        <!-- FAVICON -->
        <link rel="icon" href="assets/img/brand/icon.png?vs=<?php echo rand(100,99999999);?>">
		<!-- BOOTSTRAP CSS -->
		<link  id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css?vs=<?php echo rand(100,99999999);?>" rel="stylesheet"/>
		<!-- ICONS CSS -->
		<link href="assets/plugins/web-fonts/icons.css?vs=<?php echo rand(100,99999999);?>" rel="stylesheet" />
		<link href="assets/plugins/web-fonts/font-awesome/font-awesome.min.css?vs=<?php echo rand(100,99999999);?>" rel="stylesheet">
		<link href="assets/plugins/web-fonts/plugin.css?vs=<?php echo rand(100,99999999);?>" rel="stylesheet" />
		<!-- STYLE CSS -->
		<link href="assets/css/style.css?vs=<?php echo rand(100,99999999);?>" rel="stylesheet">
		<link href="assets/css/plugins.css?vs=<?php echo rand(100,99999999);?>" rel="stylesheet">
    </head>
    <body class="app sidebar-mini ltr landing-page horizontalmenu">
        <!-- LOADEAR -->
		<div id="global-loader">
			<img src="assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- END LOADEAR -->
<!-- Large Modal -->
<div class="modal" id="ConnectWallet">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content modal-content-demo">
									<div class="modal-header text-center">
										<h6 class="modal-title">Connect Wallet</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button">
										<span aria-hidden="true">×</span>
										</button>
									</div>
									<div class="modal-body text-center">
										<h6>Connect by Platform</h6>
										<a href="#" class="btn ripple btn-min w-sm btn-primary col-sm-12"><img src="assets/img/brand/icon.png" height="30" > Connect PRUX PASS (Available Soon)</a>
									</div>
									<div class="modal-footer"></div>
								</div>
							</div>
						</div>
						<!--End Large Modal -->
        <!-- PAGE -->
        <div class="page">
            <div class="page-main">
                <!-- HEADER -->
                
                <div class="main-header side-header">
                    <div class="main-container container-fluid">
                        <div class="main-header-left">
                            <a class="main-header-menu-icon" href="javascript:void(0);"
                                id="mainSidebarToggle"><span></span></a>
                            <div class="hor-logo">
                                <a class="main-logo" href="./">
                                    <img src="assets/img/brand/logo.png" class="header-brand-img desktop-logo"
                                        alt="logo">
                                    <img src="assets/img/brand/logo-light.png" class="header-brand-img desktop-logo-dark"
                                        alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="main-header-center">
                            <div class="responsive-logo">
                                <a href="./"><img src="assets/img/brand/logo.png" class="mobile-logo"
                                        alt="logo"></a>
                                <a href="./"><img src="assets/img/brand/logo-light.png" class="mobile-logo-dark"
                                        alt="logo"></a>
                            </div>
                        </div>
                        <div class="main-header-right">
                            <button class="navbar-toggler navresponsive-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                            </button><!-- Navresponsive closed -->
                            <div
                                class="navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2 ms-auto">
                                        <!-- SEARCH -->
                                        <div class="header-nav-right p-3">
                                            <a   data-bs-target="#ConnectWallet" data-bs-toggle="modal" href="javascript:void(0);" class="btn ripple btn-min w-sm btn-primary me-2">Connect Wallet PRUX </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END HEADER -->

                <!-- SIDEBAR -->
                
                <div class="landing-top-header overflow-hidden">
                    <div class="top sticky">
                    <?php require_once('path/siderbar.php'); ?>
                    </div>
                   <?php require_once('sessions/home.php'); ?>
                </div>
                <!-- END SIDEBAR -->
                