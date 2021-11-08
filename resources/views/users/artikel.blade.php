@extends('users.master')

@section('subheader')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Artikel</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
@endsection

@section('content')

<section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                    <div class="blog-sidebar">
                        <div class="search-form">
                            <h4>Search</h4>
                            <form action="#">
                                <input type="text" placeholder="Search . . .  ">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog-catagory">
                            <h4>Categories</h4>
                            <ul>
                                @foreach($artikel as $value)
                                    <li><a href="#">{{$value->kategori}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="recent-post">
                            <h4>Recent Post</h4>
                            <div class="recent-blog">
                                @foreach($artikel as $recent)
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="{{url('/data_file/'.$recent->foto)}} " alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>{{ \Illuminate\Support\Str::limit($recent->judul, 30, '....')}}</h6>
                                        <p>{{$recent->kategori}} <span>- May 19, 2019</span></p>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">

                    @foreach($artikel as $data)

                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="{{url('/data_file/'.$data->foto)}}" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="/readmore/{{$data->id}}">
                                        <h4>{{$data->judul}}</h4>
                                    </a>
                                    <p>{{$data->kategori}} <span>- May 19, 2019</span></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection