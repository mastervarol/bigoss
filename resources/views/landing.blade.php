<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>BIGOSS</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="{{asset('feassets/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css"/>
        <script src="https://use.fontawesome.com/8d7884ed69.js"></script>
        <link href="{{asset('feassets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="{{asset('feassets/css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('feassets/vendor/swiper/css/swiper.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('feassets/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="{{asset('feassets/css/layout.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>

        <style>
            .promo-block:before {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: -1;
                background: rgba(255,255,255,0);
                background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,21,0,0.9) 90%, rgba(231,56,39,1) 100%);
                background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,255,255,0)), color-stop(90%, rgba(255,21,0,0.9)), color-stop(100%, rgba(231,56,39,1)));
                background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,21,0,0.9) 90%, rgba(231,56,39,1) 100%);
                background: -o-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,21,0,0.9) 90%, rgba(231,56,39,1) 100%);
                background: -ms-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,21,0,0.9) 90%, rgba(231,56,39,1) 100%);
                background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,21,0,0.9) 90%, rgba(231,56,39,1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e73827', GradientType=0 );
                    content: " ";
            }

            .promo-block .promo-block-title {
                padding-top: 10%; 
                font-size: 120px;
                color: #fff;
                }

            .top-btn{
                margin-top: 10%;
            }
            .promo-block-text{
                margin-top: 3%;
                font-size: 80pt;
            }
            
        </style>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo img-responsive" style="max-width: 350px; width: 350px;">
                            <a class="logo-wrap img-responsive" href="#body">
                                <img class="logo-img logo-img-main img-responsive" src="{{asset('feassets/img/dpm4-putih.png')}}" alt="Asentus Logo" style="max-width: 350px; width: 350px;">
                                <img class="logo-img logo-img-active img-responsive" src="{{asset('feassets/img/dpm4-hitam.png')}}" alt="Asentus Logo" style="max-width: 350px; width: 350px;">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#about">Tentang</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#layanan">Layanan</a></li>
                                {{-- <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#contact">Contact</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        <div class="promo-block">
            <div class="container js_nav-item">
                <div class="row">
                    <div class="col-md-8">
                        <div class="">
                            <div class="typewriter">
                            <img class="img-responsive promo-block-title" src="{{asset('feassets/img/bigoss-slide-putih.png')}}" style="margin-left: auto; margin-right: auto; max-height: 300px">

                            </div>
                            <p class="promo-block-text">Satu Akses, Semua Layanan</p>
                        </div>
                    </div>
                    <div class="col-md-4 top-btn">                
                        <a class="btn-theme btn-theme-md btn-white-bg text-uppercase" style="box-shadow: 2px 2px 20px #888888;  border:5px solid #ccc;" href="#layanan" title="Intro Video"><i class="btn-icon icon-arrow-down"></i> Lihat Layanan</a>
                    </div>
                </div>
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========<-->
        <!-- Products -->
        <div id="about">
            <div class="container content-lg">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Tentang BIGOSS</h2>
                        <p>BIGOSS merupakan sebuah sistem yang memayungi aplikasi-aplikasi yang dioperasikan oleh Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kabupaten Badung</p>
                    </div>
                    <div class="col-sm-6">
                        <h2>Tujuan BIGOSS</h2>
                        <p>Tujuan dibangunnya sistem ini adalah untuk membantu masyarakat dalam mendapatkan pelayanan secara efektif dan juga petugas pada Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kabupaten Badung untuk menangani beberapa proses yang berkaitan dengan manajemen perizinan</p>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Products -->

        <!-- Service -->
        <div id="layanan">
            <div class="bg-color-sky-light" data-auto-height="true">
                <div class="content-lg container">
                    <div class="row text-center margin-b-40">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2>Layanan pada BIGOSS</h2>
                            <!-- <p>BIGOSS adalah sistem informasi layanan Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu, basang seduk sing ngidang mikir, basang betek nyanget sing ngidang mikir...</p> -->
                        </div>
                    </div>
                    <div class="row row-space-2 margin-b-4">
                        <div class="col-sm-4 sm-margin-b-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <img class="service-icon" src="{{asset('feassets/img/bigoss/siaplapor-new.png')}}" alt="Asentus Logo" style="margin-left: auto; margin-right: auto; height: 75px;">
                                </div>
                                <div class="service-info" style="text-align: center;">
                                    <p class="margin-b-5">Ajukan kritik dan saran anda kepada kami</p>
                                </div>
                                <a href="{{url('siaplapor')}}" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                        <div class="col-sm-4 sm-margin-b-4">
                            <div class="service bg-color-base" data-height="height">
                                <div class="service-element">
                                    <img class="service-icon" src="{{asset('feassets/img/bigoss/antrian-new.png')}}" alt="Asentus Logo" style="margin-left: auto; margin-right: auto; height: 50px;">
                                </div>
                                <div class="service-info" style="text-align: center;">
                                    <p class="color-white margin-b-5">Silahkan antri konsultasi izin anda disini</p>
                                </div>
                                <a href="{{url('antrianonline')}}" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <img class="service-icon" src="{{asset('feassets/img/bigoss/undagi-new.png')}}" alt="Asentus Logo" style="margin-left: auto; margin-right: auto; height: 75px;">
                                </div>
                                <div class="service-info" style="text-align: center;">
                                    <p class="margin-b-5">Dapatkan desain rumahmu GRATIS!!</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <!--// end row -->

                    <div class="row row-space-2">
                        <div class="col-sm-4 sm-margin-b-4">
                            <div class="service bg-color-base" data-height="height">
                                <div class="service-element">
                                    <img class="service-icon" src="{{asset('feassets/img/badungkecil2.png')}}" alt="Asentus Logo" style="margin-left: auto; margin-right: auto; height: 75px;">
                                </div>
                                <div class="service-info" style="text-align: center;">
                                    <h5 class="color-white">Sistem Informasi Manajemen Perizinan Online (SIMPONIE)</h5>
                                    <p class="color-white margin-b-5">Gunakan SIMPONIE (SIUP dan TDP)</p>
                                </div>
                                <a href="http://simponie.badungkab.go.id/simponiebadungkab/" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                        <div class="col-sm-4 sm-margin-b-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <img class="service-icon" src="{{asset('feassets/img/bigoss/bkpm.jpg')}}" alt="Asentus Logo" style="margin-left: auto; margin-right: auto; height: 75px;">
                                </div>
                                <div class="service-info" style="text-align: center;">
                                    <h5>Sistem Pelayanan Informasi dan Perizinan Investasi Secara Elektronik (SPIPISE)</h5>
                                    <p class="margin-b-5">Gunakan SPIPISE (Izin Prinsip PMA dan PMDN)</p>
                                </div>
                                <a href="http://online-spipise.bkpm.go.id" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                        <div class="col-sm-4 sm-margin-b-4">
                            <div class="service bg-color-base" data-height="height">
                                <div class="service-element">
                                    <img class="service-icon" src="{{asset('feassets/img/bigoss/laperon-new.png')}}" alt="Asentus Logo" style="margin-left: auto; margin-right: auto; height: 75px;">
                                </div>
                                <div class="service-info" style="text-align: center;">
                                    <p class="color-white margin-b-5">Gunakan LAPERON (ITR, IMB, Izin Gangguan, TDUP, dan SIUP-MB)</p>
                                </div>
                                <a href="http://simaniz.dpmptsp.badungkab.go.id/newperizinan/login.php" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Service -->

        <!-- Promo Banner -->
        {{-- <div class="promo-banner">
            <div class="container-sm content-lg">
                <h2 class="promo-banner-title">Download</h2>
                <p class="promo-banner-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                <a class="btn-theme btn-theme-md btn-white-bg text-uppercase" href="#"><i class="btn-icon icon-control-play"></i> Download from Play store</a>
            </div>
        </div> --}}
        <!-- End Promo Banner -->
    
        <!-- Contact -->
        {{-- <div id="contact">
            <!-- Google Map -->
            <div class="gmap">
                <div id="map" class="map height-400"></div>
                <address class="gmap-address">
                    <p class="color-heading margin-b-0">PTSP PELAYANAN TERPADU SATU PINTU</p>
                </address>
            </div>
            <!-- End Google Map -->
        </div> --}}
        <!-- End Contact -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="{{asset('feassets/img/logo-dark.png')}}" alt="Aironepage Logo">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="fweight-700" href="#">BIGOSS</a> 2017</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="{{asset('feassets/vendor/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('feassets/vendor/jquery-migrate.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('feassets/vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="{{asset('feassets/vendor/jquery.easing.js')}}" type="text/javascript"></script>
        <script src="{{asset('feassets/vendor/jquery.back-to-top.js')}}" type="text/javascript"></script>
        <script src="{{asset('feassets/vendor/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('feassets/vendor/jquery.wow.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('feassets/vendor/swiper/js/swiper.jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('feassets/vendor/magnific-popup/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('feassets/vendor/masonry/jquery.masonry.pkgd.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('feassets/vendor/masonry/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U&amp;callback=initMap" async defer></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="{{asset('feassets/js/layout.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('feassets/js/components/wow.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('feassets/js/components/swiper.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('feassets/js/components/maginific-popup.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('feassets/js/components/masonry.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('feassets/js/components/gmap.min.js')}}" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>