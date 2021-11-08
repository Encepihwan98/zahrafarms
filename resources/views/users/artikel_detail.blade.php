@extends('users.master')

@section('subheader')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Artikel > </span> <span>Detail</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
@endsection

@section('content')
<!-- Blog Details Section Begin -->
<section class="blog-details spad">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12">
                <div class="blog-details-inner">
                    <div class="blog-detail-title">
                        <h2>{{$artikel->judul}}</h2>
                        <p>{{$artikel->kategori}} <span>- May 19, 2019</span></p>
                    </div>
                    <div class="blog-large-pic">
                        <img src="{{url('theme/img/blog/blog-detail.jpg')}}" alt="">
                    </div>
                    <div class="blog-detail-desc">
                        <p>
                            {{$artikel->isi}}
                        </p>
                    </div>
                   
                    <div class="tag-share">
                        <div class="details-tag">
                            <ul>
                                <li><i class="fa fa-tags"></i></li>
                                <li>Pembibitan</li>
                                <li>Penggemukan</li>
                                <li>Susu Kefir</li>
                            </ul>
                        </div>
                        <div class="blog-share">
                            <span>Share:</span>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="blog-post">
                        <div class="row">
                            <div class="col-lg-5 col-md-6">
                                <a href="#" class="prev-blog">
                                    <div class="pb-pic">
                                        <i class="ti-arrow-left"></i>
                                        <img src="{{url('theme/img/blog/prev-blog.png')}}" alt="">
                                    </div>
                                    <div class="pb-text">
                                        <span>Previous Post:</span>
                                        <h5>The Personality Trait That Makes People Happier</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-5 offset-lg-2 col-md-6">
                                <a href="#" class="next-blog">
                                    <div class="nb-pic">
                                        <img src="{{url('theme/img/blog/next-blog.png')}}" alt="">
                                        <i class="ti-arrow-right"></i>
                                    </div>
                                    <div class="nb-text">
                                        <span>Next Post:</span>
                                        <h5>The Personality Trait That Makes People Happier</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- Blog Details Section End -->

@endsection