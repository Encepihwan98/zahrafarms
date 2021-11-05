@extends('users.master')

@section('subheader')
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Sejarah</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Sejarah</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->
@endsection

@section('content')
<section class="timeline-carousel">
    <div class="section-title" data-aos="fade-up">
        <h2>Sejarah <strong>Desa</strong></h2>
    </div>
    <div class="timeline-carousel__item-wrapper" data-js="timeline-carousel">
        <!--Timeline item-->
        <div class="timeline-carousel__item">
            <div class="timeline-carousel__image">
                <div class="media-wrapper media-wrapper--overlay"
                    style="background: url('http://www.unla.ac.id/resources/img/ori/sejarah.png') center center; background-size:cover;">
                </div>
            </div>
            <div class="timeline-carousel__item-inner">
                <span class="year">1980</span>

                <p>
                    Dimulai pada awal tahun 1980 atas prakarsa beberapa purnawirawan Polri
                    yang peduli terhadap pendidikan yang berdomisili di Bandung dan beberapa
                    cendikiawan dari Universitas Padjadjaran serta direstui oleh Kadapol
                    VIII Langlangbuana Jabar (sekarang Polda Jabar) pada Tahun 1982,
                    didirikanlah Universitas Langlanghuana. Secara formal Universitas
                    Langlangbuana didirikan oleh Yayasan Pendidikan Tri Bhakti (disingkat
                    YPTB) dimana Kadapol VIII Langlangbuana Jabar duduk sebagai Pelindung.</p>

            </div>
        </div>
        <!--/Timeline item-->

        <!--Timeline item-->
        <div class="timeline-carousel__item">
            <div class="timeline-carousel__image">
                <div class="media-wrapper media-wrapper--overlay"
                    style="background: url('http://factsforkids.net/wp-content/uploads/2013/09/13.jpg') center center; background-size:cover;">
                </div>
            </div>
            <div class="timeline-carousel__item-inner">
                <div class="pointer"></div>
                <span class="month">1982 </span>
                <p>Austria-Hungary seeks German support for a war against Serbia in case of Russian militarism.
                    Germany gives assurances of support.</p>
                <a href="#" class="read-more">Read more</a>
            </div>
        </div>
        <!--/Timeline item-->

        <!--Timeline item-->
        <div class="timeline-carousel__item">
            <div class="timeline-carousel__image">
                <div class="media-wrapper media-wrapper--overlay"
                    style="background: url('https://cdn-images-1.medium.com/max/2000/1*tjpdoOeFp6PfczMjqh6JEA.jpeg') center center; background-size:cover;">
                </div>
            </div>
            <div class="timeline-carousel__item-inner">
                <span class="year">1915</span>
                <span class="month">January 2</span>
                <p>The Russian offensive in the Carpathians begins. It will continue until April 12. </p>
                <a href="#" class="read-more">Read more</a>
            </div>
        </div>
        <!--/Timeline item-->

        <!--Timeline item-->
        <div class="timeline-carousel__item">
            <div class="timeline-carousel__image">
                <div class="media-wrapper media-wrapper--overlay"
                    style="background: url('https://ichef-1.bbci.co.uk/news/660/media/images/72349000/jpg/_72349652_generals-on-horseback.jpg') center center; background-size:cover;">
                </div>
            </div>
            <div class="timeline-carousel__item-inner">
                <div class="pointer"></div>
                <span class="month">January 18–19 </span>
                <p>Battle of Jassin. </p>
                <a href="#" class="read-more">Read more</a>
            </div>
        </div>
        <!--/Timeline item-->

        <!--Timeline item-->
        <div class="timeline-carousel__item">
            <div class="timeline-carousel__image">
                <div class="media-wrapper media-wrapper--overlay"
                    style="background: url('https://thechive.files.wordpress.com/2014/05/world-war-1-photography-30.jpg?quality=85&strip=info&w=550') center center; background-size:cover;">
                </div>
            </div>
            <div class="timeline-carousel__item-inner">
                <span class="year">1916</span>
                <span class="month">January 5–17</span>
                <p>Austro-Hungarian offensive against Montenegro, which capitulates. </p>
                <a href="#" class="read-more">Read more</a>
            </div>
        </div>
        <!--/Timeline item-->

        <!--Timeline item-->
        <div class="timeline-carousel__item">
            <div class="timeline-carousel__image">
                <div class="media-wrapper media-wrapper--overlay"
                    style="background: url('https://kidskonnect.com/wp-content/uploads/2010/10/Approaching_Omaha.jpg') center center; background-size:cover;">
                </div>
            </div>
            <div class="timeline-carousel__item-inner">
                <div class="pointer"></div>
                <span class="month">January 6–7 </span>
                <p>Battle of Mojkovac. </p>
                <a href="#" class="read-more">Read more</a>
            </div>
        </div>
        <!--/Timeline item-->
    </div>
</section>
@endsection
