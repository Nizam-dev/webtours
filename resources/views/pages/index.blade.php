@extends('pages.template.master')
@push('meta_tags')
<meta name="title" content="Driver Bali Tour - Pakej Wisata Bali">
<meta name="description" content="Driver Bali tour , menyediakan pakej promosi pelancongan hotel untuk individu, keluarga, organisasi dan syarikat">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://driverbalitour.com/">
<meta property="og:title" content="Driver Bali Tour - Pakej Wisata Bali">
<meta property="og:description" content="Driver Bali tour , menyediakan pakej promosi pelancongan hotel untuk individu, keluarga, organisasi dan syarikat">
<meta property="og:image" content="{{asset('public/images/meta_bg.jpg')}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://driverbalitour.com/">
<meta property="twitter:title" content="Driver Bali Tour - Pakej Wisata Bali">
<meta property="twitter:description" content="Driver Bali tour , menyediakan pakej promosi pelancongan hotel untuk individu, keluarga, organisasi dan syarikat">
<meta property="twitter:image" content="{{asset('public/images/meta_bg.jpg')}}">
@endpush
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url({{asset('public/vacation-master/images/bg_2.jpg')}});"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
            data-scrollax-parent="true">
            <div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <a href="#v-destination"
                    class="icon-video  d-flex align-items-center justify-content-center mb-4">
                    <span class="ion-ios-play"></span>
                </a>
                <p class="caps" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tours ke setiap
                    sudut indah Bali dengan mudah dan tanpa kerumitan</p>
                <h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Booking Your Tour With Driver
                    Bali Tour
                </h1>
            </div>
        </div>
    </div>
</div>

<!-- <section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-wrap-1 ftco-animate p-4">
                    <form action="#" class="search-property-1">
                        <div class="row">
                            <div class="col-md-9 align-items-end">
                                <div class="form-group">
                                    <label for="#">Destination</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="ion-ios-search"></span></div>
                                        <input type="text" class="form-control" placeholder="Search place">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 align-self-end">
                                <div class="form-group">
                                    <div class="form-field">
                                        <input type="submit" value="Search" class="form-control btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="ftco-section services-section bg-light">
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




<section class="ftco-section ftco-no-pt" id="v-destination">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Destinasi Pelancongan</h2>
            </div>
        </div>
        <div class="row">

            @foreach($postingan as $post)
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="{{url('details/'.str_replace(' ', '-', $post->judul).'/'.$post->id)}}" class="img"
                        style="background-image: url({{asset('public/images/thumnail/'.$post->thumnail)}});background-size: 100% 100%;background-repeat: no-repeat;"></a>
                    <div class="text p-4">
                        <span class="price">{{$post->price}}</span>
                        <span class="days">{{$post->waktu}} Tour</span>
                        <h3><a href="{{url('details/'.str_replace(' ', '-', $post->judul).'/'.$post->id)}}">{{$post->judul}}</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                        <ul>
                            <li><span class="fa-duotone fa-car"></span></li>
                            <li><span class="fa-duotone fa-bed"></span></li>
                            <li><span class="fa-solid fa-umbrella-beach"></i></span></li>
                        </ul>
                    <a href="{{url('details/'.str_replace(' ', '-', $post->judul).'/'.$post->id)}}" class="btn btn-sm btn-primary float-right mr-2" style="margin-top:-30px;">Pesan</a>

                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
    </div>
</section>



<section class="ftco-section" style="background-image : url({{asset('public/vacation-master/images/bg_3.jpg')}})">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Client Tours</h2>
            </div>
        </div>
        <div class="row d-flex">

            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <img src="{{asset('public/vacation-master/images/image_1.jpg')}}" class="w-100" style="height:220px;" alt="" srcset="">
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center mb-4 topp">
                            <div class="one">
                                <span class="day">21</span>
                            </div>
                            <div class="two">
                                <span class="yr">2019</span>
                                <span class="mos">August</span>
                            </div>
                        </div>
                        <h3 class="heading">18 Agustus Nusa Penida</h3>
                    </div>
                </div>
            </div>

            

        </div>
    </div>
</section>

@endsection