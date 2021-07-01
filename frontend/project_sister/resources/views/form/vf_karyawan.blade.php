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
              <h3 class="box-title">Karyawan Form</h3>
            </div>

            <form role="form">
              <div class="box-body">

            

                  <div class="form-group">
                <label>Karyawan - KTP</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected"> </option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>

                <div class="form-group">
                <label>Admin - KTP</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected"> </option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>

                <div class="form-group">
                <label>ID Produk</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected"> </option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
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