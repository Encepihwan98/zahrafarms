@extends('users.master')

@section('subheader')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Order</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
@endsection

@section('content')
<!-- Shopping Cart Section Begin -->
<section class="checkout-section spad">
    <div class="container">
        <form action="#" class="checkout-form">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Orderan</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="fir">Pilih Product<span>*</span></label>
                            <select name="" id="">
                                <option value="">Susu Kefir</option>
                                <option value="">Kambing Potong</option>
                                <option value="">Pembibitan</option>
                                <option value="">Penggemukan</option>
                            </select>
                            <!-- <input type="text"> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h4>Isi Data Diri</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="fir">Nama Lengkap<span>*</span></label>
                            <input type="text" id="fir">
                        </div>

                        <div class="col-lg-12">
                            <label for="alamat">Alamat</label>
                            <input type="text" id="cun-name">
                        </div>

                        <div class="col-lg-6">
                            <label for="email">E-mail<span>*</span></label>
                            <input type="text" id="email">
                        </div>
                        <div class="col-lg-6">
                            <label for="phone">No Telp /WA<span>*</span></label>
                            <input type="text" id="phone">
                        </div>
                        <div class="col-lg-12">
                            <div class="order-btn">
                                <button type="submit" class="site-btn place-btn">Order</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </form>
    </div>
</section>
<!-- Shopping Cart Section End -->
@endsection