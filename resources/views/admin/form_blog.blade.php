@extends('admin.master')

@section('content')
<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>BLOG<small></small></h3>
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
          <h2>Post Blog</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li>
              <!-- <button type="button" class="btn btn-success btn-flat"><span class="fa fa-plus">Add</span></button> -->
            </li>
            <!-- <li><a class="close-link"><i class="fa fa-close"></i></a> -->
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="row">
            <div class="col-sm-12">

              <form action="/save" method="POST" role="form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <!-- /.box-body -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-10">
                      <input type="text" name="judul" value="" class="form-control" placeholder="Judul blog atau artikel" />
                    </div>
                    <!-- /.col -->
                    <div class="col-md-2">
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-flat pull-right"><span class="fa fa-pencil"></span> Publish</button>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="row">
                  <div class="col-md-8">
                    <div class="x_panel">
                      <div class="x_title">
                        <h3>Blog</h3>
                      </div>
                      <div class="x_content">
                        <textarea id="konten" class="form-control" name="isi" name="isi"></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4" style="border: 1px;">
                    <div class="x_panel tile fixed_height_~320">
                      <div class="x_title">
                        <h3>Pengaturan Lainnya</h3>
                      </div>
                      <div class="x_content">
                        {{-- <div class="form-group">
                                            <label for="kategori">Kategori</label>
                                            <select class="form-control select2" name="nama_kategori" style="width: 100%;" required>
                                                    <option>--- Pilih Kategori ---</option>
                                                    <option value="game">Game</option>
                                                    <option value="makanan">Makanan</option>
                                            </select>
                                    </div> --}}
                        <div class="form-group">
                          <label>Gambar</label>
                          <input type="file" name="foto" style="width: 100%;" required>
                        </div>
                        <div class="form-group">
                          <label>kategori</label>
                          <input type="text" id="kategori" name="kategori" style="width: 100%;" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection