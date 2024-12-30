<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
    <!-- Start Header -->
    <header class="header axil-header header-style-1">
        <div class="header-top-campaign">
            <div class="container position-relative">
                <div class="campaign-content">
                    <p>Open Doors To A World Of Fashion <a href="#">Discover More</a></p>
                </div>
            </div>
            <button class="remove-campaign"><i class="fal fa-times"></i></button>
        </div>
        <div class="axil-header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="header-top-dropdown">
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    English
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">Arabic</a></li>
                                    <li><a class="dropdown-item" href="#">Spanish</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    USD
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">USD</a></li>
                                    <li><a class="dropdown-item" href="#">AUD</a></li>
                                    <li><a class="dropdown-item" href="#">EUR</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="header-top-link">
                            <ul class="quick-link">
                                <li><a href="#">Help</a></li>
                                <li><a href="sign-up.html">Join Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Mainmenu Area  -->
        <div id="axil-sticky-placeholder"></div>
        <div class="axil-mainmenu">
            <div class="container">
                <div class="header-navbar">
                    <div class="header-brand">
                        <a href="index.php" class="logo logo-dark">
                            <img src="views/Client/assets/images/logo/logo.png" alt="Site Logo">
                        </a>
                        <a href="index.php" class="logo logo-light">
                            <img src="views/Client/assets/images/logo/logo-light.png" alt="Site Logo">
                        </a>
                    </div>
                    <div class="header-main-nav">
                        <!-- Start Mainmanu Nav -->
                        <nav class="mainmenu-nav">
                            <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                            <div class="mobile-nav-brand">
                                <a href="index.php" class="logo">
                                    <img src="views/Client/assets/images/logo/logo.png" alt="Site Logo">
                                </a>
                            </div>
                            <ul class="mainmenu">
                                <li><a href="index.php">Trang chủ</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Danh mục sản phẩm</a>
                                    <ul class="axil-submenu">
                                        <?php
                                        foreach ($listdm as $dm) {
                                            extract($dm);
                                            $linkdm = "index.php?act=sanpham&id=" . $id;
                                            echo '<li><a href="' . $linkdm . '">' . $ten_danh_muc . '</a></li>';
                                        }
                                        ?>
                                    </ul>
                                </li>

                                <li><a href="index.php?act=allsanpham">Sản phẩm</a></li>
                                <li><a href="index.php?act=baiviet">Bài viết</a></li>
                                <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                            </ul>
                        </nav>
                        <!-- End Mainmanu Nav -->
                    </div>
                    <div class="header-action">
                        <ul class="action-list">
                            <li class="axil-search">
                                <a href="javascript:void(0)" class="header-search-icon" title="Search">
                                    <i class="flaticon-magnifying-glass"></i>
                                </a>
                            </li>

                            <li class="my-account">
                                <a href="javascript:void(0)">
                                    <i class="flaticon-person"></i>
                                </a>
                                <?php
                                if (isset($_SESSION['tai_khoan'])) {
                                    extract($_SESSION['tai_khoan']);

                                ?>
                                    <div class="my-account-dropdown">
                                        <span class="title">Xin chào: <?= $ten_dang_nhap ?></span>

                                        <ul>
                                            <li>
                                                <a href="index.php?act=form">Tài khoản của tôi</a>
                                            </li>
                                            <li>
                                                <a href="index.php?act=giohang">Giỏ hàng của tôi</a>
                                            </li>

                                            <li>
                                                <?php if ($chuc_vu == 2) { ?>
                                                    <a href="views/Admin/index.php">Đăng nhập Admin</a><br>
                                                <?php } ?>
                                            </li>
                                            <li>
                                                <a href="#">Hỗ trợ</a>
                                            </li>
                                        </ul>
                                        <div class="login-btn">
                                            <a href="index.php?act=thoat" class="axil-btn btn-bg-primary">Đăng xuất</a>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="my-account-dropdown">
                                        <span class="title">QUICKLINKS</span>

                                        <ul>

                                            <li>
                                                <a href="#">Bắt đầu quay trở lại</a>
                                            </li>
                                            <li>
                                                <a href="#">Hỗ trợ</a>
                                            </li>
                                        </ul>
                                        <div class="login-btn">
                                            <a href="index.php?act=dangnhap1" class="axil-btn btn-bg-primary">Đăng nhập</a>
                                        </div>
                                        <div class="reg-footer text-center">Bạn có tài khoản chưa? <a href="index.php?act=dangkyform" class="btn-link">Đăng ký tại đây</a></div>
                                    </div>
                                <?php } ?>

                            </li>
                            <li class="axil-mobile-toggle">
                                <button class="menu-btn mobile-nav-toggler">
                                    <i class="flaticon-menu-2"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mainmenu Area -->
    </header>
    <!-- End Header -->

    <main class="main-wrapper">
        <!-- Start Breadcrumb Area  -->
        <div class="axil-breadcrumb-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="inner">
                            
                            <h1 class="title">Cửa hàng của chúng tôi</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="inner">
                            <div class="bradcrumb-thumb">
                                <img src="views/Client/assets/images/product/product-45.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->

        <!-- Start About Area  -->

        <div class="axil-about-area about-style-1 axil-section-gap ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-6">
                        <div class="about-thumbnail">
                            <div class="thumbnail">
                                <img src="img/anh_bai_viet.jpg" alt="About Us" > <br> <br>
                            </div>
                        </div>
                    </div>
                    <span class="title-highlighter highlighter-primary2"> <i class="far fa-shopping-basket"></i>Về cửa hàng</span>
                    <?php
                            foreach ($dsbv as $bv) {
                                extract($bv);
                                echo '
                                <div >
                                <div class="about-content content-right">
                                  <br> <br> <br>  
                                    <h2 class="title">'.$tieu_de.'</h2>
                                    <span class="text-heading"></span>
                                    <div class="row">
                                        <div >
                                            <p style="margin-top: -20px; font-weight: bold;">'.$ngay_dang.'</p>
                                        </div>
                                        <div class="size" >
                                            <p style="font-size: 16px;" >'.$noi_dung.'</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                ';
                            }
                            ?>
                </div>
            </div>
        </div>
        <!-- End About Area  -->
        <!-- Start About Area  -->
        <div class="about-info-area">
            <div class="container">
                <div class="row row--20">
                    <div class="col-lg-4">
                        <div class="about-info-box">
                            <div class="thumb">
                                <img src="views/Client/assets/images/about/shape-01.png" alt="Shape">
                            </div>
                            <div class="content">
                                <h6 class="title">40,000+ Happy Customer</h6>
                                <p>Empower your sales teams with industry
                                    tailored solutions that support.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-info-box">
                            <div class="thumb">
                                <img src="views/Client/assets/images/about/shape-02.png" alt="Shape">
                            </div>
                            <div class="content">
                                <h6 class="title">16 Years of Experiences</h6>
                                <p>Empower your sales teams with industry
                                    tailored solutions that support.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-info-box">
                            <div class="thumb">
                                <img src="views/Client/assets/images/about/shape-03.png" alt="Shape">
                            </div>
                            <div class="content">
                                <h6 class="title">12 Awards Won</h6>
                                <p>Empower your sales teams with industry
                                    tailored solutions that support.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area  -->
        <!-- Start Team Area  -->
        <!-- End Team Area  -->
        <!-- Start About Area  -->
        <div class="axil-about-area about-style-2">
            <div class="container">
                <div class="row align-items-center mb--80 mb_sm--60">
                    <div class="col-lg-5">
                        <div class="about-thumbnail">
                            <img src="views/Client/assets/images/about/ip15.jpg" alt="about">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-content content-right">
                            <span class="subtitle">Tính năng #01</span>
                            <h4 class="title"><?php echo $tieu_de ?></h4>
                            <p><?php echo $noi_dung ?></p>
                            <a href="contact.html" class="axil-btn btn-outline">Liên Lạc</a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5 order-lg-2">
                        <div class="about-thumbnail">
                            <img src="views/Client/assets/images/about/ip15.jpg" alt="about">
                        </div>
                    </div>
                    <div class="col-lg-7 order-lg-1">
                        <div class="about-content content-left">
                            <span class="subtitle">Tính năng #02</span>
                            <h4 class="title"><?php echo $tieu_de ?></h4>
                            <p><?php echo $noi_dung ?></p>
                            <a href="contact.html" class="axil-btn btn-outline">Liên lạc</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area  -->
        <!-- Start Axil Newsletter Area  -->
        <div class="axil-newsletter-area axil-section-gap">
            <!-- End .container -->
        </div>
        <!-- End Axil Newsletter Area  -->
    </main>
    <div class="service-area">
        <div class="container">
            <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="views/Client/assets/images/icons/service1.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Fast &amp; Secure Delivery</h6>
                            <p>Tell about your service.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="views/Client/assets/images/icons/service2.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Money Back Guarantee</h6>
                            <p>Within 10 days.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="views/Client/assets/images/icons/service3.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">24 Hour Return Policy</h6>
                            <p>No question ask.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="views/Client/assets/images/icons/service4.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Pro Quality Support</h6>
                            <p>24/7 Live support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Area  -->
    <footer class="axil-footer-area footer-style-2">
        <!-- Start Footer Top Area  -->
        <div class="footer-top separator-top">
            <div class="container">
                <div class="row">
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Support</h5>
                            <!-- <div class="logo mb--30">
                            <a href="index.html">
                                <img class="light-logo" src="assets/images/logo/logo.png" alt="Logo Images">
                            </a>
                        </div> -->
                            <div class="inner">
                                <p>13 phố Trịnh Văn Bô <br>
                                    phường Phương Canh, Nam Từ Liêm <br>
                                    TP Hà Nội.
                                </p>
                                <ul class="support-list-item">
                                    <li><a href="#"><i class="fal fa-envelope-open"></i> tunvph36486@fpt.edu.vn</a></li>
                                    <li><a href="#"><i class="fal fa-phone-alt"></i> 0967725130</a></li>
                                    <!-- <li><i class="fal fa-map-marker-alt"></i> 685 Market Street,  <br> Las Vegas, LA 95820, <br> United States.</li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Account</h5>
                            <div class="inner">
                                <ul>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="index.php?act=dangnhap1">Login / Register</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Quick Link</h5>
                            <div class="inner">
                                <ul>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms Of Use</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Download App</h5>
                            <div class="inner">
                                <span>Save $3 With App & New User only</span>
                                <div class="download-btn-group">
                                    <div class="qr-code">
                                        <img src="views/Client/assets/images/others/qr.png" alt="Axilthemes">
                                    </div>
                                    <div class="app-link">
                                        <a href="#">
                                            <img src="views/Client/assets/images/others/app-store.png" alt="App Store">
                                        </a>
                                        <a href="#">
                                            <img src="views/Client/assets/images/others/play-store.png" alt="Play Store">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                </div>
            </div>
        </div>
        <!-- End Footer Top Area  -->
        <!-- Start Copyright Area  -->
        <div class="copyright-area copyright-default separator-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="social-share">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="copyright-left d-flex flex-wrap justify-content-center">
                            <ul class="quick-link">
                                <li>© 2023. All rights reserved by <a target="_blank" href="https://axilthemes.com/">Axilthemes</a>.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="copyright-right d-flex flex-wrap justify-content-xl-end justify-content-center align-items-center">
                            <span class="card-text">Accept For</span>
                            <ul class="payment-icons-bottom quick-link">
                                <li><img src="views/Client/assets/images/icons/cart/cart-1.png" alt="paypal cart"></li>
                                <li><img src="views/Client/assets/images/icons/cart/cart-2.png" alt="paypal cart"></li>
                                <li><img src="views/Client/assets/images/icons/cart/cart-5.png" alt="paypal cart"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area  -->
    </footer>
    <script src="views/Client/assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="views/Client/assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="views/Client/assets/js/vendor/popper.min.js"></script>
    <script src="views/Client/assets/js/vendor/bootstrap.min.js"></script>
    <script src="views/Client/assets/js/vendor/slick.min.js"></script>
    <script src="views/Client/assets/js/vendor/js.cookie.js"></script>
    <!-- <script src="views/Client/assets/js/vendor/jquery.style.switcher.js"></script> -->
    <script src="views/Client/assets/js/vendor/jquery-ui.min.js"></script>
    <script src="views/Client/assets/js/vendor/jquery.ui.touch-punch.min.js"></script>
    <script src="views/Client/assets/js/vendor/jquery.countdown.min.js"></script>
    <script src="views/Client/assets/js/vendor/sal.js"></script>
    <script src="views/Client/assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="views/Client/assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="views/Client/assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="views/Client/assets/js/vendor/counterup.js"></script>
    <script src="views/Client/assets/js/vendor/waypoints.min.js"></script>
    <!-- Main JS -->
    <script src="views/Client/assets/js/main.js"></script>
    <!-- End Footer Area  -->
    <!-- Product Quick View Modal Start -->
    <div class="modal fade quick-view-product" id="quick-view-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <div class="single-product-thumb">
                        <div class="row">
                            <div class="col-lg-7 mb--40">
                                <div class="row">
                                    <div class="col-lg-10 order-lg-2">
                                        <div class="single-product-thumbnail product-large-thumbnail axil-product thumbnail-badge zoom-gallery">
                                            <div class="thumbnail">
                                                <img src="views/Client/assets/images/product/product-big-01.png" alt="Product Images">
                                                <div class="label-block label-right">
                                                    <div class="product-badget">20% OFF</div>
                                                </div>
                                                <div class="product-quick-view position-view">
                                                    <a href="views/Client/assets/images/product/product-big-01.png" class="popup-zoom">
                                                        <i class="far fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="thumbnail">
                                                <img src="views/Client/assets/images/product/product-big-02.png" alt="Product Images">
                                                <div class="label-block label-right">
                                                    <div class="product-badget">20% OFF</div>
                                                </div>
                                                <div class="product-quick-view position-view">
                                                    <a href="views/Client/assets/images/product/product-big-02.png" class="popup-zoom">
                                                        <i class="far fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="thumbnail">
                                                <img src="views/Client/assets/images/product/product-big-03.png" alt="Product Images">
                                                <div class="label-block label-right">
                                                    <div class="product-badget">20% OFF</div>
                                                </div>
                                                <div class="product-quick-view position-view">
                                                    <a href="views/Client/assets/images/product/product-big-03.png" class="popup-zoom">
                                                        <i class="far fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 order-lg-1">
                                        <div class="product-small-thumb small-thumb-wrapper">
                                            <div class="small-thumb-img">
                                                <img src="views/Client/assets/images/product/product-thumb/thumb-08.png" alt="thumb image">
                                            </div>
                                            <div class="small-thumb-img">
                                                <img src="views/Client/assets/images/product/product-thumb/thumb-07.png" alt="thumb image">
                                            </div>
                                            <div class="small-thumb-img">
                                                <img src="views/Client/assets/images/product/product-thumb/thumb-09.png" alt="thumb image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 mb--40">
                                <div class="single-product-content">
                                    <div class="inner">
                                        <div class="product-rating">
                                            <div class="star-rating">
                                                <img src="views/Client/assets/images/icons/rate.png" alt="Rate Images">
                                            </div>
                                            <div class="review-link">
                                                <a href="#">(<span>1</span> customer reviews)</a>
                                            </div>
                                        </div>
                                        <h3 class="product-title">Serif Coffee Table</h3>
                                        <span class="price-amount">$155.00 - $255.00</span>
                                        <ul class="product-meta">
                                            <li><i class="fal fa-check"></i>In stock</li>
                                            <li><i class="fal fa-check"></i>Free delivery available</li>
                                            <li><i class="fal fa-check"></i>Sales 30% Off Use Code: MOTIVE30</li>
                                        </ul>
                                        <p class="description">In ornare lorem ut est dapibus, ut tincidunt nisi pretium. Integer ante est, elementum eget magna. Pellentesque sagittis dictum libero, eu dignissim tellus.</p>

                                        <div class="product-variations-wrapper">
                                            <!-- Start Product Variation  -->
                                            <div class="product-variation">
                                                <h6 class="title">Colors:</h6>
                                                <div class="color-variant-wrapper">
                                                    <ul class="color-variant mt--0">
                                                        <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-02"><span><span class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-03"><span><span class="color"></span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- End Product Variation  -->
                                            <!-- Start Product Variation  -->
                                            <div class="product-variation">
                                                <h6 class="title">Size:</h6>
                                                <ul class="range-variant">
                                                    <li>xs</li>
                                                    <li>s</li>
                                                    <li>m</li>
                                                    <li>l</li>
                                                    <li>xl</li>
                                                </ul>
                                            </div>
                                            <!-- End Product Variation  -->
                                        </div>
                                        <!-- Start Product Action Wrapper  -->
                                        <div class="product-action-wrapper d-flex-center">
                                            <!-- Start Quentity Action  -->
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                            <!-- End Quentity Action  -->

                                            <!-- Start Product Action  -->
                                            <ul class="product-action d-flex-center mb--0">
                                                <li class="add-to-cart"><a href="cart.html" class="axil-btn btn-bg-primary">Add to Cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html" class="axil-btn wishlist-btn"><i class="far fa-heart"></i></a></li>
                                            </ul>
                                            <!-- End Product Action  -->
                                        </div>
                                        <!-- End Product Action Wrapper  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Quick View Modal End -->
    <!-- Header Search Modal End -->
    <div class="header-search-modal" id="header-search-modal">
        <button class="card-close sidebar-close"><i class="fas fa-times"></i></button>
        <div class="header-search-wrap">
            <div class="card-header">
                <form action="#">
                    <div class="input-group">
                        <input type="search" class="form-control" name="prod-search" id="prod-search" placeholder="Write Something....">
                        <button type="submit" class="axil-btn btn-bg-primary"><i class="far fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="search-result-header">
                    <h6 class="title">24 Result Found</h6>
                    <a href="shop.html" class="view-all">View All</a>
                </div>
                <div class="psearch-results">
                    <div class="axil-product-list">
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img src="views/Client/assets/images/product/electric/product-09.png" alt="Yantiti Leather Bags">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <span class="rating-icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fal fa-star"></i>
                                </span>
                                <span class="rating-number"><span>100+</span> Reviews</span>
                            </div>
                            <h6 class="product-title"><a href="single-product.html">Media Remote</a></h6>
                            <div class="product-price-variant">
                                <span class="price current-price">$29.99</span>
                                <span class="price old-price">$49.99</span>
                            </div>
                            <div class="product-cart">
                                <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="axil-product-list">
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img src="views/Client/assets/images/product/electric/product-09.png" alt="Yantiti Leather Bags">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <span class="rating-icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fal fa-star"></i>
                                </span>
                                <span class="rating-number"><span>100+</span> Reviews</span>
                            </div>
                            <h6 class="product-title"><a href="single-product.html">Media Remote</a></h6>
                            <div class="product-price-variant">
                                <span class="price current-price">$29.99</span>
                                <span class="price old-price">$49.99</span>
                            </div>
                            <div class="product-cart">
                                <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Search Modal End -->



    <div class="cart-dropdown" id="cart-dropdown">
        <div class="cart-content-wrap">
            <div class="cart-header">
                <h2 class="header-title">Cart review</h2>
                <button class="cart-close sidebar-close"><i class="fas fa-times"></i></button>
            </div>
            <div class="cart-body">
                <ul class="cart-item-list">
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="single-product.html"><img src="views/Client/assets/images/product/electric/product-01.png" alt="Commodo Blown Lamp"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span class="rating-number">(64)</span>
                            </div>
                            <h3 class="item-title"><a href="single-product-3.html">Wireless PS Handler</a></h3>
                            <div class="item-price"><span class="currency-symbol">$</span>155.00</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" class="quantity-input" value="15">
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="single-product-2.html"><img src="views/Client/assets/images/product/electric/product-02.png" alt="Commodo Blown Lamp"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span class="rating-number">(4)</span>
                            </div>
                            <h3 class="item-title"><a href="single-product-2.html">Gradient Light Keyboard</a></h3>
                            <div class="item-price"><span class="currency-symbol">$</span>255.00</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" class="quantity-input" value="5">
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="single-product-3.html"><img src="views/Client/assets/images/product/electric/product-03.png" alt="Commodo Blown Lamp"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span class="rating-number">(6)</span>
                            </div>
                            <h3 class="item-title"><a href="single-product.html">HD CC Camera</a></h3>
                            <div class="item-price"><span class="currency-symbol">$</span>200.00</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" class="quantity-input" value="100">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="cart-footer">
                <h3 class="cart-subtotal">
                    <span class="subtotal-title">Subtotal:</span>
                    <span class="subtotal-amount">$610.00</span>
                </h3>
                <div class="group-btn">
                    <a href="cart.html" class="axil-btn btn-bg-primary viewcart-btn">View Cart</a>
                    <a href="checkout.html" class="axil-btn btn-bg-secondary checkout-btn">Checkout</a>
                </div>
            </div>
        </div>
    </div>


</body>