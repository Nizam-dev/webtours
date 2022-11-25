<!DOCTYPE html>
<html lang="en">

<head>
    <title>Driver Bali Tour</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @stack('meta_tags')

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('public/vacation-master/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/vacation-master/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('public/vacation-master/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/vacation-master/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/vacation-master/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('public/vacation-master/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('public/vacation-master/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/vacation-master/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('public/vacation-master/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('public/vacation-master/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('public/vacation-master/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('public/AdminLTE/fa5pro/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/vacation-master/css/style.css')}}">
    @stack('css')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Driver Bali<span>Tours</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->is('/') ? 'active' :'' }}"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                    <li class="nav-item {{ request()->is('about') ? 'active' :'' }}"><a href="{{url('about')}}" class="nav-link">About</a></li>
                    <!-- <li class="nav-item"><a href="destination.html" class="nav-link">Destination</a></li>
                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
                    <li class="nav-item {{ request()->is('contact-us') ? 'active' :'' }}"><a href="{{url('contact-us')}}" class="nav-link">Contact</a></li>
                    <li class="nav-item cta"><a href="{{url('login')}}" class="nav-link">Login</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    @yield('content')

    <footer class="ftco-footer bg-bottom" style="background-image: url(images/footer-bg.jpg);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Vacation</h2>
                        <p>Tirta Gangga · Candi Lempuyangan · Pantai Jasri · Ice Cream World · Hidden Canyon, Beji
                            Guwang ·
                            Pantai Karma Kandara · Taman Safari Bali · Gemitir Garden · Sharma Springs Bambooen ·
                            Air Terjun Aling-Aling · Tegalalang Rice Terrace · Pasar Tradisional Ubud · The Chedi Club
                            ··autoload
                            Taman Nasional Bali Barat · Yellow Bridge Nusa Lembongan · Dream Museum Zone · Bangkai
                            Pesawat, Uluwatu ·
                            Double Six Beach · The Secret Garden · Nusa Ceningan · Upside Down World · Surf And Turf
                            Nusa Dua ·
                            Flying Board Tanjung Benoa · Angle Billabong · Air Terjun Tembok Barak · Bukit Belong · Air
                            Terjun Kanto Lampo ·
                            Pantai Batu Belig · Pantai Bingin · Water turbing Payangan
                        </p>

                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Infromation</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{url('/privacy-policy')}}" class="py-2 d-block">Privacy and Policy</a></li>
                            <li><a href="#" class="py-2 d-block">Disclaimer</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Experience</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Paket Wisata</a></li>
                            <li><a href="#" class="py-2 d-block">Paket Honeymoon</a></li>
                            <li><a href="#" class="py-2 d-block">Hotel and Restaurant</a></li>
                            <li><a href="#" class="py-2 d-block">Private Transport</a></li>
                        </ul>
                    </div>
                </div>

                @php($sosmed = App\Models\sosial_media::first())
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Bali, Indonesia</span>
                                </li>
                                <li><a href="https://wa.me/{{$sosmed->whatsapp}}"><span class="icon icon-phone"></span><span class="text">{{$sosmed->whatsapp}}</span></a></li>
                                </ul>
                            
                        </div>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                                <li class="ftco-animate"><a href="https://wa.me/{{$sosmed->whatsapp}}"><span class="fab fa-whatsapp"></span></a></li>
                                <li class="ftco-animate"><a href="https://www.instagram.com/{{$sosmed->instagram}}"><span class="icon-instagram"></span></a></li>
                                <li class="ftco-animate"><a href="{{$sosmed->facebook}}"><span class="icon-facebook"></span></a></li>
                            </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart color-danger"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>


    <script src="{{asset('public/vacation-master/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/vacation-master/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('public/vacation-master/js/popper.min.js')}}"></script>
    <script src="{{asset('public/vacation-master/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/vacation-master/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('public/vacation-master/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('public/vacation-master/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('public/vacation-master/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/vacation-master/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('public/vacation-master/js/aos.js')}}"></script>
    <script src="{{asset('public/vacation-master/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('public/vacation-master/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('public/vacation-master/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <!-- <script src="{{asset('public/vacation-master/js/google-map.js')}}"></script> -->
    <script src="{{asset('public/vacation-master/js/main.js')}}"></script>

</body>

</html>