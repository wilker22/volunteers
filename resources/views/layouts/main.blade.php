<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volunteers | NonProfit Charity Theme</title>
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon//apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon//apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon//apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon//apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon//apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon//apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon//apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon//apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon//apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon//favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    <div class="preloader"></div><!-- /.preloader -->
    <div class="page-wrapper">

    	<header class="site-header header-one header-one__home-two">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="{{ url ('') }}">
                            <img src="{!! Voyager::image(setting('site.logo')) !!}" class="main-logo" alt="Awesome Image" />
                        </a>
                        <button class="menu-toggler" data-target=".header-one .main-navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class=" navigation-box one-page-scroll-menu ">
                            <li class="current scrollToLink">
                                <a href="#home">Home</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="#services">Features</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="#Volunteers">Volunteers</a>

                            </li>
                            <li class="scrollToLink">
                                <a href="#Causes">Causes</a>

                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="right-side-box">
                        <a href="#" class="header-one__btn">Contact</a>
                    </div><!-- /.right-side-box -->
                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.header-one -->


        @yield('content')


        <footer class="site-footer">
            <img src="{{ asset('assets/images/banner-icon-1-1.png') }}" alt="Awesome Image" class="bubble-1" />
            <img src="{{ asset('assets/images/banner-icon-1-3.png') }}" alt="Awesome Image" class="bubble-2" />
            <img src="{{ asset('assets/images/banner-icon-1-2.png') }}" alt="Awesome Image" class="bubble-3" />
            <img src="{{ asset('assets/images/banner-icon-1-4.png') }}" alt="Awesome Image" class="bubble-4" />
            <div class="site-footer__subscribe">
                <div class="container">
                    <div class="block-title text-center">
                        <div class="block-title__text"><span>donationa our Causes</span> <br> <span>to get new updates</span></div><!-- /.block-title__text -->
                    </div><!-- /.block-title -->

                    <form class="site-footer__subscribe-form" method="POST" id="payment-form" action="{!! URL::to('paypal') !!}">
                        @csrf
                        <input type="hidden" name="_token" value="ug6eemUCaFgFpEhMsNXGItcSnp67y91yci5xvp3J">
                        <div class="form-group">
                           <input class="form-control" id="amount" type="text" name="amount" placeholder="Donate With Paybal">
                       </div>
                       <div class="form-group mt-2 mb-5 mb-lg-0">
                           <button type="submit" class="btn btn-secondary py-3 px-4">Donate</button>
                       </div>
                    </form><!-- Form para doações através do paypal-->

                </div><!-- /.container -->
            </div><!-- /.site-footer__subscribe -->
            <div class="site-footer__main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget footer-widget--about-widget">
                                <a href="index.html" class="footer-widget__footer-logo"><img src="{{ asset('assets/images/logo-2-1.png') }}" alt="Awesome Image" /></a>

                                <a class="navbar-brand" href="{{ url ('') }}">
                                    <img src="{!! Voyager::image(setting('site.logo')) !!}" class="main-logo" alt="Awesome Image" />
                                </a>

                                <p>{{ setting('site.fone') }}</p>
                                <p>{{ setting('site.email') }}</p>
                                <p>{{ setting('site.endereco') }}<br>
                                          <Petrolina>
                                          <PE></PE>                    </p>
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-2 col-md-6 col-sm-12">
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">
                                    Explore
                                </h3><!-- /.footer-widget__title -->
                                <ul class="footer-widget__link-list">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Our Team</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">How It Works</a></li>
                                </ul><!-- /.footer-widget__link-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-2 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">
                                    Services
                                </h3><!-- /.footer-widget__title -->
                                <ul class="footer-widget__link-list">
                                    <li><a href="#">Speed Optimization</a></li>
                                    <li><a href="#">Marketing Analysis</a></li>
                                    <li><a href="#">SEO and Backlinks</a></li>
                                    <li><a href="#">Content Marketing</a></li>
                                </ul><!-- /.footer-widget__link-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-2 col-md-6 col-sm-12">
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">
                                    Links
                                </h3><!-- /.footer-widget__title -->
                                <ul class="footer-widget__link-list">
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Clients</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul><!-- /.footer-widget__link-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-2 -->
                        <div class="col-lg-2 col-md-6 col-sm-12 d-flex">
                            <div class="footer-widget my-auto">
                                <div class="social-block">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div><!-- /.social-block -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-2 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__main-footer -->
            <div class="site-footer__bottom-footer text-center">
                <div class="container">
                    <p>&copy; copyright 2020 by <a href="#">Volunteer.com</a></p>
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom-footer -->
        </footer><!-- /.site-footer -->
    </div><!-- /.page-wrapper -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- /.scroll-to-top -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>

</html>


