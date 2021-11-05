@extends('admin.master')

@section('content')
<div class="col-md-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Form Galery Desa</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left">

          <div class="form-group row ">
            <label class="control-label col-md-3 col-sm-3 ">Nama Kegiatan</label>
            <div class="col-md-9 col-sm-9 ">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 ">Tanggal </label>
            <div class="col-md-9 col-sm-9 ">
              <input type="text" class="form-control">
            </div>
          </div>

          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 ">Foto</label>
            <div class="col-md-9 col-sm-9 ">
              <input type="file" name="country" id="autocomplete-custom-append" class="form-control col-md-10"/>
            </div>
          </div>
            </div>
          </div>





          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-9 col-sm-9  offset-md-3">
              <button type="button" class="btn btn-primary">Cancel</button>
              <button type="reset" class="btn btn-primary">Reset</button>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>

        </form>
      </div>
@endsection
