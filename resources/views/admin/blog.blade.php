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
          <h2>Tabel<small> Blog</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li>
              <a href="/Blog/create" class="btn btn-success btn-flat">Add Blog</a>
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
                      <th>Judul Blog</th>
                      <th>Isi</th>
                      <th>Foto</th>
                      <th>Kategori</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($blog as $blogs)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$blogs->judul}}</td>
                      <td>{{$blogs->isi}}</td>
                      <td><img width="100px" src="{{url('/data_file/'.$blogs->foto) }}"></td>
                      <td>{{$blogs->kategori}}</td>
                      <td>
                        <a href="/edit/{{$blogs->id}}"><span class="fa fa-pencil-square"></span></a>
                        <a href="/delete/{{$blogs->id}}" onclick="confirm('yakin akan di hapus?')"><span class="fa fa-trash"></span></a>
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