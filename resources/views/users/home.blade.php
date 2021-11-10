@extends('users.master')

@section('subheader')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <!-- <span>Blog</span> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
@endsection

@section('content')
<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="{{url('theme/img/slide-1.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Kambing Berkualitas</span>
                        <h1>Budidaya Kambing</h1>
                        <p>Zahrah Farm memiliki produk unggulan diantara nya
                            Pembibitan Kambing, Penggemukan Kambing, Kambing Potong
                            dan Susu Kefir
                        </p>
                        <a href="#" class="primary-btn">Order Sekarang</a>
                    </div>
                </div>
                <!-- <div class="off-card">
                    <h2>Sale <span>50%</span></h2>
                </div> -->
            </div>
        </div>
        <div class="single-hero-items set-bg" data-setbg="{{url('theme/img/slide-2.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Susu Kambing</span>
                        <h1>Susu Kefir</h1>
                        <p>Susu kambing segar zahrah Farms, mengandung berbagai vitamin dan mineral, kefir juga mengandung 
sedikit vitamin D. Tidak hanya itu, minuman ini juga dilengkapi probiotik yang 
menyehatkan sistem pencernaan</p>
                        <a href="#" class="primary-btn">Order Sekarang</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2> Nutrisi <span>Tinggi</span></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<div class="banner-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="single-banner">
                    <img src="{{url('theme/img/banner-1.jpg')}}" alt="">
                    <div class="inner-text">
                        <h6>Penggemukan</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-banner">
                    <img src="{{url('theme/img/banner-2.jpg')}}" alt="">
                    <div class="inner-text">
                        <h6>Pembibitan</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-banner">
                    <img src="{{url('theme/img/banner-3.jpg')}}" alt="">
                    <div class="inner-text">
                        <h6>Kambing Potong</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-banner">
                    <img src="{{url('theme/img/banner-4.jpg')}}" alt="">
                    <div class="inner-text">
                        <h6>Susu Kefir</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->

<!-- Man Banner Section Begin -->
<section class="man-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-slider owl-carousel">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{url('theme/img/products/product-1.jpg')}}" alt="">
                            <div class="sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="/Order">+ Order</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Zahra Farms</div>
                            <a href="#">
                                <h5>Nama Product</h5>
                            </a>
                            <div class="product-price">
                                $14.00
                                <span>$35.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{url('theme/img/products/product-2.jpg')}}" alt="">
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="/Order">+ Order</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Zahra Farms</div>
                            <a href="#">
                                <h5>Nama Product</h5>
                            </a>
                            <div class="product-price">
                                $13.00
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{url('theme/img/products/product-3.jpg')}}" alt="">
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="/Order">+ Order</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Zahra Farms</div>
                            <a href="#">
                                <h5>Nama Product</h5>
                            </a>
                            <div class="product-price">
                                $34.00
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{url('theme/img/products/product-4.jpg')}}" alt="">
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="/Order">+ Order</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Zahra Farms</div>
                            <a href="#">
                                <h5>Nama Product</h5>
                            </a>
                            <div class="product-price">
                                $34.00
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Man Banner Section End -->

<!-- Latest Blog Section Begin -->
<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Artikel</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($blog as $data)
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="{{url('/data_file/'.$data->foto)}}" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                May 4,2019
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="#">
                            <h4>{{$data->judul}}</h4>
                        </a>
                        <p>{{ \Illuminate\Support\Str::limit($data->isi, 70, '....')}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->
@endsection