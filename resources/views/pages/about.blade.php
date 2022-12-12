@extends('pages.template.master')
@push('meta_tags')
<meta name="title" content="Driver Bali Tour - Pakej Wisata Bali">
<meta name="description"
    content="Driver Bali tour , menyediakan pakej promosi pelancongan hotel untuk individu, keluarga, organisasi dan syarikat">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://driverbalitour.com/">
<meta property="og:title" content="Driver Bali Tour - Pakej Wisata Bali">
<meta property="og:description"
    content="Driver Bali tour , menyediakan pakej promosi pelancongan hotel untuk individu, keluarga, organisasi dan syarikat">
<meta property="og:image" content="{{asset('public/images/meta_bg.jpg')}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://driverbalitour.com/">
<meta property="twitter:title" content="Driver Bali Tour - Pakej Wisata Bali">
<meta property="twitter:description"
    content="Driver Bali tour , menyediakan pakej promosi pelancongan hotel untuk individu, keluarga, organisasi dan syarikat">
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
                    style="background-image:url({{asset('public/images/DRIVER_BALI_PROFIL.jpeg')}});"></div>
            </div>
            <div class="col-md-6 pl-md-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h2 class="mb-4">Holis (Driver Bali Tour)</h2>
                        <p>
                            HOLIS TOUR TRAVEL
                            Sewa mobil murah
                            Paket honeymoon
                            Paket keluarga
                            Paket grub
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
                <h2 class="mb-4">Driver Bali Tour Akan Memberikan Perkhidmatan yang Terbaik Untuk Anda</h2>
                
                <p>Driver Bali Tour Kami menyediakan beberapa pakej yang kami bersesuaian dengan keperluan semasa anda, Pakej Bali Honeymoon dengan pilihan hotel dan villa peribadi, Pakej Lawatan Hotel Bali Plus, Pakej Lawatan Bali Tanpa Hotel dan pakej pelancongan lain. Kemudahan yang kami sediakan adalah pengangkutan AC Penuh, pemandu yang mesra dan berpengalaman, objek pelancongan yang menarik yang akan menambahkan lagi kepuasan lawatan anda di Bali bersama kami.
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
                                <p>Kami menyediakan tiket penerbangan untuk pakej tambahan
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
                                <p>Kami menyediakan pembelian peribadi untuk pakej tambahan
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
                                <p>Kami menyediakan pakej termasuk hotel
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
                                <p>Kami menyediakan pakej termasuk pengangkutan peribadi
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