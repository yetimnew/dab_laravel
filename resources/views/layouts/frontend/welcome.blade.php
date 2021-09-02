@include('layouts.frontend.header');
@section('content')
<!-- Hero -->
<section id="slider" class="hero p-0 odd">
    <div class="swiper-container full-slider animation slider-h-100 slider-h-auto">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">

                <!-- Media -->
                <img src="{{ asset('frontend/images/bg-1.jpg')}}" alt="Full Image" class="full-image" data-mask="40">

                <div class="slide-content row">
                    <div class="col-12 d-flex justify-content-start inner">
                        <div class="left text-left">

                            <!-- Content -->
                            <h2 data-aos="zoom-in" data-aos-delay="2000" class="title effect-static-text">Gender And
                                Youth Analysis</h2>
                            <p data-aos="zoom-in" data-aos-delay="2400" class="description">We drive product and
                                service innovation, improve financial performance, accelerate market speed.</p>

                            <!-- Action -->
                            <div data-aos="fade-up" data-aos-delay="2800" class="buttons">
                                <div class="d-sm-inline-flex">
                                    <a href="#contact" class="smooth-anchor mt-4 btn primary-button">GET IN
                                        TOUCH</a>
                                    <a href="#video" class="smooth-anchor ml-sm-4 mt-4 btn outline-button">READ
                                        MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="swiper-slide slide-center">

                <!-- Media -->
                <img src="{{ asset('frontend/images/bg-2.jpg') }}" alt="Full Image" class="full-image" data-mask="40">

                <div class="slide-content row">
                    <div class="col-12 d-flex justify-content-start justify-content-md-center inner">
                        <div class="center text-left text-md-center">

                            <!-- Content -->
                            <h2 data-aos="zoom-in" data-aos-delay="400" class="title effect-static-text">Financial
                                Risk</h2>
                            <p data-aos="zoom-in" data-aos-delay="800" class="description mr-auto ml-auto">The right
                                outcomes depend on continuous rigor in governance, models, and processes across the
                                finance function.</p>

                            <!-- Action -->
                            <div data-aos="fade-up" data-aos-delay="1200" class="buttons">
                                <div class="d-sm-inline-flex">
                                    <a href="#contact" class="smooth-anchor mt-4 btn primary-button">GET IN
                                        TOUCH</a>
                                    <a href="#video" class="smooth-anchor ml-sm-4 mt-4 btn outline-button">READ
                                        MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="swiper-slide slide-center">
                <!-- Media -->
                <img src="{{ asset('frontend/images/bg-3.jpg')}}" alt="Full Image" class="full-image" data-mask="40">

                <div class="slide-content row">
                    <div class="col-12 d-flex justify-content-start justify-content-md-end inner">
                        <div class="right text-left">

                            <!-- Content -->
                            <h1 data-aos="zoom-in" data-aos-delay="400" class="title effect-static-text">Audit &
                                Assurance</h1>
                            <p data-aos="zoom-in" data-aos-delay="800" class="description">Our focus is to map the
                                technologies to solve the business transformation, offering services.</p>

                            <!-- Action -->
                            <div data-aos="fade-up" data-aos-delay="1200" class="buttons">
                                <div class="d-sm-inline-flex">
                                    <a href="#contact" class="smooth-anchor mt-4 btn primary-button">GET IN
                                        TOUCH</a>
                                    <a href="#video" class="smooth-anchor ml-sm-4 mt-4 btn outline-button">READ
                                        MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="swiper-slide slide-center">
                <!-- Media -->
                <img src="{{ asset('frontend/images/bg-3.jpg')}}" alt="Full Image" class="full-image" data-mask="40">

                <div class="slide-content row">
                    <div class="col-12 d-flex justify-content-start justify-content-md-end inner">
                        <div class="right text-left">

                            <!-- Content -->
                            <h1 data-aos="zoom-in" data-aos-delay="400" class="title effect-static-text">Audit &
                                Assurance</h1>
                            <p data-aos="zoom-in" data-aos-delay="800" class="description">Our focus is to map the
                                technologies to solve the business transformation, offering services.</p>

                            <!-- Action -->
                            <div data-aos="fade-up" data-aos-delay="1200" class="buttons">
                                <div class="d-sm-inline-flex">
                                    <a href="#contact" class="smooth-anchor mt-4 btn primary-button">GET IN
                                        TOUCH</a>
                                    <a href="#video" class="smooth-anchor ml-sm-4 mt-4 btn outline-button">READ
                                        MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- Video -->
<section id="video" class="section-1 highlights image-center">
    <div class="container smaller">
        <div class="row text-center intro">
            <div class="col-12">
                <span class="pre-title">Introduction Video</span>
                <h2>Advisory <span class="featured"><span>Performance</span></span></h2>
                <p class="text-max-800">Financial executives need to review their strategies, operating models and
                    capabilities so that their areas can generate sound information for better decision making.</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 gallery">
                <a href="https:/vimeo.com/222990241"
                    class="square-image d-flex justify-content-center align-items-center">
                    <i class="icon bigger fas fa-play clone"></i>
                    <i class="icon bigger fas fa-play"></i>
                    <img src="{{ asset('frontend/images/video-1.jpg') }}" class="fit-image" alt="Introduction Video">
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Fun Facts -->
<section id="funfacts" class="section-2 odd counter funfacts">
    <video class="full-image to-bottom grayscale" data-mask="70" playsinline autoplay muted loop>
        <source src="{{ asset('frontend/videos/city.mp4')}}" type="video/mp4" />
    </video>
    <div class="container">
        <div class="row mb-md-5 text-center">
            <div class="col-12">
                <span class="pre-title">What are we doing</span>
                <h2><span class="featured"><span>Results</span></span> in Numbers</h2>
            </div>
        </div>
        <div class="row justify-content-center text-center items">
            <div class="col-12 col-md-6 col-lg-3 item">
                <div data-percent="128" class="radial">
                    <span></span>
                </div>
                <h4>Certifications</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3 item">
                <div data-percent="230" class="radial">
                    <span></span>
                </div>
                <h4>Employees</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3 item">
                <div data-percent="517" class="radial">
                    <span></span>
                </div>
                <h4>Customers</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3 item">
                <div data-percent="94" class="radial">
                    <span></span>
                </div>
                <h4>Countries Served</h4>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section id="services" class="section-3 odd offers">
    <div class="container">
        <div class="row intro">
            <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                <span class="pre-title m-auto ml-md-0">Our business areas</span>
                <h2>Excellence in <span class="featured"><span>Services</span></span></h2>
                <p>We are leaders in providing consultancy services with a set of cutting-edge technologies and a
                    team of experienced and renowned professionals. These are some options that you can hire.</p>
            </div>
            <div class="col-12 col-md-3 align-self-end">
                <a href="#" class="btn mx-auto mr-md-0 ml-md-auto outline-button">SEE ALL</a>
            </div>
        </div>
        <div class="row justify-content-center items">
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card">
                    <i class="icon icon-organization"></i>
                    <h4>Audit & Assurance</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    <a href="page-single-service-1.html"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card">
                    <i class="icon icon-briefcase"></i>
                    <h4>Financial Advisory</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    <a href="page-single-service-1.html"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card">
                    <i class="icon icon-chart"></i>
                    <h4>Analytics and M&A</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    <a href="page-single-service-1.html"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card">
                    <i class="icon icon-plane"></i>
                    <h4>Middle Marketing</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    <a href="page-single-service-1.html"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card">
                    <i class="icon icon-globe-alt"></i>
                    <h4>Legal Consulting</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    <a href="page-single-service-1.html"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card">
                    <i class="icon icon-drawer"></i>
                    <h4>Regulatory Risk</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    <a href="page-single-service-1.html"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team -->
<section id="team" class="section-4 highlights team image-right">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 align-self-top text-center text-md-left text">
                <div class="row intro">
                    <div class="col-12 p-0">
                        <span class="pre-title m-auto m-md-0">We like what we do</span>
                        <h2><span class="featured"><span>Team</span></span> of Experts</h2>
                        <p>Ethics and integrity are the bases on which our professionals build their
                            careers.<br>They are fundamentals that become daily attitudes.</p>
                    </div>
                </div>
                <div class="row items text-left">
                    <div class="col-12 col-md-6 p-0">
                        <div class="row item">
                            <div class="col-4 p-0 pr-3 align-self-center">
                                <img src="{{ asset('frontend/images/team-1.jpg') }}" alt="Person" class="person">
                            </div>
                            <div class="col-8 align-self-center text-left">
                                <h4>David Cooper</h4>
                                <p>CTO & CO-FOUNDER</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row item">
                            <div class="col-4 p-0 pr-3 align-self-center">
                                <img src="{{ asset('frontend/images/team-2.jpg')}}" alt="Person" class="person">
                            </div>
                            <div class="col-8 align-self-center text-left">
                                <h4>Emma Lopez</h4>
                                <p>CHIEF MARKETING</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 p-0">
                        <div class="row item">
                            <div class="col-4 p-0 pr-3 align-self-center">
                                <img src="{{ asset('frontend/images/team-3.jpg')}}" alt="Person" class="person">
                            </div>
                            <div class="col-8 align-self-center text-left">
                                <h4>Oliver Jones</h4>
                                <p>CHIEF PROCUREMENT</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row item">
                            <div class="col-4 p-0 pr-3 align-self-center">
                                <img src="{{ asset('frontend/images/team-4.jpg')}}" alt="Person" class="person">
                            </div>
                            <div class="col-8 align-self-center text-left">
                                <h4>T. Johnson</h4>
                                <p>CEO & PRESIDENT</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="zoom-in" class="col-12 col-lg-4 align-self-end">
                <div class="quote">
                    <div class="quote-content">
                        <h4>President Speech</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut lacinia diam.</p>
                        <p>Vivamus efficitur et est quis posuere. Nulla sollicitudin vulputate dui, id pretium
                            tortor congue eu. Integer aliquet justo eu quam volutpat ullamcorper.</p>
                        <p>Duis ut hendrerit mauris. Phasellus faucibus ut enim vel tincidunt. Nunc venenatis a dui
                            et laoreet.</p>
                        <h5>T. Johnson</h5>
                    </div>
                    <i class="quote-right fas fa-quote-right"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog -->
<section id="blog" class="section-5 carousel showcase">
    <div class="overflow-holder">
        <div class="container">
            <div class="row intro">
                <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                    <span class="pre-title m-auto m-md-0">Our editorial content</span>
                    <h2>Latest <span class="featured"><span>News</span></span></h2>
                    <p>Every week we publish content about what is best in the business world.</p>
                </div>
                <div class="col-12 col-md-3 align-self-end">
                    <a href="#" class="btn mx-auto mr-md-0 ml-md-auto primary-button">SEE ALL</a>
                </div>
            </div>
            <div class="swiper-container mid-slider items" data-perview="3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="{{ asset('frontend/images/news-1.jpg')}}" alt="Lorem ipsum">
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Andrea
                                    Miller</a>
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>2 Days
                                    Ago</a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="page-single-post-1.html">
                                        <h4>Increasing creativity is possible for everyone</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="{{ asset('frontend/images/news-2.jpg') }}" alt="Lorem ipsum">
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>John
                                    Smith</a>
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>9 Days
                                    Ago</a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="page-single-post-1.html">
                                        <h4>Because market research is part of the business plan</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="{{ asset('frontend/images/news-3.jpg') }}" alt="Lorem ipsum">
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Andrea
                                    Miller</a>
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>16 Days
                                    Ago</a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="page-single-post-1.html">
                                        <h4>Working from home is now a trend</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="{{ asset('frontend/images/news-4.jpg') }}" alt="Lorem ipsum">
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>John
                                    Smith</a>
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>23 Days
                                    Ago</a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="page-single-post-1.html">
                                        <h4>Tips for having a good relationship at work</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="{{ asset('frontend/images/news-5.jpg') }}" alt="Lorem ipsum">
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>David
                                    Cooper</a>
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>30 Days
                                    Ago</a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="page-single-post-1.html">
                                        <h4>David Cooper tells about the opening of the new office in Baltimore</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="{{ asset('frontend/images/news-1.jpg') }}" alt="Lorem ipsum">
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Andrea
                                    Miller</a>
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>2 Days
                                    Ago</a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="page-single-post-1.html">
                                        <h4>Increasing creativity is possible for everyone</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="{{ asset('frontend/images/news-2.jpg') }}" alt="Lorem ipsum">
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>John
                                    Smith</a>
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>9 Days
                                    Ago</a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="page-single-post-1.html">
                                        <h4>Because market research is part of the business plan</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="{{ asset('frontend/images/news-3.jpg') }}" alt="Lorem ipsum">
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Andrea
                                    Miller</a>
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>16 Days
                                    Ago</a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="page-single-post-1.html">
                                        <h4>Working from home is now a trend</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="{{ asset('frontend/images/news-4.jpg') }}" alt="Lorem ipsum">
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>John
                                    Smith</a>
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>23 Days
                                    Ago</a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="page-single-post-1.html">
                                        <h4>Tips for having a good relationship at work</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="{{ asset('frontend/images/news-5.jpg') }}" alt="Lorem ipsum">
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>David
                                    Cooper</a>
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>30 Days
                                    Ago</a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="page-single-post-1.html">
                                        <h4>David Cooper tells about the opening of the new office in Baltimore</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Subscribe -->
<section id="subscribe" class="section-6 odd subscribe">
    <div class="container smaller">
        <div class="row">
            <div class="col-12 col-md-6 m-md-0 intro">
                <span class="pre-title m-0">Newsletter</span>
                <h2><span class="featured"><span>Know</span></span> First</h2>
                <p>Follow closely and receive content about our company and the news of the current market.</p>
            </div>
            <div class="col-12 col-md-6">
                <form action="https:/nexgen-html.codings.dev/php/form.php" id="nexgen-subscribe"
                    class="row m-auto items">
                    <input type="hidden" name="section" value="nexgen_subscribe">

                    {{-- <input type="hidden" name="reCAPTCHA"> --}}
                    <!-- Remove this field if you want to disable recaptcha -->

                    <div class="col-12 mt-0 input-group align-self-center item">
                        <input type="text" name="name" class="form-control field-name" placeholder="Name">
                    </div>
                    <div class="col-12 input-group align-self-center item">
                        <input type="email" name="email" class="form-control field-email" placeholder="Email">
                    </div>
                    <div class="col-12 input-group align-self-center item">
                        <a data-aos="zoom-in" class="btn primary-button">SUBSCRIBE</a>
                    </div>
                    <div class="col-12 item">
                        <span class="form-alert mt-3 mb-0"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="section-7 form contact">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 pr-md-5 align-self-center text">
                <div class="row intro">
                    <div class="col-12 p-0">
                        <span class="pre-title m-0">Send a message</span>
                        <h2>Get in <span class="featured"><span>Touch</span></span></h2>
                        <p>We will respond to your message as soon as possible.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-0">
                        <form action="https:/nexgen-html.codings.dev/php/form.php" id="nexgen-simple-form"
                            class="nexgen-simple-form">
                            <input type="hidden" name="section" value="nexgen_form">

                            {{-- <input type="hidden" name="reCAPTCHA"> --}}
                            <!-- Remove this field if you want to disable recaptcha -->

                            <div class="row form-group-margin">
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <input type="text" name="name" class="form-control field-name" placeholder="Name">
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <input type="email" name="email" class="form-control field-email"
                                        placeholder="Email">
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <input type="text" name="phone" class="form-control field-phone"
                                        placeholder="Phone">
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <i class="icon-arrow-down mr-3"></i>
                                    <select name="info" class="form-control field-info">
                                        <option value="" selected disabled>More Info</option>
                                        <option>Audit & Assurance</option>
                                        <option>Financial Advisory</option>
                                        <option>Analytics and M&A</option>
                                        <option>Middle Marketing</option>
                                        <option>Legal Consulting</option>
                                        <option>Regulatory Risk</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="col-12 m-0 p-2 input-group">
                                    <textarea name="message" class="form-control field-message"
                                        placeholder="Message"></textarea>
                                </div>
                                <div class="col-12 col-12 m-0 p-2 input-group">
                                    <span class="form-alert"></span>
                                </div>
                                <div class="col-12 input-group m-0 p-2">
                                    <a class="btn primary-button">SEND</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="contacts">
                    <h4>Example Inc.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Praesent diam lacus, dapibus sed imperdiet consectetur.</p>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-phone-alt mr-2"></i>
                                +1 (305) 1234-5678
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-envelope mr-2"></i>
                                <span class="__cf_email__"
                                    data-cfemail="dbb3beb7b7b49bbea3bab6abb7bef5b8b4b6">[email&#160;protected]</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                Main Avenue, 987
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="mt-2 btn outline-button" data-toggle="modal" data-target="#map">VIEW
                                MAP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@include('layouts.frontend.footer');
