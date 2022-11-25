@extends('pages.template.master')
@push('meta_tags')
<meta name="title" content="Driver Bali Tour - {{$post->judul}}">
<meta name="description" content="Driver Bali tour , menyediakan paket promo wisata hotel jalan-jalan untuk pribadi, keluarga , organisasi dan perusahaan">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{url('details/'.str_replace(' ', '-', $post->judul).'/'.$post->id)}}">
<meta property="og:title" content="Driver Bali Tour - {{$post->judul}}">
<meta property="og:description" content="Driver Bali tour , menyediakan paket promo wisata hotel jalan-jalan untuk pribadi, keluarga , organisasi dan perusahaan">
<meta property="og:image" content="{{asset('public/images/thumnail/'.$post->thumnail)}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{url('details/'.str_replace(' ', '-', $post->judul).'/'.$post->id)}}">
<meta property="twitter:title" content="Driver Bali Tour - {{$post->judul}}">
<meta property="twitter:description" content="Driver Bali tour , menyediakan paket promo wisata hotel jalan-jalan untuk pribadi, keluarga , organisasi dan perusahaan">
<meta property="twitter:image" content="{{asset('public/images/thumnail/'.$post->thumnail)}}">
@endpush
@push('css')
<style>
    @media (max-width: 767.98px) { 
        
        .ats{
            display : none;
        }
    }
</style>
@endpush
@section('content')

<div class="bg-dark w-100 ats" style="height:90px;"></div>

<section class="ftco-counter img" id="section-counter">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <div class="img d-flex align-self-stretch"
                    style="background-image:url({{asset('public/images/thumnail/'.$post->thumnail)}});background-size: 100% 100%;background-repeat: no-repeat;"></div>
            </div>
            <div class="col-md-6 pl-md-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate fadeInUp ftco-animated">
                        <h2 class="mb-2">{{$post->judul}}</h2>
                        <h5 class="mt-0 text-primary font-weight-bold">{{$post->price}}</h5>
                        <p>{{$post->deskripsi}}</p>
                    </div>

                    
                </div>
                <div class="row border border-warning mb-3">
                    <div class="col-4 justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
                        <div class="block-18 text-center mb-4">
                            <div class="text">
                            <div class="icon"><span class="flaticon-king-size"></span></div>
                                <span>Hotels</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
                        <div class="block-18 text-center mb-4">
                            <div class="text">
                                <div class="icon"><span class="flaticon-paragliding"></span></div>
                                <span>{{$post->waktu}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
                        <div class="block-18 text-center mb-4">
                            <div class="text">
                            <div class="icon"><span class="flaticon-route"></span></div>
                                <span>Private Transport</span>
                            </div>
                        </div>
                    </div>
                </div>

                @php($url = url('details/'.str_replace(' ', '-', $post->judul).'/'.$post->id)) 
                @php($pesan = "_Halo Driver Bali Tour_%0aSaya ingin memesan *".$post->judul."*%0a%0a")

                <a href="https://api.whatsapp.com/send?phone={{$sosial_media->whatsapp}}&text={{$pesan}}_{{$url}}_%0a" class="float-right btn btn-success"> <i class="fa-brands fa-whatsapp"></i> Pesan Sekarang</a>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-md-last ftco-animate py-md-5 mt-md-5">
                
                {!! $post->content !!}

            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate bg-light py-md-5">
                <div class="sidebar-box pt-md-5">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Main Menu" disabled>
                        </div>
                    </form>
                </div>
                <!-- <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Categories</h3>
                        <li><a href="#">Travel <span>(12)</span></a></li>
                        <li><a href="#">Tour <span>(22)</span></a></li>
                        <li><a href="#">Destination <span>(37)</span></a></li>
                        <li><a href="#">Drinks <span>(42)</span></a></li>
                        <li><a href="#">Foods <span>(14)</span></a></li>
                        <li><a href="#">Travel <span>(140)</span></a></li>
                    </div>
                </div> -->

                <div class="sidebar-box ftco-animate">
                    <h3>Paket Lainnya</h3>

                    @forelse($lainnya as $last)

                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url({{asset('public/images/thumnail/'.$last->thumnail)}});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="{{url('details/'.str_replace(' ', '-', $last->judul).'/'.$last->id)}}">{{$last->judul}}</a></h3>
                            <div class="meta">
                                <div><a href="{{url('details/'.$last->judul.'/'.$last->id)}}"><span class="icon-calendar"></span> {{$last->waktu}}</a></div>
                                <div><a href="{{url('details/'.$last->judul.'/'.$last->id)}}"><span  class="fa-solid fa-tag"></i></span> {{$last->price}}</a></div>
                            </div>
                        </div>
                    </div>

                    @empty

                    <p>Empty</p>

                    @endforelse
    
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Tag Cloud</h3>
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">driver</a>
                        <a href="#" class="tag-cloud-link">bali</a>
                        <a href="#" class="tag-cloud-link">tour</a>
                        <a href="#" class="tag-cloud-link">nusa penida</a>
                        <a href="#" class="tag-cloud-link">wisatabali</a>
                    </div>
                </div>


            </div>

        </div>
    </div>
</section> <!-- .section -->




@endsection