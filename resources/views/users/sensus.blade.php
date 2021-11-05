@extends('users.master')

@section('subheader')
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Sensus</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Sensus</li>
        </ol>
      </div>

    </div>
  </section>
@endsection

@section('content')
<section class="">
    <div class="container">
        <div class="row">
            <form class="row g-3" action="/Sensus/save" method="POST">
                {{ csrf_field() }}
                <div class="col-12">
                    <label for="inputAddress" class="form-label">NIK</label>
                    <input type="text" name="nik" class="form-control" id="NIK" placeholder="">
                  </div>
                <div class="col-md-6">
                  <label for="name" class="form-label">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="nama_lengkap">
                </div>
                <div class="col-md-6">
                  <label for="name" class="form-label">Nama Panggilan</label>
                  <input type="text" class="form-control" id="nama_panggilan">
                </div>
                <div class="col-md-6">
                    <label for="name" class="form-label">Tempat Lahir</label>
                    <input type="text " name="tl" class="form-control" id="nama_lengkap">
                  </div>
                  <div class="col-md-6">
                    <label for="name" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="ttl" class="form-control" id="nama_panggilan">
                  </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">RT/RW</label>
                    <input type="text" class="form-control" id="inputZip">
                  </div>
                <!-- <div class="col-md-4"> -->
                  <!-- <label for="inputState" class="form-label">State</label> -->
                  <!-- <select id="inputState" class="form-select"> -->
                    <!-- <option selected>Choose...</option> -->
                    <!-- <option>...</option> -->
                  <!-- </select> -->
                <!-- </div> -->
                <div class="col-md-4"></div>
                <div class="col-md-12">
                  <label for="inputZip" class="form-label">Pendidikan</label>
                  <input type="text" name="pendidikan" class="form-control" id="inputZip">
                </div>
                <div class="col-md-12">
                    <label for="inputZip" class="form-label">Status Warga</label>
                    <input type="text" name="status_warga" class="form-control" id="inputZip">
                  </div>
                  <div class="col-md-12">
                    <label for="inputZip" class="form-label">Golongan Darah</label>
                    <input type="text" name="gol_darah" class="form-control" id="inputZip">
                  </div>
                  <div class="col-md-12">
                    <label for="inputZip" class="form-label">Status Pernikahan</label>
                    <input type="text" name="status_pernikahan" class="form-control" id="inputZip">
                  </div>
                  <div class="col-md-12">
                    <label for="inputZip" class="form-label">Jenis Kelamin</label>
                    <input type="text" name="jk" class="form-control" id="inputZip">
                  </div>
                <br>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
        </div>
    </div>
    </section>
@endsection
