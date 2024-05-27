<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/page/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('/page/css/main.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <title> Alfa huellitas Animal | Home </title>
</head>

<body class=" petmark-theme-4">
    <div class="site-wrapper">
        <header class="header petmark-header-4">
            <div class="header-wrapper">
                <!-- Site Wrapper Starts -->
                <div class="header-top bg-ash">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-sm-6 text-center text-sm-start">
                                <p class="font-weight-300">Bienvenido to Acacia Pet Food</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="header-top-nav right-nav">
                                    <div class="nav-item slide-down-wrapper">
                                        <p>Gracias por visitar nuestra web</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-middle">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <!-- Template Logo -->
                            <div class="col-lg-3 col-md-12 col-sm-4">
                                <div class="site-brand  text-center text-lg-start">
                                    <a href="index.html" class="brand-image">
                                        <img src="{{ asset('/page/images/main-logo--blue.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Category With Search -->
                            <div class="col-lg-5 col-md-6 order-3 order-md-2">
                                <form class="category-widget">
                                    <input type="text" name="search" placeholder="Search products ">
                                    <div class="search-form__group search-form__group--select">
                                        <select name="category " id="searchCategory"
                                            class="search-form__select nice-select">
                                            <option value="all">All Categories</option>
                                            <optgroup label="Books, Magazines">
                                                <option>Bedroom</option>
                                                <option>Kitchen</option>
                                                <option>Livingroom</option>
                                            </optgroup>
                                            <optgroup label="Electronics">
                                                <option>Fridge</option>
                                                <option>Laptops, Desktops</option>
                                                <option>Mobiles, Tablets</option>
                                            </optgroup>
                                            <optgroup label="Furniture">
                                                <option>Accessories</option>
                                                <option>Men</option>
                                                <option>Women</option>
                                            </optgroup>
                                            <option value="3">Home, Garden</option>
                                            <option value="3">Kids, Baby</option>
                                            <option value="3">Sport</option>
                                        </select>
                                    </div>
                                    <button class="search-submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <!-- Call Login & Track of Order -->
                            <div class="col-lg-4 col-md-6 col-sm-8 order-2 order-md-3">
                                <div class="header-widget-2 text-center text-md-end">
                                    <div class="call-widget">
                                        <p>CALL US NOW: <i class="icon ion-ios-telephone"></i><span
                                                class="font-weight-mid">+91-012
                                                345 678</span></p>
                                    </div>
                                    <ul class="header-links">
                                        {{-- <li><a href="cart.html"><i class="fas fa-car-alt"></i> Track Your Order</a></li> --}}
                                        @if (Auth::check())
                                            <!-- El usuario ha iniciado sesión, muestra su email -->
                                            <p>Bienvenido, {{ Auth::user()->email }} | <a href="{{  Auth::logout() }}">Salir</a></p>
                                        @else
                                            <!-- El usuario no ha iniciado sesión, muestra los enlaces de acceso y registro -->
                                            <li><a href="/login"><i class="fas fa-user"></i> Acceder</a></li>
                                            <li><a href="/registro"><i class="fas fa-user"></i> Registro</a></li>
                                        @endif

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav-wrapper">
                <div class="container">
                    <div class="header-bottom-inner bg-blue-2 ">
                        <div class="row g-0">
                            <!-- Category Nav -->
                            <!-- Main Menu -->
                            <div class="col-lg-10 d-none d-lg-block">
                                <nav class="main-navigation white-color">
                                    <!-- Mainmenu Start -->
                                    <ul class="mainmenu">
                                        <li class="mainmenu__item menu-item-has-children ">
                                            <a href="index.html" class="mainmenu__link">Home</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="index.html">Home 1</a>
                                                </li>
                                                <li>
                                                    <a href="index-2.html">Home 2</a>
                                                </li>
                                                <li>
                                                    <a href="index-3.html">Home 3</a>
                                                </li>
                                                <li>
                                                    <a href="index-4.html">Home 4</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children">
                                            <a href="#" class="mainmenu__link">Pages</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children">
                                                    <a href="about-us.html">About Us</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="about-us.html">About Us 1</a></li>
                                                        <li><a href="about-us-2.html">About Us 2</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="contact.html">Contact</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="contact.html">Contact 1</a></li>
                                                        <li><a href="contact-2.html">Contact 2</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="service.html">Services</a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="service.html">Services</a>
                                                        </li>
                                                        <li>
                                                            <a href="service-2.html">Services 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="faq.html">Faq</a>
                                                </li>
                                                <li>
                                                    <a href="404.html">404</a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">Cart</a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html">Checkout</a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">Wishlist</a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">Compare</a>
                                                </li>
                                                <li>
                                                    <a href="my-account.html">My Account</a>
                                                </li>
                                                <li>
                                                    <a href="login-register.html">Login &amp; Registration</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item ">
                                            <a href="portfolio.html" class="mainmenu__link">Portfolio</a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children ">
                                            <a href="blog.html" class="mainmenu__link">Blog</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children">
                                                    <a href="blog.html">Blog Gird</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                                        </li>
                                                        <li><a href="blog.html">Blog Full Width</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="blog-list.html">Blog List</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-list-left-sidebar.html">Blog List Left
                                                                Sidebar</a></li>
                                                        <li><a href="blog-list-right-sidebar.html">Blog List Right
                                                                Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="blog-details.html">Blog Details</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-details-left-sidebar.html">Left Sidebar</a>
                                                        </li>
                                                        <li><a href="blog-details.html">Image Format</a></li>
                                                        <li><a href="blog-details-video.html">Video Format</a></li>
                                                        <li><a href="blog-details-gallery.html">Gallery Format</a></li>
                                                        <li><a href="blog-details-audio.html">Audio Format</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children ">
                                            <a href="shop.html" class="mainmenu__link">Shop</a>
                                            <ul class="megamenu three-column">
                                                <li>
                                                    <a href="shop.html">Shop Page</a>
                                                    <ul>
                                                        <li>
                                                            <a href="shop-left-sidebar.html">Grid Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-right-sidebar.html">Grid Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list.html">List Fullwidth</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list-left-sidebar.html">List Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list-right-sidebar.html">List Right
                                                                Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="product-details.html">Product Details 1</a>
                                                    <ul>
                                                        <li><a href="product-details.html">Product Details Page</a>
                                                        </li>
                                                        <li><a href="product-details-affiliate.html">Product Details
                                                                Affiliate</a></li>
                                                        <li><a href="product-details-grouped.html">Product Details
                                                                Group</a></li>
                                                        <li><a href="product-details-left-thumbnail.html">Left
                                                                Thumbnail</a></li>
                                                        <li><a href="product-details-right-thumbnail.html">Right
                                                                Thumbnail</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Product Details 2</a>
                                                    <ul>
                                                        <!-- <li><a href="product-details-left-gallery.html">left Thumbnail</a></li> -->
                                                        <li><a href="product-details-left-gallery.html">Left
                                                                Gallery</a></li>
                                                        <li><a href="product-details-right-gallery.html">Right
                                                                Gallery</a></li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </li>
                                    </ul>
                                    <!-- Mainmenu End -->
                                </nav>
                            </div>

                            <!-- Mobile Menu -->
                            <div class="col-12 d-flex d-lg-none order-2 mobile-absolute-menu">
                                <!-- Main Mobile Menu Start -->
                                <div class="mobile-menu"></div>
                                <!-- Main Mobile Menu End -->
                            </div>
                        </div>
                    </div>


                    <div class="row">

                    </div>
                </div>
                <div class="fixed-header sticky-init sticky-color">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <!-- Sticky Logo Start -->
                                <a class="sticky-logo" href="index.html">
                                    <img src="images/main-logo--blue.png" alt="logo">
                                </a>
                                <!-- Sticky Logo End -->
                            </div>
                            <div class="col-lg-9">
                                <!-- Sticky Mainmenu Start -->
                                <nav class="sticky-navigation">
                                    <ul class="mainmenu sticky-menu">
                                        <li class="mainmenu__item menu-item-has-children sticky-has-child ">
                                            <a href="index.html" class="mainmenu__link">Home</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="index.html">Home 1</a>
                                                </li>
                                                <li>
                                                    <a href="index-2.html">Home 2</a>
                                                </li>
                                                <li>
                                                    <a href="index-3.html">Home 3</a>
                                                </li>
                                                <li>
                                                    <a href="index-4.html">Home 4</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children sticky-has-child">
                                            <a href="#" class="mainmenu__link">Pages</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children">
                                                    <a href="about-us.html">About Us</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="about-us.html">About Us 1</a></li>
                                                        <li><a href="about-us-2.html">About Us 2</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="contact.html">Contact</a>
                                                    <ul class="sub-menu">

                                                        <li><a href="contact.html">Contact 1</a></li>
                                                        <li><a href="contact-2.html">Contact 2</a></li>

                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="service.html">Services</a>
                                                    <ul class="sub-menu">

                                                        <li>
                                                            <a href="service.html">Services</a>
                                                        </li>
                                                        <li>
                                                            <a href="service-2.html">Services 2</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="faq.html">Faq</a>
                                                </li>
                                                <li>
                                                    <a href="404.html">404</a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">Cart</a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html">Checkout</a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">Wishlist</a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">Compare</a>
                                                </li>
                                                <li>
                                                    <a href="my-account.html">My Account</a>
                                                </li>
                                                <li>
                                                    <a href="login-register.html">Login &amp; Registration</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item ">
                                            <a href="portfolio.html" class="mainmenu__link">Portfolio</a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children sticky-has-child ">
                                            <a href="blog.html" class="mainmenu__link">Blog</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children">
                                                    <a href="blog.html">Blog Gird</a>
                                                    <ul class="sub-menu left-align">
                                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                                        </li>
                                                        <li><a href="blog.html">Blog Full Width</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="blog-list.html">Blog List</a>
                                                    <ul class="sub-menu left-align">
                                                        <li><a href="blog-list-left-sidebar.html">Blog List Left
                                                                Sidebar</a></li>
                                                        <li><a href="blog-list-right-sidebar.html">Blog List Right
                                                                Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="blog-details.html">Blog Details</a>
                                                    <ul class="sub-menu left-align">
                                                        <li><a href="blog-details-left-sidebar.html">Left Sidebar</a>
                                                        </li>
                                                        <li><a href="blog-details.html">Image Format</a></li>
                                                        <li><a href="blog-details-video.html">Video Format</a></li>
                                                        <li><a href="blog-details-gallery.html">Gallery Format</a></li>
                                                        <li><a href="blog-details-audio.html">Audio Format</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children sticky-has-child ">
                                            <a href="shop.html" class="mainmenu__link">Shop</a>
                                            <ul class="megamenu three-column">
                                                <li>
                                                    <a href="shop.html">Shop Page</a>
                                                    <ul>
                                                        <li>
                                                            <a href="shop-left-sidebar.html">Grid Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-right-sidebar.html">Grid Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list.html">List Fullwidth</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list-left-sidebar.html">List Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list-right-sidebar.html">List Right
                                                                Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="product-details.html">Product Details 1</a>
                                                    <ul>
                                                        <li><a href="product-details.html">Product Details Page</a>
                                                        </li>
                                                        <li><a href="product-details-affiliate.html">Product Details
                                                                Affiliate</a></li>
                                                        <li><a href="product-details-grouped.html">Product Details
                                                                Group</a></li>
                                                        <li><a href="product-details-left-thumbnail.html">Left
                                                                Thumbnail</a></li>
                                                        <li><a href="product-details-right-thumbnail.html">Right
                                                                Thumbnail</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Product Details 2</a>
                                                    <ul>
                                                        <!-- <li><a href="product-details-left-gallery.html">left Thumbnail</a></li> -->
                                                        <li><a href="product-details-left-gallery.html">Left
                                                                Gallery</a></li>
                                                        <li><a href="product-details-right-gallery.html">Right
                                                                Gallery</a></li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </li>
                                    </ul>
                                    <div class="sticky-mobile-menu  d-lg-none">
                                        <span class="sticky-menu-btn"></span>
                                    </div>
                                </nav>
                                <!-- Sticky Mainmenu End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>





        <section class="pt-5 pb-5">
            @yield('contenido')
        </section>




        <!-- Modal -->
        <div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog"
            aria-labelledby="quickModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="pm-product-details">
                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close">

                        </button>
                        <div class="row">
                            <!-- Blog Details Image Block -->
                            <div class="col-md-6">
                                <div class="image-block">
                                    <!-- Zoomable IMage -->
                                    <img id="zoom_03" src="images/product-details-1.jpg"
                                        data-zoom-image="image/product/product-details/product-details-1.jpg"
                                        alt="">

                                    <!-- Product Gallery with Slick Slider -->
                                    <div id="product-view-gallery" class="elevate-gallery">
                                        <!-- Slick Single -->
                                        <a href="#" class="gallary-item"
                                            data-image="image/product/product-details/product-details-1.jpg"
                                            data-zoom-image="image/product/product-details/product-details-1.jpg">
                                            <img src="images/product-details-1.jpg" alt="">
                                        </a>
                                        <!-- Slick Single -->
                                        <a href="#" class="gallary-item"
                                            data-image="image/product/product-details/product-details-2.jpg"
                                            data-zoom-image="image/product/product-details/product-details-2.jpg">
                                            <img src="images/product-details-2.jpg" alt="">
                                        </a>
                                        <!-- Slick Single -->
                                        <a href="#" class="gallary-item"
                                            data-image="image/product/product-details/product-details-3.jpg"
                                            data-zoom-image="image/product/product-details/product-details-3.jpg">
                                            <img src="images/product-details-3.jpg" alt="">
                                        </a>
                                        <!-- Slick Single -->
                                        <a href="#" class="gallary-item"
                                            data-image="image/product/product-details/product-details-4.jpg"
                                            data-zoom-image="image/product/product-details/product-details-4.jpg">
                                            <img src="images/product-details-4.jpg" alt="">
                                        </a>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-4 mt-lg-0">
                                <div class="description-block">
                                    <div class="header-block">
                                        <h3>Diam vel neque</h3>
                                    </div>
                                    <!-- Price -->
                                    <p class="price"><span class="old-price">250$</span>300$</p>
                                    <!-- Rating Block -->
                                    <div class="rating-block d-flex  mt--10 mb--15">
                                        <p class="rating-text"><a href="#comment-form">See all features</a></p>
                                    </div>
                                    <!-- Blog Short Description -->
                                    <div class="product-short-para">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
                                            nec est
                                            tristique auctor. Donec non est at libero vulputate rutrum.
                                        </p>
                                    </div>
                                    <div class="status">
                                        <i class="fas fa-check-circle"></i>300 IN STOCK
                                    </div>
                                    <!-- Amount and Add to cart -->
                                    <form action="./" class="add-to-cart">
                                        <div class="count-input-block">
                                            <input type="number" class="form-control text-center" value="1"
                                                min="1">
                                        </div>
                                        <div class="btn-block">
                                            <a href="#" class="btn btn-rounded btn-outlined--primary">Add to
                                                cart</a>
                                        </div>
                                    </form>
                                    <!-- Sharing Block 2 -->
                                    <div class="share-block-2 mt--30">
                                        <h4>SHARE THIS PRODUCT</h4>
                                        <ul class="social-btns social-btns-3">
                                            <li><a href="#" class="facebook"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li><a href="#" class="google"><i
                                                        class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#" class="pinterest"><i
                                                        class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="#" class="linkedin"><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer contact-block">
                            <h3 class="footer-title">Contact</h3>
                            <div class="single-footer-content">
                                <p class="text-italic">We are a team of designers and developers that create high
                                    quality Wordpress, Magento, Prestashop, Opencart.</p>
                                <p class="font-weight-500 text-white"><span class="d-block">Contact info:</span>
                                    169-C, Technohub, Dubai Silicon Oasis.</p>
                                <p class="social-icons">
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fas fa-rss"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="single-footer contact-block">
                            <h3 class="footer-title">Information</h3>
                            <div class="single-footer-content">
                                <ul class="footer-list">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">My orders</a></li>
                                    <li><a href="#">Returns &amp; Exchanges</a></li>
                                    <li><a href="#">Shipping &amp; Delivery</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">About Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="single-footer contact-block">
                            <h3 class="footer-title">CUSTOMER CARE</h3>
                            <div class="single-footer-content">
                                <ul class="footer-list">
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Site Map</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Notification</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer contact-block">
                            <h3 class="footer-title">SUBSCRIBE TO OUR NEWSLETTER</h3>
                            <div class="single-footer-content">
                                <p>
                                    Subscribe to the Petmark mailing list to receive updates on new arrivals, special
                                    offers and other discount information.
                                </p>
                                <div class="pt-2">
                                    <div class="input-box-with-icon">
                                        <input type="text" placeholder="Enter Your email">
                                        <button><i class="fas fa-envelope"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-block-2 text-center">
                    <ul class="footer-list list-inline justify-content-center">
                        <li><a href="">Online Shopping</a></li>

                        <li><a href="">Promotions</a></li>

                        <li><a href=""> My Orders</a></li>

                        <li><a href="">Help</a></li>

                        <li><a href="">Customer Service</a></li>

                        <li><a href="">Support</a></li>

                        <li><a href=""> Most Populars</a></li>

                        <li><a href="">New Arrivals</a></li>

                        <li><a href="">Special Products</a></li>

                        <li><a href="">Manufacturers</a></li>

                        <li><a href="">Our Stores</a></li>
                    </ul>
                    <ul class="footer-list list-inline justify-content-center">
                        <li><a href="">Shipping</a></li>

                        <li><a href="">Payments</a></li>

                        <li><a href="">Warantee</a></li>

                        <li><a href="">Refunds</a></li>

                        <li><a href="">Checkout</a></li>

                        <li><a href="">Discount</a></li>

                        <li><a href="">Terms &amp; Conditions</a></li>

                        <li><a href=""> Policy</a></li>

                        <li><a href="">Special Products</a></li>

                        <li><a href="">Manufacturers</a></li>

                        <li><a href="">Our Stores</a></li>
                    </ul>
                    <div class="payment-block pt-3">
                        <img src="images/payment-icons.png" alt="">
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                App Mascotas | Frank Developer 2024 - Todos los derechos reservados
            </div>
        </footer>
    </div>
    <script src="{{ asset('/page/js/plugins.js') }}"></script>
    <script src="{{ asset('/page/js/ajax-mail.js') }}"></script>
    <script src="{{ asset('/page/js/custom.js') }}"></script>


</body>

</html>
