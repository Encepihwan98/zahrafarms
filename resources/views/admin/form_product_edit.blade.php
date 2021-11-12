@extends('admin.master')

@section('content')
<div class="col-md-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Form Product</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left" method="POST" action="/A_product/update/{{ $product->id }}" enctype="multipart/form-data">
            {{ csrf_field() }}
          <div class="form-group row ">
            <label class="control-label col-md-3 col-sm-3 ">Nama Product</label>
            <div class="col-md-9 col-sm-9 ">
              <input type="text" name="nama_product" class="form-control" value="{{ $product->nama_product }}">
            </div>
          </div>

          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 ">Harga</label>
            <div class="col-md-9 col-sm-9 ">
                <input type="number" name="harga" class="form-control" value="{{ $product->harga }}">
            </div>
          </div>

          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 ">Deskripsi</label>
            <div class="col-md-9 col-sm-9 ">
              <textarea class="form-control" name="deskripsi">{{ $product->deskripsi }}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 ">Foto</label>
            <div class="col-md-9 col-sm-9 ">
              <img width="200px" src="/data_file/{{$product->foto}}"></td>
              <input type="file" name="foto" style="width: 100%;" required>
            </div>
          </div>
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-9 col-sm-9  offset-md-3">
              <a href="/A_product" class="btn btn-primary">Cancel</a>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>

        </form>
      </div>
@endsection
