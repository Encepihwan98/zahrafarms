@extends('users.master')

@section('subheader')
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Wisata</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Wisata</li>
        </ol>
      </div>

    </div>
  </section>
@endsection

@section('content')
<section class="portfolio-details">
    @foreach ($data as $data)
    <div class="container">

      <div class="portfolio-details-container">

        <div class="owl-carousel portfolio-details-carousel">
          <img src="{{asset('img/wisata')}}/{{$data->image}}" class="img-fluid" alt="">
          {{-- <img src="{{url('theme/img/portfolio/portfolio-details-2.jpg')}}/" class="img-fluid" alt="">
          <img src="{{url('theme/img/portfolio/portfolio-details-3.jpg')}}" class="img-fluid" alt=""> --}}
        </div>

        <div class="portfolio-info">
          <h3>Informasi Wisata</h3>
          <ul>
            <li><strong>Category</strong>: Wisata Alam</li>
            <li><strong>Alamat</strong>: Lampung</li>
            <li><strong>Buka </strong>: 01 March, 2020</li>
            <li><strong>Tutup</strong>: 20.00</li>
          </ul>
        </div>

      </div>

      <div class="portfolio-description">
        <h2>{{$data->judul}}</h2>
        <p>
          {{$data->deskripsi}}
        </p>
      </div>
    </div>
    @endforeach
  </section>
@endsection
