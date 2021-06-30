@extends('layout.v_template')
@section('title','Manajer')


@Section('content')

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Manajer Form</h3>
            </div>

            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputIdUser">ID User</label>
                  <input type="text" class="form-control" id="exampleInputIdUser" placeholder="Enter ID User">
                </div>
                <div class="form-group">
                  <label for="exampleInputNama">Nama </label>
                  <input type="text" class="form-control" id="exampleInputNama" placeholder="Nama">
                </div> 
                <div class="form-group">
                  <label for="exampleInputTelp">No. Telp </label>
                  <input type="text" class="form-control" id="exampleInputTelp" placeholder="No. Telp">
                </div>
                <div class="form-group">
                  <label for="exampleInputAlamat">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputAlamat" placeholder="Alamat">
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