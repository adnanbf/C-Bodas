<!DOCTYPE html>
<html>

<!-- Mirrored from demos.pixelized.cz/umarket/v1.1/main/checkout-payment.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Apr 2016 15:42:07 GMT -->
<head>
    <!-- ==========================
    	Meta Tags 
    =========================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ==========================
    	Title 
    =========================== -->
    <title>uMarket - The easiest way to shop</title>
        
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
    <!--[if lt IE 9]>
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
    
	<!-- ==========================
    	COLOR SWITCHER - START 
    =========================== -->
	<div id="color-switcher">
        <div id="toggle-switcher"><i class="fa fa-gear"></i></div>
        <span>Color Scheme:</span>
        <ul class="list-unstyled list-inline">
            <li id="red" data-toggle="tooltip" data-placement="top" title="" data-original-title="Red"></li>
            <li id="purple" data-toggle="tooltip" data-placement="top" title="" data-original-title="Purple"></li>
            <li id="yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="Yellow"></li>
            <li id="blue" data-toggle="tooltip" data-placement="top" title="" data-original-title="Blue"></li>
            <li id="dark-blue" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dark Blue"></li>
            <li id="orange" data-toggle="tooltip" data-placement="top" title="" data-original-title="Orange"></li>
            <li id="green" data-toggle="tooltip" data-placement="top" title="" data-original-title="Green"></li>
            <li id="brown" data-toggle="tooltip" data-placement="top" title="" data-original-title="Brown"></li>
            <li id="dark-red" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dark Red"></li>
            <li id="light-green" data-toggle="tooltip" data-placement="top" title="" data-original-title="Light Green"></li>
        </ul>
    </div>
	<!-- ==========================
    	COLOR SWITCHER - END 
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
                        <li><i class="fa fa-envelope"></i> help@umarket.com</li>
                        <li><i class="fa fa-phone"></i> 754 213 456</li>
                    </ul>
                </div>
                <div class="col-sm-7 text-right">
                    <ul class="list-inline links">
                        <li><a href="my-account.html">My account</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="wishlist.html">Wishlist (5)</a></li>
                        <li><a href="compare.html">Compare (3)</a></li>
                        <li><a href="signin.html">Logout</a></li>
                    </ul>
                    <ul class="list-inline languages hidden-sm">
                    	<li><a href="#"><img src="assets/images/flags/cz.png" alt="cs_CZ"></a></li>
                        <li><a href="#"><img src="assets/images/flags/us.png" alt="en_US"></a></li>
                        <li><a href="#"><img src="assets/images/flags/de.png" alt="de_DE"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header class="navbar navbar-default navbar-static-top">
    	<div class="container">
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand"><span>u</span>Market</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
            </div>
            <div class="navbar-collapse collapse">
            	<p class="navbar-text hidden-xs hidden-sm">The easiest way to shop</p>
            	<ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true">Home</a>
                      	<ul class="dropdown-menu">
                        	<li><a href="index.html">Homepage 1</a></li>
                            <li><a href="homepage-2.html">Homepage 2</a></li>
                            <li><a href="homepage-3.html">Homepage 3<span class="label label-warning pull-right">Updated</span></a></li>
                            <li><a href="homepage-4.html">Homepage 4</a></li>
                            <li><a href="homepage-5.html">Homepage 5<span class="label label-danger pull-right">New</span></a></li>
                            <li><a href="homepage-6.html">Homepage 6<span class="label label-danger pull-right">New</span></a></li>
                      	</ul>
                    </li>
                    <li class="dropdown megamenu">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true">Eshop</a>
                      	<ul class="dropdown-menu">
                            <li class="col-sm-4 col-md-3">
                            	<ul class="list-unstyled">
                                	<li class="title">Men <span class="label label-danger pull-right">HOT</span></li>
                                    <li><a href="products.html">Sweatshirts & Jackets</a></li>
                                    <li><a href="products.html">Caps and Hats</a></li>
                                    <li><a href="products.html">Ties</a></li>
                                    <li><a href="products.html">Scarves</a></li>
                                    <li><a href="products.html">Shirts</a></li>
                                    <li><a href="products.html">Jeans</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-4 col-md-3">
                            	<ul class="list-unstyled">
                                	<li class="title">Women <span class="label label-info pull-right">30% OFF SALE</span></li>
                                    <li><a href="products.html">Jackets & Coats</a></li>
                                    <li><a href="products.html">Jumpers & cardigans</a></li>
                                    <li><a href="products.html">Jeans</a></li>
                                    <li><a href="products.html">Trousers</a></li>
                                    <li><a href="products.html">Dresses</a></li>
                                    <li><a href="products.html">Long Sleeve Tops</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-4 col-md-3">
                            	<ul class="list-unstyled">
                                	<li class="title">Accessories</li>
                                    <li><a href="products.html">Sunglasses</a></li>
                                    <li><a href="products.html">Watches</a></li>
                                    <li><a href="products.html">Umbrellas</a></li>
                                    <li><a href="products.html">Bags & Wallets</a></li>
                                    <li><a href="products.html">Fashion Jewellery</a></li>
                                    <li><a href="products.html">Belts</a></li>
                                </ul>
                            </li>
                            <li class="hidden-xs hidden-sm col-md-3">
                            	<img src="assets/images/megamenu.png" class="img-responsive center-block" alt="">
                            </li>
                      	</ul>
                    </li>
                    <li class="dropdown megamenu">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true">Pages</a>
                      	<ul class="dropdown-menu">
                            <li class="col-sm-4">
                            	<ul class="list-unstyled">
                                	<li class="title">Eshop</li>
                                    <li><a href="products.html">Products</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                    <li><a href="single-product.html">One Product</a></li>
                                    <li><a href="stores.html">Stores</a></li>
                                    <li><a href="about-shop.html">About Shop</a></li>
                                    <li><a href="lookbook.html">Lookbook</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-4">
                            	<ul class="list-unstyled">
                                	<li class="title">Account</li>
                                    <li><a href="my-account.html">My Account<span class="label label-warning pull-right">Updated</span></a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="orders.html">Ordres</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="address.html">Address</a></li>
                                    <li><a href="warranty-claims.html">Warranty Claims<span class="label label-danger pull-right">New</span></a></li>
                                    <li><a href="signup.html">Sign Up</a></li>
                                    <li><a href="signin.html">Sign In</a></li>
                                    <li><a href="lost-password.html">Lost Password</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-4">
                            	<ul class="list-unstyled">
                                	<li class="title">Other Pages</li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single-post.html">One Blog Post</a></li>
                                    <li><a href="single-order.html">Order Detail</a></li>
                                    <li><a href="downloads.html">Downloads<span class="label label-danger pull-right">New</span></a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                    <li><a href="email-template.html" target="_blank">Email Template</a></li>
                                </ul>
                            </li>
                      	</ul>
                    </li>
                    <li class="dropdown megamenu">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true">Components<span class="label label-danger pull-right">New</span></a>
                      	<ul class="dropdown-menu">
                            <li class="col-sm-4">
                            	<ul class="list-unstyled">
                                    <li><a href="components.html#headings">Headings</a></li>
                                    <li><a href="components.html#paragraphs">Paragraphs</a></li>
                                    <li><a href="components.html#lists">Lists</a></li>
                                    <li><a href="components.html#tabs">Tabs</a></li>
                                    <li><a href="components.html#accordition">Accordition</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-4">
                            	<ul class="list-unstyled">
                                    <li><a href="components.html#collapse">Collapse</a></li>
                                    <li><a href="components.html#buttons">Buttons</a></li>
                                    <li><a href="components.html#tables">Tables</a></li>
                                    <li><a href="components.html#grids">Grids</a></li>
                                    <li><a href="components.html#responsive-video-audio">Responsive Video &amp; Audio</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-4">
                            	<ul class="list-unstyled">
                                    <li><a href="components.html#alerts">Alerts</a></li>
                                    <li><a href="components.html#forms">Forms</a></li>
                                    <li><a href="components.html#labels">Labels</a></li>
                                    <li><a href="components.html#paginations">Paginations</a></li>
                                    <li><a href="components.html#carousels">Carousels</a></li>
                                </ul>
                            </li>
                      	</ul>
                    </li>
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
                                    	<a href="cart.html" class="btn btn-primary btn-block">View Cart</a>
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
                                        <input type="text" class="form-control" placeholder="Search ...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button">Search</button>
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
    
    <!-- ==========================
    	BREADCRUMB - START 
    =========================== -->
    <section class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <h2>Checkout</h2>
                    <p>Payment Method</p>
                </div>
                <div class="col-xs-6">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li class="active">Payment Method</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
	<!-- ==========================
    	BREADCRUMB - END 
    =========================== -->
    
    <!-- ==========================
    	MY ACCOUNT - START 
    =========================== -->
    <section class="content account">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <article class="account-content checkout-steps">
                        
                        <div class="row row-no-padding">
                        	<div class="col-xs-6 col-sm-3">
                            	<div class="checkout-step active">
                                	<div class="number">1</div>
                                    <div class="title">Billing & Shipping Address</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="checkout-step active">
                                	<div class="number">2</div>
                                    <div class="title">Shipping Method</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="checkout-step active">
                                	<div class="number">3</div>
                                    <div class="title">Payment Method</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="checkout-step">
                                	<div class="number">4</div>
                                    <div class="title">Review</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="progress checkout-progress hidden-xs"><div class="progress-bar" role="progressbar" aria-valuenow="66.6" aria-valuemin="0" aria-valuemax="100" style="width:66.6%;"></div></div>
                        
                        <form>
                            <h3>Payment Method</h3>
                            <div class="products-order checkout payment-method">
                            	<div class="row">
                                    <div class="col-lg-6 col-md-8 col-sm-10">
                                        <div id="payment-methods" role="tablist" aria-multiselectable="true">
                                            <div class="panel radio">
                                                <input type="radio" name="optionsRadios" id="radio-payment-1" checked>
                                                <label for="radio-payment-1" data-toggle="collapse" data-target="#parent-1" data-parent="#payment-methods" aria-controls="parent-1">Cash On Delivery<span>($5)</span></label>
                                                <div id="parent-1" class="panel-collapse collapse in" role="tabpanel"></div>
                                            </div>
                                            <div class="panel radio">
                                                <input type="radio" name="optionsRadios" id="radio-payment-2">
                                                <label for="radio-payment-2" class="collapsed" data-toggle="collapse" data-target="#parent-2" data-parent="#payment-methods" aria-controls="parent-2">Payment by Bank Transfer<span>IBAN: CZ00 0000 0000 0000 0000 0000</span></label>
                                                <div id="parent-2" class="panel-collapse collapse" role="tabpanel"></div>
                                            </div>
                                            <div class="panel radio">
                                                <input type="radio" name="optionsRadios" id="radio-payment-3">
                                                <label for="radio-payment-3" class="collapsed" data-toggle="collapse" data-target="#parent-3" data-parent="#payment-methods" aria-controls="parent-3">PayPal</label>
                                                <div id="parent-3" class="panel-collapse collapse" role="tabpanel"></div>
                                            </div>
                                            <div class="panel radio">
                                                <input type="radio" name="optionsRadios" id="radio-payment-4">
                                                <label for="radio-payment-4" class="collapsed" data-toggle="collapse" data-target="#parent-4" data-parent="#payment-methods" aria-controls="parent-4">Pay via Credit Card</label>
                                                <div id="parent-4" class="panel-collapse collapse" role="tabpanel">
                                                    <div class="credit-card-form">
                                                        <div class="row">
                                                            <div class="form-group col-sm-9">
                                                                <label>Credit Card Number<span class="required">*</span></label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" name="creditcard" value="" size="16">
                                                                    <span class="input-group-addon" id="credit-card-img"><i class="fa fa-credit-card"></i></span>
                                                                </div>
                                                                <div id="credit-card-error"></div>    
                                                            </div>
                                                            <div class="form-group col-sm-3">
                                                                <label>CVV/CVC<span class="required">*</span></label>
                                                                <input type="text" class="form-control" maxlength="4">   
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-sm-7">
                                                                <label>Name on Card<span class="required">*</span></label>
                                                                <input type="text" class="form-control">   
                                                            </div>
                                                            <div class="form-group col-sm-5 expiration-date">
                                                            	<label>Expiration date<span class="required">*</span></label>
                                                                <div>
                                                                <select class="form-control">
                                                                    <option selected disabled>MM</option>
                                                                    <option>01</option>
                                                                    <option>02</option>
                                                                    <option>03</option>
                                                                    <option>04</option>
                                                                    <option>05</option>
                                                                    <option>06</option>
                                                                    <option>07</option>
                                                                    <option>08</option>
                                                                    <option>09</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                </select>
                                                                <select class="form-control">
                                                                    <option selected disabled>YY</option>
                                                                    <option>15</option>
                                                                    <option>16</option>
                                                                    <option>17</option>
                                                                    <option>18</option>
                                                                    <option>19</option>
                                                                    <option>20</option>
                                                                    <option>21</option>
                                                                    <option>22</option>
                                                                    <option>23</option>
                                                                    <option>24</option>
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">
                                <a href="checkout-review.html" class="btn btn-primary btn-lg pull-right">Continue</a>
                            </div>
                        </form>                        
                    </article>
                </div>
            </div> 
        </div>
    </section>
    <!-- ==========================
    	MY ACCOUNT - END 
    =========================== -->
        
    <!-- ==========================
    	NEWSLETTER - START 
    =========================== -->
    <section class="separator separator-newsletter">
    	<div class="container">
            <div class="newsletter-left">
                <div class="newsletter-badge">
                    <span>Subsribe & Get </span>
                    <span class="price">$15</span>
                    <span>discount</span>
                </div>
            </div>
            <div class="newsletter-right">
            	<div class="row">
                    <div class="col-sm-6">
                        <div class="newsletter-body">
                            <h3>Newsletter</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <form>
                            <div class="input-group input-group-lg">
                                <input type="email" class="form-control" placeholder="Enter email address">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">Sign Up</button>
                                </span>
                            </div>
                        </form>
                    </div>
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
                    	<h4>Contacts</h4>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-envelope"></i> help@umarket.com</li>
                            <li><i class="fa fa-phone"></i> 754 213 456</li>
                            <li><i class="fa fa-map-marker"></i> 40°44'00.9"N 73°59'43.4"W</li>
                            <li class="social">
                            	<a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-tumblr"></i></a>
                            </li>
                        </ul>
                	</div>
                </div>
                <div class="col-sm-3 col-xs-6">
                	<div class="footer-widget footer-widget-links">
                    	<h4>Information</h4>
                        <ul class="list-unstyled">
                        	<li><a href="about-shop.html">About Shop</a></li>
                            <li><a href="stores.html">Our Stores</a></li>
                            <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="my-account.html">My account</a></li>
                        </ul>
                	</div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="footer-widget footer-widget-twitter">
                    	<h4>Recent tweets</h4>
                        <div id="twitter-wrapper"></div>
                	</div>
                </div>
                <div class="col-sm-3 col-xs-6">
                	<div class="footer-widget footer-widget-facebook">
                    	<h4>Facebook Page</h4>
                        <ul class="list-unstyled row row-no-padding">
                        	<li class="col-xs-3"><a href="#"><img src="assets/images/avatar/avatar_01.jpg" class="img-responsive" alt=""></a></li>
                            <li class="col-xs-3"><a href="#"><img src="assets/images/avatar/avatar_02.jpg" class="img-responsive" alt=""></a></li>
                            <li class="col-xs-3"><a href="#"><img src="assets/images/avatar/avatar_03.jpg" class="img-responsive" alt=""></a></li>
                            <li class="col-xs-3"><a href="#"><img src="assets/images/avatar/avatar_04.jpg" class="img-responsive" alt=""></a></li>
                            <li class="col-xs-3"><a href="#"><img src="assets/images/avatar/avatar_01.jpg" class="img-responsive" alt=""></a></li>
                            <li class="col-xs-3"><a href="#"><img src="assets/images/avatar/avatar_02.jpg" class="img-responsive" alt=""></a></li>
                            <li class="col-xs-3"><a href="#"><img src="assets/images/avatar/avatar_03.jpg" class="img-responsive" alt=""></a></li>
                            <li class="col-xs-3"><a href="#"><img src="assets/images/avatar/avatar_04.jpg" class="img-responsive" alt=""></a></li>
                        </ul>
                        <p>45,500 Likes  <a href="#" class="btn btn-default btn-sm"><i class="fa fa-thumbs-up"></i>Like</a></p>
                	</div>
                </div>
            </div>
            <div class="footer-bottom">
            	<div class="row">
                    <div class="col-sm-6">
                        <p class="copyright">© Umarket 2016 All right reserved.</p>
                        <p class="copyright">Designed by <a href="http://www.pixelized.cz/" target="_blank">Pixelized Studio.</a></p>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-inline payment-methods">
                        	<li><i class="fa fa-cc-amex"></i></li>
                            <li><i class="fa fa-cc-diners-club"></i></li>
                            <li><i class="fa fa-cc-discover"></i></li>
                            <li><i class="fa fa-cc-jcb"></i></li>
                            <li><i class="fa fa-cc-mastercard"></i></li>
                            <li><i class="fa fa-cc-paypal"></i></li>
                            <li><i class="fa fa-cc-stripe"></i></li>
                            <li><i class="fa fa-cc-visa"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==========================
    	FOOTER - END 
    =========================== -->
    
    <!-- ==========================
    	MODAL ADVERTISING  - START 
    =========================== -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalAdvertising">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                    	<div class="col-sm-8">
                        	<h3>Dicount 10%</h3>
                        	<p>Enter your email address and get 10% discount for your first purchase.</p>
                            <form>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Email Address">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">Submit</button>
                                    </span>
                                </div>
                            </form>
                            <div class="checkbox">  
                                <input id="modal-hide" type="checkbox" value="hidden">  
                                <label for="modal-hide">Don't show this popup again</label>
                            </div>
                        </div>
                        <div class="col-sm-4 hidden-xs">
                        	<img src="assets/images/lookbook-1.png" class="img-responsive" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- ==========================
    	MODAL ADVERTISING - END 
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

<!-- Mirrored from demos.pixelized.cz/umarket/v1.1/main/checkout-payment.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Apr 2016 15:42:08 GMT -->
</html>