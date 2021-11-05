@extends('users.master')

@section('subheader')
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Perangkat Desa</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Perangkat Desa</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->
@endsection

@section('content')
<section id="team" class="team">
    <div class="container">

      <div class="section-title">
        <h2>Perangkat Desa</h2>
        <p></p>
      </div>

      <div class="row">
        @foreach ($data as $data)
        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
          <div class="member">
            <div class="pic"><img src="{{asset('img/perangkatdesa')}}/{{$data->image}}" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>{{$data->nama}}</h4>
              <span>{{$data->jabatan}}</span>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        @if (!$data)
        <h1>Belum ada data yang disimpan</h1>
        @endif

        @endforeach
      </div>

    </div>
  </section><!-- End Our Team Section -->
@endsection
