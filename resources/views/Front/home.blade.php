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
    <header class="header fadeout header-inverse pb-0 h-fullscreen" style="background-image: linear-gradient(to bottom, #243949 0%, #517fa4 100%);">
      <canvas class="constellation"></canvas>

      <div class="container">
        <div class="row h-full">
          <div class="col-12 text-center align-self-center">
            <h1 class="fs-50 fw-600 lh-15 hidden-sm-down">Built for <span class="text-primary" data-type="Authors, Startups, Entrepreneurs, SaaS, WebApps"></span></h1>
            <h1 class="fs-35 fw-600 lh-15 hidden-md-up">Built for<br><span class="text-primary" data-type="Authors, Startups, Entrepreneurs, SaaS, WebApps"></span></h1>
            <br>
            <p class="fs-20 hidden-sm-down"><strong>TheSaaS</strong>  {{$data->slogan}}</p>

          </div>

          <div class="col-12 align-self-end text-center pb-70">
            <a class="scroll-down-5 scroll-down-inverse" href="#" data-scrollto="section-demo"><span></span></a>
          </div>
        </div>
      </div>
    </header>
    <!-- END Header -->


    <!-- Main container -->
    <main class="main-content">
    <!--
     |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
     | Endless Components
     |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
     !-->
        <section class="section bg-gray "  id="section-demo">
            <div class="container">
                <header class="section-header">
                    <small>UI KIT</small>
                    <h2>Endless Components</h2>
                    <hr>
                    <p class="lead">Over a dozen reusable components built to provide iconography, dropdowns, input groups, navigation, alerts, and much more.</p>
                </header>


                <div class="row gap-y bg-gray">

                    <div class="col-12 col-md-6 col-lg-4 ">
                        <div class="card card-bordered card-hover-shadow text-center bg-gray">
                            <a class="card-block" href="#">
                                <p class="feature-icon text-info"><i class="icon-mobile  fs-50 "></i></p>
                                <h4 class="card-title">Responsive</h4>
                            </a>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card card-bordered card-hover-shadow text-center bg-gray">
                            <a class="card-block" href="#">
                                <p class="feature-icon text-warning"><i class="icon-tools fs-50 "></i></p>
                                <h4 class="card-title">UI Elements</h4>
                            </a>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card card-bordered card-hover-shadow text-center bg-gray">
                            <a class="card-block" href="#">
                                <p class="feature-icon  text-danger"><i class="ti-heart fs-50"></i></p>
                                <h4 class="card-title">SUPPORT</h4>
                            </a>
                        </div>
                    </div>



                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card card-bordered card-hover-shadow text-center bg-gray">
                            <a class="card-block" href="#">
                                <p class="feature-icon text-success"><i class="icon-gears fs-50"></i></p>
                                <h4 class="card-title">Web Development</h4>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card card-bordered card-hover-shadow text-center bg-gray">
                            <a class="card-block" href="#">
                                <p style="color: #78a300"><i class="icon-lightbulb fs-50"></i></p>
                                <h4 class="card-title">Creative</h4>
                            </a>
                        </div>
                    </div>



                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card card-bordered card-hover-shadow text-center bg-gray">
                            <a class="card-block" href="#">
                                <p style="color: #9052a3"><i class="ti-mobile fs-50"></i></p>
                                <h4 class="card-title">Mobile App</h4>
                            </a>
                        </div>
                    </div>


                </div>

                <br><br>

                <div class="text-center">
                    <a class="btn btn-sm btn-secondary" href="#">View More</a>
                </div>

            </div>
        </section>




      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | block-feature
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
        <section class="section p-0 bb-1 hidden-sm-down">
            <div class="container-wide">
                <div class="row no-gap">

                    <div class="col-12 col-md-6 bg-img" style="background-image: url('{{asset('Front/img/demo/gmail/compose.jpg')}}')"></div>


                    <div class="col-12 offset-md-1 col-md-4 py-90">
                        <p><small>Tips</small></p>
                        <h5>A better compose</h5>
                        <p> {{$data->mission}}</p>
                    </div>


                    <div class="col-12 offset-md-1 col-md-4 py-90">
                        <p><small>Collaborate</small></p>
                        <h5>View attachments instantly</h5>
                        <p> {{$data->vision}}</p>
                    </div>


                    <div class="col-12 col-md-6 offset-md-1 bg-img" style="background-image: url('{{asset('Front/img/demo/gmail/attachment.jpg')}}')"></div>


                </div>
            </div>
        </section>


      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Customization request
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section section-inverse py-40" style="background-color: #20bde6">
        <div class="container">
          <div class="row gap-y align-items-center">
            <div class="col-12 col-md-9 text-center text-md-left">
              <h4 class="fw-300 mb-0"> {{$data->qus}}</h4>
            </div>

            <div class="col-12 col-md-3 text-center text-md-right">
              <a class="btn btn-lg btn-round btn-white" href="https://themeforest.net/user/thethemeio#contact">Request customization</a>
            </div>
          </div>
        </div>
      </section>


    </main>
    <!-- END Main container -->

    <!-- mobile app -->


    <section class="section section-inverse py-120" style="background-image: url('{{asset('Front/img/bg-gift.jpg')}}')" data-overlay="4" id="section-download">
        <div class="container">

            <div class="section-dialog text-center aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1000">
                <p><img src="{{asset('Front/img/logo-light.png')}}" alt="logo"></p>
                <br>
                <h2>Download now</h2>
                <p>Continually e-enable vertical schemas with top-line infomediaries. Energistically restore real-time core competencies and compelling leadership skills.</p>

                <hr class="w-50">

                <div class="rating">
                    <label class="fa fa-star active"></label>
                    <label class="fa fa-star active"></label>
                    <label class="fa fa-star active"></label>
                    <label class="fa fa-star active"></label>
                    <label class="fa fa-star active"></label>
                </div>
                <p><small>Based on 3,000+ reviews</small></p>

                <div class="text-center gap-multiline-items-2 my-30">
                    <a href="#"><img class="img-fadein" src="{{asset('Front/img/badge-apple.png')}}" alt="download on app store"></a>
                </div>

            </div>

        </div>
    </section>



    <!-- end mobile app -->


    <!-- partner -->
    <section class="section py-40 bg-gray">
        <div class="container">
    <header class="section-header">
        <h2>Our Happy Clients</h2>
        <hr>
        <p class="lead">Join thousands of satisfied customers using our template globally.</p>
    </header>
    <div class="partner partner-sm">
        @foreach($partner as $p)
        <img src="{{asset('Front/img/web/')}}/{{$p->logo}}">
        @endforeach
    </div>
        </div>
    </section>

    <!-- end partner -->

    <!-- scroll -->
    <a class="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll -->

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
  <!-- end main script -->




  </body>
</html>
