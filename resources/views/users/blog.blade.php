@extends('users.master')

@section('subheader')
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Blog</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Blog</li>
        </ol>
      </div>

    </div>
  </section>
@endsection

@section('content')
<section id="blog" class="blog">
    <div class="container">

      <div class="row">

        <div class="col-lg-8 entries">

            @foreach ($blog as $blogs)

           <article class="entry" data-aos="fade-up">

            <div class="entry-img">
              <img src="{{url('/data_file/'.$blogs->foto) }}" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="blog-single.html">{{$blogs->judul}}</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12 Comments</a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
                    {{ \Illuminate\Support\Str::limit($blogs->isi, 200, ' Baca Selengkap nya...')}}
              </p>
              <div class="read-more">
                <a href="/readmore/{{$blogs->id}}">Read More</a>
              </div>
            </div>

          </article><!-- End blog entry -->
          @endforeach


          <div class="blog-pagination">
            <ul class="justify-content-center">
              <li class="disabled"><i class="icofont-rounded-left"></i></li>
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
            </ul>
          </div>

        </div><!-- End blog entries list -->

        <div class="col-lg-4">

          <div class="sidebar" data-aos="fade-left">

            <h3 class="sidebar-title">Search</h3>
            <div class="sidebar-item search-form">
              <form action="">
                <input type="text">
                <button type="submit"><i class="icofont-search"></i></button>
              </form>

            </div><!-- End sidebar search formn-->

            <h3 class="sidebar-title">Categories</h3>
            <div class="sidebar-item categories">
              <ul>
                @foreach ($blog as $blogs)
                    <li><a href="#">{{$blogs->kategori}} <span>(25)</span></a></li>
                @endforeach
              </ul>

            </div><!-- End sidebar categories-->

            <h3 class="sidebar-title">Recent Posts</h3>
            <div class="sidebar-item recent-posts">
            @foreach ($blog as $blogs)
                <div class="post-item clearfix">
                    <img src="{{url('/data_file/'.$blogs->foto) }}" alt="">
                    <h4><a href="blog-single.html">{{$blogs->judul}}</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
            @endforeach

            </div><!-- End sidebar recent posts-->

          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

      </div>

    </div>
  </section>
@endsection
