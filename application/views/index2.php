<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Mobile Application HTML5 Template">
    <meta name="copyright" content="MACode ID, https://www.macodeid.com/">
    <title>PT. Climber Style</title>
    <link rel="shortcut icon" href="<?= base_url('assets/favicon.png') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/css/maicons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/animate/animate.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/owl-carousel/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/mobster.css') ?>">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-floating">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url('assets/favicon-light.png') ?>" alt="" width="40">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
                aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Home</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url('dashboard1') ?>">Dashboard Admin</a>
                            <a class="dropdown-item active" href="<?= base_url('dashboard2') ?>">Dashboard Member</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="updates.html">What's New</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
                <div class="ml-auto my-2 my-lg-0">
                    <a href="<?= base_url('auth') ?>">
                        <button class="btn btn-dark rounded-pill">Login</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="page-hero-section bg-image hero-home-2"
        style="background-image: url(<?= base_url('assets/img/bg_hero_2.svg') ?>);">
        <div class="hero-caption">
            <div class="container fg-white h-100">
                <div class="row align-items-center h-100">
                    <div class="col-lg-6 wow fadeInUp">
                        <div class="badge badge-soft mb-2">#1 Finances App on 2020</div>
                        <h1 class="mb-4">Welcome To Member PT. Climber Style</h1>
                        <p class="mb-4">Climber Style has features to view, shop and manage <br>Like Seeing Attendance
                            Data.</p>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block wow zoomIn">
                        <div class="img-place mobile-preview shadow floating-animate">
                            <img src="<?= base_url('assets/img/app_showcase.svg') ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-section no-scroll">
        <div class="container">
            <h2 class="text-center wow fadeIn">Our Main Features</h2>

            <div class="row justify-content-center mt-5">
                <div class="col-lg-10">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-4 py-3 wow fadeInLeft">
                            <div class="card card-body border-0 text-center shadow pt-5">
                                <div class="svg-icon mx-auto mb-4">
                                    <img src="<?= base_url('assets/img/icons/payment.png') ?>" alt="">
                                </div>
                                <h5 class="fg-gray">Secure Payment</h5>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
                            <div class="card card-body border-0 text-center shadow pt-5">
                                <div class="svg-icon mx-auto mb-4">
                                    <img src="<?= base_url('assets/img/icons/customizable.png') ?>" alt="">
                                </div>
                                <h5 class="fg-gray">Easily Customizable</h5>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 py-3 wow fadeInRight">
                            <div class="card card-body border-0 text-center shadow pt-5">
                                <div class="svg-icon mx-auto mb-4">
                                    <img src="<?= base_url('assets/img/icons/concept.png') ?>" alt="">
                                </div>
                                <h5 class="fg-gray">Powerful Concept</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-section no-scroll">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 wow fadeIn">
                    <div class="img-place">
                        <img src="<?= base_url('assets/img/app_preview_4.png') ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-5 pl-lg-5 wow fadeInUp">
                    <h2 class="mb-4">All kind of business tools integration</h2>
                    <a href="#" class="btn btn-outline-primary rounded-pill">See Addons</a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 py-3">
                    <div class="iconic-list">
                        <div class="iconic-item wow fadeInUp">
                            <div class="iconic-content">
                                <h5>Powerful Features</h5>
                            </div>
                            <div class="iconic-md iconic-text bg-warning fg-white rounded-circle">
                                <span class="mai-analytics"></span>
                            </div>
                        </div>
                        <div class="iconic-item wow fadeInUp">
                            <div class="iconic-content">
                                <h5>Fully Secured</h5>
                            </div>
                            <div class="iconic-md iconic-text bg-info fg-white rounded-circle">
                                <span class="mai-shield-checkmark"></span>
                            </div>
                        </div>
                        <div class="iconic-item wow fadeInUp">
                            <div class="iconic-content">
                                <h5>Easy Monitoring</h5>
                            </div>
                            <div class="iconic-md iconic-text bg-indigo fg-white rounded-circle">
                                <span class="mai-desktop-outline"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 py-3 wow zoomIn">
                    <div class="img-place mobile-preview shadow">
                        <img src="<?= base_url('assets/img/app_preview_2.png') ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="iconic-list">
                        <div class="iconic-item wow fadeInUp">
                            <div class="iconic-md iconic-text bg-warning fg-white rounded-circle">
                                <span class="mai-speedometer-outline"></span>
                            </div>
                            <div class="iconic-content">
                                <h5>Powerful Features</h5>
                            </div>
                        </div>
                        <div class="iconic-item wow fadeInUp">
                            <div class="iconic-md iconic-text bg-success fg-white rounded-circle">
                                <span class="mai-aperture"></span>
                            </div>
                            <div class="iconic-content">
                                <h5>Fully Secured</h5>
                            </div>
                        </div>
                        <div class="iconic-item wow fadeInUp">
                            <div class="iconic-md iconic-text bg-indigo fg-white rounded-circle">
                                <span class="mai-stats-chart-outline"></span>
                            </div>
                            <div class="iconic-content">
                                <h5>Easy Monitoring</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="page-section">
        <div class="container">
            <div class="row justify-content-center text-center wow fadeInUp">
                <div class="col-lg-6">
                    <h2 class="mb-3">Get awesome features, without extra charges</h2>
                    <div class="btn-group btn-group-toggle rounded-pill btn-switch" data-toggle="buttons">
                        <label class="btn active">
                            <input type="radio" name="options" id="option1" checked> Monthly
                        </label>
                        <label class="btn">
                            <input type="radio" name="options" id="option2"> Annually
                        </label>
                    </div>
                </div>
            </div>
            <div class="pricing-table mt-5 wow fadeInUp">
                <div class="pricing-item active no-transform">
                    <div class="pricing-header">
                        <h5>Business Plan</h5>
                        <h1 class="fw-normal">$49.00</h1>
                    </div>
                    <div class="pricing-body">
                        <ul class="theme-list">
                            <li class="list-item">Push Notification</li>
                            <li class="list-item">Unlimited Bandwith</li>
                            <li class="list-item">Realtime Database</li>
                            <li class="list-item">Monthly Backup</li>
                            <li class="list-item">24/7 Support</li>
                        </ul>
                    </div>
                    <button class="btn btn-dark">Choose Plan</button>
                </div>
                <div class="pricing-item">
                    <div class="pricing-header">
                        <h5>Starter Plan</h5>
                        <h1 class="fw-normal">$24.00</h1>
                    </div>
                    <div class="pricing-body">
                        <ul class="theme-list">
                            <li class="list-item">Push Notification</li>
                            <li class="list-item">Unlimited Bandwith</li>
                            <li class="list-item">Realtime Database</li>
                            <li class="list-item">Monthly Backup</li>
                            <li class="list-item">24/7 Support</li>
                        </ul>
                    </div>
                    <button class="btn btn-dark">Choose Plan</button>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="page-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6 wow fadeIn">
                    <h2>Meet client satisfaction by using product</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="owl-carousel stack-carousel mt-5 wow fadeInUp">
                <div class="item">
                    <div class="ratings fs-small py-3">
                        <span class="icon mai-star"></span>
                        <span class="icon mai-star"></span>
                        <span class="icon mai-star"></span>
                        <span class="icon mai-star"></span>
                        <span class="icon mai-star-half"></span>
                    </div>
                    <div class="caption">Very Perfect Product</div>
                    <div class="avatar mt-3">
                        <div class="avatar-img">
                            <img src="<?= base_url('assets/img/person/person_1.png') ?>" alt="">
                        </div>
                        <div class="avatar-caption">
                            <p class="mb-0 fw-medium fg-primary">Galih Raugana</p>
                            <div class="fs-vsmall fw-medium">UI Designer</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="ratings fs-small py-3">
                        <span class="icon mai-star"></span>
                        <span class="icon mai-star"></span>
                        <span class="icon mai-star"></span>
                        <span class="icon mai-star"></span>
                        <span class="icon mai-star-half"></span>
                    </div>
                    <div class="caption">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem distinctio esse
                        eum laudantium necessitatibus autem perferendis quod ipsum eaque.</div>
                    <div class="avatar mt-3">
                        <div class="avatar-img">
                            <img src="<?= base_url('assets/img/person/person_2.png') ?>" alt="">
                        </div>
                        <div class="avatar-caption">
                            <p class="mb-0 fw-medium fg-primary">REZA</p>
                            <div class="fs-vsmall fw-medium">Graphic Designer</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="ratings fs-small py-3">
                        <span class="icon mai-star"></span>
                        <span class="icon mai-star"></span>
                        <span class="icon mai-star"></span>
                        <span class="icon mai-star"></span>
                        <span class="mai-star"></span>
                    </div>
                    <div class="caption">Quality Products</div>
                    <div class="avatar mt-3">
                        <div class="avatar-img">
                            <img src="<?= base_url('assets/img/person/person_3.png') ?>" alt="">
                        </div>
                        <div class="avatar-caption">
                            <p class="mb-0 fw-medium fg-primary">Galih Raugana</p>
                            <div class="fs-vsmall fw-medium">Data Analyst</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-section bg-light">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 py-3 wow fadeInUp">
                    <h2 class="mb-4">Frequently <br> asked question</h2>
                    <p class="fg-primary fw-medium">Need more helps?</p>
                    <a href="#" class="btn btn-gradient btn-split-icon rounded-pill">
                        <span class="icon mai-call-outline"></span> Contact Us
                    </a>
                </div>
                <div class="col-lg-7 py-3 no-scroll-x">
                    <div class="accordion accordion-gap" id="accordionFAQ">
                        <div class="accordion-item wow fadeInRight">
                            <div class="accordion-trigger" id="headingFour">
                                <button class="btn collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">Payment
                                    types that won't work</button>
                            </div>
                            <div id="collapse1" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionFAQ">
                                <div class="accordion-content">
                                    <p>You can't add these payment methods to Google Pay:</p>
                                    <ul>
                                        <li>Wire transfers</li>
                                        <li>Bank transfers</li>
                                        <li>Western Union</li>
                                        <li>Moneygram</li>
                                        <li>Virtual credit cards (VCC)</li>
                                        <li>Health savings account (HSA)</li>
                                        <li>Any escrow type of payment</li>
                                        <li>Prepaid cards if you use automatic payments</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInRight">
                            <div class="accordion-trigger" id="headingFive">
                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapse2"
                                    aria-expanded="true" aria-controls="collapse2">Already seeing payment
                                    methods</button>
                            </div>
                            <div id="collapse2" class="collapse show" aria-labelledby="headingFive"
                                data-parent="#accordionFAQ">
                                <div class="accordion-content">
                                    <p>New to Google Pay and already seeing payment methods? If you paid for something
                                        through Google in the past, Google Pay saved your card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInRight">
                            <div class="accordion-trigger" id="headingSix">
                                <button class="btn collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Your
                                    transaction cannot be completed</button>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="headingSix"
                                data-parent="#accordionFAQ">
                                <div class="accordion-content">
                                    <p>If you see this error message, wait 24 hours and try to add your card again.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInRight">
                            <div class="accordion-trigger" id="headingSeven">
                                <button class="btn collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">Credit &
                                    Debit cards</button>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="headingSeven"
                                data-parent="#accordionFAQ">
                                <div class="accordion-content">
                                    <ul>
                                        <li>American Express</li>
                                        <li>MasterCard</li>
                                        <li>Visa</li>
                                        <li>Discover (U.S. only)</li>
                                        <li>JCB (Japan and U.S. only)</li>
                                        <li>Visa Electron (outside U.S. only)</li>
                                        <li>Elo credit cards (Brazil only; Elo debit cards aren’t accepted)</li>
                                    </ul>
                                    <p>The types of cards accepted by Google services vary by location and product.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInRight">
                            <div class="accordion-trigger" id="headingEight">
                                <button class="btn collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">Send money
                                    to friends or family</button>
                            </div>
                            <div id="collapse5" class="collapse" aria-labelledby="headingEight"
                                data-parent="#accordionFAQ">
                                <div class="accordion-content">
                                    <p>This feature is only available in the US. For the US territories, this is
                                        supported only if the debit card was issued under a US-licensed bank. If you'd
                                        like to know in advance whether your payment to or from a US territory
                                        will go through, please check with your card issuing bank.</p>

                                    <p>You can use Google Pay to send money to friends and family or to someone using
                                        their email address or phone number. Google Pay charges no fees.</p>

                                    <p>If you have a problem sending money, here is a list of likely reasons.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInRight">
                            <div class="accordion-trigger" id="headingNine">
                                <button class="btn collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">How long it
                                    usually takes to send or receive money</button>
                            </div>
                            <div id="collapse6" class="collapse" aria-labelledby="headingNine"
                                data-parent="#accordionFAQ">
                                <div class="accordion-content">
                                    <p>For the best Google Pay experience, we recommend using a debit card whenever you
                                        send or receive money from friends and family. With a debit card, sending and
                                        receiving money is usually the fastest option.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-section">
        <div class="container">
            <div class="text-center wow fadeIn">
                <h2 class="mb-4">Our partners</h2>
                <p>Become a <a href="#">partners?</a></p>
            </div>
            <div
                class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 justify-content-center align-items-center mt-5">
                <div class="p-3 wow zoomIn">
                    <div class="img-place client-img">
                        <img src="<?= base_url('assets/img/clients/alter_sport.png') ?>" alt="">
                    </div>
                </div>
                <div class="p-3 wow zoomIn">
                    <div class="img-place client-img">
                        <img src="<?= base_url('assets/img/clients/cleaning_service.png') ?>" alt="">
                    </div>
                </div>
                <div class="p-3 wow zoomIn">
                    <div class="img-place client-img">
                        <img src="<?= base_url('assets/img/clients/creative_photo.png') ?>" alt="">
                    </div>
                </div>
                <div class="p-3 wow zoomIn">
                    <div class="img-place client-img">
                        <img src="<?= base_url('assets/img/clients/global_tv.png') ?>" alt="">
                    </div>
                </div>
                <div class="p-3 wow zoomIn">
                    <div class="img-place client-img">
                        <img src="<?= base_url('assets/img/clients/net_sport_tv.png') ?>" alt="">
                    </div>
                </div>
                <div class="p-3 wow zoomIn">
                    <div class="img-place client-img">
                        <img src="<?= base_url('assets/img/clients/news_digital_tv.png') ?>" alt="">
                    </div>
                </div>
                <div class="p-3 wow zoomIn">
                    <div class="img-place client-img">
                        <img src="<?= base_url('assets/img/clients/spa_beauty.png') ?>" alt="">
                    </div>
                </div>
                <div class="p-3 wow zoomIn">
                    <div class="img-place client-img">
                        <img src="<?= base_url('assets/img/clients/trivier_group.png') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-footer-section bg-dark fg-white">
        <div class="container mb-5">
            <div class="row justify-content-center text-center wow fadeInUp">
                <div class="col-lg-8">
                    <div class="text-center mb-3">
                        <img src="<?= base_url('assets/favicon-light.png') ?>" alt="" height="80">
                    </div>
                    <h3 class="mb-3"><span class="fg-primary">Climber</span>Style</h3>
                    <ul class="nav justify-content-center py-3">
                        <li class="nav-item"><a href="index.html" class="nav-link fg-white px-4">Home</a></li>
                        <li class="nav-item"><a href="" class="nav-link fg-white px-4">Key Features</a></li>
                        <li class="nav-item"><a href="" class="nav-link fg-white px-4">Pricing</a></li>
                        <li class="nav-item"><a href="" class="nav-link fg-white px-4">Testimonials</a></li>
                        <li class="nav-item"><a href="" class="nav-link fg-white px-4">FAQ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <p class="text-center mt-4 wow fadeIn">Copyright &copy; 2020 <a href="#" class="fg-white fw-medium">MACode
                ID</a>. All right reserved</p>
    </div>
    <script src="<?= base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/owl-carousel/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/wow/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/mobster.js') ?>"></script>
</body>

</html>