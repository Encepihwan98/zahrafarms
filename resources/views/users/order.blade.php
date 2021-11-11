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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ url('/order/create') }}" class="checkout-form">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <h4>Orderan</h4>
                    <div class="row" id="form-order">
                        <div class="col-lg-12" id="select-product">
                            <label for="fir">Pilih Product<span>*</span></label>
                            <select name="product" id="product">
                                <option>Pilih Produk</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->nama_produk.'-'.$product->harga.'-'.$product->foto }}">{{ $product->nama_produk }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <label>Total Keseluruhan<span>*</span></label>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <h3>Rp<span>0</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h4>Isi Data Diri</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="nama">Nama Lengkap<span>*</span></label>
                            <input type="text" name="nama" id="nama">
                        </div>

                        <div class="col-lg-12">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat">
                        </div>

                        <div class="col-lg-6">
                            <label for="email">E-mail<span>*</span></label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="col-lg-6">
                            <label for="phone">No Telp /WA<span>*</span></label>
                            <input type="text" name="phone" id="phone">
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

@section('js')
    <script>
        let formData = []
        $(document).ready(function() {
            function removeForm(id) {
                formData = formData.filter(function( obj ) {
                    return obj.product !== id;
                });
            }
            function formatRupiah(angka, prefix){
                var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split   		= number_string.split(','),
                sisa     		= split[0].length % 3,
                rupiah     		= split[0].substr(0, sisa),
                ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

                // tambahkan titik jika yang di input sudah menjadi angka ribuan
                if(ribuan){
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }

                rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
            }
            function getUniqueListBy(arr, key) {
                return [...new Map(arr.map(item => [item[key], item])).values()]
            }
            function makeForm() {
                let total = 0
                $('#form-order').empty()
                let selectForm = '<div class="col-lg-12" id="select-product"><label for="fir">Pilih Product<span>*</span></label><select name="product" id="product"><option>Pilih Produk</option>';
                @foreach ($products as $product)
                    selectForm += '<option value="{{ $product->nama_produk.'-'.$product->harga.'-'.$product->foto }}">{{ $product->nama_produk }}</option>'
                @endforeach
                selectForm += '</select></div>'
                $('#form-order').append(selectForm);
                formData.forEach(element => {
                    total += (parseInt(element['price']) * parseInt(element['qty']))
                    $('#form-order').append('<div class="col-lg-8 col-sm-8 col-xs-8"><label for="product-'+element['product']+'">Produk<span>*</span></label><input type="text" value="'+element['product']+'" name="product[]" id="product-'+element['product']+'" readonly></div><div class="col-lg-2 col-sm-2 col-xs-2"><label for="qty-'+element['product']+'">Qty<span>*</span></label><input type="text" value="'+element['qty']+'" id="qty-product" data-key="'+element['product']+'" name="qty[]"></div><div class="col-lg-2 col-sm-2 col-xs-2"><label for="act-'+element['product']+'">Action<span>*</span></label><button id="remove-product" data-key="'+element['product']+'" type="button" class="primary-btn" style="height: 30px; width:30px; margin: 10px; padding: 0px !important"><i class="ti-close"></i></button></div>');
                    $('#form-order').append('<input type="hidden" name="price[]" value="'+element['price']+'"></input>')
                    $('#form-order').append('<input type="hidden" name="image[]" value="'+element['image']+'"></input>')
                });
                if(formData.length > 0) {
                    $('#form-order').append('<div class="col-lg-12 col-sm-12"><hr></div>')
                    $('#form-order').append('<div class="col-lg-3 col-sm-3"><h6>Produk</h6></div><div class="col-lg-3 col-sm-3"><h6>Harga</h6></div><div class="col-lg-3 col-sm-3">Jumlah</h6></div><div class="col-lg-3 col-sm-3"><h6>Total</h6></div>')
                    formData.forEach(element => {
                        let price = (parseInt(element['price']) * parseInt(element['qty']));
                        $('#form-order').append('<div class="col-lg-3 col-sm-3"><h6>'+element['product']+'</h6></div><div class="col-lg-3 col-sm-3"><h6>'+formatRupiah(element['price'], '.')+'</h6></div><div class="col-lg-3 col-sm-3"><h6>'+element['qty']+'<span>x</span></h6></div><div class="col-lg-3 col-sm-3"><h6>'+formatRupiah(price.toString(), '.')+'</h6></div>')
                    });
                }
                $('#form-order').append('<div class="col-lg-12 col-sm-12"><hr></div>')
                $('#form-order').append('<div class="col-lg-6 col-sm-6"><label>Total Keseluruhan<span>*</span></label></div><div class="col-lg-6 col-sm-6"><h3>'+formatRupiah(total.toString(), '.')+'</h3></div>');

            }
            $("body").on("change", "#product", function(){
                let selectVal = $('select[name=product] option').filter(':selected').val();
                let data = selectVal.split('-')
                let rmDuplicate = formData
                rmDuplicate.push({'product': data[0], 'qty': 1, 'price': data[1], 'image': data.slice(2,data.length).join('-')})
                formData = getUniqueListBy(rmDuplicate, 'product');
                makeForm()
            })
            $("body").on("click", "#remove-product", function(){
                let key = $(this).data("key")
                removeForm(key)
                makeForm()
            })
            $("body").on("input", "#qty-product", function(){
                let key = $(this).data("key")
                objIndex = formData.findIndex((obj => obj.product == key));
                formData[objIndex].qty = $(this).val() != '' && parseInt($(this).val()) && $(this).val() && $(this).val() > 0 ? $(this).val() : 1
                makeForm()
            })
        })
    </script>
@endsection
