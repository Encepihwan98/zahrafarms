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
                        <h2>The Personality Trait That Makes People Happier</h2>
                        <p>travel <span>- May 19, 2019</span></p>
                    </div>
                    <div class="blog-large-pic">
                        <img src="{{url('theme/img/blog/blog-detail.jpg')}}" alt="">
                    </div>
                    <div class="blog-detail-desc">
                        <p>psum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.
                        </p>
                    </div>
                   
                    <p>Sum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                    <div class="tag-share">
                        <div class="details-tag">
                            <ul>
                                <li><i class="fa fa-tags"></i></li>
                                <li>Travel</li>
                                <li>Beauty</li>
                                <li>Fashion</li>
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
                    <div class="blog-post">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->

@endsection