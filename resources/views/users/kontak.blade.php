@extends('users.master')

@section('subheader')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Kontak</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
@endsection

@section('content')

<!-- Map Section Begin -->
<div class="map spad">
    <div class="container">
        <div class="map-inner">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48158.305462977965!2d-74.13283844036356!3d41.02757295168286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2e440473470d7%3A0xcaf503ca2ee57958!2sSaddle%20River%2C%20NJ%2007458%2C%20USA!5e0!3m2!1sen!2sbd!4v1575917275626!5m2!1sen!2sbd" height="610" style="border:0" allowfullscreen=""> -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50769.812889471854!2d107.69824722573424!3d-7.080063004704804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c0666698a6a3%3A0xf8f2fd3c74c8b4be!2sDesa%20Cikoneng!5e0!3m2!1sid!2sid!4v1636698787202!5m2!1sid!2sid"  height="610" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </iframe>
            <div class="icon">
                <i class="fa fa-map-marker"></i>
            </div>
        </div>
    </div>
</div>
<!-- Map Section Begin -->
<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-title">
                    <h4>Kontak Kami</h4>
                </div>
                <div class="contact-widget">
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-location-pin"></i>
                        </div>
                        <div class="ci-text">
                            <span>Alamat:</span>
                            <p>Kp. Kangkareng Desa Cikoneng</p>
                            <p>Kecamatan Ciparay </p>
                            <p>Kabupaten Bandung</p>
                            <p>Jawa Barat 40381,Indonesia</p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="ci-text">
                            <span>No Telp:</span>
                            <p>0887-2424-584</p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-email"></i>
                        </div>
                        <div class="ci-text">
                            <span>Email:</span>
                            <p>zahrahfamr@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="contact-form">
                    <div class="leave-comment">
                        <h4>Leave A Comment</h4>
                        <p>Our staff will call back later and answer your questions.</p>
                        <form action="#" class="comment-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Your name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Your email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Your message"></textarea>
                                    <button type="submit" class="site-btn">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
@endsection