<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VapeManiaks</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.png') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/all.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/swiper-bundle.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/nice-select.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>

    <!-- Header area start here -->
    <div class="top__header top-header-one pt-30 pb-30">
        <div class="container">
        </div>
    </div>

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
        <section class="login-area pt-130 pb-130">
            <div class="container">
                <div class="login__item">
                    <div class="">
                        <!-- <a href="/products/create">Create A Product</a> -->
                        <div class=" row">
                            <div class="">
                                <div class="login__content">
                                    <div class="form-area login__form">
                                        <form action="/products/store" method="post" enctype="multipart/form-data">
                                            <Label for="name">Name :</Label>
                                            <input type="text" name="name" id="name"><br>
                                            <label for="description">Description :</label>
                                            <textarea name="description"></textarea><br>
                                            <label for="price">Price :</label>
                                            <input type="text" name="price" id="value"><br>
                                            <label for="image">Image</label>
                                            <input type="file" name="image" id="image">
                                            <img name="image"><br>
                                            <button type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product area end here -->
    </main>

    <!-- Footer area start here -->
    <footer class="footer-area bg-image" data-background="assets/images/footer/footer-bg.jpg">

    </footer>
    <!-- Footer area end here -->

    <!-- Back to top area start here -->
    <!-- Back to top area end here -->

    <!-- Jquery 3. 7. 1 Min Js -->
    <script src="<?= base_url('assets/js/jquery-3.7.1.min.js') ?>"></script>
    <!-- Bootstrap min Js -->
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- Swiper bundle min Js -->
    <script src="<?= base_url('assets/js/swiper-bundle.min.js') ?>"></script>
    <!-- Counterup min Js -->
    <script src="<?= base_url('assets/js/jquery.counterup.min.js') ?>"></script>
    <!-- Wow min Js -->
    <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
    <!-- Magnific popup min Js -->
    <script src="<?= base_url('assets/js/magnific-popup.min.js') ?>"></script>
    <!-- Nice select min Js -->
    <script src="<?= base_url('assets/js/nice-select.min.js') ?>"></script>
    <!-- Pace min Js -->
    <script src="<?= base_url('assets/js/pace.min.js') ?>"></script>
    <!-- Isotope pkgd min Js -->
    <script src="<?= base_url('assets/js/isotope.pkgd.min.js') ?>"></script>
    <!-- Waypoints Js -->
    <script src="<?= base_url('assets/js/jquery.waypoints.js') ?>"></script>
    <!-- Script Js -->
    <script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>

</html>ame