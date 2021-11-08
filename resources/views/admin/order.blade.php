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
          <h2>Tabel<small> Order</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li>
              <a href="/Blog/create" class="btn btn-success btn-flat">Add Order</a>
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
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Product</th>
                      <th>Jumlah</th>
                      <th>Email</th>
                      <th>Telp</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><img width="100px" src=""></td>
                      <td></td>
                      <td>
                        <a href=""><span class="fa fa-pencil-square"></span></a>
                        <a href="" onclick="confirm('yakin akan di hapus?')"><span class="fa fa-trash"></span></a>
                      </td>
                      </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('custome')

<script>
  $(document).ready(function() {
    $('datatable').DataTable();
  });
</script>
@endsection