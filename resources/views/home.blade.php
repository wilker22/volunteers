@extends('layouts.main')

@section('content')

<section class="banner-one banner-one__home-two" id="home">
    <img src="{{ asset('assets/images/banner-moc-1.png') }}" class="banner-one__moc" alt="Awesome Image"/>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-one__content">
                    <div class="block-title">
                        <div class="block-title__text"><span>You Can Help <br> The Poor with Volunteers</span></div><!-- /.block-title__text -->
                    </div><!-- /.block-title -->
                    <p class="banner-one__text">Excepteur sint occaecat cupidatat non proident sunt in <br> culpa qui officia deserunt mollit lorem ipsum anim id est <br> laborum perspiciatis unde.</p><!-- /.banner-one__text -->
                    <a href="#" class="banner-one__btn">Get Started</a>
                </div><!-- /.banner-one__content -->
            </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.banner-one -->
<section class="service-one" id="services">
    <div class="container">
        <div class="block-title text-center">
            <div class="block-title__text"><span>We’re On A Mission To Solve The Problems</span></div><!-- /.block-title__text -->
        </div><!-- /.block-title -->
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="service-one__single">
                    <h3 class="service-one__title"><a href="#">Pure Water</a></h3><!-- /.service-one__title -->
                    <p class="service-one__text">Lorem ipsum is are <br> many variations of <br> pass of majority.</p><!-- /.service-one__text -->
                    <a href="#" class="service-one__link"><i class="nonid-icon-left-arrow"></i></a>
                </div><!-- /.service-one__single -->
            </div><!-- /.col-lg-3 -->
             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="service-one__single">
                    <h3 class="service-one__title"><a href="#">Healthy Food</a></h3><!-- /.service-one__title -->
                    <p class="service-one__text">Lorem ipsum is are <br> many variations of <br> pass of majority.</p><!-- /.service-one__text -->
                    <a href="#" class="service-one__link"><i class="nonid-icon-left-arrow"></i></a>
                </div><!-- /.service-one__single -->
            </div><!-- /.col-lg-3 -->
             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="service-one__single">
                    <h3 class="service-one__title"><a href="#">Medical</a></h3><!-- /.service-one__title -->
                    <p class="service-one__text">Lorem ipsum is are <br> many variations of <br> pass of majority.</p><!-- /.service-one__text -->
                    <a href="#" class="service-one__link"><i class="nonid-icon-left-arrow"></i></a>
                </div><!-- /.service-one__single -->
            </div><!-- /.col-lg-3 -->
             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="service-one__single">
                    <h3 class="service-one__title"><a href="#">Education</a></h3><!-- /.service-one__title -->
                    <p class="service-one__text">Lorem ipsum is are <br> many variations of <br> pass of majority.</p><!-- /.service-one__text -->
                    <a href="#" class="service-one__link"><i class="nonid-icon-left-arrow"></i></a>
                </div><!-- /.service-one__single -->
            </div><!-- /.col-lg-3 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-one -->
<section class="cta-three" id="Volunteers">
    <img src="{{ asset('assets/images/banner-icon-1-6.png') }}" alt="Awesome Image" class="bubble-1" />
    <img src="{{ asset('assets/images/banner-icon-1-4.png') }}" alt="Awesome Image" class="bubble-2" />
    <img src="{{ asset('assets/images/banner-icon-1-5.png') }}" alt="Awesome Image" class="bubble-3" />
    <div class="container">
        <img src="{{ asset('assets/images/cta-moc-1-1.png') }}" alt="Awesome Image" class="cta-three__moc" />
        <div class="row no-gutters justify-content-end">
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex">
                <div class="cta-three__content my-auto">
                    <div class="block-title">
                        <div class="block-title__text"><span>Our Volunteer</span></div><!-- /.block-title__text -->
                    </div><!-- /.block-title -->
                    <p class="cta-three__text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><!-- /.cta-three__text -->
                    <ul class="cta-three__list">
                        <li class="cta-three__list-item"><i class="fa fa-check"></i>Refresing to get such a personal touch. </li>
                        <li class="cta-three__list-item"><i class="fa fa-check"></i>Duis aute irure dolor in reprehenderit in voluptate.</li>
                        <li class="cta-three__list-item"><i class="fa fa-check"></i>Velit esse cillum dolore eu fugiat nulla pariatur.</li>
                    </ul><!-- /.cta-three__list -->
                    <a href="#" class="cta-three__btn">Learn More</a>
                </div><!-- /.cta-three__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.cta-three -->

<section class="fun-fact-one" id="Causes">
    <img src="{{ asset('assets/images/banner-icon-1-4.png') }}" alt="Awesome Image" class="bubble-1" />
    <img src="{{ asset('assets/images/banner-icon-1-2.png') }}" alt="Awesome Image" class="bubble-2" />
    <img src="{{ asset('assets/images/banner-icon-1-1.png') }}" alt="Awesome Image" class="bubble-3" />
    <img src="{{ asset('assets/images/banner-icon-1-6.png') }}" alt="Awesome Image" class="bubble-4" />
    <div class="container">
        <div class="block-title text-center">
            <div class="block-title__text"><span>Over 2200 Events</span> <br> <span>completed</span></div><!-- /.block-title__text -->
        </div><!-- /.block-title -->
        <div class="fun-fact-one__box-wrapper">
            <div class="fun-fact-one__single">
                <div class="inner-block">
                    <h3 class="fun-fact-one__title counter">
                        4789
                    </h3><!-- /.fun-fact-one__title -->
                    <p class="fun-fact-one__text">
                        Events
                    </p><!-- /.fun-fact-one__text -->
                </div><!-- /.inner-block -->
            </div><!-- /.fun-fact-one__single -->
            <div class="fun-fact-one__single">
                <div class="inner-block">
                    <h3 class="fun-fact-one__title counter">
                        6400
                    </h3><!-- /.fun-fact-one__title -->
                    <p class="fun-fact-one__text">
                        Volunteer
                    </p><!-- /.fun-fact-one__text -->
                </div><!-- /.inner-block -->
            </div><!-- /.fun-fact-one__single -->
            <div class="fun-fact-one__single">
                <div class="inner-block">
                    <h3 class="fun-fact-one__title counter">
                        960
                    </h3><!-- /.fun-fact-one__title -->
                    <p class="fun-fact-one__text">
                        Mission
                    </p><!-- /.fun-fact-one__text -->
                </div><!-- /.inner-block -->
            </div><!-- /.fun-fact-one__single -->
            <div class="fun-fact-one__single">
                <div class="inner-block">
                    <h3 class="fun-fact-one__title counter">
                        448
                    </h3><!-- /.fun-fact-one__title -->
                    <p class="fun-fact-one__text">
                        awards
                    </p><!-- /.fun-fact-one__text -->
                </div><!-- /.inner-block -->
            </div><!-- /.fun-fact-one__single -->
        </div><!-- /.fun-fact-one_box-wrapper -->
    </div><!-- /.container -->
</section><!-- /.fun-fact-one -->
<section class="blog-one" id="blog">
    <div class="container">
        <div class="block-title text-center">
            <div class="block-title__text"><span>Check out our latest</span> <br> <span>Causes & Events</span></div><!-- /.block-title__text -->
        </div><!-- /.block-title -->
        <div class="row">
            <div class="col-lg-4">
                <div class="blog-one__single">
                    <div class="blog-one__single-inner-block">
                        <div class="blog-one__date">3020 USD Donate </div><!-- /.blog-one__date -->
                        <a href="blog-details.html" class="blog-one__author">By Causes</a>
                        <h3 class="blog-one__title"><a href="blog-details.html">Pre launch mobile app marketing pitfalls</a></h3>
                        <p class="blog-one__text">There are many variations of passages of but majority have in some by inject.</p>
                        <a href="blog-details.html" class="blog-one__link"><i class="nonid-icon-left-arrow"></i></a>
                    </div><!-- /.blog-one__single-inner-block -->
                </div><!-- /.blog-one__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="blog-one__single">
                    <div class="blog-one__single-inner-block">
                        <div class="blog-one__date">3020 USD Donate</div><!-- /.blog-one__date -->
                        <a href="blog-details.html" class="blog-one__author">By Causes</a>
                        <h3 class="blog-one__title"><a href="blog-details.html">Social currency high performance keywords</a></h3>
                        <p class="blog-one__text">There are many variations of passages of but majority have in some by inject.</p>
                        <a href="blog-details.html" class="blog-one__link"><i class="nonid-icon-left-arrow"></i></a>
                    </div><!-- /.blog-one__single-inner-block -->
                </div><!-- /.blog-one__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="blog-one__single">
                    <div class="blog-one__single-inner-block">
                        <div class="blog-one__date">3020 USD Donate</div><!-- /.blog-one__date -->
                        <a href="blog-details.html" class="blog-one__author">By layerdrops</a>
                        <h3 class="blog-one__title"><a href="blog-details.html">Causes these line items quarterly sales</a></h3>
                        <p class="blog-one__text">There are many variations of passages of but majority have in some by inject.</p>
                        <a href="blog-details.html" class="blog-one__link"><i class="nonid-icon-left-arrow"></i></a>
                    </div><!-- /.blog-one__single-inner-block -->
                </div><!-- /.blog-one__single -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-one -->

@endsection
