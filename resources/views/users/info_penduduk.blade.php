@extends('users.master')

@section('subheader')
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Info Penduduk</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Info Penduduk</li>
        </ol>
      </div>

    </div>
  </section>
@endsection

@section('content')
<section class="about-lists">
    <div class="container">

      <div class="row no-gutters">

        <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
          <span>01</span>
          <h4>Petani</h4>
          <p>dari 9 % masyarakat nya sebagai petani</p>
        </div>

        <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
          <span>02</span>
          <h4>Wirausaha</h4>
          <p>dari 9 % masyarakat nya sebagai wirausaha</p>
        </div>

        <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
          <span>03</span>
          <h4>PNS</h4>
          <p>dari 9 % masyarakat nya sebagai PNS</p>
        </div>

        <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
          <span>04</span>
          <h4>Buruh</h4>
          <p>dari 9 % masyarakat nya sebagai Buruh</p>
        </div>

        <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="400">
          <span>05</span>
          <h4>Guru</h4>
          <p>dari 9 % masyarakat nya sebagai Guru</p>
        </div>

        <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="500">
          <span>06</span>
          <h4>Facilis Impedit</h4>
          <p>dari 9 % masyarakat nya sebagai petani</p>
        </div>

      </div>

    </div>
  </section><!-- End About Lists Section -->



<!-- ======= Counts Section ======= -->
  <section class="counts section-bg">
    @foreach ($info as $info)

    <div class="container">

      <div class="row">

        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
          <div class="count-box">
            <i class="icofont-simple-smile" style="color: #20b38e;"></i>
            <span data-toggle="counter-up">{{$info->jumlah_penduduk}}</span>
            <p>Jumlah Penduduk</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
          <div class="count-box">
            <i class="icofont-document-folder" style="color: #c042ff;"></i>
            <span data-toggle="counter-up">{{$info->jumlah_laki_dewasa}}</span>
            <p>Jumlah Laki Laki</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
          <div class="count-box">
            <i class="icofont-live-support" style="color: #46d1ff;"></i>
            <span data-toggle="counter-up">{{$info->jumlah_perempuan_dewasa}}</span>
            <p>Jumlah Perempuan</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
          <div class="count-box">
            <i class="icofont-users-alt-5" style="color: #ffb459;"></i>
            <span data-toggle="counter-up">{{$info->jumlah_anak}}</span>
            <p>Jumlah Anak Anak</p>
          </div>
        </div>

      </div>

    </div>

    @endforeach
  </section>
@endsection
