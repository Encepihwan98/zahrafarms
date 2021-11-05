@extends('users.master')

@section('content')
<section id="blog" class="blog">
    <div class="container">

      <div class="row">

        @foreach ($blog as $blogs)
        <div class="col-lg-8 entries">

          <article class="entry entry-single" data-aos="fade-up">

            <div class="entry-img">
              <img src="{{url('/data_file/'. $blogs->foto)}}" alt="" class="img-fluid">
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
                {{$blogs->isi}}
            </div>

            <div class="entry-footer clearfix">
              <div class="float-left">
                <i class="icofont-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>

                <i class="icofont-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div>

              <div class="float-right share">
                <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
              </div>

            </div>

          </article><!-- End blog entry -->


        </div><!-- End blog entries list -->
        @endforeach

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
  </section><!-- End Blog Section -->
@endsection
