<!DOCTYPE html>
<html>

<!-- Mirrored from demos.pixelized.cz/C-Bodas/v1.1/main/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Apr 2016 15:38:50 GMT -->
<head>
    <!-- ==========================
        Meta Tags 
    =========================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ==========================
        Title 
    =========================== -->
    <title>C-Bodas</title>
        
    <!-- ==========================
        Fonts 
    =========================== -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,900,800' rel='stylesheet' type='text/css'>

    <!-- ==========================
        CSS 
    =========================== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../../../../code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/dragtable.css" rel="stylesheet" type="text/css">
    <link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/color-switcher.css" rel="stylesheet" type="text/css">
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css">
    <link href="assets/css/color/red.css" id="main-color" rel="stylesheet" type="text/css">
    
    <!-- ==========================
        JS 
    =========================== -->
    <!--        [if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>
    
    <!-- ==========================
        SCROLL TOP - START 
    =========================== -->
    <div id="scrolltop" class="hidden-xs"><i class="fa fa-angle-up"></i></div>
    <!-- ==========================
        SCROLL TOP - END 
    =========================== -->
    
    <div id="page-wrapper"> <!-- PAGE - START -->
    
    <!-- ==========================
        HEADER - START 
    =========================== -->
    <div class="top-header hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <ul class="list-inline contacts">
                        <li><i class="fa fa-envelope"></i> help@c-bodas.com</li>
                        <li><i class="fa fa-phone"></i> 022 6671806</li>
                    </ul>
                </div>
                <div class="col-sm-7 text-right">
                    <ul class="list-inline links">
                        <li><a href="my-account.html">Akun Saya</a></li>
                        <li><a href="signin.html">Keluar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a href="homepage" class="navbar-brand"><span>C-</span>Bodas</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
            </div>
            <div class="navbar-collapse collapse">
                <p class="navbar-text hidden-xs hidden-sm">Karena Waktu Sangat Berharga</p>
                
                @if (Auth::guest())
                <ul class="nav navbar-nav navbar-right">
                   
                    <li class="dropdown megamenu">
                        <a href="signin">Masuk</a>
                    </li>

                    <li class="dropdown megamenu">
                        <a href="signup">Daftar</a>
                    </li>

                @else  
                     <li class="dropdown megamenu">
                        <a href="signin">Home</a>
                    </li>
                @endif    
                    <li class="dropdown navbar-cart hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true"><i class="fa fa-shopping-cart"></i></a>
                        <ul class="dropdown-menu">
                            
                            <!-- CART ITEM - START -->
                            <li>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="assets/images/products/product-1.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="col-sm-9">
                                        <h4><a href="single-product.html">Fusce Aliquam</a></h4>
                                        <p>1x - $20.00</p>
                                        <a href="#" class="remove"><i class="fa fa-times-circle"></i></a>
                                    </div>
                                </div>
                            </li>
                            
                            <!-- CART ITEM - END -->
                            
                            <!-- CART ITEM - START -->
                            <li>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="assets/images/products/product-2.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="col-sm-9">
                                        <h4><a href="single-product.html">Fusce Aliquam</a></h4>
                                        <p>1x - $20.00</p>
                                        <a href="#" class="remove"><i class="fa fa-times-circle"></i></a>
                                    </div>
                                </div>
                            </li>
                            <!-- CART ITEM - END -->
                            
                            <!-- CART ITEM - START -->
                            <li>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="assets/images/products/product-3.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="col-sm-9">
                                        <h4><a href="single-product.html">Fusce Aliquam</a></h4>
                                        <p>1x - $20.00</p>
                                        <a href="#" class="remove"><i class="fa fa-times-circle"></i></a>
                                    </div>
                                </div>
                            </li>
                            <!-- CART ITEM - END -->
                            
                            <!-- CART ITEM - START -->
                            <li>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="cart.html" class="btn btn-primary btn-block">Lihat Keranjang</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="checkout.html" class="btn btn-primary btn-block">Checkout</a>
                                    </div>
                                </div>
                            </li>
                            <!-- CART ITEM - END -->
                            
                        </ul>
                    </li>
                    <li class="dropdown navbar-search hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <form>
                                    <div class="input-group input-group-lg">
                                        <input type="text" class="form-control" placeholder="Cari...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button">Cari</button>
                                        </span>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- ==========================
        HEADER - END 
    =========================== -->  
    



    @yield('konten')





     <!-- ==========================
        NEWSLETTER - START 
    =========================== -->
    <section class="separator separator-newsletter">
        <div class="container">
            
            <div class="newsletter-right">
                <div class="row">
                </div>
            </div>
        </div>
    </section>
    <!-- ==========================
        NEWSLETTER - END 
    =========================== -->
    
    <!-- ==========================
        FOOTER - START 
    =========================== -->
    <footer class="navbar navbar-default">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-6">
                    <div class="footer-widget footer-widget-contacts">
                        <h4>Kontak</h4>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-envelope"></i> help@C-Bodas.com</li>
                            <li><i class="fa fa-phone"></i> 022 6671806</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="footer-widget footer-widget-links">
                        <h4>Informasi</h4>
                        <ul class="list-unstyled">
                            <li><a href="about-shop.html">Tentang Kami</a></li>
                            <li><a href="terms-conditions.html">Syarat & Ketentuan</a></li>
                            <li><a href="privacy-policy.html">Kebijakan Privasi</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="my-account.html">Akun Saya</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright">© C-Bodas 2016 All right reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==========================
        FOOTER - END 
    =========================== -->
    
   
    
    </div> <!-- PAGE - END -->
    
    <!-- ==========================
        JS 
    =========================== -->        
    <script src="../../../../code.jquery.com/jquery-latest.min.js"></script>
    <script src="../../../../code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/jquery.dragtable.js"></script>
    <script src="assets/js/jquery.card.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/twitterFetcher_min.js"></script>
    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="assets/js/color-switcher.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

<!-- Mirrored from demos.pixelized.cz/C-Bodas/v1.1/main/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Apr 2016 15:38:50 GMT -->
</html>