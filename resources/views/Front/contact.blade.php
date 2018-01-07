<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>TheSaaS - Responsive Bootstrap SaaS, Software & WebApp Template</title>

    <!-- Styles -->
    <link href="{{asset('Front/css/core.min.css')}}" rel="stylesheet">
    <link href="{{asset('Front/css/thesaas.min.css')}}" rel="stylesheet">
    <link href="{{asset('Front/css/style.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset('Front/img/apple-touch-icon.png')}}">
    <link rel="icon" href="{{asset('Front/img/favicon.png')}}">

    <!--  Open Graph Tags -->
    <meta property="og:title" content="TheSaaS">
    <meta property="og:description" content="A responsive, professional, and multipurpose SaaS, Software, Startup and WebApp landing template powered by Bootstrap 4.">
    <meta property="og:image" content="http://thetheme.io/thesaas/assets/img/og-img.jpg">
    <meta property="og:url" content="http://thetheme.io/thesaas/">
    <meta name="twitter:card" content="summary_large_image">
</head>

<body>


<!-- Topbar -->
<nav class="topbar topbar-inverse topbar-expand-sm topbar-sticky">
    <div class="container">

        <div class="topbar-left">
            <a class="topbar-brand" href="index.html">
                <img class="logo-default" src="{{asset('Front/img/logo.png')}}" alt="logo">
                <img class="logo-inverse" src="{{asset('Front/img/logo-light.png')}}" alt="logo">
            </a>
        </div>


        <div class="topbar-right">

            <button class="drawer-toggler ml-12 ti-align-right"></button>
        </div>

    </div>
</nav>
<!-- END Topbar -->

<!-- drower -->
<div class="drawer">
    <div class="drawer-content">
        <ul class="nav nav-primary nav-hero flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{URL('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL('/team')}}">Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL('/blog')}}">blog </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL('/contact')}}">contact us </a>
            </li>
        </ul>

        <br>

        <hr>

        <div class="social social-boxed social-rounded text-center">
            <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
            <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
            <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
            <a class="social-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
        </div>

        <br>

        <div class="row">

        </div>

    </div>

    <button class="drawer-close"></button>
    <div class="drawer-backdrop"></div>
</div>
<!-- end drower -->


<!-- Header -->
<header class="header header-inverse" style="background-color: #35cd74;">
    <div class="container text-center">

        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">

                <h1>contact us </h1>
                <p class="fs-20 opacity-70">Find out about our mission, services and meet our great team</p>

            </div>
        </div>

    </div>
</header>
<!-- END Header -->


<!-- Main container -->
<main class="main-content">



<!-- contact -->


    <div class="section">
        <div class="container">

            <div class="row gap-y  ">
                <div class="col-12 col-md-6">

                    <form action="assets/php/sendmail.php" method="POST" data-form="mailer">
                        <div class="alert alert-success">We received your message and will contact you back soon.</div>

                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" name="name" placeholder="Your Name">
                        </div>

                        <div class="form-group">
                            <input class="form-control form-control-lg" type="email" name="email" placeholder="Your Email Address">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control form-control-lg" name="message" rows="4" placeholder="Your Message"></textarea>
                        </div>


                        <button class="btn btn-lg btn-primary btn-block" type="submit">Send Enquiry</button>
                    </form>

                </div>


                <div class="col-12 col-md-5 offset-md-1">
                    <div class="bg-grey h-full p-20">
                        <p>Give us a call or stop by our door anytime, we try to answer all enquiries within 24 hours on business days.</p>
                        <p>We are open from 9am — 5pm week days.</p>

                        <hr class="w-80">

                        <p class="lead">652 Main Road, Apt 12<br>New York, USA 10033</p>

                        <div>
                            <span class="d-inline-block w-20 text-lighter" title="Email">E:</span>
                            <span class="fs-14">info@domain.com</span>
                        </div>

                        <div>
                            <span class="d-inline-block w-20 text-lighter" title="Phone">P:</span>
                            <span class="fs-14">+1 (123) 456-7890</span>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>


<!-- end contact -->



</main>
<!-- END Main container -->



<!-- Footer -->
<footer class="site-footer py-90">
    <div class="container">
        <div class="row gap-y">
            <div class="col-12 col-md-12 col-lg-4">
                <h6 class="heading-alt text-uppercase fs-14 mb-16">
                    <img src="assets/img/logo.png" alt="logo">
                </h6>
                <p class="fs-13">TheSaaS is a responsive, professional, and multipurpose SaaS, Software, Startup and WebApp landing template powered by Bootstrap 4. TheSaaS is a powerful and super flexible tool for any kind of landing pages.</p>
                <br>
                <p class="text-light">Copyright © 2017 <a class="text-light" href="http://thetheme.io">TheThemeio</a>. All rights reserved.</p>
            </div>

            <div class="col-6 col-md-4 col-lg-2">
                <h6 class="heading-alt text-uppercase fs-14 mb-3">Samples</h6>
                <div class="nav flex-column">
                    <a class="nav-link" href="demo-app.html">Mobile App</a>
                    <a class="nav-link" href="demo-bootstrap.html">Bootstrap</a>
                    <a class="nav-link" href="demo-trello.html">Trello</a>
                    <a class="nav-link" href="demo-gmail.html">Gmail</a>
                    <a class="nav-link" href="demo-slack.html">Slack</a>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-2">
                <h6 class="heading-alt text-uppercase fs-14 mb-3">Company</h6>
                <div class="nav flex-column">
                    <a class="nav-link" href="page-how-it-works.html">How It Works</a>
                    <a class="nav-link" href="page-pricing.html">Pricing</a>
                    <a class="nav-link" href="blog-grid.html">Blog</a>
                    <a class="nav-link" href="page-about.html">About</a>
                    <a class="nav-link" href="page-privacy.html">Privacy Policy</a>
                </div>
            </div>


            <div class="col-12 col-md-4 col-lg-3">
                <h6 class="heading-alt text-uppercase fs-14 mb-3">Subscribe</h6>

                <form class="form-inline form-round1 justify-content-center justify-content-lg-end" action="" method="post" target="_blank">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" name="EMAIL" class="form-control" placeholder="Email Address">
                  <span class="input-group-btn">
                    <button class="btn btn-info"><i class="fa fa-paper-plane"></i></button>
                  </span>
                    </div>
                </form>

                <hr>

                <div class="social text-center">
                    <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="social-gplus" href="#"><i class="fa fa-google-plus"></i></a>
                    <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
                    <a class="social-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                </div>
                <br>
            </div>

        </div>
    </div>
</footer>
<!-- END Footer -->



<!-- Scripts -->
<script src="{{asset('Front/js/core.min.js')}}"></script>
<script src="{{asset('Front/js/thesaas.min.js')}}"></script>
<script src="{{asset('Front/js/script.js')}}"></script>

</body>
</html>
