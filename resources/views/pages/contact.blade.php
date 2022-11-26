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
                <h1 class="mb-3 bread">Contact Us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Contact us <i
                            class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb contact-section">
    <div class="container">
        <div class="row d-flex contact-info">
            <div class="col-md-3 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-map-signs"></span>
                    </div>
                    <h3 class="mb-2">Address</h3>
                    <p>Bali, Indonesia</p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fab fa-whatsapp"></span>
                    </div>
                    <h3 class="mb-2">WhatsApp</h3>
                    <p><a href="https://wa.me/{{$sosial_media->whatsapp}}">{{$sosial_media->whatsapp}}</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fab fa-facebook"></span>
                    </div>
                    <h3 class="mb-2">Facebook</h3>
                    <p><a href="{{$sosial_media->facebook}}"></a>Driver Bali Tour</p>
                </div>
            </div>
           
            <div class="col-md-3 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fab fa-instagram"></span>
                    </div>
                    <h3 class="mb-2">Instagram</h3>
                    <p><a href="https://www.instagram.com/{{$sosial_media->instagram}}">{{'@'.$sosial_media->instagram}}</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container">


        <div class="col-md-12 d-flex">
            <div id="map" class="bg-white"></div>
        </div>
    </div>
    </div>
</section>


@endsection