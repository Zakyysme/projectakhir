<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VapeManiaks</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- All min css -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Header area start here -->
    <div class="top__header top-header-one pt-30 pb-30">
        <div class="container">
            <div class="top__wrapper">
                <a href="/index" class="main__logo">
                    <img src="assets/images/logo/logo.svg" alt="logo__image">
                </a>
                <div class="search__wrp">
                    <input placeholder="Search for" aria-label="Search">
                    <button><i class="fa-solid fa-search"></i></button>
                </div>
                <div class="account__wrap">
                    <div class="account d-flex align-items-center">
                        <div class="user__icon">
                            <a href="#0">
                                <i class="fa-regular fa-user"></i>
                            </a>
                        </div>
                        <a href="#0" class="acc__cont">
                            <span class="text-white">
                                My Account
                            </span>
                        </a>
                    </div>
                    <div class="cart d-flex align-items-center">
                        <span class="cart__icon">
                            <i class="fa-regular fa-cart-shopping"></i>
                        </span>
                        <a href="#0" class="c__one">
                            <span class="text-white">
                                Rp. 0
                            </span>
                        </a>
                        <span class="one">
                            0
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper pl-65">
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="main-menu">
                    <li>
                        <a href="/index">Home <i class=""></i></a>

                    </li>
                    <li>
                        <a href="/about">About Us</a>
                    </li>
                    <li>
                        <a href="/shop">Shop <i class=""></i></a>

                    </li>
                    <li>
                        <a href="/cart">Cart <i class=""></i></a>

                    </li>
                    <li>
                        <a href="/contact">Contact Us</a>
                    </li>
                </ul>

            </div>
        </div>
    </header>
    <!-- Header area end here -->

    <!-- Sidebar area start here -->
    <!-- <div id="targetElement" class="side_bar slideInRight side_bar_hidden">
        <div class="side_bar_overlay"></div>
        <div class="logo mb-30">
            <img src="assets/images/logo/logo.svg" alt="logo">
        </div>
        <p class="text-justify">The foundation of any road is the subgrade, which provides a stable base for the road
            layers above. Proper compaction of
            the subgrade is crucial to prevent settling and ensure long-term road stability.</p>
        <ul class="info py-4 mt-65 bor-top bor-bottom">
            <li><i class="fa-solid primary-color fa-location-dot"></i> <a href="#0">example@example.com</a>
            </li>
            <li class="py-4"><i class="fa-solid primary-color fa-phone-volume"></i> <a href="tel:+912659302003">+91 2659
                    302 003</a>
            </li>
            <li><i class="fa-solid primary-color fa-paper-plane"></i> <a href="#0">info.company@gmail.com</a></li>
        </ul>
        <div class="social-icon mt-65">
            <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#0"><i class="fa-brands fa-twitter"></i></a>
            <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#0"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <button id="closeButton" class="text-white"><i class="fa-solid fa-xmark"></i></button>
    </div> -->
    <!-- Sidebar area end here -->

    <!-- Preloader area start -->
    <div class="loading">
        <span class="text-capitalize">L</span>
        <span>o</span>
        <span>a</span>
        <span>d</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
    </div>

    <div id="preloader">
    </div>
    <!-- Preloader area end -->

    <!-- Mouse cursor area start here -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Mouse cursor area end here -->


    <main>
        <!-- Page banner area start here -->
        <section class="page-banner bg-image pt-130 pb-130" data-background="assets/images/banner/inner-banner.jpg">
            <div class="container">
                <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">Cart Page</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                    <a href="/index" class="primary-hover"><i class="fa-solid fa-house me-1"></i> Home <i
                            class="fa-regular text-white fa-angle-right"></i></a>
                    <span>Cart</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- cart page area start here -->
        <section class="cart-page pt-130 pb-130">
            <div class="container">

                <div class="shopping-cart radius-10 bor sub-bg">

                    <div
                        class="column-labels py-3 px-4 d-flex justify-content-between align-items-center fw-bold text-white text-uppercase">
                        <label class="product-details">Product</label>
                        <label class="product-price">Price</label>
                        <label class="product-quantity">Quantity</label>
                        <label class="product-line-price">Total</label>
                        <label class="product-removal">Edit</label>
                    </div>

                    <div class="product p-4 bor-top bor-bottom d-flex justify-content-between align-items-center">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/01.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">NebulaVape</h4>
                        </div>
                        <div class="product-price">12.99</div>
                        <div class="product-quantity">
                            <input type="number" value="2" min="1">
                        </div>
                        <div class="product-line-price">25.98</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>

                    <div class="product p-4 bor-bottom d-flex justify-content-between align-items-center">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/02.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">VaporRift</h4>
                        </div>
                        <div class="product-price">Rp. 0</div>
                        <div class="product-quantity">
                            <input type="number" value="1" min="1">
                        </div>

                        <div class="product-line-price">Rp. 0</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product p-4 bor-bottom d-flex justify-content-between align-items-center">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/03.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">ZenithVapor</h4>
                        </div>
                        <div class="product-price">Rp. 0</div>
                        <div class="product-quantity">
                            <input type="number" value="1" min="1">
                        </div>

                        <div class="product-line-price">Rp. 0</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>
                    <div class="totals">
                        <div class="totals-item theme-color float-end mt-20">
                            <span class="fw-bold text-uppercase py-2">cart total =</span>
                            <div class="totals-value d-inline py-2 pe-2" id="cart-subtotal">Rp. 0</div>
                        </div>
                    </div>

                </div>
                <!-- shopping-cart-mobile -->
                <div class="shopping-cart mobile-view bor sub-bg">

                    <div class="product p-4 bor-top bor-bottom">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/01.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">VortexVape</h4>
                        </div>
                        <div class="product-price">12.99</div>
                        <div class="product-quantity">
                            <input type="number" value="2" min="1">
                        </div>
                        <div class="product-line-price">25.98</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>

                    <div class="product p-4 bor-bottom">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/02.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">EnigmaVapor</h4>
                        </div>
                        <div class="product-price">50.00</div>
                        <div class="product-quantity">
                            <input type="number" value="1" min="1">
                        </div>

                        <div class="product-line-price">50.00</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product p-4 bor-bottom">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/03.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">ZenithVapor</h4>
                        </div>
                        <div class="product-price">45.99</div>
                        <div class="product-quantity">
                            <input type="number" value="1" min="1">
                        </div>

                        <div class="product-line-price">45.99</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product p-4 bor-bottom">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/04.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">RadiantVape</h4>
                        </div>
                        <div class="product-price">99.99</div>
                        <div class="product-quantity">
                            <input type="number" value="2" min="1">
                        </div>

                        <div class="product-line-price">199.99</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product p-4">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/02.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">SerenitySmoke</h4>
                        </div>
                        <div class="product-price">25.98</div>
                        <div class="product-quantity">
                            <input type="number" value="1" min="1">
                        </div>
                        <div class="product-line-price">25.98</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>

                    <div class="totals">
                        <div class="totals-item theme-color float-end">
                            <span class="fw-bold text-uppercase py-2">cart total =</span>
                            <div class="totals-value d-inline py-2 pe-2">399.97</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- cart page area end here -->
    </main>

    <!-- Footer area start here -->
    <footer class="footer-area bg-image" data-background="assets/images/footer/footer-bg.jpg">
        <div class="container">
            <div class="footer__wrp pt-65 pb-65 bor-top bor-bottom">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".1s">
                        <div class="footer__item">
                            <h4 class="footer-title">Customer Service</h4>
                            <ul>
                                <li><a href="/contact"><span></span>Help Portal</a></li>
                                <li><a href="/contact"><span></span>Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                        <div class="footer__item">
                            <h4 class="footer-title">Get to Know Us</h4>
                            <ul>
                                <li><a href="/about"><span></span>About Us</a></li>
                                <li><a href="/contact"><span></span>Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                        <div class="footer__item">
                            <h4 class="footer-title">vapes new collections</h4>
                            <ul>
                                <li><a href="shop.html"><span></span>E-Cigarettes</a></li>
                                <li><a href="shop.html"><span></span>Vape Pens</a></li>
                                <li><a href="shop.html"><span></span>Pod Systems</a></li>
                                <li><a href="shop.html"><span></span>Disposable Vapes</a></li>
                                <li><a href="shop.html"><span></span>Nicotine Salt Devices</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".4s">
                        <div class="footer__item newsletter">
                            <h4 class="footer-title">get newsletter</h4>
                            <div class="subscribe">
                                <input type="email" placeholder="Your Email">
                                <button><i class="fa-solid fa-paper-plane"></i></button>
                            </div>
                            <div class="social-icon mt-40">
                                <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#0"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#0"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copy-text pt-50 pb-50">
                <a href="/index" class="logo d-block">
                    <img src="assets/images/logo/logo.svg" alt="logo">
                </a>
                <p>&copy; Copyright 2023 <a href="#0" class="primary-hover">odor</a> All Rights Reserved</p>
                <a href="#0" class="payment d-block image">
                    <img src="assets/images/icon/payment.png" alt="icon">
                </a>
            </div>
        </div>
    </footer>
    <!-- Footer area end here -->

    <!-- Back to top area start here -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top area end here -->

    <!-- Jquery 3. 7. 1 Min Js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap min Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Swiper bundle min Js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Counterup min Js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Wow min Js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Magnific popup min Js -->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!-- Nice select min Js -->
    <script src="assets/js/nice-select.min.js"></script>
    <!-- Pace min Js -->
    <script src="assets/js/pace.min.js"></script>
    <!-- Isotope pkgd min Js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Waypoints Js -->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!-- Script Js -->
    <script src="assets/js/script.js"></script>
</body>

</html>