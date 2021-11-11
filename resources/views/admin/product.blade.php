@extends('admin.master')

@section('content')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Users <small>Some examples to get you started</small></h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>List<small></small> Product </h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li>
                  <a href="/A_product/create" class="btn btn-success btn-flat">Add Product</a>
              </li>

            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <div class="row">
                  <div class="col-sm-12">
                    <div class="card-box table-responsive">
            <p class="text-muted font-13 m-b-30">

            </p>
            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>Nama Product</th>
                  <th>Harga</th>
                  <th>Deskripsi</th>
                  <th>Gambar</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
            @foreach ($data as $datas)
                <tr>
                  <td>{{$datas->id}}</td>
                  <td>{{$datas->nama_produk}}</td>
                  <td>{{$datas->harga}}</td>
                  <td>{{$datas->deskripsi}}</td>
                  <td><img width="100px" src="/data_file/{{$datas->foto}}"></td>
                  <td>
                  <a href="/A_product/edit/{{$datas->id}}"><span class="fa fa-pencil-square"></span></a>
                    <a href="/A_product/delete/{{$datas->id}}" onclick="confirm('yakin akan di hapus?')"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
            @endforeach
              </tbody>
            </table>
          </div>
          </div>
      </div>
    </div>
        </div>
      </div>
@endsection
