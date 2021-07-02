@extends('layout.v_template')
@section('title','Karyawan')


@Section('content')

<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Form Karyawan</h3>
        </div>

        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label for="ktp">Karyawan - KTP </label>
              <input type="hidden" class="form-control" id="ktp" placeholder="Karyawan ktp">
            </div>
            <div class="form-group">
              <label for="user">ID User</label>
              <input type="text" class="form-control" id="user" placeholder="ID User">
            </div>
            <div class="form-group">
              <label for="cabang">ID Cabang</label>
              <input type="text" class="form-control" id="cabang" placeholder="ID Cabang">
            </div>
            <div class="form-group">
              <label for="nama">Nama Karyawan</label>
              <input type="text" class="form-control" id="nama" placeholder="Nama Karyawan">
            </div>
            <div class="form-group">
              <label for="no_telp">Nomor Telepon</label>
              <input type="text" class="form-control" id="no_telp" placeholder="Nomor Telepon">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" placeholder="Alamat">
            </div>
          </div>

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>


    </div>

</section>

@endsection