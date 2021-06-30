@extends('layout.v_template')
@section('title','Order Stok')


@Section('content')

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Order Stok Form</h3>
            </div>

            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputKarKtp">Karyawan - KTP</label>
                  <input type="text" class="form-control" id="exampleInputKarKtp" placeholder="Karyawan ktp">
                </div>
                <div class="form-group">
                  <label for="exampleInputAdmKtp">Admin - KTP</label>
                  <input type="text" class="form-control" id="exampleInputAdmKtp" placeholder="Admin ktp">
                </div> 
                <div class="form-group">
                  <label for="exampleInputIdProduk">ID Produk</label>
                  <input type="text" class="form-control" id="exampleInputIdProduk" placeholder="Id produk">
                </div>
                <div class="form-group">
                  <label for="exampleInputIdTanggal">Tanggal</label>
                  <input type="date" class="form-control" id="exampleInputIdTanggal" placeholder="Tanggal">
                </div>
                <div class="form-group">
                  <label for="exampleInputKeterangan">Keterangan</label>
                  <input type="text" class="form-control" id="exampleInputKeterangan" placeholder="Keterangan">
                </div>
                 <div class="form-group">
                  <label for="exampleInputJumlah">Jumlah</label>
                  <input type="text" class="form-control" id="exampleInputJumlah" placeholder="Jumlah">
                </div>
                 <div class="form-group">
                  <label for="exampleInputHarga">Harga</label>
                  <input type="text" class="form-control" id="exampleInputHarga" placeholder="Harga">
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