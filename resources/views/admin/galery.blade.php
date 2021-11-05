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
            <h2>Tabel<small>Galery</small>  </h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li>
                  <a href="/Galery/create" class="btn btn-success btn-flat">Add Galery</a>
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
                  <th>Nama Kegiatam</th>
                  <th>Tanggal</th>
                  <th>Foto</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>

                </tr>
                <tr>
                  <td></td>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>63</td>

                </tr>

                <tr>
                  <td></td>
                  <td>Herrod Chandler</td>
                  <td>Sales Assistant</td>
                  <td>San Francisco</td>
                  <td>59</td>

                </tr>
                <tr>
                  <td></td>
                  <td>Rhona Davidson</td>
                  <td>Integration Specialist</td>
                  <td>Tokyo</td>
                  <td>55</td>

                </tr>
                <tr>
                  <td></td>
                  <td>Colleen Hurst</td>
                  <td>Javascript Developer</td>
                  <td>San Francisco</td>
                  <td>39</td>

                </tr>
                <tr>
                  <td></td>
                  <td>Sonya Frost</td>
                  <td>Software Engineer</td>
                  <td>Edinburgh</td>
                  <td>23</td>

                </tr>
                <tr>
                  <td></td>
                  <td>Jena Gaines</td>
                  <td>Office Manager</td>
                  <td>London</td>
                  <td>30</td>

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
