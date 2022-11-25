@extends('pages.template.master')
@push('meta_tags')
<meta name="title" content="Driver Bali Tour - Paket Wisata Bali">
<meta name="description"
    content="Driver Bali tour , menyediakan paket promo wisata hotel jalan-jalan untuk pribadi, keluarga , organisasi dan perusahaan">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://driverbalitour.com/">
<meta property="og:title" content="Driver Bali Tour - Paket Wisata Bali">
<meta property="og:description"
    content="Driver Bali tour , menyediakan paket promo wisata hotel jalan-jalan untuk pribadi, keluarga , organisasi dan perusahaan">
<meta property="og:image" content="{{asset('public/images/meta_bg.jpg')}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://driverbalitour.com/">
<meta property="twitter:title" content="Driver Bali Tour - Paket Wisata Bali">
<meta property="twitter:description"
    content="Driver Bali tour , menyediakan paket promo wisata hotel jalan-jalan untuk pribadi, keluarga , organisasi dan perusahaan">
<meta property="twitter:image" content="{{asset('public/images/meta_bg.jpg')}}">
@endpush
@section('content')


<section class="hero-wrap hero-wrap-2 js-fullheight"
    style="background-image: url({{asset('public/vacation-master/images/bg_1.jpg')}});"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">About Us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>About us <i
                            class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter img" id="section-counter">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <div class="img d-flex align-self-stretch"
                    style="background-image:url({{asset('public/images/bg_profil.jpg')}});"></div>
            </div>
            <div class="col-md-6 pl-md-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h2 class="mb-4">ALFIAN GROUP TOUR TRAVEL (Driver Bali Tour)</h2>
                        <p>
                            ALFIAN GROUP TOUR TRAVEL
                            VOUCHER HOTEL
                            PRIVATE TOUR
                            PACKAGE BALI
                            PACKAGE NUSA PENIDA
                            TRANSPORT BALI
                            Voucher
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center mb-4">
                            <div class="text">
                                <strong class="number" data-number="300">0</strong>
                                <span>Successful Tours</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center mb-4">
                            <div class="text">
                                <strong class="number" data-number="295">0</strong>
                                <span>Happy Tourist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center mb-4">
                            <div class="text">
                                <strong class="number" data-number="200">0</strong>
                                <span>Place Explored</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section services-section mb-5 bg-light">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate">
                <h2 class="mb-4">Driver Bali Tour akan Memberikan Layanan Terbaik untuk Anda</h2>

                <p>Driver Bali Tour menyediakan beberapa paket yang kami sesuaikan dengan kebutuhan Anda saat ini, Paket
                    Honeymoon Bali dengan pilihan Hotel dan private Villa, Paket Tour Bali Plus Hotel, Paket Tour Bali
                    Tanpa Hotel dan paket wisata lainnya. Fasilitas yang kami berikan transport Full AC, driver yang
                    ramah dan berpengalaman, objek wisata yang menarik akan menambah kepuasan wisata Anda di Bali
                    bersama kami.
                </p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-6 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block">
                            <div class="icon">

                                <span class="fa-light fa-plane"></span>
                            </div>
                            <div class="media-body">
                                <h3 class="heading mb-3">TIKET FLIGHT</h3>
                                <p>Kami menyediakan tiket pesawat untuk paket tambahan
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block">
                            <div class="icon">
                                <span class="fa-brands fa-shopify"></span>
                            </div>
                            <div class="media-body">
                                <h3 class="heading mb-3">PERSONAL SHOPPING</h3>
                                <p>Kami menyediakan personal shopping untuk paket tambahan
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block">
                            <div class="icon">
                                <span class="flaticon-king-size"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">HOTEL</h3>
                                <p>Kami menyediakan paket include hotel
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block">
                            <div class="icon">
                                <span class="fa-duotone fa-car"></span>
                            </div>
                            <div class="media-body">
                                <h3 class="heading mb-3">PRIVATE TRANSPORT</h3>
                                <p>Kami menyediakan paket include private transport
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






@endsection