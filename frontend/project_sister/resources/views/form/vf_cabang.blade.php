@extends('layout.v_template')
@section('title','Cabang')


@Section('content')

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cabang Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputMan-Ktp">Manajer - KTP</label>
                  <input type="text" class="form-control" id="exampleInputManKtp" placeholder="Manajer - ktp">
                </div>
                <div class="form-group">
                  <label for="exampleInputNamaCabang">Nama Cabang</label>
                  <input type="text" class="form-control" id="exampleInputNamaCabang" placeholder="Nama cabang">
                </div>
                <div class="form-group">
                  <label for="exampleInputTelp">No. Telp </label>
                  <input type="text" class="form-control" id="exampleInputTelp" placeholder="No. Telp">
                </div>
                <div class="form-group">
                  <label for="exampleInputAlamat">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputAlamat" placeholder="Alamat">
                </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->  

        </div>


    </section>

@endsection